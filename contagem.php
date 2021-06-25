<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once "settings.php";
    try {
        $db = new Database();
        echo $db->Send_Vote_Database(new Votos($_POST['zona'],$_POST['secao'],$_POST['urna'],$_POST['candidato1'],$_POST['candidato2'],$_POST['candidato3'],$_POST['candidato4'],$_POST['candidato5'],$_POST['brancos'],$_POST['nulos']));
    }catch (PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }
    
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   
    <title>Conselho Tutelar</title>
</head>
<body>
    <h1 class="title text-center">Resultados Parciais</h1>
    <div class="row">
<div class="card col-lg-6 col-sm-12 m-auto mt-5">
    <div class="card-body">
    
   <?php 
   echo '
    <h5 class="card-title text-center">Zona '.$_POST['zona'].'</h5>
    <h5 class="card-title text-center">Secao '.$_POST['secao'].'</h5>
    <h5 class="card-title text-center">Urna '.$_POST['urna'].'</h5>
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato1'].'">
    <span>Candidato 2</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato2'].'">
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato3'].'">
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato4'].'">
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato5'].'">
    ';
   ?>
</div>
</div>
<div class="text-center">
    <button class="btn btn-danger col-2" type="button">Encerrar Votacao</button>
    <button class="btn btn-primary col-2" type="button" onclick="myFunction()">Voltar a Entrada de Dados</button>
</div>

</div>
	<script>
	function myFunction() {
  		location.replace("./index.php")
	}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>