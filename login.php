<?php 
include ("conexaobanco.php");
include("funcoes.php");
  session_start();
  $login = $_POST["login"];

  $entrar = $_POST["entrar"];
  $pass = md5($_POST["pass"]);
   if (isset($entrar)) {
    $con = mysql_connect("127.0.0.1", "root", "root") or die
 ("Sem conexão com o servidor");


$query_select = "SELECT login, pass FROM usuario WHERE login  = '$login' and pass ='$pass'";       
$resultado=conecta($maquina,$usuario,$senha,$banco,$query_select);
  if (mysql_num_rows($resultado)<=0){
     unset ($_SESSION['login']);
  unset ($_SESSION['pass']);
  echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();}
  else{
{
$_SESSION['login'] = $login;
$_SESSION['pass'] = $pass;
header('location:financa.html');
}

 
 
?>