<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update ($id, array $data);
    public function delete($id);
    public function getActiveProducts();
    public function getProductsByCategory($categoryId);

    // public function getAllProducts();
    // public function getProductById($id);
    // public function createProduct(array $data);
    // public function updateProduct($id, array $data);
    // public function deleteProduct($id);

}

?>