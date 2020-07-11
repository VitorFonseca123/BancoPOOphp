<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="GET">
<input type="text" name="saldo" placeholder= "Digite  seu saldo inicial">
<input type="date" name = "data" Placeholder="Digite a data atual">
        <br>
        <input type="submit" name="" value="Enviar">
<br>
        <?php 
        
        if(isset($_GET['mensagem'])){
            echo $_GET['mensagem'];
            
        }
    ?>
</body>
</html>