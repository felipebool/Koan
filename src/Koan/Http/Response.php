<?php

namespace Koan\Http;

class Response {
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        echo $this->message;
    }
}
