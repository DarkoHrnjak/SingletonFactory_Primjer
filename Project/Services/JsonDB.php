<?php

namespace Project\Services;

class JsonDB{
    private static ?JsonDB $instance = null;

    private function __construct(){}

    public static function getInstance(): JsonDB{
        return self::$instance ??= new JsonDB();
    }

    public function save(string $fileName, array $record):void{
        $data =[];

        if(file_exists($fileName)){
            $data = json_decode(file_get_contents($fileName),true);
        }

        $data[]=$record;

        file_put_contents($fileName,json_encode($data,JSON_PRETTY_PRINT), LOCK_EX);

        echo "<br>Zapis spremljen u $fileName!";
    }
}

?>