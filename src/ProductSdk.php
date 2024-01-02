<?php

namespace Boris\ProductServiceSdk;

use Boris\ProductServiceSdk\Model\Product;
use Symfony\Component\Serializer\Serializer;

class ProductSdk
{
    private ApiClient $productApiClient;
    private Serializer $serializer;

    public function __construct(string $apiBaseUri)
    {
        $this->productApiClient = new ApiClient($apiBaseUri);
        $this->serializer = ProductSdkSerializerFactory::create();
    }

    /**
     * @return Product[]
     */
    public function getAllProducts(): array
    {
        $data = $this->productApiClient->get('/products');

        return $this->serializer->deserialize($data, Product::class.'[]', 'json');
    }
}
