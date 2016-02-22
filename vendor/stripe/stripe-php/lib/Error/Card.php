<?php

namespace Stripe\Error;

class Card extends Base
{
    public function __construct(
        $message,
        $param,
        $code,
        $httpStatus,
        $httpBody,
<<<<<<< HEAD
        $jsonBody,
        $httpHeaders = null
    ) {
        parent::__construct($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders);
=======
        $jsonBody
    ) {
        parent::__construct($message, $httpStatus, $httpBody, $jsonBody);
>>>>>>> a4954494880de80b002b67374bf830a440e3a926
        $this->param = $param;
        $this->code = $code;
    }
}
