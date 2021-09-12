<?php
    //Conexao com a base de dados
    $conn = mysqli_connect ('localhost','root','','db_cadastro_php_mysql');

    //Verificando a conexao
    if ($conn) {
        echo "Conectado a Base de dados";
    } else {
        echo "Erro na conexao";
    }

    //Criando as variaveis que irao receber dados dos formularios
    if(isset($_POST['btn_enviar'])){
        $nome = $_POST['nome_proprio'];
        $apelido = $_POST['apelido'];
        $data_nasc = $_POST['datanasc'];
        $email = $_POST['email'];
        $numero_telefone = $_POST['numero_telefone'];
        $senha = $_POST['senha'];
        
        //Se houver uma conexao com a base de dados, chama a 'query' de cadastro
        if($conn){
            $query = mysqli_query($conn, "insert into tbl_cadastro(`nome`, `apelido`, `data_nasc`,  `email`, `numero_telefone`, `senha`) values ('".$nome."', '".$apelido."', '".$data_nasc."', '".$email."', '".$numero_telefone."', '".$senha."')");
                //Se a 'query'de cadastro foi chamada, dara um  relatorio positivo referente ao cadastro efectuado
                if($query){
                    echo "<br>";
                    echo "Cadastro efectuado com sucesso";
                }
        }
    }



?>