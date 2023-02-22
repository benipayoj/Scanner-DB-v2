<?php

include 'conn.php';
    
if (isset($_FILES["webcam"]["tmp_name"])){

    $tmpName = $_FILES ["webcam"]["tmp_name"];
    $imageName = date ("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
    
    move_uploaded_file ($tmpName, 'img/' . $imageName);

    $query = "INSERT INTO  tb_image(capture_date,capture_image) VALUES ('$date', '$imageName')";
    mysqli_query($conn, $query); 

    header("Location: index1.php");
}


?>

