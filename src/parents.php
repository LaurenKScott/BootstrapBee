<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="https://github.com/LaurenKScott, Busy Bee Preschool">
    <meta name="description" content="Parent Resources page for Busy Bee Child Care and Preschool.
    Busy Bee is an independently owned and operated child care center, providing the best quality
    education on the South Shore since 1989">
    <meta name="robots" content="index, follow">
    <title>Parents - Busy Bee Child Care & Preschool</title>
    <link rel="icon" href="/assets/beeicontransparent.png">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<?php 
$try_pass = "";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// PLACEHOLDER. NEED TO ADD HASHING FUNCTION FOR LATER
$infpassword = 'infants2022';
$prepassword = 'preschool2022';
if (isset($_POST['password'])) {
    $try_pass = validate($_POST['password']);
    if ($try_pass == $infpassword) {
        header('Location: /src/inftod.html');
    }
    elseif ($try_pass == $prepassword) {
        header('Location: /src/prek.html');
    }
    else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<h3 style='color:red;'>Incorrect password</h3>";
        }
    }
}
?>
<body>  
    <a class="sr-only sr-only-focusable visually-hidden" aria-label="skip navigation" href="#main">
            Skip to main content</a>
    <!-- HEADER: LOGO, NAV -->
    <header class="container-fluid">
        <!-- NAVIGATION BAR WITH STICKY POSITION-->
        <nav role="navigation" class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="/assets/busybeelogo.png" alt="Busy Bee Logo" 
                    id="header-logo">
                </a>
                <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapsible-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" 
                id="collapsible-navbar">
                    <ul class="navbar-nav" role="navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="programs.html">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parents.php">Parent Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
            </div>
            </div>
        </nav>
    <!-- END HEADER -->
    </header>
    <main class="container-fluid">
        <!--  LOGIN FORM FOR PARENTS -->
        <div class="row">
            <div class="col rounded p-2" id="page-title">
                <h1 class="text-center">Parent Resources</h1>
            </div>
        </div>
        <div class="row">
            <div class ="col" id="portal">
                <h2>Class Portal Login</h2>
                <p id="portal-instr">Type your class password here to access our monthly newsletter</p> 
                <form title='login' method='POST' action='' autocomplete='off'>
                <div style='display:inline-block;'>
                    <label for='password'>Password</label>
                    <input type='text' name='password' id='password' required aria-required='true'> 
                </div>
                <button class='btn btn-light border-dark' type="submit" name='submit'>Submit</button>
                </form>
            </div>
        </div>

        
        <!-- END PORTAL LOGIN -->
        <div class="row">
            <div class="col" style="background-color:#1aecff;">
                <h3>Forms</h3>
            </div>
            <div class="col" style="background-color:#ffcc33;">
                <h3>Resources</h3>
            </div>
        </div>
       
    </main>
    <footer class="d-flex justify-content-around">
        <div class="row">
            
            <ul class="btn-group mx-auto align-right" id="socials" role="group" aria-label="social media links">
            <a class="btn" role="button"
            href="https://www.facebook.com/BusyBeeChildCareMA" target="_blank" aria-label="facebook">
                <i id="fb" class="bi-facebook"></i>
            </a>
            <a class="btn" role="button"
            href="https://www.instagram.com/busybeechildcare/" target="_blank" aria-label="instagram">
                <i id="ig" class="bi-instagram"></i>
            </a>
            <a class="btn" role="button"
                href="https://www.youtube.com/channel/UCul5ckAkAQzN1M9RKyiaPMA" target="_blank" aria-label="youtube">
                    <i id="yt" class="bi-youtube"></i>
            </a>
            <a class="btn" role="button"
                href="https://twitter.com/busybee_pre" target="_blank" aria-label="twitter">
                    <i id="tw" class="bi-twitter"></i>
            </a>       
            </ul>
            </div>
        </div>
    </footer>
    <p class="text-muted text-center">Copyright Busy Bee Preschool 2022</p>
    </body>
</html>