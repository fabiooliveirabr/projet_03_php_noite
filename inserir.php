<?php
// inserir.php
include "conexao.php";

$nome = $_POST['primeiro_nome'];
$email = $_POST['email_digitado'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_inscritos
        (nome_inscrito, email_inscrito) VALUES
        ('$nome', '$email')";

// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $inserir->execute();
    header("Location: agradecimento.html");
}catch(PDOException $erro){
    echo "Falha ao inserir".$erro->getMessage();
}

?>