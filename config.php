<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "#";
try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};porta=3306;charset=utf8;",$usuario,$senha);
} catch (\Exception $e) {
    echo "<p>Erro ao tentar conectar</p>";
    echo $e->getMessage();
}