<!DOCTYPE html>
<html lang="en">
<head>
    <title>mbuh</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;
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

.background{
    background: url(image/bg.jpg) no-repeat;
    background-position: center;
    background-size:cover ;
    height: 100vh;
    width: 100%;
    filter: blur(10px);
}

.header{
    outline: solid;
    position: relative;
    top: 0;
    left: 0;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1;

}
.navbar a{
    outline: solid;
    position: relative;
    font-size: 16px;
    color: #fff;
    margin-right: 30px;
    text-decoration: none;
}
.navbar a::after{
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    bottom: -5px;
    border-radius: 5px;
    transform: translateY(10px);
    opacity: 0;
    transition: .5s ease;
}
.navbar a:hover:after{
    transform: translateY(0);
    opacity: 1;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 380px;
    height: 520px;
    margin-top: 20px;
    background: url(image/bgd.jpg) no-repeat;
    background-position: center;
    background-size:cover ;
    border-radius: 20px;
    overflow: hidden;
    
    
}
.item{
    position: absolute;
    top: 0;
    left: 0;
    width: 58%;
    height: 100%;
    color: #fff;
    background: transparent;
    padding: 80px;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    


}
.item .logo{
    color: #fff;
    font-size: 30px;

}

.halaman{
	text-align: center;
	padding: 30px 20px;	
}

</style>
<body>
<div class="menu">
	</div>
    <!-- NAVBAR CREATION -->
   <header class="header" style="position: relative;">
   <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        
    <nav class="navbar">
        <a href="index.php?page=dashboard">Dashboard</a>
        <a href="index.php?page=portofolio">Portfolio</a>
        <a href="index.php?page=about">About</a>
        <a href="index.php?page=contact">Contact</a>
        <a href="index.php?page=help">Help</a>
        
    </nav>
   </header>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxl-xing'></i>Alzamrd</h2>
            <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
    
            switch ($page) {
                case 'dashboard':
                    include "nav/dashboard.php";
                    break;
                case 'portofolio':
                    include "nav/portofolio.php";
                    break;
                case 'about':
                    include "nav/about.php";
                    break;
                case 'contact':
                    include "nav/contact.php";
                    break;	
                case 'help':
                    include "nav/help.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        }else{
            include "test.php";
        }
 
	 ?>
            <!--div class="text-item">
                <h2>Welcome! <br><span>
                    To Our Channel
                </span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, repellendus?</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button class="btn">Login In</button>
                    <div class="create-account">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="">

                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label >Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label >Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statment</label>
                    </div>
                    <button class="btn">Login In</button>
                    <div class="create-account">
                        <p>Already Have An Account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div-->
     <!-- SIGN UP FORM CREATION>

<script src="assets/index.js"></script-->
</body>
<script>

            function getFullscreenElement() {
                return document.fullscreenElement
                    document.webkitFullscreenElement
                    document.mozFullscreenElement
                    document.msFullscreenElement;
            }

            function toggleFullscreen(){
                if (getFullscreenElement()) {
                    document.exitFullscreen();
                } else {
                    document.documentElement.requestFullscreen().catch(console.log);

                }
            }


            document.addEventListener("dblclick", ()=> {
                toggleFullscreen();
            });

            document.addEventListener('fullscreenchange', () => {
                console.log("Fullscreen changed!");
            
            });
        </script>
</html>