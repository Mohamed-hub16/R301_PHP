<?php

spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace(['G4\\', '\\'], ['', '/'], $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
