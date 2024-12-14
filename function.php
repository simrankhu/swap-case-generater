<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['lower'])) {
        $input = $_POST['user_input'];
        $lower = strtolower($input);
        echo $lower; // Return the lowercase version
    }
    if (isset($_POST['upper'])) {
        $input = $_POST['user_input'];
        $upper = strtoupper($input);
        echo $upper; // Return the uppercase version
    }
}
?>