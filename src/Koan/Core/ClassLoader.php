<?php

namespace Koan\Core;

class ClassLoader
{
    public function __construct()
    {
    }

    public function loadClass($file)
    {
        $baseDir = array(MODELS, VIEWS, CONTROLLERS);

        foreach ($baseDir as $path) {
            if ($this->requireFile($path . $file . '.php')) {
                return true;
            }
        }

        return false;
    }

    private function requireFile($file)
    {
        if (file_exists($file)) {
            require_once $file;
            return true;
        }

        return false;
    }
}
