<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Upload file</h1>
    <form action="Upload&delete.php" method="post" enctype="multipart/form-data">
        <label for="">Select File To Upload</label><br>
        <input style="margin-bottom: 5px; margin-top: 5px;" type="file" name="fileToUpload"><br>
        <input style="margin-bottom: 5px;" type="submit" name="submit" value="upload">
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {

    $folder = "Uploads/";
    $file = $folder . basename($_FILES["fileToUpload"]['name']);
    $upload = 1;
    $filetype = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    // check file already exits...
    if (file_exists($file)) {
        echo "Sorry, file already exist";
        $upload = 0;
    }

    // Check file > 5mb
    if ($_FILES["fileToUpload"]['size'] > 5000000) {
        echo "Sorry, file is too large";
        $upload = 0;
    }

    // Allow certain file formats
    $allowedTypes = array("jpg", "png", "jpeg", "gif", "pdf", "txt");
    if (!in_array($filetype, $allowedTypes)) {
        echo "Sorry, only JGP, PNG, JQEG, GIF, PDF And TXT file allowed.\n";
        $upload = 0;
    }

    // Check if $upload is set to 0 by an error
    if ($upload == 0) {
        echo "Sorry, your file was not uploaded";
        // If everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]['tmp_name'], $file)) {
            $name = basename($_FILES["fileToUpload"]['name']);
            echo "The file " . $name . " Has been uploaded.<br><br>";
            echo "IMG <br>";
            echo "<img style='width:100px; margin-top:15px' src='Uploads/$name'>";
        } else {
            echo "Sorry, there was an error uploading your file";
        }
    }
}

if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $folder = "Uploads/$file";

    if (file_exists($folder)) {
        if (unlink($folder)) {
            echo "File $file has been deleted";
        } else {
            echo "Failed to delete file $file";
        }
    } else {
        echo "file does not exist!";
    }
} else {
    echo "No file specified";
}

?>

<?php if (!empty($_FILES['fileToUpload'])): ?>
    <form action="Upload&delete.php" method="get">
        <input type="submit" name="delete" value="Delete file">
    </form>
<?php endif; ?>