<?php

ini_set('display_errors', 1);

require_once 'vendor/autoload.php';

//use App\ProductControler;
use App\Product;
use App\User;

echo "Hello, World!";


$firstUser = new User('1', 'John', 'Doe', 'johndoe@example.com', '123456');
$secondUser = new User('2', 'Jane', 'Smith', 'janesmith@example.com', '654321');

//$firstUser->_construct('1', 'John', 'Doe', 'johndoe@example.com', '123456');
//$secondUser->_construct('2', 'Jane', 'Smith', 'janesmith@example.com', '654321');

echo '<br>' . $firstUser->getEmail();
echo '<br>' . $secondUser->getEmail();

$firstUser->displayInfos();

$firstUser->verifyPassword('Abradacadabra');

$firstUser->modifyEmail('newEmail@gmail.com');

$firstUser->displayInfos();


$product1 = new Product();
$allProducts = $product1->getAll();

//require_once 'views/homeviews.php';

//$productControler = new ProductControler();
//echo $productControler->index();
echo '<br>';

use App\Router;

$router = new Router();
//$pathToSend = explode('/products-list-with-cart', $_SERVER['REQUEST_URI'])[1];
$URL = ($_SERVER['REQUEST_URI']);
echo $router->dispatch($URL);

//require_once './src/ProductControler.php';
//$aa = new ProductControler();