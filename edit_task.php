<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
    <link real = "stylesheet" href = "style.css">
</head>
<body>
   <h1> Editar Tarefa </h1>
   <from action = "update_task_name.php" methold = "POST">
    <input type = "hidden" name = "id" value="<?php echo $task['id'];?>">
    <input type = "text" name = "title" value ="<?php htmlspecialchars ($task['title']);?>" required>
    <button type = "submit"> Salvar alterações</button>
</from>
<br>
<a href = "index.php"> <- Voltar</a> 
</body>
</html>
   <?php
   include('db_connection.php');
   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = $conn -> query ($sql);
    if($result->num_rows == 1){
        $task = $result -> fetch_assoc();
    }else{
        echo "Tarefa não encontrada.";
        exit;
    }}else{
        echo "ID da Tarefa não informada";
        exit;
    }
   
   ?>