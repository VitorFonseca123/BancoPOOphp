<?php 
    session_start();
    if(isset($_GET['data'])){
        $_SESSION['data'] = $_GET['data'];
    }
   if(isset($_GET['saldo'])){
       $_SESSION['saldo'] = $_GET['saldo'];
   }
   if($_SESSION['saldo']<200){
        header('location: primeiroarquivo.php ?mensagem=<font color="red"> O valor deve ser no mínimo 200');
    }else{
        header('location: main.php');
    }
?>