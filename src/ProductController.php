<?php

namespace App;

use App\Product;
class ProductController extends Controller
{
     public function index()
     {
          $product = new Product();
          $products = $product->getAll();
          return $this->render('home.html.twig', ["products" => $products]);

     }
}