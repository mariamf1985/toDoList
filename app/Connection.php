<?php

try{
$conn = new PDO('mysql:host=localhost;dbname=todolist','root','');
}catch(PDOException $e){
echo "Connection error:";
}

if(isset($_POST['id_task'])){

$id_task = $_POST['id_task'];
$completed = (isset($_POST['completed']))?1:0;

$sql = "UPDATE tasks SET completed=? WHERE id_task=?";
$statement = $conn -> prepare($sql);
$statement -> execute([$completed,$id_task]);

}

if(isset($_POST['addTask'])){

    $task = ($_POST['task']);
    $sql = 'INSERT INTO tasks (task) VALUE(?)';
    $statement = $conn -> prepare($sql);
    $statement -> execute([$task]);

}

if(isset($_GET['id_task'])){

$id_task = $_GET['id_task'];
$sql = "DELETE FROM tasks WHERE id_task=?";
$statement = $conn -> prepare($sql);
$statement -> execute([$id_task]);

}


$sql = "SELECT * FROM tasks";
$records = $conn -> query($sql);

?>