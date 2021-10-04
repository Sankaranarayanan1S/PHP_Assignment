<?php
require_once 'dbconn.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$Name = $DOB = $Email = $Address = $Course = $imgContent = NULL;

if (isset($_POST['saveData'])) {
    $Name =test_input($_POST['Name']);
    $DOB =test_input($_POST['DOB']);
    $Email =test_input($_POST['Email']);
    $Address =test_input($_POST['Address']);
    $Course =test_input($_POST['Course']);

    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image));   
    }

    $query = "INSERT INTO student_details (`Name`, `DOB`, `Email`, `Address`, `Course`, `Image`) VALUES ('$Name', '$DOB', '$Email', '$Address', '$Course', '$imgContent')"; 
    $query_success = mysqli_query($connection,$query);

    if ($query_success) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
mysqli_close($connection);
?>


