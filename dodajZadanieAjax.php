<?php
include('conn.php');
$taskId = $_POST['taskId'];
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskColor = $_POST['taskColor'];
$taskDate = $_POST['taskDate'];
$taskTime = $_POST['taskTime'];

$query = "INSERT INTO tasks (`id`, `id_task`,`id_user`, `title`, `date`, `time`, `description`, `d`)  VALUES('',$taskId,'','$taskName','$taskDate','$taskTime','$taskDescription','1')";
$conn->query($query);
?>