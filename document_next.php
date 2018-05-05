<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["license"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["license"]["tmp_name"]);
    if($check !== false) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
        $uploadOk = 1;
    } else {
        ?>
            <script type="text/javascript">
            alert("File is not an image!"); 
            window.setTimeout(function() {
                window.location.href='documents.php';
            }, 200);
        </script>
        <?php
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    ?>
    <script type="text/javascript">
    alert("Sorry File ALready Exists!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}
if ($_FILES["license"]["size"] > 8000000) {
    ?>
    <script type="text/javascript">
    alert("Sorry, File size shouldn't exceed 1Mb!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>
    <script type="text/javascript">
    alert("Sorry,only JPG,JPEG,PNG and GIF!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["license"]["tmp_name"], $target_dir . $_SESSION['username']."_license.png")) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    } else {
        ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    }
}



//passport
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["passport"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["passport"]["tmp_name"]);
    if($check !== false) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
        $uploadOk = 1;
    } else {
        ?>
            <script type="text/javascript">
            alert("File is not an image!"); 
            window.setTimeout(function() {
                window.location.href='documents.php';
            }, 200);
        </script>
        <?php
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    ?>
    <script type="text/javascript">
    alert("Sorry File ALready Exists!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}
if ($_FILES["passport"]["size"] > 8000000) {
    ?>
    <script type="text/javascript">
    alert("Sorry, File size shouldn't exceed 1Mb!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>
    <script type="text/javascript">
    alert("Sorry,only JPG,JPEG,PNG and GIF!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["passport"]["tmp_name"], $target_dir . $_SESSION['username']."_passport.png")) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    } else {
        ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    }
}



//aadhar
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["aadhar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["aadhar"]["tmp_name"]);
    if($check !== false) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
        $uploadOk = 1;
    } else {
        ?>
            <script type="text/javascript">
            alert("File is not an image!"); 
            window.setTimeout(function() {
                window.location.href='documents.php';
            }, 200);
        </script>
        <?php
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    ?>
    <script type="text/javascript">
    alert("Sorry File ALready Exists!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}
if ($_FILES["aadhar"]["size"] > 8000000) {
    ?>
    <script type="text/javascript">
    alert("Sorry, File size shouldn't exceed 1Mb!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>
    <script type="text/javascript">
    alert("Sorry,only JPG,JPEG,PNG and GIF!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["aadhar"]["tmp_name"], $target_dir . $_SESSION['username']."_aadhar.png")) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    } else {
        ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    }
}


//collegeid
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["collegeid"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["collegeid"]["tmp_name"]);
    if($check !== false) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
        $uploadOk = 1;
    } else {
        ?>
            <script type="text/javascript">
            alert("File is not an image!"); 
            window.setTimeout(function() {
                window.location.href='documents.php';
            }, 200);
        </script>
        <?php
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    ?>
    <script type="text/javascript">
    alert("Sorry File ALready Exists!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}
if ($_FILES["collegeid"]["size"] > 8000000) {
    ?>
    <script type="text/javascript">
    alert("Sorry, File size shouldn't exceed 1Mb!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ?>
    <script type="text/javascript">
    alert("Sorry,only JPG,JPEG,PNG and GIF!"); 
    window.setTimeout(function() {
        window.location.href='documents.php';
    }, 200);
</script>
<?php
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["collegeid"]["tmp_name"], $target_dir . $_SESSION['username']."_collegeid.png")) {
        ?>
        <script type="text/javascript">
        alert("File has been succesfully uploaded!"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    } else {
        ?>
        <script type="text/javascript">
        alert("Sorry,Unable to Upload"); 
        window.setTimeout(function() {
            window.location.href='documents.php';
        }, 200);
</script>
<?php
    }
}
?>