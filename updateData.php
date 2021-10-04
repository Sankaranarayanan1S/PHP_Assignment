<?php
require_once 'dbconn.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$Name = $DOB = $Email = $Address = $Course = $imgContent = NULL;

if (isset($_POST['updateData'])) {
    $id =test_input($_POST['id']);
    $Name =test_input($_POST['editName']);
    $DOB =test_input($_POST['editDOB']);
    $Email =test_input($_POST['editEmail']);
    $Address =test_input($_POST['editAddress']);
    $Course =test_input($_POST['editCourse']);

    $fileName = basename($_FILES["editImage"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['editImage']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image));   
    }
    if ($_FILES['editImage']['size'] !== 0) {
        $query = "UPDATE student_details SET Name = '$Name', DOB = '$DOB', Email = '$Email', Address = '$Address', Course = '$Course', Image = '$imgContent' WHERE id ='$id' ";
    }else{
        $query = "UPDATE student_details SET Name = '$Name', DOB = '$DOB', Email = '$Email', Address = '$Address', Course = '$Course' WHERE id ='$id' ";
    }
     
    $query_success = mysqli_query($connection,$query);

    if ($query_success) {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: index.php');
    }
    else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
mysqli_close($connection);
?>
