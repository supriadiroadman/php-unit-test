<?php

namespace Supriadi\Test;

use PHPUnit\Framework\TestCase;

class PoductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub()
    {
        $product = new Product();
        $product->setId('1');

        $this->repository->method('findById')
            ->willReturn($product);

        $result = $this->repository->findById('1');
        //var_dump($result);
        self::assertSame($product, $result);

    }


}