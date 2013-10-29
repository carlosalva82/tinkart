<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once(APPPATH . "Service/ProductService.php");

use Service\ProductService;

class Producto extends CI_Controller
{

    private function getProductService()
    {
        return new ProductService();
    }

    public function __construct()
    {
        parent::__construct();
        set_language('es_ES');
    }

    public function index()
    {
        $productService = $this->getProductService();
        $products = $productService->fetchProducts();
        
        $this->template->title = translate("List of Products");
        $this->template->content->view('producto/index', array(
            'products' => $products,
        ));

        $this->template->publish();
    }

    public function edit()
    {

        $productId = $this->uri->segment(4);
        $product = $this->getProductService()->getProduct($productId);
        $this->template->title = translate('Edit Product');
        
        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'Title', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $this->getProductService()->updateProduct($product, $this->input->post());
                $this->session->set_flashdata('message', array('success', translate('Product was updated successfully')));
                redirect(base_url('/producto'));
            }
        }
        $this->template->content->view('producto/edit', array(
            'product' => $product
        ));

        $this->template->publish();
    }

    public function delete()
    {
        $productId = $this->uri->segment(4);
        $this->getProductService()->deleteProduct($productId);
        $this->session->set_flashdata('message', array('success', translate('Product was deleted successfully')));
        redirect(base_url('/producto'));
    }

    public function add()
    {
        $this->template->title = translate('Add Product');
        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'Title', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $this->getProductService()->saveProduct($this->input->post());
                $this->session->set_flashdata('message', array('success', translate('Product was updated successfully')));
                redirect(base_url('/producto'));
            }
        }
        $this->template->content->view('producto/add');

        $this->template->publish();
    }

}

