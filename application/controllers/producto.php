<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once(APPPATH . "Service/ProductService.php");

use Service\ProductService;
use Entity\Product;

class Producto extends CI_Controller
{

    private function getProductService()
    {
        return new ProductService();
    }

    public function index()
    {

        $productService = $this->getProductService();
        $products = $productService->fetchProducts();

        $this->template->title = 'List of Products';
        $this->template->content->view('producto/index', array(
            'products' => $products,
        ));

        $this->template->publish();
    }

    public function edit()
    {
      
        $productId = $this->input->get('id',TRUE);
        
        $product = $this->getProductService()->getProduct($productId);
        $this->template->title = 'Edit Product';
        if ($_POST) {
            
        }
       
        $this->template->content->view('producto/edit', array(
            'product' => $product
        ));
        
        $this->template->publish();
    }

}

