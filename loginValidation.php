<?php
session_start();
if (!isset($_POST['loginLogin']) || !isset($_POST['passwordLogin'])){
    $_SESSION['errorLogin'] = 'Please enter all required fields';
    header('Location: log.php');
    exit();
}

function loginValidate($login, $password) {
    if (!preg_replace('/[^a-zA-Z0-9]/', '', $login)) {
        $_SESSION['loginErrorsLogin'] = 'Wrong login';
        header('Location: log.php');
        exit();
    }

    if (!preg_replace('/[^a-zA-Z1-9!@#$%^&*?+-]/', '', $password)) {
        $_SESSION['passwordErrorsLogin'] = "Wrong password";
        header('Location: log.php');
        exit();
    }

    include('conn.php');

    $stmt = $conn->prepare('SELECT id FROM users WHERE username=:username AND password=:password');
    $stmt->bindValue(':username', $login);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    
    $rowCount = $stmt->rowCount();
    if ($rowCount == 0) {
        $_SESSION['errorLogin'] = 'Login or password is incorrect';
        header('Location: log.php');
        exit();
    } else {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
        }
        
        // Ustawianie ciasteczka
        setcookie('userId', $id, time() + (86400), "/"); // Przykładowy czas ważności: 1 dni
        header('Location: index.php');
        exit();
    }
}

// Wywołanie funkcji loginValidate
loginValidate($_POST['loginLogin'], $_POST['passwordLogin']);
?>
