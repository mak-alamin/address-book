<?php 

namespace Wedevs\Academy\Admin;

/**
 * Admin Menu Handler Class
 */
class Menu  
{
    public $addressbook;

    /**
     * The class constructor
     */
    function __construct($addressbook)
    {
        $this->addressbook = $addressbook;

        add_action( 'admin_menu', [ $this, 'admin_menu' ] ); 
    }

    /**
     * Register admin menu
     * 
     * @return void
     */
    public function admin_menu()
    {
        $parent_slug = 'wedevs-academy';
        $capability = 'manage_options';

        add_menu_page( __('weDevs Academy', 'wedevs-academy'), __('Academy', 'wedevs-academy'), $capability, $parent_slug, [$this->addressbook, 'plugin_page'], 'dashicons-welcome-learn-more', 2 );

        add_submenu_page( $parent_slug, __('Address Book','wedevs-academy'), __('Address Book','wedevs-academy'), $capability, $parent_slug, [$this->addressbook, 'plugin_page']);
        
        add_submenu_page( $parent_slug, 'Settings', 'Settings', $capability, 'wedevs-academy-settings', [$this, 'settings_page'] );

        add_submenu_page( $parent_slug, 'More', 'More...', $capability, 'wedevs-academy-more', [$this, 'more_page'] );
    }

    
    /**
     * Render admin menu pages
     * 
     * @return void
     */

    public function settings_page()
    {
        echo "This is General settings page.";
    }

    public function more_page()
    {
        echo "More Page";
    }
}