<?php
$con = mysqli_connect("localhost", "root", "", "geocam");

if(isset($_FILES["webcam"]["tmp_name"]) ){
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
    move_uploaded_file($tmpName, 'photo/' . $imageName);
    $date = date("Y/m/d") . " & " . date("h:i:sa");

    $query = "INSERT INTO `tb_photo`(`date`, `image`) VALUES ('$date','$imageName')";
    mysqli_query($con,$query);
}