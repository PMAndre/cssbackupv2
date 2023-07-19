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

    <title>Cadet Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="cadet.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    

                    <div class="card-body">
                        <form action="cadet.php" method="post">

                            <div class="mb-3">
                                <label>AFPSN</label>
                                <input type="text" name="afpsn" id="afpsn" class="form-control" style="text-transform: uppercase;">
                            </div>
                           
                            <div class="mb-3">
                                <label>SERVID</label>
                                <input type="text" name="servid" id="servid" class="form-control">
                            </div>

                            
                            <div class="mb-3">
                                <label>MAJID</label>
                                <input type="text" name="majid" id="majid" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>YRGR</label>
                                <input type="text" name="yrgr" id="yrgr" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary" value="submit">Save Student</button>
                            </div>

                            
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
