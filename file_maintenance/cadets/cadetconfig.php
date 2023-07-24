<?php

require 'dbcon.php';

/*
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM cadet WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Cadet Deleted Successfully";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Cadet Not deleted ";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    }
} */

if(isset($_REQUEST['update_student']))
{
    $cadet_id = mysqli_real_escape_string($conn, $_REQUEST['cadet_id']);
    $afpsn = mysqli_real_escape_string($conn, $_REQUEST['afpsn']);
    $servid = mysqli_real_escape_string($conn, $_REQUEST['servid']);
    $majid = mysqli_real_escape_string($conn, $_REQUEST['majid']);
    $yrgr = mysqli_real_escape_string($conn, $_REQUEST['yrgr']);
    $oyrgr = mysqli_real_escape_string($conn, $_REQUEST['oyrgr']);
    $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
    $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
    $aname = mysqli_real_escape_string($conn, $_REQUEST['aname']);
    $mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
    $initls = mysqli_real_escape_string($conn, $_REQUEST['initls']);
    $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
    $bdate = mysqli_real_escape_string($conn, $_REQUEST['bdate']);
    $bplace = mysqli_real_escape_string($conn, $_REQUEST['bplace']);
    $papa = mysqli_real_escape_string($conn, $_REQUEST['papa']);
    $padead = mysqli_real_escape_string($conn, $_REQUEST['padead']);
    $mama = mysqli_real_escape_string($conn, $_REQUEST['mama']);
    $madead = mysqli_real_escape_string($conn, $_REQUEST['madead']);
    $guardian = mysqli_real_escape_string($conn, $_REQUEST['guardian']);
    $addr1 = mysqli_real_escape_string($conn, $_REQUEST['addr1']);
    $addr2 = mysqli_real_escape_string($conn, $_REQUEST['addr2']);
    $zipcode = mysqli_real_escape_string($conn, $_REQUEST['zipcode']);
    $region = mysqli_real_escape_string($conn, $_REQUEST['region']);
    $highsch = mysqli_real_escape_string($conn, $_REQUEST['highsch']);
    $height = mysqli_real_escape_string($conn, $_REQUEST['height']);
    $eescore = mysqli_real_escape_string($conn, $_REQUEST['eescore']);
    $math = mysqli_real_escape_string($conn, $_REQUEST['math']);
    $engl = mysqli_real_escape_string($conn, $_REQUEST['engl']);
    $spma = mysqli_real_escape_string($conn, $_REQUEST['spma']);
    $coy = mysqli_real_escape_string($conn, $_REQUEST['coy']);
    $battalion = mysqli_real_escape_string($conn, $_REQUEST['battalion']);
    $battalion2 = mysqli_real_escape_string($conn, $_REQUEST['battalion2']);
    $cstat = mysqli_real_escape_string($conn, $_REQUEST['cstat']);
    $remarks = mysqli_real_escape_string($conn, $_REQUEST['remarks']);
    $pix = mysqli_real_escape_string($conn, $_REQUEST['pix']);
    $dateadmitted = mysqli_real_escape_string($conn, $_REQUEST['dateadmitted']);
    $dategrad = mysqli_real_escape_string($conn, $_REQUEST['dategrad']);
    $datecomm = mysqli_real_escape_string($conn, $_REQUEST['datecomm']);
    $degree = mysqli_real_escape_string($conn, $_REQUEST['degree']);
    $majorin = mysqli_real_escape_string($conn, $_REQUEST['majorin']);
    $graduate = mysqli_real_escape_string($conn, $_REQUEST['graduate']);
    $latinaward = mysqli_real_escape_string($conn, $_REQUEST['latinaward']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    $coybat = mysqli_real_escape_string($conn, $_REQUEST['coybat']);
    


    $query = "UPDATE cadet SET afpsn='$afpsn', servid='$servid', majid='$yrgr', oyrgr='$oyrgr',
    lname='$lname', fname='$fname', aname='$aname', mname='$mname', initls='$initls', gender='$gender', 
    bdate='$bdate', bplace='$bplace', papa='$papa', padead='$padead', mama='$mama', madead='$madead',
    guardian='$guardian', addr1='$addr1', addr2='$addr2', zipcode='$zipcode', region='$region',
    highsch='$highsch', height='$height', eescore='$eescore', math='$math', engl='$engl',
    spma='$spma', coy='$coy', battalion='$battalion', battalion2='$battalion2', cstat='$cstat',
    remarks='$remarks', pix='$pix', dateadmitted='$dateadmitted', dategrad='$dategrad',
    datecomm='$datecomm', degree='$degree', majorin='$majorin', graduate='$graduate',
    latinaward='$latinaward', password='$password', coybat='$coybat'
    WHERE cadet_id='$cadet_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Cadet Edited Successfully";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Cadet Not Edited";
        echo "<script>window.location.href = 'department.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $afpsn = mysqli_real_escape_string($conn, $_POST['afpsn']);
    $servid = mysqli_real_escape_string($conn, $_POST['servid']);
    $majid = mysqli_real_escape_string($conn, $_POST['majid']);
    $yrgr = mysqli_real_escape_string($conn, $_POST['yrgr']);
    $oyrgr = mysqli_real_escape_string($conn, $_POST['oyrgr']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $aname = mysqli_real_escape_string($conn, $_POST['aname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $initls = mysqli_real_escape_string($conn, $_POST['initls']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $bdate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $bplace = mysqli_real_escape_string($conn, $_POST['bplace']);
    $papa = mysqli_real_escape_string($conn, $_POST['papa']);
    //$padead = mysqli_real_escape_string($conn, $_POST['padead']);
    $mama = mysqli_real_escape_string($conn, $_POST['mama']);
    //$madead = mysqli_real_escape_string($conn, $_POST['madead']);
    $guardian = mysqli_real_escape_string($conn, $_POST['guardian']);
    $addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
    $add2 = mysqli_real_escape_string($conn, $_POST['add2']);
    $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $highsch = mysqli_real_escape_string($conn, $_POST['highsch']);
    $hight = mysqli_real_escape_string($conn, $_POST['height']);
    $eescore = mysqli_real_escape_string($conn, $_POST['eescore']);
    $math = mysqli_real_escape_string($conn, $_POST['math']);
    $engl = mysqli_real_escape_string($conn, $_POST['engl']);
    $spma = mysqli_real_escape_string($conn, $_POST['spma']);
    $coy = mysqli_real_escape_string($conn, $_POST['coy']);
    $battalion = mysqli_real_escape_string($conn, $_POST['battalion']);
    $battallion2 = mysqli_real_escape_string($conn, $_POST['battallion2']);
    $cstat = mysqli_real_escape_string($conn, $_POST['cstat']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    $pix = mysqli_real_escape_string($conn, $_POST['pix']);
    $dateadmitted = mysqli_real_escape_string($conn, $_POST['dateadmitted']);
    $dategrad = mysqli_real_escape_string($conn, $_POST['dategrad']);
    $datecomm = mysqli_real_escape_string($conn, $_POST['datecomm']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $majorin = mysqli_real_escape_string($conn, $_POST['majorin']);
    $graduate = mysqli_real_escape_string($conn, $_POST['graduate']);
    $latinaward = mysqli_real_escape_string($conn, $_POST['latinaward']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $coybat = mysqli_real_escape_string($conn, $_POST['coybat']);

    $query = "INSERT INTO cadet (afpsn, servid, majid, yrgr, oyrgr, lname, fname, aname, mname, initls, gender, bdate, bplace, papa, mama, guardian, addr1, addr2, zipcode, region, highsch, height,
    eescore, math, engl, spma, coy, battalion, battalion2, cstat, remarks, pix, dateadmitted, dategrad, datecomm, degree, majorin, graduate, latinaward, password, coybat) 
    VALUES ('$afpsn', '$servid', '$majid', '$yrgr', '$oyrgr', '$lname', '$fname', '$aname', '$mname', '$initls', '$gender', '$bdate', '$bplace', '$papa', '$mama', '$guardian',
    '$addr1', '$addr2', '$zipcode', '$region', '$highsch', '$height', '$eescore', '$math', '$engl', '$spma', '$coy', '$battalion', '$battalion2', '$cstat', '$remarks', '$pix', '$dateadmitted',
    '$dategrad', '$datecomm', '$degree', '$majorin', '$graduate', '$latinaward', '$password', '$coybat')";


    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Cadet Created Successfully";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Cadet Not Created";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    }
}
?>