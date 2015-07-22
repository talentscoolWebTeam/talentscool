<?php

namespace Stripe\Error;

class InvalidRequest extends Base
{
    public function __construct(
        $message,
        $param,
        $httpStatus = null,
        $httpBody = null,
<<<<<<< HEAD
        $jsonBody = null,
        $httpHeaders = null
    ) {
        parent::__construct($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders);
=======
        $jsonBody = null
    ) {
        parent::__construct($message, $httpStatus, $httpBody, $jsonBody);
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
        $this->param = $param;
    }
}
