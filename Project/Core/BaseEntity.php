<?php

namespace Project\Core;

abstract class BaseEntity implements IEntity{
    protected string $createdAt;
    public string $storageFile;

    public function __construct(){
        $this->createdAt= date("Y-m-d H:i:s.u");
    }

    public function getCreatedAt(): string{
        return $this->createdAt;
    }

    public function saveCategoryToJson(array $data){
        if(!file_exists($this->storageFile)){
            file_put_contents($this->storageFile,"[]");

            $json = json_decode(file_get_contents($this->storageFile), true);

            $json[]=$data;

            file_put_contents($this->storageFile,json_encode($json,JSON_PRETTY_PRINT), LOCK_EX);
        }
    }
}


?>