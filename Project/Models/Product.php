<?php

namespace Project\Models;

use Project\Core\BaseEntity;

class Product extends BaseEntity{
    public function __construct(
        public string $name,
        public float $price,
        public Category $category
    ){
        parent::__construct();
    }

    public function toArray(): array{
        return [
            "type"=>"product",
            "name"=>$this->name,
            "price"=>$this->price,
            "category"=>$this->category->name,
            "createdAt"=>$this->createdAt
        ];
    }
}

?>