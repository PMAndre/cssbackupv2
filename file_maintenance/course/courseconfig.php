<?php

require 'dbcon.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM courses WHERE course_id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Course delete Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not deleted ";
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


    $query = "UPDATE courses SET ccode='$ccode', cequi='$cequi', 
    cname='$cname', cdesc='$cdesc', cunits='$cunits', ctype='$ctype',
    cadd='$cadd', cadd2='$cadd2', ctypeold='$ctypeold' WHERE course_id='$course_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)){
        $_SESSION['message'] = "Course updated Successfully";
        echo "<script>window.location.href = 'course.php';</script>";
        exit(0);
    } else {
        $_SESSION['message'] = "Course Not updated";
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

//PAGINATION//

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

// Determine the total number of entries in the "course" table
$countQuery = "SELECT COUNT(*) as total FROM courses";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalEntries = $countRow['total'];

// Define the number of entries to display per page and calculate the total number of pages
$entriesPerPage = 10;
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
$query = "SELECT * FROM courses LIMIT $entriesPerPage OFFSET $offset";
$query_run = mysqli_query($conn, $query);

// ...

// ?>

 <?php
// include 'dbcon.php';
// $searchErr = '';
// $employee_details='';
// if(isset($_POST['save']))
// {
//     if(!empty($_POST['search']))
//     {
//         $search = $_POST['search'];
//         $stmt = $con->prepare("select * from employee_info where department like '%$search%' or name like '%$search%'");
//         $stmt->execute();
//         $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         //print_r($employee_details);
         
//     }
//     else
//     {
//         $searchErr = "Please enter the information";
//     }
    
// }
 
// ?>