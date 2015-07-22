<?php

namespace Stripe\HttpClient;

interface ClientInterface
{
    /**
     * @param string $method The HTTP method being used
     * @param string $absUrl The URL being requested, including domain and protocol
     * @param array $headers Headers to be used in the request (full strings, not KV pairs)
     * @param array $params KV pairs for parameters. Can be nested for arrays and hashes
     * @param boolean $hasFile Whether or not $params references a file (via an @ prefix or
     *                         CurlFile)
     * @throws Error\Api & Error\ApiConnection
<<<<<<< HEAD
     * @return array($rawBody, $httpStatusCode, $httpHeader)
=======
     * @return array($rawBody, $httpStatusCode)
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
     */
    public function request($method, $absUrl, $headers, $params, $hasFile);
}
