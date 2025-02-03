<?php

namespace App;

use App\Product;
use App\EntityManager;

class ProductController extends Controller
{
     public function index()
     {
          $entityManager = new EntityManager('products');
          $products = $entityManager->findAll();
          return $this->renderPHP('product-view.php', ["products" => $products]);
          // return $this->renderTwig('home.html.twig', ["products" => $products]);
     }

     public function productDetails($id) {
         $entityManager = new EntityManager('products');
         $product = $entityManager->findById($id);
         return $this->renderPHP('product-details.php', ["product" => $product]);
     }
}