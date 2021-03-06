<?php
session_start();
$page_pass = 'preschool2022';
if (!((isset($_SESSION['login'])) && ($_SESSION['login'] == true) 
&& ($_SESSION['password'] === $page_pass))) {
    header('Location: parents.php');
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<!--HEAD: META TAGS, CSS, SCRIPT AND STYLE-->
<head> 
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="https://github.com/LaurenKScott, Busy Bee Preschool">
	<meta name="description" content="Providing the best in child care and education since 1989">
	<meta name="robots" content="index, follow">
	<title>Busy Bee Child Care & Preschool</title>
	<link rel="icon" href="/assets/beeicon.jpg">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
 </head>

<!-- BODY: THE START OF THE PAGE CONTENT -->
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

    <main>
        <div class="row">
            <div class="p-2">
                <h1 class="text-center display-3" id="page-title">Preschool Newsletter</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 p-2">
                <h2 class="text-center ">March 2022</h2>
                <div class="mx-auto d-flex justify-content-center" id="current">
                    <embed src="/assets/3_2022_PreK_Newsletter.pdf" width="90%" height="1200px"/>
                </div>
            </div>
            <aside class="p-2 col-md-2" id="archive">
                <div class="text-center">
                    <h3 class="fst-italic">Archives</h3>
                    <ol class="list-group list-unstyled p-0 m-0" id="archive-list">
                        <li class="list-group-item p-1"><a href="#">May 2022</a></li>
                        <li class="list-group-item p-1"><a href="#">April 2022</a></li>
                        <li class="list-group-item p-1"><a href="#">March 2022</a></li>
                        <li class="list-group-item p-1"><a href="#">February 2022</a></li>
                        <li class="list-group-item p-1"><a href="#">January 2022</a></li>
                        <li class="list-group-item p-1"><a href="#">December 2021</a></li>
                        <li class="list-group-item p-1"><a href="#">November 2021</a></li>
                        <li class="list-group-item p-1"><a href="#">October 2021</a></li>
                        <li class="list-group-item p-1"><a href="#">September 2021</a></li>
                    </ol>
                </div>
            </aside>
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