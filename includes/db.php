<?php
$host = 'localhost';
$dbname = 'crud_alunos';
$user = 'root';
$password = '';
 
try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
 