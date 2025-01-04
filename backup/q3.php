<?php
    $con = mysqli_connect("localhost", "root", "", "geocam");
    if (!$con) {
        echo "Tidak bisa terhubung dengan database";
        }
    
    if(isset($_POST["kirim"])){
        $answer = $_POST["klik"];
        $number = $_POST["number3"];
        $query = "INSERT INTO `tb_quest`(`number`, `respon`) VALUES ('$number', '$answer')";
   mysqli_query($con,$query);
    
        echo 
        "
        <script>
        /*alert('HOREEE!!! Data kamu berhasil direkam :)');*/
        document.location.href = 'q4.php';
        </script>
        "
        ;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=yes">
        <link rel="icon" href="logo.png">
        <title>Quesioner</title>
    </head>

    <body>           
        <div class="box" class="warp">
            <form class="myForm" action="" method="post" autocomplete="off">
                <div class="inputBox">
                    <p>3. Saya jarang belajar atau jarang menyelesaikan PR karena asik menggunakan gadget.</p>
                    <div class="jawab">
                        <input type="hidden" name="number3" value="nomer3">
                        <input class="inputabs" type="radio" required id="SangatSetuju" name="klik" value="SangatSetuju">
                        <label for="SangatSetuju">Sangat Setuju</label><br>
                        <input class="inputabs" type="radio" required id="Setuju" name="klik" value="Setuju">
                        <label for="Setuju">Setuju</label><br>
                        <input class="inputabs" type="radio" required id="Netral" name="klik" value="Netral">
                        <label for="Netral">Netral</label><br>
                        <input class="inputabs" type="radio" required id="TidakSetuju" name="klik" value="TidakSetuju">
                        <label for="TidakSetuju">Tidak Setuju</label><br>
                        <input class="inputabs" type="radio" required id="SangatTidakSetuju" name="klik" value="SangatTidakSetuju">
                        <label for="SangatTidakSetuju">Sangat Tidak Setuju</label><br>
                    </div>
                    <div class="tombol">
                        <!--a href="q2.php"><input type="button" id="back" action="href" value="<Back<"></a-->
                        <input type="submit" name="kirim" id="next" value=">Next>">
                        <i></i>
                    </div>
                </div>
            </form>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
            *{
                margin: 0px 0px;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }

            body{
                position: relative;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                width: 90%;
                background: url('background6.jpg')no-repeat;
                background-position: center;
                background-size: cover;

                justify-content: center;
                align-items: center;   
                user-select: none;
                -moz-user-select: none;
                -ms-user-select: none ;
                -webkit-user-select: none;  
            }

            .box
            {
                position: relative;
                width: 350px;
                height: 370px;
                background: transparent;
                border: 4px solid rgba(255,255,255,0.5);
                border-radius: 20px;
                backdrop-filter: blur(15px);
                display: flex;
                justify-content: center;
                align-items: center;    
            }

            .box form .inputBox{
                outline: none;
                position: relative;
                margin: 0px 0px;
                width: 350px;
                height: 370px;
                font-weight: 600;
                background: transparent;
                font-size: 1.2em;
            }
            .box form .inputBox p{
                outline: none;
                position: absolute;
                width: 330px;
                height: 100px;
                text-align: justify;
                padding: 10px 10px 0px 10px;
                top: 10px;
            }
            .box form .inputBox input{
                outline: none;
                align-items: center;
                justify-content: center;
                margin: 5px 5px 10px 5px;
            }
            .box form .inputBox .jawab{
                
                position: absolute;
                padding: 20px 0px 20px 20px;
                outline: none;
                margin-top: 110px;

            }
            .box form input[type="button"]{
                position: absolute;
                padding: 4px 4px 4px 4px;
                top: 300px;
                left: 45px;
                color: #fff;
                background: #23242a;
                cursor: pointer;
                font-size: 0.8em;
                border-width: 3px;
                border-radius: 8px;
                font-weight: 200;
            }
            .box form input[type="button"]:hover,
            .box form input[type="button"]:nth-child(2)
            {
                color: #45f3ff;
            }
            .box form input[type="submit"]{
                position: absolute;
                padding: 4px 4px 4px 4px;
                top: 300px;
                left: 229px;
                color: #fff;
                background: #23242a;
                cursor: pointer;
                font-size: 0.8em;
                border-width: 3px;
                border-radius: 8px;
                font-weight: 200;
            }
            .box form input[type="submit"]:hover,
            .box form input[type="submit"]:nth-child(3)
            {
                color: #45f3ff;
            }

        </style>

    </body>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
</html>

