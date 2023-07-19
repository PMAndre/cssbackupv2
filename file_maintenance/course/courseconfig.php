<?php

require_once("dbcon.php");


if(isset($_POST['delete_student']))
{
    $course_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM courses WHERE course_id='$course_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Course Deleted Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Deleted ";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }
}

if(isset($_REQUEST['update_student']))
{
    $course_id = mysqli_real_escape_string($conn, $_REQUEST['course_id']);
    $ccode = mysqli_real_escape_string($conn, $_REQUEST['ccode']);
    $cequi = mysqli_real_escape_string($conn, $_REQUEST['cequi']);
    $cname = mysqli_real_escape_string($conn, $_REQUEST['cname']);
    $cdesc = mysqli_real_escape_string($conn, $_REQUEST['cdesc']);
    $cunits = mysqli_real_escape_string($conn, $_REQUEST['cunits']);
    $ctype = mysqli_real_escape_string($conn, $_REQUEST['ctype']);
    $cadd = mysqli_real_escape_string($conn, $_REQUEST['cadd']);
    $cadd2 = mysqli_real_escape_string($conn, $_REQUEST['cadd2']);
    $ctypeold = mysqli_real_escape_string($conn, $_REQUEST['ctypeold']);


    $query = "UPDATE courses SET ccode='$ccode', cequi='$cequi', cname='$cname',
     cdesc='$cdesc', cunits='$cunits', ctype='$ctype', 
      cadd='$cadd', cadd2='$cadd2', ctypeold='$ctypeold' WHERE course_id='$course_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Course Edited Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Edited";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $ccode = mysqli_real_escape_string($conn, $_POST['ccode']);
    $cequi = mysqli_real_escape_string($conn, $_POST['cequi']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $cdesc = mysqli_real_escape_string($conn, $_POST['cdesc']);
    $cunits = mysqli_real_escape_string($conn, $_POST['cunits']);
    $ctype = mysqli_real_escape_string($conn, $_POST['ctype']);
    $cadd = mysqli_real_escape_string($conn, $_POST['cadd']);
    $cadd2 = mysqli_real_escape_string($conn, $_POST['cadd2']);
    $ctypeold = mysqli_real_escape_string($conn, $_POST['ctypeold']);

    $query = "INSERT INTO courses (ccode,cequi,cname,cdesc,cunits,ctype,cadd,cadd2,ctypeold) 
    VALUES ('$ccode','$cequi','$cname','$cdesc','$cunits','$ctype','$cadd','$cadd2','$ctypeold')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Course Created Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not Created";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    }
}
?>