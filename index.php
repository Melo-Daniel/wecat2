<?php
session_start();

require_once 'lib/Usuario.php';

if(isset($_POST['login'])){
  $usr = new Usuario();
  $u = $usr->login($_POST['email'],$_POST['senha']);
  if($u->usr_id > 0){
    $_SESSION['usr'] = $u->usr_id;
    header('Location:principal.php');
  }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WeCat | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h3 class="logo-name">W+</h3>

            </div>
            <h3>Bem Vindo ao WeCat</h3>
            <p>Compartilhe com todos os seus produtos e serviços de um jeito muito simples!
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Entre e veja como é!</p>
            <form class="m-t" role="form" action="index.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Usuário" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required="">
                </div>
                <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Esqueceu a senha?</small></a>
                <p class="text-muted text-center"><small>Não tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Crie uma conta</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
