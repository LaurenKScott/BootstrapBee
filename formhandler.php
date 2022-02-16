<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name, $email, $phone, $message = "";
        $name= validate($_POST['name']);
        $email = validate($_POST['email']);
        if is_phone(validate($_POST['phone'])){
            $phone = validate($_POST['phone']);  
        }
        $message =  validate($_POST['message']);
    }
    function validate($input) {
        $input = stripslashes($input);
        $input = trim($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    function is_phone($input) {
       $pattern = '/[0-9]{10}/s'
       if (preg_match($pattern, $input) and (strlen($input)==10)){
           return TRUE;
       }
       return FALSE;
    }
