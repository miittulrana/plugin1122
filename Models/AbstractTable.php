<?php
/**
 * Abstract element
 * Abstract class must be inherited later.
 * @package FleetManagement
 * @author Kestutis Matuliauskas
 * @copyright Kestutis Matuliauskas
 * @license See Legal/License.txt for details.
 */
namespace FleetManagement\Models;

use FleetManagement\Models\Configuration\ConfigurationInterface;
use FleetManagement\Models\Language\LanguageInterface;

abstract class AbstractTable
{
    protected $conf             = null;
    protected $lang 		    = null;
    protected $tablePrefix	    = "";
    protected $tableName 		= "";
    protected $blogId 		    = 0;
    protected $debugMode 	    = 0;

    // Messages
    protected $debugMessages    = array();
    protected $okayMessages     = array();
    protected $errorMessages    = array();

    /**
     * @param ConfigurationInterface $paramConf
     * @param LanguageInterface $paramLang
     * @param $paramTablePrefix
     * @param string $paramTableName
     * @param int $paramBlogId
     */
    protected function __construct(ConfigurationInterface &$paramConf, LanguageInterface &$paramLang, $paramTablePrefix, $paramTableName, $paramBlogId = -1)
    {
        // Set class settings
        $this->conf = $paramConf;
        // Already sanitized before in it's constructor. Too much sanitization will kill the system speed
        $this->lang = $paramLang;

        $this->tablePrefix = sanitize_text_field($paramTablePrefix);
        $this->tableName = sanitize_text_field($paramTableName);
        $this->blogId = intval($paramBlogId);
    }

    /**
     * @return bool
     */
    public function inDebug()
    {
        return ($this->debugMode >= 1 ? true : false);
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @return bool
     */
    public function checkTableExists()
    {
        $tableExists = false;
        $validTablePrefix = esc_sql(sanitize_text_field($this->tablePrefix)); // for sql queries only
        $validTableName = esc_sql(sanitize_text_field($this->tableName)); // for sql queries only
        $sqlQuery = "SHOW TABLES LIKE '{$validTablePrefix}{$validTableName}'";
        $checkResult = $this->conf->getInternalWPDB()->get_var($sqlQuery);
        if(!is_null($checkResult) && $checkResult === $validTableName)
        {
            $tableExists = true;
        }

        return $tableExists;
    }

    /**
     * @return int
     */
    public function getBlogId()
    {
        return $this->blogId;
    }

    /**
     * @return void
     */
    public function flushMessages()
    {
        $this->debugMessages = array();
        $this->okayMessages = array();
        $this->errorMessages = array();
    }

    /**
     * @return array
     */
    public function getAllMessages()
    {
        return array(
            'debug' => $this->debugMessages,
            'okay' => $this->okayMessages,
            'error' => $this->errorMessages,
        );
    }

    /**
     * @return array
     */
    public function getDebugMessages()
    {
        return $this->debugMessages;
    }

    /**
     * @return array
     */
    public function getOkayMessages()
    {
        return $this->okayMessages;
    }

    /**
     * @return array
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * @param string $trustedSQLQuery
     * @return bool
     */
    protected function executeQuery($trustedSQLQuery)
    {
        $executed = true;
        $ok = $this->conf->getInternalWPDB()->query($trustedSQLQuery);
        if($ok === false)
        {
            $executed = false;
            $this->errorMessages[] = sprintf($this->lang->getText('LANG_TABLE_QUERY_FAILED_FOR_TABLE_ERROR_TEXT'), $this->blogId, $this->tableName);
            if($this->debugMode)
            {
                $debugMessage = "FAILED TO EXECUTE TABLE QUERY:<br />".nl2br($trustedSQLQuery);
                $this->debugMessages[] = $debugMessage;
                // Do not echo here, as this class is used in redirect
                //echo "<br />".$debugMessage;
            }
        }

        return $executed;
    }
}