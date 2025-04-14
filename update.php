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



  
<div class="container-fluid pt-5 bg-primary" style="height:150px">
    <h1 class="text-center text-white">EDITAR ALUNO</h1>
   
</div>

<div class="container mt-4">
    <form method="POST" class="form-control">
        <div class="row">
            <input type="hidden" name="id" value="<?= $aluno['id'] ?>">
            <div class="col-xs-12 col-md-6 col-lg-9">
                <label for="nome" class="text-primary">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $aluno['nome'] ?>" required>
            </div>
            <div class="col-xs-12 col md-6 col-lg-3">
                <label for="idade" class="text-primary">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?= $aluno['idade'] ?>" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-xs-12 col-md-6">
                <label for="email" class="text-primary">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $aluno['email'] ?>" required>
            </div>
            <div class="col-xs-12 col-md-6">
                <label for="escola" class="text-primary">Escola:</label>
                <input type="text" class="form-control" id="escola" name="escola" value="<?= $aluno['escola'] ?>" required>
            </div>
        </div>
        <button class="btn btn-primary w-50 d-block mx-auto mt-3 mb-2" type="submit">Salvar</button>
    </form>
    <a href="index.php" class="btn btn-warning w-50 mx-auto d-block mt-3">Voltar</a>
</div>

<?php include 'footer.php'; ?>