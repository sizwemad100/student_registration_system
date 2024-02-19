<?php
include ('includes/db_conn.php');
// Assuming you have a MySQL database connection established

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$mode = $_POST['mode'];
$campus = $_POST['campus'];


// Insert the data into the database
$query = "INSERT INTO main_enrolments (id, name, course, mode, campus) VALUES ('$id', '$name', '$course', '$mode', '$campus')";
$result = mysqli_query($conn, $query);


if ($result) {
echo "success";
} else {
echo "error";
}

mysqli_close($conn);
?>
