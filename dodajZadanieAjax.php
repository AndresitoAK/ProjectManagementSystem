<?php

include('conn.php');
$taskId = $_POST['taskId'];
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];
$taskColor = $_POST['taskColor'];
$taskDate = $_POST['taskDate'];
$taskTime = $_POST['taskTime'];
$taskDiv = $_POST['taskDiv'];

$query = "INSERT INTO tasks (`id`, `id_task`,`id_user`, `title`, `date`, `time`, `description`, `d`, `color`)  VALUES('',$taskId,{$_COOKIE['userId']},'$taskName','$taskDate','$taskTime','$taskDescription','$taskDiv', '$taskColor')";
$conn->query($query);
?>