<?php
/**
 * Partner role

 * @note - It does not have settings param in constructor on purpose!
 * @package FleetManagement
 * @author Kestutis Matuliauskas
 * @copyright Kestutis Matuliauskas
 * @license See Legal/License.txt for details.
 */
namespace FleetManagement\Models\Partner;
use FleetManagement\Models\AbstractStack;
use FleetManagement\Models\Configuration\ConfigurationInterface;
use FleetManagement\Models\RoleInterface;
use FleetManagement\Models\StackInterface;
use FleetManagement\Models\Language\LanguageInterface;

final class PartnerRole extends AbstractStack implements StackInterface, RoleInterface
{
    private $conf           = null;
    private $lang 		    = null;
    private $debugMode 	    = 0;
    private $roleName       = '';

	public function __construct(ConfigurationInterface &$paramConf, LanguageInterface &$paramLang)
	{
		// Set class settings
		$this->conf = $paramConf;
		// Already sanitized before in it's constructor. Too much sanitization will kill the system speed
		$this->lang = $paramLang;

		$this->roleName = $this->conf->getPluginPrefix().'partner';
	}

    public function inDebug()
    {
        return ($this->debugMode >= 1 ? true : false);
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @return array
     */
    public function getCapabilities()
    {
        $roleCapabilities = array(
            'read'                                                    => true,  // true allows this capability
            'view_'.$this->conf->getExtPrefix().'all_inventory'       => false,
            'manage_'.$this->conf->getExtPrefix().'all_inventory'     => false,
            'view_'.$this->conf->getExtPrefix().'all_items'           => false,
            'manage_'.$this->conf->getExtPrefix().'all_items'         => false,
            'view_'.$this->conf->getExtPrefix().'own_items'           => true,
            'manage_'.$this->conf->getExtPrefix().'own_items'         => true,  // this allows only to add/edit/delete/block the item and it's options, not it's body types etc.
            'view_'.$this->conf->getExtPrefix().'all_extras'          => false,
            'manage_'.$this->conf->getExtPrefix().'all_extras'        => false,
            'view_'.$this->conf->getExtPrefix().'own_extras'          => true,
            'manage_'.$this->conf->getExtPrefix().'own_extras'        => true,
            'view_'.$this->conf->getExtPrefix().'all_locations'       => true,
            'manage_'.$this->conf->getExtPrefix().'all_locations'     => false,
            'view_'.$this->conf->getExtPrefix().'all_bookings'        => false,
            'manage_'.$this->conf->getExtPrefix().'all_bookings'      => false,
            'view_'.$this->conf->getExtPrefix().'partner_bookings'    => true,
            'manage_'.$this->conf->getExtPrefix().'partner_bookings'  => true,
            'view_'.$this->conf->getExtPrefix().'all_customers'       => false,
            'manage_'.$this->conf->getExtPrefix().'all_customers'     => false,
            'view_'.$this->conf->getExtPrefix().'all_settings'        => false,
            'manage_'.$this->conf->getExtPrefix().'all_settings'      => false,
        );

        return $roleCapabilities;
    }

    /**
     * @return bool
     */
    public function add()
    {
        $roleResult = add_role($this->roleName, $this->lang->getText('LANG_PARTNER_TEXT'), $this->getCapabilities());

        if($roleResult !== null)
        {
            // New role added!
            $newRoleAdded = true;
        } else
        {
            // The selected role already exists
            $newRoleAdded = false;
        }

        return $newRoleAdded;
    }

    /**
     * @return void
     */
    public function remove()
    {
        // Remove role if exist
        // Note: When a role is removed, the users who have this role lose all rights on the site.
        remove_role($this->roleName);
    }

    /**
     * @return void
     */
    public function addCapabilities()
    {
        // Add capabilities to this role
        $objWPRole = get_role($this->roleName);
        $capabilitiesToAdd = $this->getCapabilities();
        foreach($capabilitiesToAdd AS $capability => $grant)
        {
            $objWPRole->add_cap($capability, $grant);
        }
    }

    /**
     * @return void
     */
    public function removeCapabilities()
    {
        // Remove capabilities from this role
        $objWPRole = get_role($this->roleName);
        $capabilitiesToRemove = $this->getCapabilities();
        foreach($capabilitiesToRemove AS $capability => $grant)
        {
            $objWPRole->remove_cap($capability);
        }
    }
}