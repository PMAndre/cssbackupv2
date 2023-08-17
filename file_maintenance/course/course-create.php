<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style6.css">

    <title>Course Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Course
                            <a href="course.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <?php
                    $error_message = ""; // Initialize the error message variable

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Check if any field is left blank
                        if (empty($_POST["ccode"]) || empty($_POST["cequi"]) || empty($_POST["cname"]) || empty($_POST["cdesc"]) || empty($_POST["cunits"]) || empty($_POST["ctype"]) || empty($_POST["cadd"]) || empty($_POST["cadd2"]) || empty($_POST["ctypeold"])) {
                            $error_message = "Please fill in all the required fields.";
                        }

                        // If no errors, proceed with form processing
                        if (empty($error_message)) {
                            // Your existing code to process the form data here
                            // ...
                            $ccode = $_POST["ccode"];
                            $cequi = $_POST["cequi"];
                            $cname = $_POST["cname"];
                            $cdesc = $_POST["cdesc"];
                            $cunits = $_POST["cunits"];
                            $ctype = $_POST["ctype"];
                            $cadd = $_POST["cadd"];
                            $cadd2 = $_POST["cadd2"];
                            $ctypeold = $_POST["ctypeold"];

                            $conn = mysqli_connect("localhost", "root", "", "cgs");
                            $query = "INSERT INTO courses (ccode, cequi, cname, cdesc, cunits, ctype, cadd, cadd2, ctypeold) VALUES ('$ccode', '$cequi', '$cname', '$cdesc', '$cunits', '$ctype', '$cadd', '$cadd2', '$ctypeold')";
                            mysqli_query($conn, $query);
                            mysqli_close($conn);

                            // After successful processing, you can redirect or show a success message
                            echo "Form submitted successfully!";
                        }
                    }
                    ?>

                    <div class="card-body">
                        <?php
                        if (!empty($error_message)) {
                            echo '<div class="alert alert-danger">' . $error_message . '</div>';
                        }
                        ?>
                        <form action="course.php" method="post">

                            <div class="mb-3">
                                <label>CCODE</label>
                                <input type="text" name="ccode" id="ccode" class="form-control" style="text-transform: uppercase;">
                            </div>
                           
                            <div class="mb-3">
                                <label>CEQUI</label>
                                <input type="text" name="cequi" id="cequi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CNAME</label>
                                <input type="text" name="cname" id="cname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CDESC</label>
                                <input type="text" name="cdesc" id="cdesc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUNITS</label>
                                <input type="number" name="cunits" id="cunits" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="ctype">CTYPE</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="ctypeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Course Type
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="ctypeDropdown">
                                    <?php
                                    $query = "SELECT ctype, coursetypedesc FROM coursetype";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<li><a class="dropdown-item ctype-option" href="#" data-ctype="' . $row['ctype'] . '" data-coursetypedesc="' . $row['coursetypedesc'] . '">' . $row['coursetypedesc'] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <input type="hidden" name="ctype" id="ctypeHidden">
                        </div>
                            <!-- <div class="mb-3">
                                <label>CTYPE</label>
                                <input type="text" name="ctype" id="ctype" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <label>CADD</label>
                                <input type="text" name="cadd" id="cadd" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CADD2</label>
                                <input type="text" name="cadd2" id="cadd2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CTYPEOLD</label>
                                <input type="text" name="ctypeold" id="ctypeold" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary" value="submit">Save Course</button>
                            </div>

                            
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // JavaScript to handle dropdown selection
    const ctypeDropdown = document.getElementById('ctypeDropdown');
    const ctypeHidden = document.getElementById('ctypeHidden');

    document.querySelectorAll('.ctype-option').forEach(option => {
        option.addEventListener('click', function() {
            ctypeDropdown.innerText = this.dataset.coursetypedesc;
            ctypeHidden.value = this.dataset.ctype;
        });
    });
</script>
<script>
    function validateInput(inputId) {
        var input = document.getElementById(inputId);
        var inputValue = input.value;

        // Define a regular expression pattern to match allowed characters
        var allowedPattern = /^[a-zA-Z\s]+$/;

        if (!allowedPattern.test(inputValue)) {
            var correctedValue = prompt("Special characters, symbols, and numbers are not allowed in this field. Please enter a valid value:", "");
            if (correctedValue !== null) {
                input.value = correctedValue;
            } else {
                input.value = '';
            }
        }
    }

    // Attach the validateInput function to the input fields
    document.getElementById('ccode').addEventListener('blur', function() { validateInput('ccode'); });
    document.getElementById('cequi').addEventListener('blur', function() { validateInput('cequi'); });
    document.getElementById('cname').addEventListener('blur', function() { validateInput('cname'); });
    document.getElementById('cdesc').addEventListener('blur', function() { validateInput('cdesc'); });
    document.getElementById('cadd').addEventListener('blur', function() { validateInput('cadd'); });
    document.getElementById('cadd2').addEventListener('blur', function() { validateInput('cadd2'); });
    document.getElementById('ctypeold').addEventListener('blur', function() { validateInput('ctypeold'); });
</script>


</body>
</html>