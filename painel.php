<?php
session_start();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>


<header style="width:100vw;height:80px;background-color:#FFEFD5">
        <nav>
            <h1 href="#home" class="logo" style="font-size:25px;margin-top:20px; float:left;">SISTEMA DE CADASTRO</h1>
            <ul class="nav-list">
                <li><a href="" style="padding-left:800px;font-size:18px;">INÍCIO</a></li>
                <li><a href="" style="padding-left:800px;font-size:18px;">CONTATOS</a></li>
                <li><a href="logout.php" style="padding-left:800px;font-size:18px;">LOG OUT</a></li>
            </ul>

        </nav>
    </header>


<h1>Olá, <?php echo $_SESSION['nome'];?></h1>