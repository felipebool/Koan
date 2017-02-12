<?php

namespace Koan\Component;

use Koan\Component\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private $config;

    public function __construct($path)
    {
        $this->config = require_once $path;
    }

    public function get($entry)
    {
        if (isset($this->config[$entry])) {
            return $this->config[$entry];
        }

        throw new \Exception('Configuration not found');
    }

    public function set($entry, $config)
    {
        if (!isset($this->config[$entry])) {
            $this->config[$entry] = $config;
            return true;
        }

        throw new \Exception('Unable to overwrite configuration');
    }

    public function has($entry)
    {
        return isset($this->config[$entry]) ? $this->config[$entry] : false;
    }
}
