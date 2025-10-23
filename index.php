<?php include('db_connection.php'); ?>
<!DOCTYPE html>
 <html lang = "pt-br">
    <head>
        <meta charset = "UTF-8">
        <title>To Do list</title>
        <link rel ="stylesheet" href ="style.css">
</head>
<body> 
    <h1>Minha To do list</h1>
    <form action = "add_task.php" metholder = "POST">
        <input type = "text" name = "title" placeholder = "Nova Tarefa..." required>
        <button type = "submit">Adicionar</button>
</fom>
 
<hr>

<ul>
    <?php
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $result = $conn -> query($sql);

    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo $row['status'] == 'concluída' ? "<s> {$row['title']}</s>" : $row['title'];
        echo "
          <a hret= 'update_task.php?id={$row['id']}'>V</a>
                    <a hret= 'update_task.php?id={$row['id']}'>L</a>";
                    echo "</li>";
                    
      }
    
    } else {
        echo "<p>Nenhuma tarefa cadastrada.</p>";
    }
        ?>
    </ul>
</body>
</html>