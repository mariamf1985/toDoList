<?php

try{
$conn = new PDO('mysql:host=localhost;dbname=todolist','root','');
echo "Connection established...";
}catch(PDOException $e){
echo "Connection error:".$e->getMessage();
}

?>