<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadet View Details 
                            <a href="cadet.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['cadet_id']))
                        {
                            $cadet_id = mysqli_real_escape_string($conn, $_GET['cadet_id']);
                            $query = "SELECT * FROM cadet WHERE cadet_id='$cadet_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $cadet = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>AFPSN</label>
                                        <p class="form-control">
                                            <?=$cadet['afpsn'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>SERVID</label>
                                        <p class="form-control">
                                            <?=$cadet['servid'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MAJID</label>
                                        <p class="form-control">
                                            <?=$cadet['majid'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>YRGR</label>
                                        <p class="form-control">
                                            <?=$cadet['yrgr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>OYRGR</label>
                                        <p class="form-control">
                                            <?=$cadet['oyrgr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LNAME</label>
                                        <p class="form-control">
                                            <?=$cadet['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>FNAME</label>
                                        <p class="form-control">
                                            <?=$cadet['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ANAME</label>
                                        <p class="form-control">
                                            <?=$cadet['aname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MNAME</label>
                                        <p class="form-control">
                                            <?=$cadet['mname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>INITLS</label>
                                        <p class="form-control">
                                            <?=$cadet['initls'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>GENDER</label>
                                        <p class="form-control">
                                            <?=$cadet['gender'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>