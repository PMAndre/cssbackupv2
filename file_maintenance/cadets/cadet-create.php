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

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadet Add 
                            <a href="cadet.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    

                    <div class="card-body">
                        <form action="cadetconfig.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>AFPSN</label>
                                <input type="text" name="afpsn" id="afpsn" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>SERVID</label>
                                <input type="text" name="servid" id="servid" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>MAJID</label>
                                <input type="text" name="majid" id="majid" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>YRGR</label>
                                <input type="text" name="yrgr" id="yrgr" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>OYRGR</label>
                                <input type="text" name="oyrgr" id="oyrgr" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>LNAME</label>
                                <input type="text" name="lname" id="lname" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>FNAME</label>
                                <input type="text" name="fname" id="fname" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>ANAME</label>
                                <input type="text" name="aname" id="aname" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>MNAME</label>
                                <input type="text" name="mname" id="mname" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>INITLS</label>
                                <input type="text" name="initls" id="initls" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>GENDER</label>
                                <select name="gender" id="gender" class="form-control" style="text-transform: uppercase;" required>
                                    <option value="MALE">Male</option>
                                    <option value="FEMALE">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>BDATE</label>
                                <input type="date" name="bdate" id="bdate" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>BPLACE</label>
                                <input type="text" name="bplace" id="bplace" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>PAPA</label>
                                <input type="text" name="papa" id="papa" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="mb-3">
                                <label>PADEAD</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="padead" id="padead" value="1">
                                    <label class="form-check-label" for="padead">
                                        Check this box when the Father is dead.
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>MAMA</label>
                                <input type="text" name="mama" id="mama" class="form-control" style="text-transform: uppercase;" required>
                            </div>

                            <div class="mb-3">
                                <label>MADEAD</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="madead" id="padead" value="1">
                                    <label class="form-check-label" for="m adead">
                                        Check this box when the Mother is dead.
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label>GUARDIAN</label>
                                <input type="text" name="guardian" id="guardian" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>ADDR1</label>
                                <input type="text" name="addr1" id="addr1" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>ADDR2</label>
                                <input type="text" name="addr2" id="addr2" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>ZIPCODE</label>
                                <input type="number" name="zipcode" id="zipcode" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>REGION</label>
                                <select name="region" id="region" class="form-control" required>
                                    <?php
                                    // Include the countries.php file
                                    require 'path/to/countries.php';

                                    // Get an associative array of countries and their codes
                                    $countries = countries();

                                    // Loop through the countries and create options
                                    foreach ($countries as $code => $name) {
                                        echo '<option value="' . $code . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>HIGHSCH</label>
                                <input type="text" name="highsch" id="highsch" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>HEIGHT (in cm)</label>
                                <input type="number" name="height" id="height" class="form-control" step='0.01' required>
                            </div>
                            <!-- 
                            <div class="mb-3">
                                <label>EESCORE</label>
                                <input type="number" name="eescore" id="eescore" class="form-control" step='0.01' required>
                            </div>

                            
                            math
                            engl
                            spma
                            -->

                            <div class="mb-3">
                                <label>COY</label>
                                <input type="text" name="coy" id="coy" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>BATTALION</label>
                                <input type="text" name="battalion" id="battalion" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>BATTALION2</label>
                                <input type="text" name="battalion2" id="battalion2" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>CSTAT</label>
                                <input type="text" name="cstat" id="cstat" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>PIX</label>
                                <br>
                                <input type="file" name="pix" id="pix" class="form-control-file">
                            </div>
                            <div class="mb-3">
                                <label>REMARKS</label>
                                <input type="text" name="remarks" id="remarks" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>DATEADMITTED</label>
                                <input type="text" name="dateadmitted" id="dateadmitted" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>DATEGRAD</label>
                                <input type="text" name="dategrad" id="dategrad" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>DATECOMM</label>
                                <input type="text" name="datecomm" id="datecomm" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>DEGREE</label>
                                <input type="text" name="degree" id="degree" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>MAJORIN</label>
                                <input type="text" name="majorin" id="majorin" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>GRADUATE</label>
                                <input type="text" name="graduate" id="graduate" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>LATINAWARD</label>
                                <input type="text" name="latinaward" id="latinaward" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <div class="mb-3">
                                <label>COYBAT</label>
                                <input type="text" name="coybat" id="coybat" class="form-control" style="text-transform: uppercase;" required>
                            </div>
                            <!-- Add a hidden input field for 'active' column with value 1 -->
                            <input type="hidden" name="active" value="1">

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary" value="submit">Save Cadet</button>
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
