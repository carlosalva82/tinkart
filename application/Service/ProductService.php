<?php

namespace Service;

use models\Entity\Product;

class ProductService extends \CisotecService
{

    private function getRepositoryProduct()
    {
        return $this->entityManager->getRepository('models\Entity\Product');
    }

    public function fetchProducts()
    {

        return $this->getRepositoryProduct()->findAll();
    }

    public function getProduct($id)
    {

        return $this->getRepositoryProduct()->find($id);
    }

    public function updateProduct($product, $values)
    {

        $newProduct = $this->fillEntity($product, $values);
        $this->entityManager->merge($newProduct);
        $this->entityManager->flush();
        $this->entityManager->clear();
    }

    public function deleteProduct($productId)
    {
        $product = $this->getProduct($productId);
        $this->entityManager->remove($product);
        $this->entityManager->flush();
        $this->entityManager->clear();
    }

    public function saveProduct($values)
    {
        $product = new Product;

        $product->setDateAdd(new \DateTime);

        $newProduct = $this->fillEntity($product, $values);
        $this->entityManager->persist($newProduct);
        $this->entityManager->flush();
        $this->entityManager->clear();
    }

    private function fillEntity($entity, $values)
    {
        foreach ($values as $field => $val) {
            call_user_func(array($entity, 'set' . ucfirst($field)), $val);
        }
        return $entity;
    }

}