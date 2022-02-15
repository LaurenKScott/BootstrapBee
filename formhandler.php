<?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name= $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];  
            $message =  $_POST['message'];
            if (isset($_POST['submit'])) {
                // Check if name has been entered
                if(empty($_POST['name'])) {
                    $errName= 'Please enter your name';
                }
                // Check if email has been entered and is valid
                if(empty($_POST['email'])) {
                    $errEmail = 'Please enter a valid email address';
                }
                // Check if a phone number has been entered and if it is valid
                if(empty($_POST['phone']) or (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone))) {
                    $errPhone = 'Please enter a valid phone number';
                }
                // Check if a message has been entered
                if (empty($_POST['message'])) {
                    $errMessage = 'Please leave a message';
                }
                else {
                    echo "Thank you! Your form has been submitted";
                }
            }
        }
?>
