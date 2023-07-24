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
                                <input type="text" name="afpsn" id="afpsn" class="form-control">
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
                                <label>OYRGR</label>
                                <input type="text" name="oyrgr" id="oyrgr" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>LNAME</label>
                                <input type="text" name="lname" id="lname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>FNAME</label>
                                <input type="text" name="fname" id="fname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ANAME</label>
                                <input type="text" name="aname" id="aname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>MNAME</label>
                                <input type="text" name="mname" id="mname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>INITLS</label>
                                <input type="text" name="initls" id="initls" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>GENDER</label>
                                <input type="text" name="gender" id="gender" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>BDATE</label>
                                <input type="date" name="bdate" id="bdate" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>BPLACE</label>
                                <input type="text" name="bplace" id="bplace" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PAPA</label>
                                <input type="text" name="papa" id="papa" class="form-control">
                            </div>
<!--
                            <div class="mb-3">
                                <label>PADEAD</label>
                                <input type="text" name="padead" id="padead" class="form-control">
                            </div>
-->
                            <div class="mb-3">
                                <label>MAMA</label>
                                <input type="text" name="mama" id="mama" class="form-control">
                            </div>
<!--
                            <div class="mb-3">
                                <label>MADEAD</label>
                                <input type="text" name="madead" id="madead" class="form-control">
                            </div>
-->
                            <div class="mb-3">
                                <label>GUARDIAN</label>
                                <input type="text" name="guardian" id="guardian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ADDR1</label>
                                <input type="text" name="addr1" id="addr1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ADDR2</label>
                                <input type="text" name="addr2" id="add2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ZIPCODE</label>
                                <input type="text" name="zipcode" id="zipcode" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>REGION</label>
                                <input type="text" name="region" id="region" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>HIGHSCH</label>
                                <input type="text" name="highsch" id="highsch" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>HEIGHT</label>
                                <input type="number" name="height" id="height" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>EESCORE</label>
                                <input type="number" name="eescore" id="eescore" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>MATH</label>
                                <input type="number" name="math" id="math" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>ENGL</label>
                                <input type="number" name="engl" id="engl" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>SPMA</label>
                                <input type="number" name="spma" id="spma" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>COY</label>
                                <input type="text" name="coy" id="coy" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>BATTALION</label>
                                <input type="text" name="battalion" id="battalion" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>BATTALION2</label>
                                <input type="text" name="battalion2" id="battalion2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CSTAT</label>
                                <input type="text" name="cstat" id="cstat" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>REMARKS</label>
                                <input type="text" name="remarks" id="remarks" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PIX</label>
                                <input type="text" name="pix" id="pix" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DATEADMITTED</label>
                                <input type="text" name="dateadmitted" id="dateadmitted" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DATEGRAD</label>
                                <input type="text" name="dategrad" id="dategrad" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DATECOMM</label>
                                <input type="text" name="datecomm" id="datecomm" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DEGREE</label>
                                <input type="text" name="degree" id="degree" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>MAJORIN</label>
                                <input type="text" name="majorin" id="majorin" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>GRADUATE</label>
                                <input type="text" name="graduate" id="graduate" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>LATINAWARD</label>
                                <input type="text" name="latinaward" id="latinaward" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PASSWORD</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>COYBAT</label>
                                <input type="text" name="coybat" id="coybat" class="form-control">
                            </div>



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
