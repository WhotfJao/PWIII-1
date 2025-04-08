<?php
include 'includes/db.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$escola = $_POST['escola'];
 
$stmt = $pdo->prepare("UPDATE alunos SET nome = ?, idade = ?, email = ?, escola = ? WHERE id = ?");
$stmt->execute([$nome, $idade, $email, $escola, $id]);
 
header('Location: index.php');
exit;
}
 
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
$stmt->execute([$id]);
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php include 'header.php'; ?>



  
<div class="container-fluid pt-5 bg-info " style="height:200px">
       <h1 class="text-center text-white border-bottom border-white" >DevMenthors Unimar </h1>
       <h4 class="text-center text-white">Universidade de Marília - Marília - SP</h4> 
    </div>
    <div class="container">
<h1>Editar Aluno</h1>
<form method="POST" class="form-control">
    <div class="row">
<input type="hidden" name="id" value="<?= $aluno['id'] ?>">
<div class="col-xs-12 col-md-6 col-lg-9">
<label for="nome" class="text-info">Nome:</label>
<input type="text" class="form-control" id="nome" name="nome" value="<?= $aluno['nome'] ?>" required>
</div>
<div class="col-xs-12 col md-6 col-lg-3">
<label for="idade" class="text-info">Idade:</label>
<input type="number" class="form-control" id="idade" name="idade" value="<?= $aluno['idade'] ?>" required>
</div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-6">
<label for="email" class="text-info">Email:</label>
<input type="email" class="form-control" id="email" name="email" value="<?= $aluno['email'] ?>" required>
</div>
<div class="col-xs-12 col-md-6">
<label for="escola" class="text-info">Escola:</label>
<input type="text" class="form-control" id="escola" name="escola" value="<?= $aluno['escola'] ?>" required>
</div>
</div>
<button class="btn btn-outline-primary form-control mt-3 mb-2" type="submit">Salvar</button>
</form>
<a href="index.php" class="btn btn-warning" >Voltar</a>
</div>

<?php include 'footer.php'; ?>