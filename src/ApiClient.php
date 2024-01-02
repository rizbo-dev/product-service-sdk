<?php

namespace Boris\ProductServiceSdk;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiClient
{
    private HttpClientInterface $httpClient;

    public function __construct(string $apiBaserUri)
    {
        $this->httpClient = HttpClient::createForBaseUri($apiBaserUri);
    }

    /**
     * @param string $endpoint
     * @param array<string> $queryParams
     *
     * @return string|null
     */
    public function get(string $endpoint, array $queryParams = []): ?string
    {
        try {
            $response = $this->httpClient->request('GET', $endpoint, [
                'query' => $queryParams,
            ]);
            return $response->getContent();
        } catch (\Throwable $throwable) {
            return null;
        }
    }
}
