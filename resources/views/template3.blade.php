<!DOCTYPE html>
<html>
<head>
    <!--Basics HTML5-->
    <meta charset="utf-8">
    <meta name="author" content="thaer ellouh">
    <meta name="description" content="learn web design">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--My Code-->
    <title>Template3</title>
    {{-- <link rel="stylesheet" href="template3/css/font-awesome.css"> --}}
    <link rel="stylesheet" href="{{URL:: asset('template3/css/font-awesome.css') }}">
    {{-- <link rel="stylesheet" href="template3/css/normalize.css"> --}}
    <link rel="stylesheet" href="{{URL:: asset('template3/css/normalize.css') }}">
    
    {{-- <link rel="stylesheet" href="template3/css/style.css"> --}}
    <link rel="stylesheet" href="{{URL:: asset('template3/css/style.css') }}">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
</head>
    
<body>
    
    <!--Start Header-->
    <div class="header">
        <div class="overlay">
            <div class="container">
                <div class="navbar">
                    <span>Tanatos<span class="logo main-color">Studio</span></span>
                    <span class="links">
                        Menu
                        <i class="fa fa-bars fa-lg"></i>
                    </span>
                </div>
                
               <div class="intro text-center">
                   <h1 class="upper">We Design <span class="main-color">Things</span></h1>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   <div class="buttons">
                        <button class="hire upper">Hire Us</button>
                        <button class="work upper">Our Works</button>
                   </div>
               </div> 
                
                <span class="arrow">
                    <i class="fa fa-chevron-down"></i>
                </span>
            </div>
        </div>
    </div>
    <!--End Header-->
    
    <!--Start Features-->
    <div class="features text-center">
        <div class="container">
            <div class="box">
                <i class="fa fa-print fa-3x"></i>
                <h3 class="upper">print design</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            
            <div class="box">
                <i class="fa fa-laptop fa-3x"></i>
                <h3 class="upper">web design</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            
            <div class="box">
                <i class="fa fa-mobile fa-3x"></i>
                <h3 class="upper">app design</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
            
            <div class="box">
                <i class="fa fa-pencil-square-o fa-3x"></i>
                <h3 class="upper">logo design</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
        </div>
    </div>
    <!--End Features-->
    
    <!--Start Subscribe-->
    <div class="subscribe">
        <div class="overlay">
            <div class="container">
                <form>
                    <input type="email" name="email" placeholder="Enter Your Email address for newsletter">
                    <button class="upper">subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <!--end Subscribe-->
    
    <!--Start Our Works-->
    <div class="our-work text-center">
        <div class="container">
            <h2 class="upper">our <span class="main-color">works</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry<br> text of the printing and typesetting industry.</p>
            <div class="item-box">
                <div class="item">
                    <img src="template3/image/work1.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
            
                <div class="item">
                    <img src="template3/image/work2.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
            
                <div class="item">
                    <img src="template3/image/work3.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
            
                <div class="item">
                    <img src="template3/image/work4.jpeg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
            
                <div class="item">
                    <img src="template3/image/work5.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
                <div class="item">
                    <img src="template3/image/work6.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
                <div class="item hidden">
                    <img src="template3/image/work7.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
                <div class="item hidden">
                    <img src="template3/image/work8.png" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            
                <div class="item hidden">
                    <img src="template3/image/work9.jpg" alt="">
                    <div class="over text-center">
                        <h4 class="upper">Abazo Website</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                        <button class="upper">show project</button>
                    
                    </div>
                </div>
            </div>
           
            <button class="upper show-more">show more</button>
            
        </div>
    </div>
    <!--End Our Works-->
    
    <!--Start Testimonials-->
    <div class="testim text-center">
        <div class="overlay">
            <div class="container">
                <div class="client active">
                    <img src="template3/image/our-team1.jpg" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    <span>Thaer Yousef</span>
                </div>
                <div class="client hidden">
                    <img src="template3/image/our-team2.jpg" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    <span>Hassan Abo Yousef</span>
                </div>
                <div class="client hidden">
                    <img src="template3/image/our-team3.jpg" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    <span>Mahmoud Jalambo</span>
                </div>
                <div class="client hidden">
                    <img src="template3/image/our-team4.jpg" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    <span>Jamal Bata</span>
                </div>
                
                <i class="fa fa-chevron-right fa-2x"></i>
                <i class="fa fa-chevron-left fa-2x"></i>
            </div>
        </div>
    </div>
    <!--End Testimonials-->
    
    <!--Start Our Team -->
    <div class="our-team text-center">
        <div class="container">
            <h2 class="upper">our <span class="main-color">Team</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry<br> text of the printing and typesetting industry.</p>
            
            <div class="team-box">
                <div class="team">
                    <img src="template3/image/team5.jpg" alt="">
                    <span class="upper">catherina gail</span>
                    <i class="fa fa-facebook fa-lg"></i>
                    <i class="fa fa-twitter fa-lg"></i>
                    <i class="fa fa-google-plus fa-lg"></i>
                    <p>Lorem Ipsum is simply dummy text <br> text of the printing .</p>
                </div>
                
                <div class="team">
                    <img src="template3/image/team6.jpg" alt="">
                    <span class="upper">harvey rube</span>
                    <i class="fa fa-facebook fa-lg"></i>
                    <i class="fa fa-twitter fa-lg"></i>
                    <i class="fa fa-google-plus fa-lg"></i>
                    <p>Lorem Ipsum is simply dummy text <br> text of the printing .</p>
                </div>
                
                <div class="team">
                    <img src="template3/image/team7.jpg" alt="">
                    <span class="upper">janit pris</span>
                    <i class="fa fa-facebook fa-lg"></i>
                    <i class="fa fa-twitter fa-lg"></i>
                    <i class="fa fa-google-plus fa-lg"></i>
                    <p>Lorem Ipsum is simply dummy text <br> text of the printing .</p>
                </div>
                
                <div class="team">
                    <img src="template3/image/team8.jpg" alt="">
                    <span class="upper">kevin ward</span>
                    <i class="fa fa-facebook fa-lg"></i>
                    <i class="fa fa-twitter fa-lg"></i>
                    <i class="fa fa-google-plus fa-lg"></i>
                    <p>Lorem Ipsum is simply dummy text <br> text of the printing .</p>
                </div>
            </div>
        </div>
    </div>
     <!--End Our Team -->
    
    <!--Start Contact Us-->
    <div class="contact text-center">
        <div class="overlay">
            <div class="container">
                <h2 class="upper">say <span class="main-color">hello</span></h2>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry<br> text of the printing and typesetting industry.</p>
                
                <form>
                    <input type="email" name="email" placeholder="Your Email">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea placeholder="Your Message"></textarea>
                    <div class="icon">
                        <button>Hire Us</button>
                        <div class="social-icon">
                            <i class="fa fa-facebook fa-lg"></i>
                            <i class="fa fa-twitter fa-lg"></i>
                            <i class="fa fa-google-plus fa-lg"></i>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Contact Us-->
    
    <!--Start Footer-->
    <div class="footer">
        <div class="overlay">
            <div class="container">
                <span class="upper">&copy; 2018 copyright design studio</span>
                <span class="upper">design by &nbsp; <span class="upper main-color"> eng.thaer ellouh</span></span>
            </div>
        </div>
    </div>
    <!--end Footer-->
    
    
    <script src="template3/js/jquery-3.1.1.min.js"></script>
    <script src="template3/js/jquery.nicescroll.min.js"></script>
    <script src="template3/js/custome.js"></script>
</body>
</html>

