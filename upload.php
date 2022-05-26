<?php 
session_start();
$page_pass = 'busybee2022!';
if (!((isset($_SESSION['login'])) && ($_SESSION['login'] == true) 
&& ($_SESSION['password'] === $page_pass))) {
    session_destroy();
    header('Location: parents.php');
}

function submit() {
    $msg = '';
    if (isset($_POST["submit"])){
        $target_path = '../uploads/';
        switch ($_POST["class"]) {
            case "class-1":
                $sub_path = 'class1/';
                break;
            case "class-2":
                $sub_path = 'class2/';
                break;
        }
        $target_path = $target_path . $sub_path;
        $file_count = count($_FILES["userfile"]["name"]);
        for ($i=0; $i<$file_count;$i++){
            $target_file = $target_path.basename($_FILES['userfile']['name'][$i]);

            if(move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $target_file)) {
                $msg = 'Upload successful';
            }else {
                $msg = 'Upload failed';
        }
        }
        
    }
    return $msg;
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
	<link rel="icon" href="/assets/beeicon.jpg">
    <!-- BOOTSTRAP STYLESHEET AND SCRIPT LINKS (CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script type="text/javascript">
    function previewFiles() {

        var preview = document.querySelector('#preview');
        var files   = document.querySelector('input[type=file]').files;

        function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                var reader = new FileReader();

                reader.addEventListener("load", function () {
                var image = new Image();
                image.height = 200;
		        image.width = auto;
                image.title = file.name;
                image.src = this.result;
                preview.appendChild( image );
                }, false);

                reader.readAsDataURL(file);
            }

        }

        if (files) {
        [].forEach.call(files, readAndPreview);
        }

    }

</script>
</head>
<body>
    <header class="container-fluid">
        <!-- NAVIGATION BAR WITH STICKY POSITION-->
        <nav role="navigation" class="container-fluid navbar navbar-expand-sm navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/busybeelogo.png" alt="Busy Bee Logo" 
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

    <main>
        <div class="row text-center">
            <h1 class="display-2" id="page-title">
                Busy Bee File Uploader</h1>
        </div>
        <div class="row text-center">
            <p class="lead"> Important: Be sure to review each file before posting
            </p>
        </div>
        <div class="text-center">
            <form class="p-5" id="upload-form" action="<?php echo $_SERVER['PHP_SELF'];?>"  
            enctype="multipart/form-data" method="POST">
                <div class="form-floating">
                    <input class="form-control" type="text" id="post-text" name="post-text" placeholder=""> 
                    <label for="post-text" class="form-label">Write something here...</label>
                </div>
                <div>
                    <input class="form-control" type="file" id="userfile" name="userfile[]"
                    onchange="previewFiles()" multiple required>
                </div>
                <div id="preview"></div>
                <div class="custom-control custom-radio custom-control-inline d-inline">
                    <input class="custom-control-input" type="radio" id="class-select1" name="class" value="class-1" required>
                    <label class="custom-control-label" for="class-select1">Class 1</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline d-inline">
                    <input class="custom-control-input" type="radio" id="class-select2" name="class" value="class-2"  required>
                    <label class="custom-control-label" for="class-select2">Class 2</label>
                </div>
                <div class="w-100">
                <input type="submit" class="w-50 p-1 mx-auto" value="SUBMIT " name="submit" id="upload-submit">
                </div>
            </form>
        </div>
        <div class="row text-center" id="form-post">
            <?php
            # $preview = preview()
            $msg = submit();
            echo "<h3>" . $msg . "</h3>";
            ?>
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
