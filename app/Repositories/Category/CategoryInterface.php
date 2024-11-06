<?php

namespace App\Repositories\Category;

interface  CategoryInterface
{
    public function all();

    public function create(array $data);

    public function store(array $data, $category_row_id);
    
    // public function update(array $data, $category_row_id);

    // public function delete($category_row_id);

    // public function find($category_row_id);
}
