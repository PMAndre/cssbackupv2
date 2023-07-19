<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cgs";
    $port = 3306;

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $targetDir = __DIR__ . "/uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully.";

        // Insert file information into the database
        $sql = "INSERT INTO faculty (file_name, pix) VALUES ('$fileName', '$targetFile')";
        if ($conn->query($sql) === TRUE) {
            echo "File information stored in the database.";
            header('Location: faculty.php');
        } else {
            echo "Failed to store file information: " . $conn->error;
            header('Location: faculty.php');
        }
    } else {
        echo "Failed to upload file.";
        header('Location: faculty.php');
    }

    // Close the database connection
    $conn->close();
}
?>
<form action="test_upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept=".jpg, .jpeg, .png" required>
    <input type="submit" value="Upload">
</form>
