<?php 
/**
 * Plugin Name: weDevs Academy
 * Description: A tutorial plugin from weDevs Academy
 * Plugin URI: https://
 * Author: Mak Alamin
 * Author URI: https://
 * Version: 1.0
 * Text Domain: wedevs-academy
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if( ! defined('ABSPATH') ){
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

 /**
  * The main plugin class
  */
 final class WeDevs_Academy
 {
     /**
      * Plugin version
      *
      * @var string
      */
     const version = '1.0';

     /**
      * Class constructor
      */
     private function __construct()
     {
         $this->define_constants();

         register_activation_hook( __FILE__, [ $this, 'activate' ] );

         add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
     }

     /**
      * Initializes a singleton instance of this class
      *
      * @return \WeDevs_Academy
      */
     public static function init()
     {
         static $instance = false;
        
         if( ! $instance ){
             $instance = new self();
         }
     }

     /**
      * Define the required constants
      *
      * @return void
      */
     public function define_constants()
     {
         define('WD_ACA_VERSION', self::version);
         define('WD_ACA_FILE', __FILE__);
         define('WD_ACA_PATH', __DIR__);
         define('WD_ACA_URL', plugins_url( '', WD_ACA_FILE ));
         define('WD_ACA_ASSETS', WD_ACA_URL . '/assets');
     }

     /**
      * Initializes the required plugin classes
      *
      * @return void
      */
      public function init_plugin()
      {
        if( is_admin() ){
            new Wedevs\Academy\Admin();
        } else {
            new Wedevs\Academy\Frontend();
        }
      }

     /**
      * Do stuff upon plugin activation
      *
      * @return void
      */
      public function activate()
      {
          $installer = new Wedevs\Academy\Installer();

          $installer->run();
      }
 }
 

 /**
  * Initializes the main plugin
  * 
  * @return \WeDevs_Academy
  */
 function wedevs_academy()
 {
     return WeDevs_Academy::init();
 }

 /**
  * Kick-off the plugin
  */
  wedevs_academy();