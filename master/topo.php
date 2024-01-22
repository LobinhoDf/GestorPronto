<?php
ob_start();
session_start();
if((!isset ($_SESSION['cod_id']) == true)) { unset($_SESSION['cod_id']); header('location: ../'); }

$cod_id = $_SESSION['cod_id'];

// DADOS GERAIS
$pegadadosgerais 	= $connect->query("SELECT * FROM carteira WHERE Id='$cod_id'");
$dadosgerais		= $pegadadosgerais->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Painel Administrativo.">
    <meta name="author" content="DELIVERY APP">
    <title>:: PAINEL ADMINISTRATIVO ::</title>
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
	<link href="../lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/slim.css">
  </head>
  <body>

    <div class="slim-header with-sidebar" style="background-image: linear-gradient(to right, #00EE00 0%, #008B00 100%);">
      <div class="container-fluid">
        <div class="slim-header-left">
 <a class="slim-logo" href="/.">
        <img src="img/logo.png" alt="Logo Financeiro">
      </a>
       <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          
         
          <div class="dropdown dropdown-c">
            <a href="./" class="logged-user" data-toggle="dropdown" style="color:#FFFFFF">
              <span><?php print $dadosgerais->nome;?></span>
              <i class="fa fa-angle-down"></i>
            </a>
           
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container-fluid -->
    </div><!-- slim-header -->