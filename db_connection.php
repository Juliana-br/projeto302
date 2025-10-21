<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db_302";
$conn = new mysqli ($servername,$username, $password, $dbname);
if($conn->connect_error){
    die("Erro na conexao:".$conn->connect_error);
}
?>