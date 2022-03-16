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
    <title>Portal - Busy Bee Child Care & Preschool</title>
    <link rel="icon" href="/assets/beeicontransparent.png">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #socials {
            display:inline-block;
            list-style-type: none;
        }
        #socials > a > i {
            font-size: 36px;
            color:black;
        }
        #logo {
            max-width: 100%;
            height: auto;
        }
        #collapsible-navbar {
            color:black;
        }
    </style>
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
                    style="max-width:100%; height:auto;">
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
        <form title='login' method='POST' action='' autocomplete='off'>
            <div style='display:inline-block;'>
                <label for='password'>Password</label>
                <input type='text' name='password' id='password' required aria-required='true'> 
            </div>
            <button class='btn btn-light border-2 border-dark' type="submit" name='submit'>Submit</button>
        </form>
        <div class="mx-auto mt-3 d-flex justify-content-center">
        <iframe src="/assets/Busy_Bee_Resources.pdf" 
        width="90%" height="800px" style="frameBorder:0; border:0;"></iframe>
        </div>
    </main>
    <footer class="d-flex justify-content-around">
        <div class="row">
            <h6 class="col">Locations</h6>

            <h6 class="col">Hours</h6>

            <h6 class="col">Contact Info</h6>

            <h6 class="col">Connect</h6>
            <ul class="btn-group mx-auto align-right" id="socials" role="group" aria-label="social media links">
            <a class="btn" role="button"
            href="https://www.facebook.com/BusyBeeChildCareMA" target="_blank" aria-label="facebook">
                <i class="bi-facebook"></i>
            </a>
            <a class="btn" role="button"
            href="https://www.instagram.com/busybeechildcare/" target="_blank" aria-label="instagram">
                <i class="bi-instagram"></i>
            </a>
            <a class="btn" role="button"
                href="https://www.youtube.com/channel/UCul5ckAkAQzN1M9RKyiaPMA" target="_blank" aria-label="youtube">
                    <i class="bi-youtube"></i>
            </a>
            <a class="btn" role="button"
                href="https://twitter.com/busybee_pre" target="_blank" aria-label="twitter">
                    <i class="bi-twitter"></i>
            </a>       
            </ul>
            </div>
        </div>
    </footer>
    <p class="text-muted text-center">Copyright Busy Bee Preschool 2022</p>
    </body>
</html>