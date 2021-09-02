<?php
$conn = mysqli_connect ('localhost','root','','db_login');

if ($conn) {
    echo "Conectado a Base de dados";
} else {
    echo "Erro na conexao";
}

if(isset($_POST['btn_enviar'])){
    $nome = $_POST['nome_proprio'];
    $apelido = $_POST['apelido'];
    $data_nasc = $_POST['datanasc'];
    $email = $_POST['email'];
    $numero_telefone = $_POST['numero_telefone'];
    $senha = $_POST['senha'];
    
}



?>