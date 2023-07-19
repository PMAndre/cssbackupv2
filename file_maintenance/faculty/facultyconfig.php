<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM faculty WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student delete Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not deleted ";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }
}

if (isset($_REQUEST['update_student']))
{
    $faculty_id = mysqli_real_escape_string($conn, $_REQUEST['faculty_id']);
    $serialnr = mysqli_real_escape_string($conn, $_REQUEST['serialnr']);
    $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
    $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
    $mi = mysqli_real_escape_string($conn, $_REQUEST['mi']);
    $aname = mysqli_real_escape_string($conn, $_REQUEST['aname']);
    $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
    $deptcode = mysqli_real_escape_string($conn, $_REQUEST['deptcode']);
    $igroup = mysqli_real_escape_string($conn, $_REQUEST['igroup']);
    $itype = mysqli_real_escape_string($conn, $_REQUEST['itype']);
    $rank = mysqli_real_escape_string($conn, $_REQUEST['rank']);
    $brofserv = mysqli_real_escape_string($conn, $_REQUEST['brofserv']);
    $status = mysqli_real_escape_string($conn, $_REQUEST['status']);
    $pix = mysqli_real_escape_string($conn, $_REQUEST['pix']);
    $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_REQUEST['pwd']);
    $lvl = mysqli_real_escape_string($conn, $_REQUEST['lvl']);
    $active = mysqli_real_escape_string($conn, $_REQUEST['active']);


    $query = "UPDATE faculty SET serialnr='$serialnr', lname='$lname', fname='$fname', mi='$mi', aname='$aname', 
    gender='$gender', deptcode='$deptcode', igroup='$igroup', itype='$itype', rank='$rank', brofserv='$brofserv',
    status='$status', pix='$pix', uname='$uname', pwd='$pwd', lvl='$lvl', active='$active'
    WHERE faculty_id='$faculty_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student updated Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not updated";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }

}

if(isset($_POST['save_student']))
{
    $serialnr = mysqli_real_escape_string($conn, $_POST['serialnr']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mi = mysqli_real_escape_string($conn, $_POST['mi']);
    $aname = mysqli_real_escape_string($conn, $_POST['aname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $deptcode = mysqli_real_escape_string($conn, $_POST['deptcode']);
    $igroup = mysqli_real_escape_string($conn, $_POST['igroup']);
    $itype = mysqli_real_escape_string($conn, $_POST['itype']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $brofserv = mysqli_real_escape_string($conn, $_POST['brofserv']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $pix = mysqli_real_escape_string($conn, $_POST['pix']);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $lvl = mysqli_real_escape_string($conn, $_POST['lvl']);
    $active = mysqli_real_escape_string($conn, $_POST['active']);

    $query = "INSERT INTO faculty (serialnr,lname,fname,mi,aname,gender,deptcode,igroup,itype,rank,brofserv,
    status,pix,uname,pwd,lvl,active) 
    VALUES ('$serialnr','$lname','$fname','$mi','$aname','$gender','$deptcode','$igroup','$itype','$rank',
    '$brofserv','$status', '$pix','$uname','$pwd','$lvl','$active')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student Created Successfully";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        echo "<script>window.location.href = 'faculty.php';</script>";
        exit(0);
    }
    /*
    if (isset($_POST["save_student"])) {
    
        if ($_FILES["pix"]["error"] === 4) {
        echo "<script> alert('Image does not exist.'); </script>";
        } else {
        $fileSize = $_FILES["pix"]["size"];
        $tmpName = $_FILES["pix"]["tmp_name"];
    
        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        if (!in_array($imageExtension, $validImageExtensions)) {
            echo "<script> alert('Invalid image extension.'); </script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Image size is too large.'); </script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            $destination = 'uploads/' . $newImageName;
    
            if (move_uploaded_file($tmpName, $destination)) {
            $query = "INSERT INTO faculty (pix) VALUES ('$newImageName')";
            mysqli_query($conn, $query);
            echo "<script>
                    alert('Successfully added.');
                    window.location.href = 'view.php';
                    </script>";
            } else {
            echo "<script> alert('Failed to move the uploaded file.'); </script>";
            }
        }
        }
        if (mysqli_query($conn, $query)){
            $_SESSION['message'] = "Student Created Successfully";
            echo "<script>window.location.href = 'faculty.php';</script>";
            exit(0);
        } else {
            $_SESSION['message'] = "Student Not Created";
            echo "<script>window.location.href = 'faculty.php';</script>";
            exit(0);
        }
    }
    */
}


?>


<?php
// Specify the upload directory
$uploadDir = "uploads/";

// Check if an image was uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    // Generate a unique filename for the uploaded image
    $fileName = uniqid() . "_" . $_FILES["image"]["name"];
    $filePath = $uploadDir . $fileName;

    // Move the uploaded image to the desired directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
        echo "Image uploaded successfully.";

        // Insert the file path into the database
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cgs";
        $port = 3306;

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO faculty (pix) VALUES (?)");

        // Bind the file path to the SQL statement
        $stmt->bind_param("s", $filePath);

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "File path inserted into the database.";

            if (isset($_POST['save_student'])) {
                $serialnr = mysqli_real_escape_string($conn, $_POST['serialnr']);
                $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                $mi = mysqli_real_escape_string($conn, $_POST['mi']);
                $aname = mysqli_real_escape_string($conn, $_POST['aname']);
                $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                $deptcode = mysqli_real_escape_string($conn, $_POST['deptcode']);
                $igroup = mysqli_real_escape_string($conn, $_POST['igroup']);
                $itype = mysqli_real_escape_string($conn, $_POST['itype']);
                $rank = mysqli_real_escape_string($conn, $_POST['rank']);
                $brofserv = mysqli_real_escape_string($conn, $_POST['brofserv']);
                $status = mysqli_real_escape_string($conn, $_POST['status']);
                $uname = mysqli_real_escape_string($conn, $_POST['uname']);
                $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
                $lvl = mysqli_real_escape_string($conn, $_POST['lvl']);
                $active = mysqli_real_escape_string($conn, $_POST['active']);

                $query = "INSERT INTO faculty (serialnr,lname,fname,mi,aname,gender,deptcode,igroup,itype,rank,brofserv,
                status,uname,pwd,lvl,active) 
                VALUES ('$serialnr','$lname','$fname','$mi','$aname','$gender','$deptcode','$igroup','$itype','$rank',
                '$brofserv','$status','$uname','$pwd','$lvl','$active')";
                
                if (mysqli_query($conn, $query)) {
                    $_SESSION['message'] = "Student Created Successfully";
                    echo "<script>window.location.href = 'faculty.php';</script>";
                    exit(0);
                } else {
                    $_SESSION['message'] = "Student Not Created";
                    echo "<script>window.location.href = 'faculty.php';</script>";
                    exit(0);
                }
            }
        } else {
            echo "Error inserting file path: " . $conn->error;
        }

        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();
    } else {
        echo "Error uploading image.";
    }
}
?>
