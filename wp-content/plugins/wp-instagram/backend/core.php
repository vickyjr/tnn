<?php

if (!class_exists('wiSetup')) {

	class wiSetup {

        public $admin_page_url = 'options-general.php';
        public $defaults = array();
        public $settings = array();

		function __construct() 
		{
            include(WPINSTAGRAM_PATH.'backend/defaults.php');
            $this->settings = get_option('wordpress-instagram');

            add_action('admin_init', array(&$this, 'init_plugin_settings'), 9);
            add_action('admin_enqueue_scripts', array( $this, 'load_admin_scripts' ) );
            add_action('admin_menu', array( $this, 'create_admin_nav_menu' ) );
            add_action('admin_init', array( $this, 'save_settings'));


		}

		function load_admin_scripts($hook)
		{
		 	wp_enqueue_script('jquery');
            wp_enqueue_script('jquery-ui-core');
            wp_enqueue_script('jquery-ui-tabs');
		 	wp_register_style('wi_admin_style', WPINSTAGRAM_URL . '/css/admin.css', '', '', '' );
			wp_enqueue_style('wi_admin_style');
            wp_register_style('wi_admin_style_jqeruyui_css', WPINSTAGRAM_URL.'css/ui-lightness/jquery-ui-1.10.3.custom.css');
            wp_enqueue_style('wi_admin_style_jqeruyui_css');

            wp_register_script( 'wi_admin_js', WPINSTAGRAM_URL . '/js/admin.js', '', '', '' );
			wp_enqueue_script( 'wi_admin_js' );

//            exit();
		}

		function create_admin_nav_menu()
		{
            add_menu_page('Wordpress Instagram', 'Wordpress Instagram', 'administrator', 'wordpress-instagram',  array($this, 'load'), 0, 99);
		}


		public function load() {

            // disconnect
            if (isset($_REQUEST['disconnect'])) {
                $this->set('ClientID', '');
                $this->set('access_token', '');
                $this->set('ClientSecret', '');
                $this->save();
            }

            if (isset($_REQUEST['code'])) {

                include(WPINSTAGRAM_PATH.'Instagram-PHP-API/instagram.class.php');
                $this->settings = get_option('wordpress-instagram');
                $instagram = new Instagram(array(
                    'apiKey'      => $this->settings['ClientID'],
                    'apiSecret'   => $this->settings['ClientSecret'],
                    'apiCallback' => WPINSTAGRAM_REDIRECT_URL
                ));

                $accessToken = $_REQUEST['code'];
                $data = $instagram->getOAuthToken($accessToken);

                $this->set('access_token', $data->access_token);
                $this->save();
            }

            include(WPINSTAGRAM_PATH.'backend/view.php');


		}


        public function init_plugin_settings() {
            $_d = new wi_defaults();
            $this->settings = $_d->upgrade($this->settings);
            if ($this->settings) {
//                var_dump($this->settings);
//                exit();
            } else {

                var_dump($_d);
                $this->settings = get_option('wordpress-instagram');

                if (!is_array($this->settings)) {
                    $this->settings = $_d->settings;
                    update_option('wordpress-instagram', $this->settings);
                } else if ($this->settings['__build__'] != $_d->settings['__build__']) {
                    $this->settings = $_d->upgrade($this->settings);
                    update_option('wordpress-instagram', $this->settings);
                }

                define('SOCIAL_NETWORKS', $this->settings['__version__']);
//                exit(SOCIAL_NETWORKS);
            }
        }


        public function get($name) {
            return $this->settings[$name];
        }

        public function set($name, $value) {
            $this->settings[$name] = $value;
        }

        public function save() {
            update_option('wordpress-instagram', $this->settings);
        }

        public function save_settings() {
//            var_dump($this->settings);
            if (!empty($_POST)) {
//                var_dump($_POST);
//                exit();
//                global $sp_core_loader;

                foreach ($_POST as $k => $v) {
                    $this->set($k, $v);
                }
                    $this->set('ConnectionStatus', 'disconnected');
                $this->save();
                wp_redirect($this->admin_page_url.'?page=wordpress-instagram');
                exit;
            }
        }

	}
}

global $wiSetup;
$wiSetup = new wiSetup();
