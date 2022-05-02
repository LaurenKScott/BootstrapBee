<?php 
session_start();
if (isset($_POST["submit"])){
    $target_path = "/Users/lauren/Documents/PROJECTS/BootstrapBee/assets/uploads/";
    $target_file = $target_path.basename( $_FILES['try_file']['name']);
    if(move_uploaded_file($_FILES['try_file']['tmp_name'], $target_file)) {
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
</head>
<body>
    <div class="row text-center">
        <h1 class="display-2">Busy Bee File Uploader</h1>
    </div>
    <div class="row">
    <div class="text-center">
        <form class="p-5 text-center" id="upload-form" 
        action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data" method="POST">
            <div class="form-floating">
                <input class="form-control" type="text" id="post-text" name="post-text" placeholder=""> 
                <label for="post-text" class="form-label">Write something here...</label>
            </div>
            <input class="form-control" type="file" id="try_File" name="try_file">
            <input type="submit" value="Submit" name="submit" id="upload-submit">
        </form>
    </div>
    </div>
</body>
</html>