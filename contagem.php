<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once "settings.php";
    $db = new Database();
    try {
        if($db->Send_Vote_Database(new Votos($_POST['zona'],$_POST['secao'],$_POST['urna'],$_POST['candidato1'],$_POST['candidato2'],$_POST['candidato3'],$_POST['candidato4'],$_POST['candidato5'],$_POST['brancos'],$_POST['nulos']))){
                        
        }else{
            echo '<script>alert("os votos dessa urna, secao e zona ja foram apurados"); location.replace("./index.php");</script>';
        }
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
   $vot_cand = array( $db->Total_Cand(1), $db->Total_Cand(2), $db->Total_Cand(3), $db->Total_Cand(4), $db->Total_Cand(5),$db->Tot_bran(),$db->Tot_null());
   $sum_tot = $vot_cand[0]+$vot_cand[1]+$vot_cand[2]+$vot_cand[3]+$vot_cand[4]+$vot_cand[5]+$vot_cand[6] ;
   
   echo '<h5 class="card-title text-center">Zona '.$_POST['zona'].'</h5>
    <h5 class="card-title text-center">Secao '.$_POST['secao'].'</h5>
    <h5 class="card-title text-center">Urna '.$_POST['urna'].'</h5>
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato1'].'">
    <span>Candidato 2</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato2'].'">
    <span>Candidato 3</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato3'].'">
    <span>Candidato 4</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato4'].'">
    <span>Candidato 5</span><input class="form-control col-6" readonly type="text" placeholder="'.$_POST['candidato5'].'">';
   
   echo '
    </br>
    </br>
    <h5 class="card-title text-center">Total atual da votacao</h5>
    <span>Candidato 1</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[0].' - '.number_format(($vot_cand[0]*100)/$sum_tot,2).'% dos votos">
    <span>Candidato 2</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[1].' - '.number_format(($vot_cand[1]*100)/$sum_tot,2).'% dos votos">
    <span>Candidato 3</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[2].' - '.number_format(($vot_cand[2]*100)/$sum_tot,2).'% dos votos">
    <span>Candidato 4</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[3].' - '.number_format(($vot_cand[3]*100)/$sum_tot,2).'% dos votos">
    <span>Candidato 5</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[4].' - '.number_format(($vot_cand[4]*100)/$sum_tot,2).'% dos votos">
    <span>Brancos</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[5].' - '.number_format(($vot_cand[5]*100)/$sum_tot,2).'% dos votos">
    <span>Nulos 5</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[6].' - '.number_format(($vot_cand[6]*100)/$sum_tot,2).'% dos votos">';
   
   ?>
</div>
</div>
<div class="text-center">
    <button class="btn btn-danger col-2" type="button" onclick="finalizar()">Encerrar Votacao</button>
    <button class="btn btn-primary col-2" type="button" onclick="entrada()">Voltar a Entrada de Dados</button>
</div>

</div>
	<script>
	function entrada() {
  		location.replace("./entrada.php");
	}
	function finalizar() {
  		location.replace("./resultado.php");
	}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>