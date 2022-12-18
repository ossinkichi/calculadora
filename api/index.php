<?php
    $title = "Minha calculadora";
    $numb1= 0;
    $numb2= 0;
    $result= 0;
    $calcular= 'somar';

    if(isset($_POST['numb1'], $_POST['numb2'],$_POST['calcular'])){
        echo 'dados recebidos';
        $numb1= $_POST['numb1'];
        $numb2= $_POST['numb2'];
        $calcular= $_POST['calcular'];
    }

    switch($calcular){
        case 'som':
            $result= $numb1 + $numb2;
        break;
        case 'sub':
            $result= $numb1 - $numb2;
        break;
        case 'mult':
            $result= $numb1 * $numb2;
        break;
        case 'div':
            $result= $numb1 / $numb2;
        break;
        case 'rest':
            $result= $numb1 % $numb2;
        break;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?=$title?></title>
</head>
<body class= "bg-dark">
    <form method="POST" class="container text-center card card-login mx-auto mt-5 col-6">
    <br><br/>
        <h3>Calculadora</h3><br>
        <label for="">1° numero</label>
        <input type="number" name="numb1" required><br><br>
        <select name="calcular">
            <option value="">escolha a operação</option>
            <option value="som">somar</option>
            <option value="subt">subtrair</option>
            <option value="mult">mutiplicar</option>
            <option value="div">dividir</option>
            <option value="rest">restante</option>
        </select><br><br>
        <label for="">2° numero</label>
        <input type="number" name="numb2" required><br><br>
        <br><br>
        <button type= "submit" class="btn btn-success">calcular</button><br>
    </form>
    <br><br>
    <div class="card text-center  mx-auto col-6">
    <h2 class="shadow p-1 mb-2 mt-2 bg-body rounded">O resultado é <?= $result?></h2>
    </div>
    <br><br>
   
</body>
</html>
