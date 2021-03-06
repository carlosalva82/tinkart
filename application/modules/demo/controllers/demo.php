<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once(APPPATH . "modules/demo/Service/Service.php");

use Service\Service;

class Demo extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

//        $group = new Entity\UserGroup;
//        $group->setName('Users');

        $user = new demo\models\Entity\User;
        $service = new Service();

        $user->setUsername('charlie');
        $user->setLastname('alva');
        $user->setName('Carlos');
        $user->setNuevo('Nuevo');


        // When you have set up your database, you can persist these entities:
        // $em = $this->doctrine->em;
        // $em->persist($group);
        // $em->persist($user);
        // $em->flush();

        $this->load->view('welcome_message', array(
            'user' => $user,
            'service' => $service->index()
        ));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
