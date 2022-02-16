
<!-- <
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresh Meal Bazar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="./icons/logo.svg" alt="">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="./icons/cart-dark.svg" alt="">
                        <a href="#">0 Items - (tk.0.00)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                        <li>
                            <a href="http://localhost/FreshMealBazar/login.php">Log in</a>
                        </li>
                        <li>
                            <a href="http://localhost/FreshMealBazar/registration.php#">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="contact flex items-center">
                    <img src="./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us: (+84) 123 456 789</h5>
                        <h6>E-mail : support@freshmeal.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                <header class="topbar ">
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
                              <a href="http://localhost/FreshMealBazar/login.php">Log in</a>
                          </div>
                          <span class="divider">|</span>
                
                          <div>
                              <img src="./icons/edit.svg" alt="">
                              <a href="http://localhost/FreshMealBazar/registration.php#">Register Now</a>
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
                    </nav>
                <nav class="sticky-top ">
                    <div class="navbar magic-shadow ">
                        <div class="container flex justify-center ">
                            <a href="http://localhost/FreshMealBazar/index.php" class="active">Home</a>
                            <a href="#About">About us</a>
                            <a href="#Product">Product</a>
                            <a href="#Blog">Blog</a>
                            <a href="#Shop">Shop</a>
                            <a href="#Services">Services</a>
                            <a href="#Gallery">Gallery</a>
                            <a href="#Contact">Contact us</a>
                            <a href="#Team Member">Team Member</a>
                        </div>
                    </div>
                </nav>
                <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome">
                            <span>Welcome to</span>
                            <img src="./icons/logo-2.svg" alt="">
                        </div>
                        <h1>The World Best <Span>Fresh Food</Span> Website</h1>
                        <p>In This website We will give best qualitu fresh and organic Foods,Fruits,Vegetables,Fishs and Meats</p>
                        <div>
                            <button class="btn btn-primary">Read More</button>
                            <button class="btn btn-secondary">Shop Now</button>
                        </div>
                        <div class="hero-image">
                            <img src="./images/mango1.png" alt="">
                        </div>
                    </div>
                
                </header>
                
                <section class="top-products" id="Product">
                    <div class="container">
                        <h1 class="section-heading "> Top Products</h1>
                        <div class="slider">
                            <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
                            <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
                
                         <div class="food-slider">
                             <div class="food-card magic-shadow-sm">
                                 <div class="product-image flex items-center justify-center">
                                     <img src="./images/mango1.png" alt="">
                                 </div>
                                 <hr>
                                 <div>
                                     <h2 class="text-center">Mango</h2>
                                     <div class="stars flex justify-center items-center ">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/star-grey.svg" alt="">
                                         <img src="./icons/star-grey.svg" alt="">
                                     </div>
                                     <div class="price text-center">
                                         Per kg 150 tk.
                                     </div>
                                     <div class="flex items-center justify-center">  
                                         <button>
                                             <img src="./icons/cart-2.svg" alt="">
                                             <span>Add to Cart</span>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                             <div class="food-card magic-shadow-sm">
                                <div class="product-image flex items-center justify-center">
                                    <img src="./images/straw.png" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Strawberry</h2>
                                    <div class="stars flex justify-center items-center ">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                    </div>
                                    <div class="price text-center">
                                        Per Kg 570 tk.
                                    </div>
                                    <div class="flex items-center justify-center">  
                                        <button>
                                            <img src="./icons/cart-2.svg" alt="">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="food-card magic-shadow-sm">
                                <div class="product-image flex items-center justify-center">
                                    <img src="./images/mango2.png" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Greeen Mango </h2>
                                    <div class="stars flex justify-center items-center ">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                    </div>
                                    <div class="price text-center">
                                        Per kg 90 tk.
                                    </div>
                                    <div class="flex items-center justify-center">  
                                        <button>
                                            <img src="./icons/cart-2.svg" alt="">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="food-card magic-shadow-sm">
                                <div class="product-image flex items-center justify-center">
                                    <img src="./images/rasberry.png" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Rasbery</h2>
                                    <div class="stars flex justify-center items-center ">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                    </div>
                                    <div class="price text-center">
                                        Per Kg 700 tk.
                                    </div>
                                    <div class="flex items-center justify-center">  
                                        <button>
                                            <img src="./icons/cart-2.svg" alt="">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                         </div>
                        </div>
                        <div class="text-center btn-wrapper">
                        <a href="http://localhost/FreshMealBazar/fruits.php">
                        <button class="btn btn-secondary" > 
                          View All Product
                         </button>
                         </a>
                           
                        </div>
                    </div>
                </section>
                <section class="about-meal" id="About">
                    <div class="container">
                        <h1 class=section-heading>About Fresh Meal</h1>
                        <div class="about-meal-wrap flex">
                            <div class="flex-1">
                                <img src="./images/yogurt.png" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>Freshmeal is a ling established fact that a reader will be distracted</h2>
                                <p>, Fresh is the largest grocery chain in Bangladesh and Best Retail Brand in the country. As part of the Shwapno family, your satisfaction and wellbeing are what we work diligently to ensure. Most of all, we want to always leave you with a smile, whether you visit our stores or order online, and we are happy to serve you in whatever way we can.

                               So expect more. Come and discover a different shopping experience. Welcome to Fresh Meal Shop!
                                </p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="our-services" id="Services">
                    <div class="container">
                        <h1 class="section-heading">Our Services</h1>
                        <div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="./icons/transport.svg" alt="">
                                <h2>Free Home delivery</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, dolores.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="./icons/bag.svg" alt="">
                                <h2 class="text-primary">30 days ReturnsServices</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, dolores.</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="./icons/usd.svg" alt="">
                                <h2>Money back guaranted</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, dolores.</p>
                                <button class="btn btn-secondary">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="big-deal">
                    <div class="container">
                        <h1 class="section-heading text-pure">Big Deal of the Week</h1>
                        <div class="timer">
                          <div>
                              <span>02</span>
                              <span>Days</span>
                            </div>
                            <div>
                                <span>24</span>
                                <span>Hour</span>
                              </div>
                              <div>
                                <span>55</span>
                                <span>Minutes</span>
                              </div>
                              <div>
                                <span>59</span>
                                <span>Seconds</span>
                              </div>
                        </div>
                    </div>
                </section>
                
                <section class="latest-news" id="Blog">
                    <div class="container">
                        <h1 class="section-heading">Lastest News From Blog</h1>
                        <div class="article-wrapper">
                          
                          <article class="card magic-shadow-sm">
                            <div>
                              <img src="./images/fruit2.jpg" alt="">
                            </div>
                            <div class="card-content">
                                 <div class="post-meta flex items-center justify-between">
                                  <span>july 03,2017</span> 
                                  <div>
                                      <span>Posted by <strong>FreshMeal</strong> </span>
                                      <span class="comment-count">12 Comments</span>
                                  </div>
                                 </div>
                                 <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus adipisci odit praesentium ullam omnis.</p>
                            </div>
                        </article>
                          <article class="card magic-shadow-sm">
                            <div>
                              <img src="./images/fruit3.jpg" alt="">
                            </div>
                            <div class="card-content">
                                 <div class="post-meta flex items-center justify-between">
                                  <span>july 03,2017</span> 
                                  <div>
                                      <span>Posted by <strong>FreshMeal</strong> </span>
                                      <span class="comment-count">12 Comments</span>
                                  </div>
                                 </div>
                                 <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus accusamus adipisci odit praesentium ullam omnis.</p>
                            </div>
                        </article>    
                        </div>
                        <div class="text-center btn-wrapper">
                            <button class="btn btn-secondary">View All</button>
                        </div>
                    </div>
                </section>
                
                <section class="subscribe">
                    <div class="container flex items-center">
                        <div>
                             <img src="./images/rasberry.png" alt="">
                        </div>
                        <div>
                             <h1>Subscribe to your newsletter</h1>
                             <p>Here you can Find World best Healthy Food News</p>
                             <div class="input-wrap">
                                    <input type="email" placeholder="email@freeshmeal.com">
                                    <button>Subscribe</button>
                             </div>
                        </div>
                    </div>
                </section>
                
                <section class="contact-us flex" id="Contact">
                    <div class="contact-info-wrapper">
                        <h1 class="section-heading">Contact us</h1>
                        <div class="contact-info">
                            <div>
                                <div>
                                    <img src="./icons/phone-2.svg" alt="">
                                    <div>
                                        <span>Call Us:</span>
                                        <span>+88.086841578</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/bag-2.svg" alt="">
                                    <div>
                                        <span>Email:</span>
                                        <span>support@freeshmeal.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/clock-2.svg" alt="">
                                    <div>
                                        <span>Working Hours:</span>
                                        <span>Mon - Sat (8.00am -12.00am</span>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.633075510207!2d90.37047901499503!3d23.760460584584408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5506eb5c45%3A0x6d13d2265f074f5f!2sAsad%20Gate%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1632224448403!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                
                
                </section>
                <section class="our-services" id="Team Member">
                    <div class="container">
                        <h1 class="section-heading">Project Team Member</h1>
                        <div class="card-wrapper flex ">
                            <div class=" service-card magic-shadow-sm team-flex">
                                <h2>Md Mahamudul Hasan</h2>
                                <h4>ID:180204131</h4>

                                <p> <strong> Department of Computer Scicence and Engineering <br>Ahsanullah University of Science of Technology</strong> </p>
                            </div>
                            <div class="service-card magic-shadow-sm team-flex">
                                <h2>Tasmia Tahmida</h2>
                                <h4>ID:180204140</h4>
                                <p> <strong> Department of Computer Scicence and Engineering <br>Ahsanullah University of Science of Technology</strong> </p>
                            </div>
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
            </div>
        </div>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
