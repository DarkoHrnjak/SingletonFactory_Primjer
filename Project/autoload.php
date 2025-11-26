<?php

spl_autoload_register(function($className){
    if(strpos($className,'Project\\')!==0){
        return;
    }

    $relativeClass = str_replace('Project\\','',$className);

    $putanja = __DIR__.'/'.str_replace('\\','/',$relativeClass).'.php';

    if(file_exists($putanja)){
        require_once $putanja;
    }
    else{
        echo "<br>Datoteka za klasu ($className) ne postoji";
    }
});

?>