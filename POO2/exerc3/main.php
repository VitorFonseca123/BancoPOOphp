<?php 
    require_once 'conta.php';
    $c = new Conta();
    session_start();
    $c->setSaldo($_SESSION['saldo']);
    $c->setData($_SESSION['data']);
    echo "Criada em: ".$c->getData();
    echo  "<form action='main.php' method='GET'>
    <input type='text' name='saque' placeholder='Digite o quanto quer sacar'>
    <input type='text' name='deposito' placeholder='Digite o deposito'>
    <input type='text' name='trans' placeholder='Digite o valor para transferir'>
    <input type='submit' value='Enviar'>
</form>";
    if(isset($_GET['saque'])){
        if($_GET['saque']>$c->getSaldo()){
            echo "<font color='red'> O valor de saque excede seu saldo";
        }else{
            $c->Saque($_GET['saque']);
            
        }
    }
    if(isset($_GET['deposito'])){
        $c->deposito($_GET['deposito']);
    }
    if(isset($_GET['trans'])){
        if($_GET['trans']>$c->getSaldo()){
            echo "<font color='red'> O valor de transferencia excede seu saldo";
        }else{
            $c->transferir($_GET['trans']);
        }
        
    } 
    $_SESSION['saldo'] = $c->getSaldo();
    echo "</br>Saldo Disponível: R$".$c->getSaldo();
?>