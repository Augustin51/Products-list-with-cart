<?php

namespace App;

use App\Product;
class ProductController extends Controller
{
     public function index()
     {
          $product = new Product();
          $products = $product->getAll();
          return $this->renderPHP('product-view.php', ["products" => $products]);
          // return $this->renderTwig('home.html.twig', ["products" => $products]);
     }

     public function productDetails($id) {
         var_dump($id);

         $product = new Product();
         $product = $product->getById($id);
         return $this->renderPHP('product-details.php', ["product" => $product]);
     }
}