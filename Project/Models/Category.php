<?php


namespace Project\Models;

use Project\Core\BaseEntity;

class Category extends BaseEntity{
    public function __construct(
        public string $name,
        public string $description
    ){
        parent::__construct();
        $this->storageFile=__DIR__."/../categories.json";
    }

    public function toArray(): array{
        return [
            "type"=>"category",
            "name"=>$this->name,
            "description"=>$this->description,
            "createdAt"=>$this->createdAt
        ];
    }

    public function saveCategory(){
        $this->saveCategoryToJson($this->toArray());
    }
}



?>