<?php

namespace App;

use PDO;

class UserController extends Controller
{
     public function index()
     {
          $sql = "SELECT * FROM user";
          $stmt = $this->getConnection()->prepare($sql);
          $stmt->execute();
          return $this->render('user.html.twig', ['users' => $stmt->fetchAll(PDO::FETCH_ASSOC)]);
     }

     public function showForm() {
         return $this->render('register.html.twig', []);
     }

     public function register() {
         $data = $_POST;

         $newUser = new User();
         $newUser->setFirstName($data['first-name']);
         $newUser->setLastName($data['last-name']);
         $newUser->setEmail($data['email']);
         $newUser->setPassword($data['password']);

         $newUser->save();


     }
}