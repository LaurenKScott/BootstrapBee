<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $phone = validate($phone);
        $message = clean($_POST['message']);
        if (is_null($phone)){
            echo 'Invalid phone number.';
        if (is_null($message)) {
            echo 'Please enter a message';
        }
        }else{
            $mail_to = 'prancerrulz3794@gmail.com';
            $subject_line = 'Mail from Website User';
            $body = 
            "You have received a message from busybeepreschool.org"."\r\n".
            "From: ".$name."\r\n".
            "Email: ".$email."\r\n". 
            "Phone: ".$phone."\r\n". 
            "Message: ".$message;
            if (mail($mail_to, $subject_line, $body)){
                echo "Thank you! Your response has been submitted.";
            } 
        }
    }
    function clean($data) {
        $data = trim($data);
        return $data;
    }
    function validate($data) {
        $data = preg_replace('/[\s()-]/m', '', $data);
        if ((strlen($data) == 11) && ($data[0] == '1')){
            $data = substr($data, 1);
        }
        if (!preg_match("/^[0-9]{10}$/", $data)) {
            return null;
        }else {
            return $data;
        }
    }
?>