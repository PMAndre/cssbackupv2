<?php


// Include the database connection and pagination logic from your existing PHP file
@include 'dbcon.php';


// Get the search input from the query parameters
$input = isset($_GET['input']) ? $_GET['input'] : '';


// Initialize the query without pagination
$query = "SELECT * FROM courses";


// Initialize the count query for total entries
$countQuery = "SELECT COUNT(*) as total FROM courses";


// Check if a search input is provided
if (!empty($input)) {
  // Modify the query and count query to include the search condition
  $query .= " WHERE UPPER(ccode) LIKE '%$input%' OR UPPER(cequi) LIKE '%$input%' OR UPPER(cname) LIKE '%$input%' OR UPPER(cdesc) LIKE '%$input%' OR UPPER(cunits) LIKE '%$input%' OR UPPER(ctype) LIKE '%$input%' OR UPPER(cadd) LIKE '%$input%' OR UPPER(cadd2) LIKE '%$input%' OR UPPER(ctypeold) LIKE '%$input%'";
  $countQuery .= " WHERE UPPER(ccode) LIKE '%$input%' OR UPPER(cequi) LIKE '%$input%' OR UPPER(cname) LIKE '%$input%' OR UPPER(cdesc) LIKE '%$input%' OR UPPER(cunits) LIKE '%$input%' OR UPPER(ctype) LIKE '%$input%' OR UPPER(cadd) LIKE '%$input%' OR UPPER(cadd2) LIKE '%$input%' OR UPPER(ctypeold) LIKE '%$input%'";
}


// Perform the count query to get the total number of entries
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


// Modify the query to include pagination
$query .= " LIMIT $entriesPerPage OFFSET $offset";


// Perform the modified query
$query_run = mysqli_query($conn, $query);


// Generate the updated table rows
$tableRows = '';
while ($course = mysqli_fetch_assoc($query_run)) {
  // Generate the row HTML dynamically
  $tableRows .= '<tr class="myList">
                    <td>' . $course['ccode'] . '</td>
                    <td>' . $course['cequi'] . '</td>
                    <td>' . $course['cname'] . '</td>
                    <td>' . $course['cdesc'] . '</td>
                    <td>' . $course['cunits'] . '</td>
                    <td>' . $course['ctype'] . '</td>
                    <td>' . $course['cadd'] . '</td>
                    <td>' . $course['cadd2'] . '</td>
                    <td>' . $course['ctypeold'] . '</td>
                    <td>
                      <div class="inline">
                        <a href="course-edit.php?course_id=' . $course['course_id'] . '" class="btn btn-info btn-sm">Edit</a>
                      </div>
                      <div class="inline">
                        <form action="course.php" method="POST" class="d-inline">
                          <a href="" name="delete_student" value="' . $course['course_id'] . '" class="btn btn-danger btn-sm">Withdraw</a>
                        </form>
                      </div>
                    </td>
                  </tr>';
}


// Return the updated table rows
echo $tableRows;


?>