<?php

namespace Supriadi\Test;

class ProductService
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function register(Product $product): Product
    {
        if ($this->repository->findById($product->getId() != null)) {
            throw new \Exception('Product is already exists');
        }

        return $this->repository->save($product);
    }
}