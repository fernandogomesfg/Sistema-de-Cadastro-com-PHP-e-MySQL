<?php
$conn = mysqli_connect ('localhost','root','','db_login');

if ($conn) {
    echo "Conectado a Base de dados";
} else {
    echo "Erro na conexao";
}




?>