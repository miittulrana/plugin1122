<?php
/**
 * Extra Order Option Element

 * @package FleetManagement
 * @uses DepositManager, DiscountManager, PrepaymentManager
 * @author Kestutis Matuliauskas
 * @copyright Kestutis Matuliauskas
 * @license See Legal/License.txt for details.
 */
namespace FleetManagement\Models\Order;
use FleetManagement\Models\AbstractStack;
use FleetManagement\Models\Configuration\ConfigurationInterface;
use FleetManagement\Models\Validation\StaticValidator;
use FleetManagement\Models\Language\LanguageInterface;

final class OrderExtra extends AbstractStack
{
    private $conf 	                = null;
    private $lang 		            = null;
    private $debugMode 	            = 0;
    private $extraSKU               = "";
    private $orderId              = 0;

    /**
     * @param ConfigurationInterface &$paramConf
     * @param LanguageInterface &$paramLang
     * @param array $paramSettings
     * @param $paramOrderId
     * @param $paramExtraSKU
     */
    public function __construct(ConfigurationInterface &$paramConf, LanguageInterface &$paramLang, array $paramSettings, $paramOrderId, $paramExtraSKU)
    {
        // Set class settings
        $this->conf = $paramConf;
        // Already sanitized before in it's constructor. Too much sanitization will kill the system speed
        $this->lang = $paramLang;

        $this->extraSKU = sanitize_text_field($paramExtraSKU);
        $this->orderId = StaticValidator::getValidPositiveInteger($paramOrderId, 0);
    }

    /**
     * @param $paramOrderId
     * @param $paramExtraSKU
     * @return array|null
     */
    private function getDataFromDatabaseById($paramOrderId, $paramExtraSKU)
    {
        $validExtraSKU = esc_sql(sanitize_text_field($paramExtraSKU)); // for sql queries only
        $validOrderId = StaticValidator::getValidPositiveInteger($paramOrderId, 0);
        $row = $this->conf->getInternalWPDB()->get_row("
            SELECT *
            FROM {$this->conf->getPrefix()}booking_options
            WHERE booking_id='{$validOrderId}' AND extra_sku='{$validExtraSKU}'
        ", ARRAY_A);

        return $row;
    }

    public function inDebug()
    {
        return ($this->debugMode >= 1 ? true : false);
    }

    public function getDetails($paramPrefillWhenNull = false)
    {
        $ret = $this->getDataFromDatabaseById($this->orderId, $this->extraSKU);
        return $ret;
    }

    /**
     * @param int $paramOptionId - for no option/default use 0
     * @param int $paramQuantity - for all use -1
     * @return false|int
     */
    public function save($paramOptionId = 0, $paramQuantity = -1)
    {
        $ok = true;
        $saved = false;
        $validExtraSKU      = esc_sql(sanitize_text_field($this->extraSKU)); // for sql queries only
        $validOrderId     = StaticValidator::getValidPositiveInteger($this->orderId, 0);
        $validOptionId      = StaticValidator::getValidPositiveInteger($paramOptionId, 0);
        $validQuantity      = StaticValidator::getValidInteger($paramQuantity, -1); // Block for all (-1) is supported here

        if($validOrderId == 0 || $validExtraSKU == '' || $validQuantity == 0)
        {
            $ok = false;
            $this->errorMessages[] = sprintf($this->lang->getText('LANG_EXTRA_ORDER_ID_QUANTITY_OPTION_SKU_ERROR_TEXT'), $validOrderId, $validExtraSKU, $validQuantity);
        }

        if($ok)
        {
            // -1 units_booked means - all car units of that item model been blocked
            $sqlInsertQuery = "
                INSERT INTO {$this->conf->getPrefix()}booking_options
                (
                    booking_id, item_sku, extra_sku, option_id, units_booked, blog_id
                ) VALUES
                (
                    '{$validOrderId}', '', '{$validExtraSKU}', '{$validOptionId}', '{$validQuantity}', '{$this->conf->getBlogId()}'
                )
            ";
            //echo "<br />[Extra Order Option Insert: {$sqlInsertQuery}]";
            //die("<br />END");

            // DB INSERT
            $saved = $this->conf->getInternalWPDB()->query($sqlInsertQuery);

            if($saved === false || $saved === 0)
            {
                $this->errorMessages[] = sprintf($this->lang->getText('LANG_EXTRA_ORDER_OPTION_INSERTION_ERROR_TEXT'), $validExtraSKU);
            } else
            {
                $this->okayMessages[] = sprintf($this->lang->getText('LANG_EXTRA_ORDER_OPTION_INSERTED_TEXT'), $validExtraSKU);
            }
        }

        return $saved;
    }

    public function delete()
    {
        $validExtraSKU      = esc_sql(sanitize_text_field($this->extraSKU)); // for sql queries only
        $validOrderId     = StaticValidator::getValidPositiveInteger($this->orderId, 0);

        $deleted = $this->conf->getInternalWPDB()->query("
            DELETE FROM {$this->conf->getPrefix()}booking_options
            WHERE booking_id='{$validOrderId}' AND extra_sku='{$validExtraSKU}' AND blog_id='{$this->conf->getBlogId()}'
        ");

        if($deleted === false || $deleted === 0)
        {
            $this->errorMessages[] = $this->lang->getText('LANG_EXTRA_ORDER_OPTION_DELETION_ERROR_TEXT');
        } else
        {
            $this->okayMessages[] = $this->lang->getText('LANG_EXTRA_ORDER_OPTION_DELETED_TEXT');
        }

        return $deleted;
    }
}