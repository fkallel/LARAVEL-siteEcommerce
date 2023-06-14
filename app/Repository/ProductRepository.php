<?php


namespace App\Repository;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductRepository implements IProductRepository {
       public function getAllProducts()
       {
        return Product::all();
       }
       public function createProduct(array $data){
        log::info("Message here");

         product::insert([
            'picture' => $data['picture'],
            'title' => $data['title'],
            'price'=> $data['price'],
            'description'=> $data['description'],

         ]);

       }
       public function getSingleProduct($id){
         return Product::find($id);
       }
       public function editProduct($id){
         return product::find($id);
       }
       public function updateProduct($id, array $data){
        product::find($id)->update([
            'picture' => $data['picture'],
            'title' => $data['title'],
            'price'=> $data['price'],
            'description'=> $data['description'],

         ]);


       }

    
}







?>