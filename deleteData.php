<?php
require_once 'dbconn.php';

if (isset($_POST['deleteData'])) {

    $id =$_POST['delete_id'];

    $query = "DELETE FROM student_details WHERE id='$id'"; 
    $query_success = mysqli_query($connection,$query);

    if ($query_success) {
        echo '<script> alert("Data Deleted"); </script>';
        header('Location: index.php');
    }
    else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
mysqli_close($connection);
?>
