<?php

namespace Service;

class ProductService extends \CisotecService
{

    
    private function getRepositoryProduct()
    {
        return $this->entityManager->getRepository('Entity\Product');
    }

    public function fetchProducts()
    {

        return $this->getRepositoryProduct()->findAll();
    }
    public function getProduct($id)
    {

        return $this->getRepositoryProduct()->find($id);
    }

}