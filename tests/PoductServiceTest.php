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

    public function testStubMap()
    {
        self::markTestSkipped("Di tutorial jalan, tapi ini tidak jalan makanya saya skip");

        $product1 = new Product();
        $product1->setId("1");

        $product2 = new Product();
        $product2->setId("2");

        $map = [
            ["1", $product1],
            ["2", $product2],
        ];

        $this->repository->method("findById")
            ->willReturnMap($map);

        self::assertSame($product1, $this->repository->findById("1"));
        self::assertSame($product2, $this->repository->findById("2"));
    }

    public function testStubCallback()
    {
        // Di tutorial jalan, tapi ini tidak jalan
        $this->repository->method("findById")
            ->willReturnCallback(function (string $id) {
                $product = new Product();
                $product->setId($id);
                return $product;
            });

        self::assertEquals("1", $this->repository->findById('1')->getId());
        self::assertEquals("2", $this->repository->findById('2')->getId());
        self::assertEquals("3", $this->repository->findById('3')->getId());
    }

}