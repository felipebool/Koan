<?php

namespace Koan\DI;

use Koan\DI\ContainerInterface;

class Container implements ContainerInterface
{
    private $dependency = array();

    public function __construct()
    {
    }

    public function set($key, $service)
    {
        $this->dependency[$key] = $dependency;
    }

    public function has($service)
    {
        return isset($this->dependency[$service]);
    }

    public function get($service)
    {
        if (isset($this->has($service))) {
            return $this->dependency[$service];
        }

        throw new \Exception('Fatal: Service not Found');
    }
}
