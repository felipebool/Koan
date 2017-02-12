<?php

namespace Koan\Http\Message;

use Koan\Http\Message\RequestInterface;

class Request implements RequestInterface
{
    public function __construct()
    {

    }

    public function getProtocolVersion()
    {
        return $_SERVER['SERVER_PROTOCOL'];
    }

    public function withProtocolVersion($version)
    {

    }

    public function getHeaders()
    {
        return $_SERVER;
    }

    public function hasHeader($name)
    {
        return isset($_SERVER[$name]) ? true : false;
    }

    public function getHeader($name)
    {
        return isset($_SERVER[$name]) ? return $_SERVER[$name] : array();
    }

    public function getHeaderLine($name)
    {

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
        //FIXME: this must be a StreamInterface
        return http_get_request_body();
    }

    public function withBody(StreamInterface $body)
    {

    }

    public function getRequestTarget()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function withRequestTarget($requestTarget)
    {

    }

    public function getMethod()
    {
        return isset($_SERVER['REQUEST_METHOD'])
            ? $_SERVER['REQUEST_METHOD']
            : '/';
    }

    public function withMethod($method)
    {

    }

    public function getUri()
    {

    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {

    }
}
