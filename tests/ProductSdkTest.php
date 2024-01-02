<?php

namespace Boris\ProductServiceSdk\Tests;

use Boris\ProductServiceSdk\Model\Product;
use Boris\ProductServiceSdk\ProductSdk;
use PHPUnit\Framework\TestCase;

class ProductSdkTest extends TestCase
{
    private ProductSdk $productSdk;

    protected function setUp(): void
    {
        $this->productSdk = new ProductSdk($_ENV['PRODUCT_SERVICE_HOST']);
    }

    public function testGetById(): void
    {
        $id = 10;
        $test = $this->productSdk->getAllProducts();

        self::assertInstanceOf(Product::class, $test[0]);
    }
}
