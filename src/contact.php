<!DOCTYPE html>
<html lang="en">

    <!-- HEAD: META TAGS, LINKS, PAGE TITLE AND ICON -->
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="https://github.com/LaurenKScott, Busy Bee Preschool">
        <meta name="description" content="Contact information page for Busy Bee Child Care and Preschool.
        Busy Bee is an independently owned and operated child care center, providing the best quality
        education on the South Shore since 1989">
        <meta name="robots" content="index, follow">
        <title>Contact Us - Busy Bee Child Care & Preschool</title>
        <link rel="icon" href="/assets/bee-icon.jpg">
        <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <!-- BODY: THE START OF THE PAGE CONTENT -->
    <body class="container-fluid" style="">

        <!-- PHP INFORMATION AND CONTENT -->
        <?php include("handler.php");?>
        <a class="sr-only sr-only-focusable visually-hidden" aria-label="skip navigation" href="#main">
            Skip to main content</a>
         <!-- HEADER: LOGO, NAV -->
        <header class="container-fluid position-sticky" style="">
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

        <!-- BREADCRUMB NAVIGATION FOR ARIA USERS-->
        <main>
            <div class="text-center"><h1>Don't Bee a Stranger!</h1></div>
            <form title="Contact Form" class="p-5 mb-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
            method="POST" autocomplete="off" style="background-color:#FFCC33; color:">
                <div class="text-center m-0 p-0"><h2 style="font-size:2em;">Contact Us</h2></div>
                <div class="form-floating" id="form-info">
                    <p class="text-center"><em>* All fields are required</em></p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                    placeholder="" required aria-required="true">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="phone" name="phone"
                    placeholder="" required aria-required="true">
                    <label for="phone" class="form-label">Phone</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                    placeholder="" required aria-required="true">
                    <label for="email" class="form-label">Email Address</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" name="message" 
                    placeholder="" style="height:8rem;" required aria-required="true"></textarea>
                    <label for="message" class="form-label">Message</label>
                </div>
                <div class="d-grid gap-2 mx-auto" id="submit-button" 
                style="width:50%;" aria-roledescription="submit-button">
                <button class="btn btn-lg btn-dark" type="submit" name="submit">Submit</button>
                </div>
            </form>
            <div>


            </div>
        </main>
        <footer class="d-flex justify-content-center">
        <ul class="btn-group mx-auto" id="socials" role="group" aria-label="social media links">
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
            
        </div>
    </footer>

    </body>
</html>
