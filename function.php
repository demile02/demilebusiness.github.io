<?php
$con = mysqli_connect("localhost", "root", "", "geocam");

if(isset($_FILES["webcam"]["tmp_name"]) ){
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
    move_uploaded_file($tmpName, 'img/' . $imageName);
    $date = date("Y/m/d") . " & " . date("h:i:sa");

    $query = "INSERT INTO `tb_geocam`(`name`, `email`, `latitude`, `longitude`, `date`, `image`) VALUES ('$name','$email','$latitude',' $longitude','$date','$imageName')";
    mysqli_query($con,$query);

}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    
    $query = "INSERT INTO `tb_geocam`(`name`, `email`, `latitude`, `longitude`, `date`, `image`) VALUES ('$name','$email','$latitude',' $longitude','$date','$imageName')";
    mysqli_query($con,$query);

    echo 
    "
    <script>
    /*alert('SILAHKAN JAWAB PERTANYAAN BERIKUT DENGAN JUJUR :)');*/
    document.location.href = 'q1.php';
    </script>
    "
    ;
}

