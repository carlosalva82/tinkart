<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Principal extends CI_Controller
{

    public function index()
    {
        // Set the title
        $this->template->title = 'Pagina por defecto!';
       
        //styles
        $this->template->stylesheet
                ->add('include/css/default.css')
                ->add('include/bootstrap3.0/css/bootstrap.min.css');
        
        // Load a view in the content partial
        $this->template->content->view('principal_message', array('title' => 'Hello, world!'));
        $this->template->content->view('template/hero', array('title' => 'Hello, world!'));

//        $news = array(); // load from model (but using a dummy array here)
//        $this->template->content->view('news', $news);
        
        
        // Set a partial's content
        //$this->template->footer = 'Made with Twitter Bootstrap';
        
        //set javascript
        $this->template->javascript
                ->add('include/js/jquery-1.10.2.min.js')
                ->add('include/bootstrap3.0/js/bootstrap.min.js');
        
        // Publish the template
        $this->template->publish();
    }

}

