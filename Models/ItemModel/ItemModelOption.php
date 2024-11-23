<?php
/**
 * Option Element

 * @package FleetManagement
 * @uses DepositManager, DiscountManager, PrepaymentManager
 * @author Kestutis Matuliauskas
 * @copyright Kestutis Matuliauskas
 * @license See Legal/License.txt for details.
 */
namespace FleetManagement\Models\ItemModel;
use FleetManagement\Models\AbstractStack;
use FleetManagement\Models\Configuration\ConfigurationInterface;
use FleetManagement\Models\ElementInterface;
use FleetManagement\Models\Validation\StaticValidator;
use FleetManagement\Models\Language\LanguageInterface;

final class ItemModelOption extends AbstractStack implements ElementInterface
{
    protected $conf 	    = null;
    protected $lang 		= null;
    protected $debugMode 	= 0;
    protected $optionId		= 0;

    /**
     * @param ConfigurationInterface &$paramConf
     * @param LanguageInterface &$paramLang
     * @param array $paramSettings
     * @param $paramOptionId
     */
    public function __construct(ConfigurationInterface &$paramConf, LanguageInterface &$paramLang, array $paramSettings, $paramOptionId)
    {
        // Set class settings
        $this->conf = $paramConf;
        // Already sanitized before in it's constructor. Too much sanitization will kill the system speed
        $this->lang = $paramLang;

        $this->optionId = StaticValidator::getValidValue($paramOptionId, 'positive_integer', 0);
    }

    /**
     * @param $paramOptionId
     * @return mixed
     */
    private function getDataFromDatabaseById($paramOptionId)
    {
        $validOptionId = StaticValidator::getValidPositiveInteger($paramOptionId, 0);
        $row = $this->conf->getInternalWPDB()->get_row("
            SELECT option_id, item_id AS item_model_id, option_name
            FROM {$this->conf->getPrefix()}options
            WHERE option_id='{$validOptionId}'
        ", ARRAY_A);

        return $row;
    }

    public function inDebug()
    {
        return ($this->debugMode >= 1 ? true : false);
    }

    public function getId()
    {
        return $this->optionId;
    }

    /**
     * Element-specific function
     * @return int
     */
    public function getItemModelId()
    {
        $retItemModelId = 0;
        $optionData = $this->getDataFromDatabaseById($this->optionId);
        if(!is_null($optionData))
        {
            $retItemModelId = $optionData['item_model_id'];
        }

        return $retItemModelId;
    }

    /**
     * Checks if current user can edit the element
     * @param $paramPartnerId - partner id is mandatory here, as it comes from other plugin
     * @return bool
     */
    public function canEdit($paramPartnerId)
    {
        $canEdit = false;
        if($this->optionId > 0)
        {
            if(current_user_can('manage_'.$this->conf->getExtPrefix().'all_items'))
            {
                $canEdit = true;
            } else if($paramPartnerId > 0 && $paramPartnerId == get_current_user_id() && current_user_can('manage_'.$this->conf->getExtPrefix().'own_items'))
            {
                $canEdit = true;
            }
        }

        return $canEdit;
    }

    /**
     * @param bool $paramPrefillWhenNull - not used
     * @return mixed
     */
    public function getDetails($paramPrefillWhenNull = false)
    {
        $ret = $this->getDataFromDatabaseById($this->optionId);

        if(!is_null($ret))
        {
            // Make raw
            $ret['option_name'] = stripslashes($ret['option_name']);

            // Add translation
            $ret['translated_option_name'] = $this->lang->getTranslated("io{$ret['option_id']}_option_name", $ret['option_name']);

            // Prepare output for print
            $ret['print_option_name'] = esc_html($ret['option_name']);
            $ret['print_translated_option_name'] = esc_html($ret['translated_option_name']);

            // Prepare output for edit
            $ret['edit_option_name'] = esc_attr($ret['option_name']); // for input field
        }

        return $ret;
    }

    /**
     * @param array $params
     * @return bool|false|int
     */
    public function save(array $params)
    {
        $saved = false;
        $ok = true;
        $validOptionId = StaticValidator::getValidPositiveInteger($this->optionId, 0);
        $validItemModelId = isset($params['item_model_id']) ? StaticValidator::getValidPositiveInteger($params['item_model_id']) : 0;
        $sanitizedOptionName = isset($params['option_name']) ? sanitize_text_field($params['option_name']) : '';
        $validOptionName = esc_sql($sanitizedOptionName); // for sql queries only

        $nameExistQuery = "
            SELECT option_id
            FROM {$this->conf->getPrefix()}options
            WHERE option_name='{$validOptionName}'
            AND item_id='{$validItemModelId}' AND option_id!='{$validOptionId}' AND blog_id='{$this->conf->getBlogId()}'
        ";
        $nameExist = $this->conf->getInternalWPDB()->get_row($nameExistQuery, ARRAY_A);

        if($validItemModelId == 0)
        {
            $ok = false;
            $this->errorMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_PLEASE_SELECT_ERROR_TEXT');
        }
        if(!is_null($nameExist))
        {
            $ok = false;
            $this->errorMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_NAME_EXISTS_ERROR_TEXT');
        }

        if($validOptionId > 0 && $ok)
        {
            $saved = $this->conf->getInternalWPDB()->query("
                UPDATE {$this->conf->getPrefix()}options SET
                item_id='{$validItemModelId}',
                option_name='{$validOptionName}'
                WHERE option_id='{$validOptionId}' AND blog_id='{$this->conf->getBlogId()}'
            ");

            if($saved === false)
            {
                $this->errorMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_UPDATE_ERROR_TEXT');
            } else
            {
                $this->okayMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_UPDATED_TEXT');
            }
        } else if($ok)
        {
            $saved = $this->conf->getInternalWPDB()->query("
                INSERT INTO {$this->conf->getPrefix()}options
                (
                    item_id, extra_id, option_name, blog_id
                ) VALUES
                (
                    '{$validItemModelId}', '0', '{$validOptionName}', '{$this->conf->getBlogId()}'
                )
            ");

            if($saved === false || $saved === 0)
            {
                $this->errorMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_INSERTION_ERROR_TEXT');
            } else
            {
                $this->okayMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_INSERTED_TEXT');

                // Get newly inserted option id
                $validInsertedNewOptionId = $this->conf->getInternalWPDB()->insert_id;

                // Update the core option id for future use
                $this->optionId = $validInsertedNewOptionId;
            }
        }

        return $saved;
    }

    public function registerForTranslation()
    {
        $optionDetails = $this->getDetails();
        if(!is_null($optionDetails))
        {
            $this->lang->register("io{$this->optionId}_option_name", $optionDetails['option_name']);
            $this->okayMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_REGISTERED_TEXT');
        }
    }

    public function delete()
    {
        $validOptionId = StaticValidator::getValidPositiveInteger($this->optionId);
        $deleted = $this->conf->getInternalWPDB()->query("
            DELETE FROM {$this->conf->getPrefix()}options
            WHERE option_id='{$validOptionId}' AND blog_id='{$this->conf->getBlogId()}'
        ");

        if($deleted === false || $deleted === 0)
        {
            $this->errorMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_DELETION_ERROR_TEXT');
        } else
        {
            $this->okayMessages[] = $this->lang->getText('LANG_ITEM_MODEL_OPTION_DELETED_TEXT');
        }

        return $deleted;
    }
}