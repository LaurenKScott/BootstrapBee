<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $email = $phone = $message = "";
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $phone = validate($_POST['phone']);
        $message =  validate($_POST['message']);
        is_phone($phone);
    }
    function validate($input) {
        $input = stripslashes($input);
        $input = trim($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    function is_phone($input) {
        if (strlen($input) == 10) {
            echo "YES";
        }
    }
?>