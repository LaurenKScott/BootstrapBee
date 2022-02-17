<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="https://github.com/LaurenKScott, Busy Bee Preschool">
    <meta name="description" content="Contact information page for Busy Bee Child Care and Preschool.
    Busy Bee is an independently owned and operated child care center, providing the best quality
    education on the South Shore since 1989">
    <meta name="robots" content="index, follow">
    <title>Contact Us - Busy Bee Child Care & Preschool</title>
    <link rel="icon" href="/assets/beeicontransparent.png">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php 
session_start();
$password = 'infants2022';
if (isset($_POST['password']) && ($_POST['password'] == $password)) {
    echo "<h2 style='color:green;'>Success!</h2>";
}else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h2 style='color:red;'>Failure</h2>";
    }
}
?>

    <body>
        <form title='login' method='POST' action='' autocomplete='off'>
            <div style='display:inline-block;'>
                <label for='password'>Password</label>
                <input type='text' name='password' id='password' required aria-required='true'> 
            </div>
            <button type="submit" name='submit'>Submit</button>
        </form>
    </body>
</html>