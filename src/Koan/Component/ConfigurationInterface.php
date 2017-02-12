<?php

namespace Koan\Component;

interface ConfigurationInterface
{
    public function get($entry);
    public function set($entry, $config);
    public function has($entry);
}
