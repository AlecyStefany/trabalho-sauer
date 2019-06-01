<?php 
include ("conexaobanco.php");
include("funcoes.php");
  $login = $_POST["login"];

  $entrar = $_POST["entrar"];
  $pass = md5($_POST["pass"]);
   if (isset($entrar)) {
    $query_select = "SELECT login, pass FROM usuario WHERE login  = '$login' and pass ='$pass'";       
    $resultado=conecta($maquina,$usuario,$senha,$banco,$query_select);
      if (mysql_num_rows($resultado)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:financa.html");
      }
  }
  
  

 
?>