<?php

namespace Stripe\Error;

use Exception;

abstract class Base extends Exception
{
    public function __construct(
        $message,
        $httpStatus = null,
        $httpBody = null,
<<<<<<< HEAD
        $jsonBody = null,
        $httpHeaders = null
=======
        $jsonBody = null
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
    ) {
        parent::__construct($message);
        $this->httpStatus = $httpStatus;
        $this->httpBody = $httpBody;
        $this->jsonBody = $jsonBody;
<<<<<<< HEAD
        $this->httpHeaders = $httpHeaders;
        $this->requestId = null;

        if ($httpHeaders && isset($httpHeaders['Request-Id'])) {
            $this->requestId = $httpHeaders['Request-Id'];
        }
=======
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
    }

    public function getHttpStatus()
    {
        return $this->httpStatus;
    }

    public function getHttpBody()
    {
        return $this->httpBody;
    }

    public function getJsonBody()
    {
        return $this->jsonBody;
    }
<<<<<<< HEAD

    public function getHttpHeaders()
    {
        return $this->httpHeaders;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function __toString()
    {
        $id = $this->requestId ? " from API request '{$this->requestId}'": "";
        $message = explode("\n", parent::__toString());
        $message[0] .= $id;
        return implode("\n", $message);
    }
=======
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
}
