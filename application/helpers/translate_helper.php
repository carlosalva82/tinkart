<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


function translate($text)
{
    $CI = & get_instance();

    $language = $CI->gettextphp;
    $language->getLocale_file_reader()->_pos =0;

    return $language->translate($text);
}

?>  