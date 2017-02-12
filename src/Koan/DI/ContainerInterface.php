<?php

namespace Koan\DI;

interface ContainerInterface
{
    public function get($id);
    public function has($id);
}
