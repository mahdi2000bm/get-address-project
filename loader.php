<?php
    spl_autoload_register(function($class)
    {
        $dir = __DIR__ . '\\' .  $class . '.php';
        if(file_exists($dir) and is_readable($dir)){
            include $dir;
            header("HTTP/1.1 200 Ok");
        }else{            
            header("Location: http://localhost/get-address-project", false, 301);
            exit();
        }
    });