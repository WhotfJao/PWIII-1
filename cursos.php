<?php include 'header.php'; ?>

<style>
    .categoria-card {
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .categoria-card:hover {
        transform: scale(1.03);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .categoria-card img {
        width: 100%;
        height: 300px; /* Altura fixa */
        object-fit: cover; /* Ajusta a imagem sem distorção */
    }

    .curso-card {
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .curso-card:hover {
        background-color: #f0f8ff;
    }

    .curso-list {
        display: none;
    }

    .alunos {
        display: none;
    }
</style>

<div class="container-fluid pt-5 bg-primary" style="height:150px">
    <h1 class="text-center text-white">Categorias de Cursos</h1>
   
</div>

<div class="container mt-5 text-center">
  

    <div class="row justify-content-center">
        <!-- Categoria Front-End -->
        <div class="col-md-4 mb-4">
            <div class="card categoria-card" onclick="mostrarCursos('front')">
                <img src="img/op-Ten-Front-End-Design-Rules-For-Developers_Luke-Social.png" class="card-img-top" alt="Front-End">
                <div class="card-body">
                    <h5 class="card-title">Front-End</h5>
                    <p class="card-text">Cursos de desenvolvimento de interfaces e design responsivo.</p>
                </div>
            </div>
        </div>

        <!-- Categoria Back-End -->
        <div class="col-md-4 mb-4">
            <div class="card categoria-card" onclick="mostrarCursos('back')">
                <img src="img/API-soluciones-seguras-para-controlar-el-acceso-de-tus-recursos.webp" class="card-img-top" alt="Back-End">
                <div class="card-body">
                    <h5 class="card-title">Back-End</h5>
                    <p class="card-text">Cursos de lógica de programação, PHP, banco de dados e APIs.</p>
                </div>
            </div>
        </div>

        <!-- Categoria Design -->
        <div class="col-md-4 mb-4">
            <div class="card categoria-card" onclick="mostrarCursos('design')">
                <img src="img/104228210.avif" class="card-img-top" alt="Design">
                <div class="card-body">
                    <h5 class="card-title">Design</h5>
                    <p class="card-text">Criação visual, prototipagem, UI/UX com Figma e outras ferramentas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cursos por categoria -->
<div class="container mt-5">
    <!-- Front-End -->
    <div id="cursos-front" class="curso-list">
        <h4 class="mb-4">Cursos de Front-End</h4>
        <div class="list-group mb-4">
            <div class="list-group-item curso-card" onclick="mostrarAlunos('html')">HTML & CSS</div>
            <div class="list-group-item curso-card" onclick="mostrarAlunos('js')">JavaScript Moderno</div>
        </div>
    </div>

    <!-- Back-End -->
    <div id="cursos-back" class="curso-list">
        <h4 class="mb-4">Cursos de Back-End</h4>
        <div class="list-group mb-4">
            <div class="list-group-item curso-card" onclick="mostrarAlunos('php')">PHP com MySQL</div>
            <div class="list-group-item curso-card" onclick="mostrarAlunos('api')">APIs com PHP</div>
        </div>
    </div>

    <!-- Design -->
    <div id="cursos-design" class="curso-list">
        <h4 class="mb-4">Cursos de Design</h4>
        <div class="list-group mb-4">
            <div class="list-group-item curso-card" onclick="mostrarAlunos('figma')">Figma para Iniciantes</div>
            <div class="list-group-item curso-card" onclick="mostrarAlunos('uiux')">UI/UX Design</div>
        </div>
    </div>

    <!-- Alunos -->
    <div id="alunos-html" class="alunos">
        <h5>Alunos em HTML & CSS</h5>
        <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Ana Souza
                <button class="btn btn-danger btn-sm">Remover</button>
            </li>
        </ul>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>

    <div id="alunos-js" class="alunos">
        <h5>Alunos em JavaScript Moderno</h5>
        <div class="alert alert-info">Nenhum aluno inscrito.</div>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>

    <div id="alunos-php" class="alunos">
        <h5>Alunos em PHP com MySQL</h5>
        <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                João Pedro
                <button class="btn btn-danger btn-sm">Remover</button>
            </li>
        </ul>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>

    <div id="alunos-api" class="alunos">
        <h5>Alunos em APIs com PHP</h5>
        <div class="alert alert-info">Nenhum aluno inscrito.</div>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>

    <div id="alunos-figma" class="alunos">
        <h5>Alunos em Figma para Iniciantes</h5>
        <div class="alert alert-info">Nenhum aluno inscrito.</div>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>

    <div id="alunos-uiux" class="alunos">
        <h5>Alunos em UI/UX Design</h5>
        <div class="alert alert-info">Nenhum aluno inscrito.</div>
        <button class="btn btn-success">Adicionar Aluno</button>
    </div>
</div>

<script>
function mostrarCursos(cat) {
    document.querySelectorAll('.curso-list').forEach(div => div.style.display = 'none');
    document.querySelectorAll('.alunos').forEach(div => div.style.display = 'none');
    document.getElementById('cursos-' + cat).style.display = 'block';
}

function mostrarAlunos(id) {
    document.querySelectorAll('.alunos').forEach(div => div.style.display = 'none');
    document.getElementById('alunos-' + id).style.display = 'block';
}
</script>

<?php include 'footer.php'; ?>
