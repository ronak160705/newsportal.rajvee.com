
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <style>
        /* styles.css */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-section {
    flex-basis: calc(25% - 20px);
    margin-right: 20px;
}

 .footer-section h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color:#fff;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin-bottom: 5px;
}

a {
    color: #fff;
    text-decoration: none;
}

/* Add styling for social media icons and other elements as needed */

    </style>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="style1.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {
        // Array of image URLs
        var images = [
            "image/k1.jpg",
            "image/a6.jpg",
            "image/w1.jpg",
            "image/w2.jpg"
            // Add more image URLs as needed
        ];

        var currentImageIndex = 0;
        var $currentImage = $("#currentImage");

        // Function to change the image
        function changeImage() {
            $currentImage.fadeOut(500, function () {
                $currentImage.attr("src", images[currentImageIndex]);
                $currentImage.fadeIn(500);
            });

            // Move to the next image
            currentImageIndex++;
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }
        }

        // Initial image
        $currentImage.attr("src", images[currentImageIndex]);

        // Change image every 3 seconds (adjust the interval as needed)
        setInterval(changeImage, 3000);
    });
</script>

    
        
</head>


<body>
    <!-- Topbar Start -->

        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary" style="size:25px;">News<span class="text-secondary font-weight-normal">Portal</span></h1>
                </a>
            </div>
        </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="home.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary"><span class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="home.html" class="nav-item nav-link">Home</a>
                    <a href="aboutus.php" class="nav-item nav-link active">aboutus</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu rounded-0 m-0">
                            <a href="Sports.php" class="dropdown-item">Sports</a>
                            <a href="Politics.php" class="dropdown-item">Politics</a>
                            <a href="Business.php" class="dropdown-item">Bussiness</a>
                        </ul>
                    </div>
                    <a href="contect.php" class="nav-item nav-link">contect</a>
                    <a href="signup.php" class="nav-item nav-link">Signup</a>
                    <a href="login1.php" class="nav-item nav-link">Login1</a>
                    <a href="admin2/login.php" class="nav-item nav-link">Admin</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


   

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3" id="imageSlideshow">
                        <img class="img-fluid w-100" src="image/k1.jpg" style="object-fit: cover;" id="currentImage">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-body" href="">Jan 01, 2045</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Business related</h1>
                            <p>Automobile retail sales see 10% growth in August, private vehicle sector grows 6.5%: FADA</p>
                            <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                justo dolore sit invidunt.</p>
                            <h3 class="text-uppercase font-weight-bold mb-3">Politics related news</h3>
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="politics.php">Politices</a>
                                <a class="text-body" href="">Jan 01, 2045</a>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="image/k12.jpg" id="currentImage">
                            <p>INDIA bloc criticises reported decision to rename country Bharat, accuse Modi govt of tweaking Constitution</p>
                                Read more at:
                                https://economictimes.indiatimes.com/news/politics-and-nation/india-bloc-criticises-reported-decision-to-rename-country-bharat-accuse-modi-govt-of-tweaking-constitution/articleshow/103387218.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst</p>
                            <h5 class="text-uppercase font-weight-bold mb-3">Sports</h5>
                            <img class="img-fluid w-50 float-right mr-4 mb-2" src="image/h1.jpg">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="Sports.php">Sports</a>
                                <a class="text-body" href="">Jan 01, 2045</a>
                            <p>When compared to other democracies, India has had a large number of political parties during its history under democratic governance. It has been estimated that over 200 parties were formed after India became independent in 1947. And as per the current publication report dated 23 September 2021 from the Election Commission of the India, the total number of parties registered was 2858, with 9 national parties and 54 state parties, and 2796 unrecognized parties working in country.[5]</p>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- News Detail End -->

                    
                    <div class="comments">
                        
                
                        <!-- Comment Form -->
                        
                
                        <!-- Comment Display Area -->
                        <div class="comment-list">
                            <!-- Comments will be displayed here dynamically -->
                        </div>
                    </div>
                
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    
                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                               
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://www.businesstoday.in/">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://www.businesstoday.in/">Quant MF picked Adani Enterprises, Adani Power shares in August; these funds bought Jio Financial stocks</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://indianexpress.com/article/political-pulse/today-in-politics-india-seat-sharing-lok-sabha-polls-8937517/">Politics</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://indianexpress.com/article/political-pulse/today-in-politics-india-seat-sharing-lok-sabha-polls-8937517/">Today in Politics | INDIA to set the ball rolling on seat-sharing; </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://economictimes.indiatimes.com/coronavirus">covid-19</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://economictimes.indiatimes.com/coronavirus">Covid-19 no longer qualifies as a global emergency


Read more at:
</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://www.theartnewspaper.com/">Arts</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://www.theartnewspaper.com/">Handed over in an Ikea bag': art detective recovers Van Gogh painting stolen from Dutch museum</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://indianexpress.com/section/entertainment/">Entertainment</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://indianexpress.com/section/entertainment/">Jawan: Shah Rukh Khan’s movie asks the tantalising question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular News End -->



                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="https://indianexpress.com/article/political-pulse/today-in-politics-india-seat-sharing-lok-sabha-polls-8937517/" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="https://www.businesstoday.in/" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="https://www.businesstoday.in/" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="https://economictimes.indiatimes.com/coronavirus" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="https://www.businesstoday.in/" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>About your news portal and its mission.</p>
               
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: rajvee311@gmail.com</p>
                <p>Phone: 9725498410</p>
                <p>Address: 123 Main Street, City, Country</p>
            </div>
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="home.php">home</a></li>
                    <li><a href="aboutus.php">aboutus</a></li>
                    <li><a href="comment.php">comment</a></li>
                    <li><a href="feedback.php">feedback</a></li>
                    
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
           <marquee> ..........Thank you visiting my website.......</marquee>
            
        </div>
    </footer>
</body>
</html>
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>