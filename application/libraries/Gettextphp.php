<?php

/**
 * class developed by Carlos Alva
 * based in gettextphp library
 */
class Gettextphp
{

    protected $locale_file_reader = null;

    public function __construct()
    {
        require_once __DIR__ . '/gettext-php/gettext.php';
        require_once __DIR__ . '/gettext-php/streams.php';
    }

    public function translate($text)
    {

        $locale_reader = new gettext_reader($this->getLocale_file_reader());
        return $locale_reader->translate($text);
    }

    public function set_language($locale_file)
    {
        $this->setLocale_file_reader(new FileReader(FCPATH . APPPATH . "language/$locale_file/LC_MESSAGES/$locale_file.mo"));
    }

    public function getLocale_file_reader()
    {
        return $this->locale_file_reader;
    }

    public function setLocale_file_reader($locale_file_reader)
    {
        $this->locale_file_reader = $locale_file_reader;
    }

}
