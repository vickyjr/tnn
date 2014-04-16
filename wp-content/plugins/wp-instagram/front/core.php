<?php
wp_enqueue_style('wi-front-style', WPINSTAGRAM_URL.'css/front.css');
wp_enqueue_style('wi-lightbox-style', WPINSTAGRAM_URL.'css/lightbox.css');
wp_enqueue_script('wi-lightbox-js', (WPINSTAGRAM_URL.'js/lightbox-2.6.min.js'));

if (!class_exists('wiFront')) {

    class wiFront {
        public $settings = array();
        public $instagram = array();

        function __construct()
        {
            include(WPINSTAGRAM_PATH.'Instagram-PHP-API/instagram.class.php');
            $this->settings = get_option('wordpress-instagram');
            $this->instagram = new Instagram(array(
                'apiKey'      => $this->settings['ClientID'],
                'apiSecret'   => $this->settings['ClientSecret'],
                'apiCallback' => WPINSTAGRAM_REDIRECT_URL
            ));
            $this->instagram->setAccessToken($this->settings['access_token']);

            include(WPINSTAGRAM_PATH.'front/view.php');


        }


    }
}

global $wiFront;
$wiFront = new wiFront();

?>
