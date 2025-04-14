<?php
    include 'includes/db.php';
        $stmt = $pdo->query("SELECT * FROM alunos");
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<?php include 'header.php';
?>

<div class="container-fluid pt-5 bg-primary" style="height:200px">
    <h1 class="text-center text-light">LISTA DE ALUNOS</h1>
    <a class="btn btn-success" href="create.php">Adicionar Aluno +</a>
</div>

<div class="container table-responsive mt-4">
    <table class="table table-bordered border-info table-striped table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Escola</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?= ($aluno['nome']) ?></td>
                    <td><?= ($aluno['idade']) ?></td>
                    <td><?= ($aluno['email']) ?></td>
                    <td><?= ($aluno['escola']) ?></td>
                    <td>
                        <a href="update.php?id=<?= ($aluno['id']) ?>">Editar</a> | 
                        <a href="delete.php?id=<?= ($aluno['id']) ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include 'footer.php'; ?>

