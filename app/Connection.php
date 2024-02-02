<?php

try{
$conn = new PDO('mysql:host=localhost;dbname=todolist','root','');
}catch(PDOException $e){
echo "Connection error:";
}


if(isset($_POST['addTask'])){

    $task = ($_POST['task']);
    $sql = 'INSERT INTO tasks (task) VALUE(?)';
    $statement = $conn -> prepare($sql);
    $statement -> execute([$task]);

}



$sql = "SELECT * FROM tasks";
$records = $conn -> query($sql);

?>