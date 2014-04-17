<?php

if (!defined('ABSPATH')) exit;

final class wi_defaults {
    public $settings = array(
        '__version__'=>'1.0.1',
        '__date__'=>'2013.11.10',
        '__build__'=>'1005',
        '__status__'=>'stable',

        'Enable'=>'1',
        'Username'=>'sony',
        'DisplayMode'=>'username',
        'Filter'=>'imagesvideo',
        'NumberToDisplay'=>'30',
        'Width'=>'800px',
        'ClientID'=>'',
        'ClientSecret'=>'',
        'access_token'=>'',
    );

    function __construct() { }

    public function upgrade($old, $scope = 'settings') {

        $work = $this->settings;
//        var_dump($old);
//        var_dump($work);

        foreach ($work as $key => $value) {
            if (!isset($old[$key])) {
                $old[$key] = $value;
            }
        }

        $unset = array();
        foreach ($old as $key => $value) {
            if (!isset($work[$key])) {
                $unset[] = $key;
            }
        }

        if (!empty($unset)) {
            foreach ($unset as $key) {
                unset($old[$key]);
            }
        }

        foreach ($work as $key => $value) {
            if (substr($key, 0, 2) == '__') {
                $old[$key] = $value;
            }
        }

        return $old;
    }
}

?>