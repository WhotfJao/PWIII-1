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
    <link rel="icon" type="image/png" href="img/dev-logo.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
    <a class="navbar-brand ms-3" href="index.php">
        <img src="img/dev-logo.png" alt="Inicio" style="height: 50px;">
    </a>
    <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-white dropdown-menu-end">
            <li class="nav-item">
                <a class="nav-link text-white" href="cursos.php">Cursos</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link text-white" href="list.php">Lista de Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="create.php">Cadastrar Aluno</a>
            </li>
        </ul>
    </div>
</div>
</nav>
<style>
    @media (max-width: 70%) {
        .navbar-collapse {
            display: none;
        }
        .navbar-toggler[aria-expanded="true"] + .navbar-collapse {
            display: block;
        }
        .navbar-nav {
            text-align: right;
        }
    }
    .navbar-nav .nav-link {
        color: white !important;
    }
</style>