<?php

namespace App;

ini_set('display_errors', 1);

class User extends Database {
     private $lastName;
     private $firstName;
     private $email;
     private $password;

     public function displayInfos()
     {
          echo '<br>First and last name: ' . $this->firstName . ' ' . $this->lastName . '<br>';
          echo 'Email: ' . $this->email . '<br>';
     }
     
     public function verifyPassword($password)
     {
          echo '<br>' . ($this->password === $password ? 'true' : 'false') . '<br>';
     }
     
     public function modifyEmail($newEMail)
     {
          $this->email = $newEMail . '<br>';
     }

     // Getter
     public function getFirstName() {
          return $this->firstName;
     }
     public function getLastName() {
          return $this->lastName;
     }
     public function getEmail() {
          return $this->email;
     }
     public function getPassword() {
          return $this->password;
     }


     // Setter
     public function setFirstName($firstName) {
         if(!empty($firstName)) {
            $this->firstName = $firstName;
            return $this->firstName;
         }

         return 'Last name cannot be empty string';
     }
     public function setLastName($lastName) {
          $this->lastName = $lastName;
     }
     public function setEmail($email) {
          $this->email = $email;
     }
     public function setPassword($password) {
          $this->password = $password;
     }

     public function save() {
         $connect = $this->getConnection();
         $connect->beginTransaction();
         var_dump($connect);
     }
}