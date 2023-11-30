<?php

include('conn.php');
$userId = $_COOKIE['userId'];
$stmt = $conn->prepare("SELECT * FROM tasks WHERE id_user = :userId");
$stmt->bindParam(':userId', $userId);
$stmt->execute();

$titles = [];
$dates = [];
$times = [];
$descriptions = [];
$div = [];
$color = [];
$id_tasks = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($titles, $row['title']);
    array_push($dates, $row['date']);
    array_push($times, $row['time']);
    array_push($descriptions, $row['description']);
    array_push($div, $row['d']);
    array_push($color, $row['color']);
    array_push($id_tasks, $row['id_task']);
}
function tworzZadanie(){
    
}
function load_tasks($d, $titles=$titles,$dates=$dates,$descriptions=$descriptions,$times=$times,$div=$div,$color=$color,$id_tasks=$id_tasks){
    $tablica = [];
    if($d == 1){
        for($i = 0; $i < count($div); $i++){
            if($div[$i]!=1){
                unset($div[$i]);
            }else{
                array_push($tablica,$i);
            }
        }
    }
    if($d == 2){
        for($i = 0; $i < count($div); $i++){
            if($div[$i]!=1){
                unset($div[$i]);
            }else{
                array_push($tablica,$i);
            }
        }
    }
    if($d == 3){
        for($i = 0; $i < count($div); $i++){
            if($div[$i]!=1){
                unset($div[$i]);
            }else{
                array_push($tablica,$i);
            }
        }
    }
}


?>
