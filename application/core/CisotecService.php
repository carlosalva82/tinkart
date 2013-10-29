<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class CisotecService
{


    protected $doctrine;
    protected $entityManager;

    /**
     * Constructor
     */
    public function __construct()
    {

//        $this->load = & load_class('Loader', 'core');
//        $this->load->initialize();
        $CI = & get_instance();
        $this->doctrine = $CI->load->library('doctrine');
        $this->entityManager = $this->doctrine->em;
    }

}