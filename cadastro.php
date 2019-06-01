<?php 
 include ("conexaobanco.php");
 include ("funcoes.php");
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$pass = MD5($_POST['pass']);
$email = $_POST['email'];


$query_select = "SELECT login FROM usuario WHERE login = '$login'";

$resultado=conecta($maquina,$usuario,$senha,$banco,$query_select);



$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query_select = "INSERT INTO usuario (cpf,nome,login,pass,email) VALUES ('$cpf','$nome','$login','$pass','$email')";
        $resultado=conecta($maquina,$usuario,$senha,$banco,$query_select);

         
        if($resultado){
          echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='index.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse usuario');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>