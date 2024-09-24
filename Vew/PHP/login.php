<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userName = $_POST['userName'];
        $password = $_POST['password'];
    
        echo "Nombre: " . $userName . "<br>";
        echo "password: " . $userName;
    }