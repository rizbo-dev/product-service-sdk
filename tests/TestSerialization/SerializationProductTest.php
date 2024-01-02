<?php

namespace Boris\ProductServiceSdk\Tests\TestSerialization;

use Boris\ProductServiceSdk\Model\Product;
use Boris\ProductServiceSdk\ProductSdkSerializerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;

class SerializationProductTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = ProductSdkSerializerFactory::create();
    }

    public function testProductSerialization(): void
    {
        $testJson = file_get_contents(__DIR__.'/../data/product.json');

        $product = $this->serializer->deserialize($testJson, Product::class, 'json');

        self::assertInstanceOf(Product::class, $product);
    }
}
