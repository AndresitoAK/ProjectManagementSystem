
<?php
$titles = [];
$dates = [];
$times = [];
$descriptions = [];
$div = [];
$color = [];
$id_tasks = [];
$i = 0;

function load_data($d, $i) {
    include('conn.php');
    
    
    $userId = $_COOKIE['userId'];
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id_user = :userId AND d= :d");
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':d', $d);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $i++;
      

        $domObj = new DOMDocument('1.0', 'UTF-8');
        $divContainer = $domObj->createElement('div');
        $divContainer->setAttribute('class', 'task');
        $divContainer->setAttribute('id', "divTask$i");
        $divTaskName = $domObj->createElement('div', $row['title']);
        $divTaskName->setAttribute('class', 'task-name');
        $divTaskDateTime = $domObj->createElement('div', $row['date'] . ' ' . $row['time']);
        $divTaskDateTime->setAttribute('class', 'task-date-time');
        $divTaskDesc = $domObj->createElement('div', $row['description']);
        $divTaskDesc->setAttribute('class', 'task-description');
        $divTaskColor = $domObj->createElement('div');
        $divTaskColor->setAttribute('class', 'task-color');
        $divTaskDelBtn = $domObj->createElement('button', 'delete');
        $divTaskDelBtn->setAttribute('class', 'delete-task-btn');
        $divTaskDelBtn->setAttribute('id', "deleteTaskBtn$i");
        

        $divTaskColor->setAttribute('style', 'background-color:' . $row['color']);
        $divTaskColor->appendChild($divTaskDelBtn);
        $divContainer->appendChild($divTaskColor);
        $divContainer->appendChild($divTaskName);
        $divContainer->appendChild($divTaskDateTime);
        $divContainer->appendChild($divTaskDesc);

        $domObj->appendChild($divContainer);
        echo $domObj->saveHTML();
    }
   

    
    return $i; 
}

function load_tasks($d) {
    global $i; 
    $i = load_data($d, $i);
}


?>
