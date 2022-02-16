<!-- 
include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}   -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Screen Responsive Login Page</title>
    <link rel="stylesheet" href="./css/login_style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">

</head>
<body>
    <header class="topbar">
        <div class="container flex justify-between items-center">
            <div class="icons">
              <a href="#"><img src="./icons/facebook.svg" alt=""></a>
              <a href="#"><img src="./icons/twitter.svg" alt=""></a>
              <a href="#"><img src="./icons/google.svg" alt=""></a>
              <a href="#"><img src="./icons/instagram.svg" alt=""></a>
              <a href="#"><img src="./icons/search.svg" alt=""></a>
            </div>
            <div class="auth flex items-center">
              <div>
                  <img src="./icons/user-icon.svg" alt="">
                  <a href=""Onclick="toggleText">Log in</a>
              </div>
              <span class="divider">|</span>
    
              <div>
                  <img src="./icons/edit.svg" alt="">
                  <a href="#">Register Now</a>
              </div>
              <span class="divider">|</span>
    
              <div>
                <img src="./icons/cart.svg" alt="">
                <a href="#">0 Items -(tk. 0.00)</a>
            </div>
            
            </div>
        </div>
    </header>
    <nav>
        <div class="top">
            <div class="container flex justify-between">
                <div class="contact flex items-center" >
                    <img src="./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us:+8801863841578</h5>
                        <h6>Email:support@greshmeal.com</h6>
                    </div>
                </div>
                <div class="branding">
                    <img src="./icons/logo.svg" alt="">
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon-sat(8.00am-12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar magic-shadow">
            <div class="container flex justify-center">
                <a href="#" class="active">Home</a>
                <a href="#">About us</a>
                <a href="#">Product</a>
                <a href="#">Blog</a>
                <a href="#">Shop</a>
                <a href="#">Services</a>
                <a href="#">Gallery</a>
                <a href="#">Contact us</a>
                <a href="#">Team Member</a>
            </div>
        </div>
    </nav>
    <section class="login_container">
        <div class="imgBx">
            <img src="./images/img4.jpg" alt="">
        </div> 
        <div class="contentBx">
            <!-- <label for="" class="close-btn fas fa-times"></label> -->
            <div class="formBx">
                <h2>
                Registraion
                </h2>
                <form action="login.php" method="post">
                    <div class="inputBx">
                        <span>User name</span>
                        <input type="text">
                    </div>
                    <div class="inputBx">
                        <span> Email</span>
                        <input type="text">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password">
                    </div>
                    <div class="inputBx">
                        <span>Comfirm Password</span>
                        <input type="password">
                    </div>
                    <!-- <div class="remember">
                        <label for="">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div> -->
                    <div class="inputBx">
                        
                        <input type="submit" value="Register" name="">
                    </div>
                    <div class="inputBx">
                        
                     <P> Have an account? <a href="">Sign in</a></P>
                    </div>
                </form>
                <h3>Login with Social Media</h3>
                <ul class="sci">
                    <li><img src="./icons/facebook.svg" alt=""></li>
                    <li><img src="./icons/twitter.svg" alt=""></li>
                    <li><img src="./icons/instagram.svg" alt=""></li>

                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="box">
                <h3>About us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus blanditiis facere obcaecati reiciendis minima expedita id. Possimus, voluptas!</p>
                <button class="btn btn-secondar">Read More</button>
            </div>
            <div class="box">
                <h3>Quik Links</h3>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">About Us</a>
                    </li>
                    <li>
                        <a href="">Products</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li>
                        <a href="">Gallery</a>
                    </li>
                    <li>
                        <a href="">Contact us</a>
                    </li>
                    <li>
                        <a href="">Team Member</a>
                    </li>
                    
                </ul>
            </div>
            <div class="box">
                <h3>Follow us</h3>
                <ul>
                    <li>
                        <a href="">
                            <img src="./icons/facebook.svg" alt="">
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="./icons/twitter.svg" alt="">
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="./icons/google.svg" alt="">
                            <span>Google+</span>
                        </a>
                    </li>
                   <li>
                        <a href="">
                            <img src="./icons/instagram.svg" alt="">
                            <span>Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
        
        </footer>
        <footer class="copyright">
            <div>
            Copyright © 2021 .All rights reserved by <a href="">Md Mahamudul Hasan</a>.
            </div>
        </footer>

</body>
</html>