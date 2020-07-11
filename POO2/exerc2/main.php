<?php 
    require_once 'Nota.php';
    $n = new Nota();
    $n->setN1($_GET['a']);
    $n->setN2($_GET['b']);
    $n->setN3($_GET['c']);
    $n->setN4($_GET['d']);
    $n->imprime();
?>