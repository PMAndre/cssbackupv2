<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM cadet WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student delete Successfully";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not deleted ";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    }
}

if(isset($_REQUEST['update_student']))
{
    $cadet_id = mysqli_real_escape_string($conn, $_REQUEST['cadet_id']);
    $deptcode = mysqli_real_escape_string($conn, $_REQUEST['deptcode']);
    $deptname = mysqli_real_escape_string($conn, $_REQUEST['deptname']);
    $depthead = mysqli_real_escape_string($conn, $_REQUEST['depthead']);
    $deptgroup = mysqli_real_escape_string($conn, $_REQUEST['deptgroup']);


    $query = "UPDATE cadet SET deptcode='$deptcode', deptname='$deptname', 
    deptgroup='$deptgroup', depthead='$depthead' WHERE cadet_id='$cadet_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student updated Successfully";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not updated";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    }

}
?>

<?php
if(isset($_POST['save_student']))
{
    $afpsn = strtoupper($_POST['afpsn']);
    $servid = strtoupper($_POST['servid']);
    $majid = strtoupper($_POST['majid']);
    $yrgr = strtoupper($_POST['yrgr']);
    $oyrgr = strtoupper($_POST['oyrgr']);
    $lname = strtoupper($_POST['lname']);
    $fname = strtoupper($_POST['fname']);
    $aname = strtoupper($_POST['aname']);
    $mname = strtoupper($_POST['mname']);
    $initls = strtoupper($_POST['initls']);
    $gender = strtoupper($_POST['gender']);

    $query = "INSERT INTO cadet (afpsn,servid,majid,yrgr,oyrgr,lname,fname,aname,mname,initls,gender) 
    VALUES ('$afpsn','$servid','$majid','$yrgr','$oyrgr','$lname','$fname','$aname','$mname','$initls','$gender')";
    
    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Student Created Successfully";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        echo "<script>window.location.href = 'cadet.php';</script>";
        exit(0);
    }
}

//PAGINATION//


if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}


// Determine the total number of entries in the "cadet" table
$countQuery = "SELECT COUNT(*) as total FROM cadet";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalEntries = $countRow['total'];


// Define the number of entries to display per page and calculate the total number of pages
$entriesPerPage = 15;
$totalPages = ceil($totalEntries / $entriesPerPage);


// Get the current page number from the query string or set it to the first page if not provided
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}


// Calculate the offset for the database query based on the current page and number of entries per page
$offset = ($currentPage - 1) * $entriesPerPage;


// Modify your existing query to include the LIMIT and OFFSET clauses
$query = "SELECT * FROM cadet LIMIT $entriesPerPage OFFSET $offset";
$query_run = mysqli_query($conn, $query);


// ...


?>