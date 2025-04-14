<?php include 'header.php'; ?>
    
    <div class="container-fluid pt-5 bg-primary" style="height:200px">
       <h1 class="text-center text-white">DevMenthors Unimar</h1>
       <h4 class="text-center text-white">Universidade de Marília - Marília - SP</h4> 
    </div>


<div class="container mt-5">
    <h2 class="mb-4">Painel de Cursos</h2>

    <div class="row">
        <!-- Curso 1 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">PHP Básico</h5>
                    <p class="card-text">Fundamentos da linguagem PHP para iniciantes.</p>
                    <a href="cursos.php?id=1" class="btn btn-primary">Gerenciar Curso</a>
                </div>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">MySQL Essencial</h5>
                    <p class="card-text">Aprenda a criar bancos de dados e realizar consultas SQL.</p>
                    <a href="cursos.php?id=2" class="btn btn-primary">Gerenciar Curso</a>
                </div>
            </div>
        </div>

        <!-- Curso 3 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">HTML e CSS</h5>
                    <p class="card-text">Construa páginas modernas com HTML5 e CSS3.</p>
                    <a href="cursos.php?id=3" class="btn btn-primary">Gerenciar Curso</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include 'footer.php'; ?>