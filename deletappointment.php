<?php

 if (isset($_POST['delete_btn']) && isset($_POST['delete_id'])) {
    include 'connect.php';
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    
    $sql = "DELETE FROM appointment WHERE userId = '$delete_id'";
    if (mysqli_query($conn, $sql)) 
        echo "Record deleted successfully";
        header("Location: showApp.php");
        exit();
    } else {
       
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);




?>