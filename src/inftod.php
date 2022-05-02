<?php 
session_start();
if (isset($_POST["submit"])){
    
    $target_path = "/assets/uploads/";
    $target_file = $target_path . basename( $_FILES['try_file']['name']);
    if(move_uploaded_file($_FILES['try_file']['name'], $target_file)) {
        echo "<h3 style='color:green;'>Upload successful</h3>";
    }else {
        echo "<h3>Upload failed</h3>";
    }
}
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
	<link rel="icon" href="/assets/beeicontransparent.png">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script>
        function ChangeMonth(month) {
            document.getElementById('news-title').innerHTML = month;
        }
    </script>
 </head>

<!-- BODY: THE START OF THE PAGE CONTENT -->
<body class="container-fluid">
    <a class="sr-only sr-only-focusable visually-hidden" aria-label="skip navigation" href="#main">
        Skip to main content</a>
    <!-- HEADER: LOGO, NAV -->
    <header class="container-fluid">
        <!-- NAVIGATION BAR WITH STICKY POSITION-->
        <nav role="navigation" class="navbar navbar-expand-sm navbar-light">
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
    <div class="row">
        <h1 class="text-center display-3" id="page-title">Infant and Toddler News</h1>
    </div>
    <div class="row">
    <div class="text-center">
        <form class="p-5 text-center" id="upload-form" 
        action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data" method="POST">
            <div class="form-floating">
                <input class="form-control" type="text" id="post-text" name="post-text" placeholder=""> 
                <label for="post-text" class="form-label">Write something here...</label>
            </div>
            <input class="form-control" type="file" id="myFile" name="try_file">
            <input type="submit" value="Submit" name="submit" id="upload-submit">
        </form>
    </div>
    </div>
    <div class="row">
        <div class="col-md-10 p-0">
            <h2 class="text-center" id="news-title">April 2022</h2>
            <div class="mx-auto d-flex justify-content-center"  id="current">
                <iframe src="/assets/4_2022_IT_Newsletter.pdf" name="current" width="90%" height="1200px"></iframe>
            </div>
        </div>
        <aside class="p-0 col-md-2 mx-auto" id="archive">
            <div class="text-center">
                <h3 class="fst-italic">Archives</h3>
                <ol class="list-group list-unstyled p-0 m-0 text-center">
                    <li class="list-group-item p-1"><a href="#" target="current">May 2022</a></li>
                    <li class="list-group-item p-1">
                        <a href="/assets/4_2022_IT_Newsletter.pdf" target="current" onclick="ChangeMonth('April 2022')">April 2022</a>
                    </li>
                    <li class="list-group-item p-1">
                        <a href="/assets/3_2022_IT_Newsletter.pdf" target="current" onclick="ChangeMonth('March 2022')">March 2022</a>
                    </li>
                    <li class="list-group-item p-1"><a href="#" target="current">February 2022</a></li>
                    <li class="list-group-item p-1"><a href="#" target="current">January 2022</a></li>
                    <li class="list-group-item p-1"><a href="#" target="current">December 2021</a></li>
                    <li class="list-group-item p-1"><a href="#" target="current">November 2021</a></li>
                    <li class="list-group-item p-1"><a href="#" target="current">October 2021</a></li>
                    <li class="list-group-item p-1"><a href="#" target="current">September 2021</a></li>
                </ol>
            </div>
        </aside>
    </div>
</main>

<footer class="mt-5">
    <!-- SOCIALS -->
    <div class="row">
        <div class="col-sm-3 text-center">
            <h6>Content</h6>
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
                <p class="text-muted">Copyright Busy Bee Preschool 2022</p>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!-- END SOICALS --> 

</footer>
</body>
</html>