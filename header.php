<?php 
$titulo = "DevMentors Unimar";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
<a class="navbar-brand" href="#">Navbar</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="lista.php">Lista de Alunos</a>
        </li>
            <a class="nav-link" href="create.php">Cadastrar Aluno</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="update.php">Atualizar</a>
        </li>
</ul>
</div>
</nav>