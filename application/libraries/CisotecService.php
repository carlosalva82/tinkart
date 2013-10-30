<?php

/**
 * 
 */
class CisotecService
{

    protected $doctrine;
    protected $entityManager;

    /**
     * Constructor
     */
    public function __construct()
    {

        $CI = & get_instance();
        $this->doctrine = $CI->load->library('doctrine');
        $this->entityManager = $this->doctrine->em;
    }

}