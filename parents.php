<?php 
session_start();
$_SESSION['err'] = '';
$try_pass = "";

function cleanup($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// PLACEHOLDER. NEED TO ADD HASHING FUNCTION FOR LATER
function validate($try_pass) {
    $infpassword = 'infants2022';
    $prepassword = 'preschool2022';
    $adminpassword = 'busybee2022!';
    $errormsg = '';
    if ($try_pass == $adminpassword) {
        $_SESSION['password'] = $try_pass;
        header('Location: upload.php');
    }
    elseif ($try_pass == $infpassword) {
        $_SESSION['password'] = $try_pass;
        header('Location: inftod.php');
    }
    elseif ($try_pass == $prepassword) {
        $_SESSION['password'] = $try_pass;
        header('Location: prek.php');
    }
    else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errormsg = "Incorrect password";
        }
    }
    return $errormsg;
}

if (isset($_POST['submit'])) {
    
    if (isset($_POST['password'])) {
        $try_pass = cleanup($_POST['password']);
        validate($try_pass);
    }
}
?>
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
    <link rel="icon" href="/assets/beeicon.jpg">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>  
    <a class="sr-only sr-only-focusable visually-hidden" aria-label="skip navigation" href="#main">
            Skip to main content</a>
    <!-- HEADER: LOGO, NAV -->
    <header class="container-fluid">
        <!-- NAVIGATION BAR WITH STICKY POSITION-->
        <nav role="navigation" class="navbar navbar-expand-sm navbar-light">
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
            <div class="p-2" id="page-title">
                <h1 class="text-center display-3">Parent Resources</h1>
            </div>
        </div>
        <div class="row">
            <div class ="col-sm-3" id="portal">
                <h2>Class Portal</h2>
                <p class="p-0 mt-0">If you are a Busy Bee parent, use this portal access information from your child's class</p>
                <form class="mx-auto" title='login' method='POST'
                 action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' autocomplete='off'>
                <div class="form-floating">
                    <input class="form-control" type='password' name='password' id='password' required aria-required='true'> 
                    <label class="form-label" for='password'>Password</label>
                </div>
                <button class='btn btn-light border-dark' type="submit" name='submit'>Submit</button>
                </form>
                
            </div>
            <div class="col-sm-9"></div>
        </div>

        
        <!-- END PORTAL LOGIN -->
        <div class="row">
            <div class="col d-flex justify-content-start">
            <ul class="list-unstyled">
                    <h3>Resources</h3>
                    <li><a class="form-links" href="#">Good Manners</a></li>
                    <li><a class="form-links" href="#">Play</a></li>
                    <li><a class="form-links" href="#">Language</a></li>
                    <li><a class="form-links" href="#">Self Control</a></li>
                    <li><a class="form-links" href="#">Establishing Routines</a></li>
                    <li><a class="form-links" href="#">Children & Anxiety</a></li>

            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-start">
            <ul class="list-unstyled">
                    <h3>Forms</h3>
                    <li><a class="form-links" href="/assets/PhysicalForm.pdf" target="_blank">Physical</a></li>
                    <li><a class="form-links" href="/assets/MedicationConsent.pdf" target="_blank">Medication Consent</a></li>
                    <li><a class="form-links" href="" target="_blank">Sunscreen</a></li>
                    <li><a class="form-links" href="/assets/TylenolForm.pdf" target="_blank">Tylenol</a></li>
            <ul>
            </div>
        </div>
                
    </main>
    <footer class="mt-5">
        <!-- SOCIALS -->
        <div class="row p-3">
            <div class="col-sm-3 text-center">
                <h4>Hours</h4>
                <p><em>Open year-round!</em></p>
                <p>Monday-Friday</p>
                <p>7am - 5pm</p>
            </div>
            <div class="col-sm-6 text-center">
                <ul class="btn-group" id="socials" role="group" aria-label="social media links">
                    <a class="btn" role="button" id="fb"
                    href="https://www.facebook.com/BusyBeeChildCareMA" target="_blank" aria-label="facebook">
                        <i id="fb" class="bi-facebook"></i>
                    </a>
                    <a class="btn" role="button"
                    href="https://www.instagram.com/busybeechildcare/" target="_blank" aria-label="instagram">
                        <i id ="ig" class="bi-instagram"></i>
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
            <div class="col-sm-3"></div>
            <div class="row">
                <div class="col-sm-3"></div>
                <!-- COPYRIGHT INFO -->
                <div class="col-sm-6 text-center">
                    <p class="text-muted">Copyright Busy Bee Preschool 2022. All rights reserved.</p>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <!-- END SOICALS --> 

    </footer>
    </body>
</html>