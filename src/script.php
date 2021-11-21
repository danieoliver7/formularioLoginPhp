<?php

class Usuario{

    public $conn;


    public function __construct(){

        try {
            $this->conn=new PDO('mysql:host=localhost:3306; dbname=crud',  'root', '');
            }   catch (Excpetion $e) {
                echo $e->getMessage();
                die();
                }
       
       
       
   }
   
   public function list(){

        $sql = 'SELECT * FROM usuarios';

        $user = $this->conn->query($sql);

        return $sql;

   }

   
}