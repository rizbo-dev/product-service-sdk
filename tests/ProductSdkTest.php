<?php

namespace Boris\Tests;

use Boris\ProductServiceSdk\ProductSdk;
use PHPUnit\Framework\TestCase;

class ProductSdkTest extends TestCase
{
    private ProductSdk $productSdk;

    protected function setUp(): void
    {
        $this->productSdk = new ProductSdk();
    }

    public function testTestFunction(): void
    {
        self::assertEquals(0, $this->productSdk->test());
    }
}
