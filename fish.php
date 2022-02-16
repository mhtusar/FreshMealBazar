<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My awesome food store</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
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
                        <a href="#">0 Items - (tk. 0.00)</a>
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Fruits</a>
                        </li>
                        <li>
                            <a href="#">Vegetables</a>
                        </li>
                        <li>
                            <a href="#">Organic Food</a>
                        </li>
                        <li>
                            <a href="#">Fresh Fish</a>
                        </li>
                        <li>
                            <a href="#">Fresh Meat</a>
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
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                
                <header class="topbar ">
                    <div class="container flex justify-between">
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
                <nav > 
                    <div class="top ">
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
                    <nav class="sticky-top"> 
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="http://localhost/FreshMealBazar/index.php#" >Home</a>
                            <a href="http://localhost/FreshMealBazar/fruits.php#">Fruits </a>
                            <a href="http://localhost/FreshMealBazar/vagetables.php#">Vagetables</a>
                            <a href="http://localhost/FreshMealBazar/organic_food.php##">Organic Food</a>
                            <a href="http://localhost/FreshMealBazar/fish.php#"class="active">Fresh Fish</a>
                            <a href="http://localhost/FreshMealBazar/meat.php#">Fresh Meat</a>
                           

                        </div>
                    </div>
                </nav> 
                <section class="top-products">
                    <div class="container">
                         <h1 class="section-heading ">Fresh Fish</h1>
                         
                
                        <div class="slider">
                            <!-- <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
                            <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button> -->
                
                         <div class="food-slider">
                             <div class="food-card magic-shadow-sm">
                                 <div class="product-image flex items-center justify-center">
                                     <img src="./images/fish1.jpg" alt="">
                                 </div>
                                 <hr>
                                 <div>
                                     <h2 class="text-center">Desi Koi</h2>
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
                                    <img src="./images/fish2.jpg" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Katla</h2>
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
                                    <img src="./images/fish3.jpg" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Pabda </h2>
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
                                    <img src="./images/fish4.jpg" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Golda Chingri</h2>
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
                     

                    <!-- 2nd part -->
                    <div class="slider">
                            <!-- <button class="slider-btn prev-btn"><img src="./icons/pre.svg" alt=""></button>
                            <button class="slider-btn next-btn"><img src="./icons/next.svg" alt=""></button>
                 -->
                         <div class="food-slider">
                             <div class="food-card magic-shadow-sm">
                                 <div class="product-image flex items-center justify-center">
                                     <img src="./images/fish5.jpg" alt="">
                                 </div>
                                 <hr>
                                 <div>
                                     <h2 class="text-center">RupChada</h2>
                                     <div class="stars flex justify-center items-center ">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/start-filled.svg" alt="">
                                         <img src="./icons/star-grey.svg" alt="">
                                         <img src="./icons/star-grey.svg" alt="">
                                     </div>
                                     <div class="price text-center">
                                         Per kg 850 tk.
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
                                    <img src="./images/fish6.php" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Faisaha</h2>
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
                                    <img src="./images/fish7.jpg" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center"> Rui Deshi </h2>
                                    <div class="stars flex justify-center items-center ">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/start-filled.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                        <img src="./icons/star-grey.svg" alt="">
                                    </div>
                                    <div class="price text-center">
                                        Per kg 240 tk.
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
                                    <img src="./images/fish8.jpg" alt="">
                                </div>
                                <hr>
                                <div>
                                    <h2 class="text-center">Deshi Mixed</h2>
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
                       
                    <!-- 2nd part -->

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
