<?php
/*
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
        $dbname = "upload";
        $port = 3306;

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO uploaded_files (file_path) VALUES (?)");

        // Bind the file path to the SQL statement
        $stmt->bind_param("s", $filePath);

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "File path inserted into the database.";
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
*/
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






<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <form action="test.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
