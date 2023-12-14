<?php
include('conn.php');
$taskId = $_POST['idTask'];
$stmt = $conn->prepare("DELETE FROM tasks WHERE id=:taskId");
$stmt->bindParam(':taskId', $taskId);
$stmt->execute();

?>