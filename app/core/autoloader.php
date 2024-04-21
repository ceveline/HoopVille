<?php
//to avoid including/requiring all our controller and model classes...
spl_autoload_register(
    function($class_name){
        //version 0.1 PSR-4 autoloader
        //for compatibility replace FQCN (\) separator by DIRECTORY_SEPARATOR. (\ or /)
        $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

        $file_path = $class_name . '.php'; 

        if(file_exists($file_path)){
            // echo "Autoloading file: $file_path<br>";
            require_once($file_path);
            return true;
        }
        else
        {
            return false;
        }
    }
);