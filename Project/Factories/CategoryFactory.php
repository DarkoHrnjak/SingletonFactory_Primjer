<?php

namespace Project\Factories;

use Project\Models\Category;

class CategoryFactory{
    public static function create(string $name, string $description): Category
    {
        $cat = new Category($name,$description);
        $cat->saveCategory();
        return $cat;
    }
}


?>