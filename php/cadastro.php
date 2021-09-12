<?php
$conn = mysqli_connect ('localhost','root','','db_cadastro_php_mysql');

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
    
    if($conn){
        $query = mysqli_query($conn, "insert into tbl_cadastro(`nome`, `apelido`, `data_nasc`,  `email`, `numero_telefone`, `senha`) values ('".$nome."', '".$apelido."', '".$data_nasc."', '".$email."', '".$numero_telefone."', '".$senha."')");
            if($query){
                echo "<br>";
                echo "Cadastro efectuado com sucesso";
            }
    }
}



?>