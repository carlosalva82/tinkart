<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function set_language($language)
{
    $CI = & get_instance();
    $CI->load->library(array('gettextphp'));
    $CI->gettextphp->set_language($language);
}

function translate($text)
{
    $CI = & get_instance();
    $language = $CI->gettextphp;
    //print_r($CI->gettextphp);
    
    if (isset($language->getLocale_file_reader()->_pos)) {
        $language->getLocale_file_reader()->_pos = 0;
    }


    return $language->translate($text);
}

?>  