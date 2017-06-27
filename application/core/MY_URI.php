<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_URI extends CI_URI {

    public function __construct() {

        parent::__construct();

    }

    function filter_uri(&$str) {

         if ($str != '' AND $this->config->item('permitted_uri_chars') != '') {
            $str = urlencode($str);
            if (!preg_match("|^[".str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-'))."]+$|i", $str) ) {
                exit('The URI you submitted has disallowed characters.');
            }
            $str = urldecode($str);
        }
        return $str;

    }

}