<?php

namespace Koan\Http\Message;

use Koan\Http\Message\ResponseInterface;

class Response implements ResponseInterface
{
    private $headers;

    public function __construct()
    {
    }

    public function getProtocolVersion()
    {
        return $this->headers['protocol_version'];
    }

    public function withProtocolVersion($version)
    {
        $this->headers['protocol_version'] = $version;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function hasHeader($name)
    {
        return isset($this->headers[$name]) ? true : false;
    }

    public function getHeader($name)
    {
        return isset($this->headers[$name]) ? $this->headers[$name] : array();
    }

    public function getHeaderLine($name)
    {
        if (isset($this->headers[$name])) {
            return $this->headers[$name] . ': ' . implode(', ', $values);
        }

        return '';
    }

    public function withHeader($name, $value)
    {

    }

    public function withAddedHeader($name, $value)
    {

    }

    public function withoutHeader($name)
    {

    }

    public function getBody()
    {

    }

    public function withBody(StreamInterface $body)
    {

    }

    public function getStatusCode()
    {

    }

    public function withStatus($code, $reasonPhrase = '')
    {

    }

    public function getReasonPhrase()
    {

    }
}
