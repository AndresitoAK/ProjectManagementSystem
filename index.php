<?php
include("ajaxRequest.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage your tasks</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section id="tworz-zadanie" class="pop">
        Wybierz kolor zadania: <input type="color" name="task-color" id="task-color"> <br/>
        Nazwa zadania: <input type="text" name="task-name" id="task-name"> <br/>
        Godzina wykonania: <input type="text" name="task-time" id="task-time" min="5" max="5" placeholder="hh:mm"> <br/>
        Data wykonania: <input type="date" name="task-date" id="task-date"> <br/>
        Opis: <textarea name="task-description" id="task-description" cols="30" rows="10"></textarea> <br/>
        <input type="button" value="Dodaj zadanie" onclick="app.dodajZadanie()">
    </section>
    <section id="top-bar"></section>
    <section id="left-side-bar"></section>
    <section id="main-section">
        <div id="d1" class="divy">
            <button class="button-div" onclick="app.task(1)">Create a new task</button>
        </div>
        <div id="d2" class="divy">
            <button class="button-div" onclick="app.task(2)">Create a new task</button>
        </div>
        <div id="d3" class="divy">
            <button class="button-div" onclick="app.task(3)">Create a new task</button>
        </div>
    </section>
    <script src="functions.js"></script>
</body>
</html>