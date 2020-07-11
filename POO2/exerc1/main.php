<?php 
        require_once 'triangulo.php';
        
        $tri = new triangulo($_GET['a'], $_GET['b']);
        $tri->setBase($_GET['a']);
        $tri->setAltura($_GET['b']);
        $tri->imprime();
?>