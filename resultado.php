<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   
    <title>Conselho Tutelar</title>
</head>
<body>
    <h1 class="title text-center">Resultado Final</h1>
	<div class="card col-lg-6 col-sm-12 m-auto mt-5">
    <div class="card-body">
    <h5 class="card-title text-center">Resultado Final</h5>
   <?php
	require_once "settings.php";
    $db = new Database();
    $vot_cand = array( array("Votos"=> $db->Total_Cand(1),"Nome"=>"Candidato 1"), array( "Votos"=>$db->Total_Cand(2),"Nome"=>"Candidato 2"), array("Votos"=> $db->Total_Cand(3),"Nome"=>"Candidato 3"), array( "Votos"=>$db->Total_Cand(4),"Nome"=>"Candidato 4"),array('Votos'=>  $db->Total_Cand(5),"Nome"=>"Candidato 5"),array( "Votos"=>$db->Tot_bran(),"Nome"=>"Branco"),array( "Votos"=> $db->Tot_null(),"Nome"=>"nulo"));
    $sum_tot=0;
	foreach($vot_cand as $item) {
		$sum_tot += $item['Votos'];
	}
	unset($vot_cand[6]);
	unset($vot_cand[5]);
	rsort($vot_cand);
	foreach($vot_cand as $item) {
		echo $item['Votos'] .'--'.$item['Nome'].'</br>';
		
	}
	
	
   echo '
    <span>Vencedor</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[0]['Nome'].' - '.$vot_cand[0]['Votos'].' Votos - '.number_format(($vot_cand[0]['Votos']*100)/$sum_tot,2).'%">
    <span>Vice</span><input class="form-control col-6" readonly type="text" placeholder="'.$vot_cand[1]['Nome'].' - '.$vot_cand[1]['Votos'].' Votos - '.number_format(($vot_cand[1]['Votos']*100)/$sum_tot,2).'%">
	';
?>
</div>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>