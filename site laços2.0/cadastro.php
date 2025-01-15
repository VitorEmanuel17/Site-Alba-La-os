<?php

if(isset($_POST['submit'])){
include_once('config.php');
include("config.php");

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$numero = $_POST['numero'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($conn, "INSERT INTO usuarios(nome,nascimento,numero,cpf,email,senha) 
VALUES ('$nome','$nascimento','$numero','$cpf','$email','$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <title>Alba Laços</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel='stylesheet' type='text/css' media='screen' href='albalacos.css'>
  <link rel='icon' type='imagem/png' href="img/icone.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://kit.fontawesome.com/e1c267860f.js" crossorigin="anonymous"></script>
  <script src='main.js'></script>
</head>

<body style="background-color: #EEB7D0;">

  <img src="img/Logo.jpg"
    style="border-radius: 500px; margin-top: 30px; margin-left: 530px; width: 300px; height: 300px;">
  <center>
    <h3 style="color: aliceblue;  margin-top: 20PX; font-style:italic;">CADASTRO</h3>
  </center>
  <form action="cadastro.php" class="row g-3" method="post" style="display: grid; margin: auto;">
    <div class="col-md-6">
      <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome Completo:" style="margin-left: 370px;">
    </div>
    <div class="col-md-6">
      <input type="date" name="nascimento" class="form-control" id="inputPassword4" placeholder="Data de Nascimento:" style="margin-left: 370px;">
    </div>
    <div class="col-6">
      <input type="number" name="numero" class="form-control" id="inputAddress" placeholder="Celular:" style="margin-left: 370px;">
    </div>
    <div class="col-6">
      <input type="number" name="cpf" class="form-control" id="inputAddress2" placeholder="CPF:" style="margin-left: 370px;">
    </div>
    <div class="col-md-6">
      <input type="email" name="email" class="form-control" id="inputCity" placeholder="Email:" style="margin-left: 370px;">
    </div>
    <div class="col-md-6">
      <input type="password" name="senha" class="form-control" id="inputCity" placeholder="Senha:" style="margin-left: 370px;">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" style="margin-left: 370px;">
        <label class="form-check-label" for="gridCheck">
          Concordo com os Termos.
        </label>
      </div>
    </div>
    <input
        type="submit" name="submit" id="submit"
        style=" color: aliceblue; background-color: #DC5299; text-align: center; margin: auto; margin-top: 20px; width: 500px; border-radius: 20px; margin-left: 422px;">
  </form>
  </div>
  <div style="background-color: #DC5299; text-align: center; margin: auto; margin-top: 20px; width: 500px; border-radius: 20px;">
    <a style="color: aliceblue;"
      href="file:///C:/Users/vitor/Downloads/site%20la%C3%A7os-20241130T132807Z-001/site%20la%C3%A7os/site%20la%C3%A7os2.0/albalacos.html?#">
      <h3>Voltar ao inicio</h3>
    </a>
  </div>


  <div
    style="background-color:#DC5299; color: aliceblue; font-size: 15px; text-align: center; padding: 50px; margin-top: 80px;">
    Desenvolvedores: Alice Ruhama, Ana Beatriz Santana, Júlio César Freitas, Vítor Emanuel da Silva Carvalho
    <p>Contato: lalalala@gmail.com</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>