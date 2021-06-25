<?php 
	include("Votos.php");
    //inicia a seção para poder usar variaveis
   
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <title>Conselho Tutelar</title>
  </head>
  <body>
    <h1 class="text-center">Conselho Tutelar</h1>
    <h5 class="text-center">Informe os dados para contagem</h5>
    <h5 class="text-center">Todos os campos sao preenchimento obrigatorio</h5>
    <form name="form" id="form" action="contagem.php" method="POST">
      <div class="row">
        <div class="col-6">
          <h3 class="text-center mb-4">Identificacao da urna</h3>
          <div class="row m-2">
            <span class="col-1">Zona</span>
            <div class="col-10">
              <select class="form-control col-12" name="zona">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div class="row m-2">
            <span class="col-1">secao</span>

            <div class="col-10">
              <select class="form-control col-12" name="secao">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div class="row m-2">
            <span class="col-1">Urna</span>
            <div class="col-10">
              <select class="form-control col-12" name="urna">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-6">
          <h3 class="text-center mb-4">Quantidade de votos</h3>
          <div class="row m-2">
            <span class="col-2">Candidato 1</span>
            <div class="col-10">
              <input
                type="number"
                min="0"
                class="form-control"
                name="candidato1"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Candidato 2</span>
            <div class="col-10">
              <input
                type="number"
                min="0"
                class="form-control"
                name="candidato2"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Candidato 3</span>
            <div class="col-10">
              <input
                type="number"
                min="0"
                class="form-control"
                name="candidato3"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Candidato 4</span>
            <div class="col-10">
              <input
                type="number"
                min="0"
                class="form-control"
                name="candidato4"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Candidato 5</span>
            <div class="col-10">
              <input
                type="number"
                min="0"
                class="form-control"
                name="candidato5"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Brancos</span>
            <div class="col-10">
              <input
                min="0"
                type="number"
                class="form-control"
                name="brancos"
                required
              />
            </div>
          </div>
          <div class="row m-2">
            <span class="col-2">Nulos</span>
            <div class="col-10">
              <input
                min="0"
                type="number"
                class="form-control"
                name="nulos"
                required
              />
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button class="btn-primary p-2" type="submit">Enviar</button>
      </div>
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
