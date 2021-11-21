<?php
session_start();

$logado = session_name('logado');

$sql = require_once 'script.php';

class Validacao extends Usuario{

   
    public function list(){
        $login = $_POST['login'];
        $senha = $_POST['password'];

        $sql = 'SELECT * FROM usuarios';
       
        $user = $this->conn->query($sql);
        
       
        foreach ($user as $value) {
            if ($value['login'] == $login && $value['senha'] == $senha) {
               $_SESSION['login'] = $login;
               header('Location: acesso.php');
               exit();
            }else{
               header('Location: ../index.php');
               exit();                
            }
           
        }

        

   }

        
   
    
}

$teste = new Validacao();

$teste->list();