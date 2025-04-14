<?php
include 'includes/db.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$escola = $_POST['escola'];
 
$stmt = $pdo->prepare("INSERT INTO alunos (nome, idade, email, escola) VALUES (?, ?, ?, ?)");
$stmt->execute([$nome, $idade, $email, $escola]);
 
header('Location: index.php');
exit;
}
?>
 
<?php include 'header.php'; ?>

    <div class="container-fluid pt-5 bg-primary" style="height:150px">
       <h1 class="text-center text-white" > ADICIONAR ALUNO</h1>
    </div>

    <div class="container pt-4 pb-4">
</div>
<div class="container bg-primary p-2 rounded ">
<form method="POST" class="form-control">
    <div class="row">
        <div class="col-md-9 col-sm-6 col-xs-12">
<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" required class="form-control">
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<label for="idade">Idade:</label>
<input type="number" id="idade" name="idade" required class="form-control">
</div>
</div>
<div class="row">
    <div class="col-xs-12">
<label for="email">Email:</label>
<input type="email" id="email" name="email"  required class="form-control">
</div>
<div class="col-xs-12">
<label for="escola">Escola:</label>
<input type="text" id="escola" name="escola" required class="form-control">
</div>
</div>
<div class="row">
    <div class="col-xs-12">
<button class="btn btn-primary text-white w-50 d-block mx-auto mt-4" type="submit">Salvar</button>
</div>
</div>
</form>
</div>
<div class="container p-4">
    <div class="col-xs-4 col-offset-xs-4">
<a class="btn btn-warning form-control w-50 mx-auto d-block" href="index.php">Voltar</a>
</div>
</div>

<?php include 'footer.php'; ?>