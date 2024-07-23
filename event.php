<?php
// event.php

// Include the database connection file
require 'db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CaterServ - Catering Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

            <!-- Meta Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1291509091815073');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1291509091815073&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-546ZSX1HHP"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-546ZSX1HHP'); </script>
    
<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Parampara<span class="text-dark">Exhibition</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Services</a>
                            <a href="event.php" class="nav-item nav-link active">Events</a>
                            <!-- <a href="menu.html" class="nav-item nav-link">Menu</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="book.html" class="dropdown-item">Booking</a>
                                    <a href="blog.html" class="dropdown-item">Our Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <!-- <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                        <a href="./bookAppoinment.html" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Events</h1>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Events Gallery Start -->
        <div class="container-fluid event py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
                    <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                    <?php
                        $first_tab = true;

                        try {
                            $stmt = $conn->prepare("SELECT text_input, image_path, paragraph_input FROM custom");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            while ($row = $result->fetch_assoc()) {
                                $text_input = htmlspecialchars($row['text_input']);
                                $tab_id = htmlspecialchars($text_input);
                                $paragraph_input = htmlspecialchars($row['paragraph_input']);

                                // Add the 'active' class to the first tab
                                $active_class = $first_tab ? 'active' : '';

                                echo '<li class="nav-item p-2 ' . $active_class . '">';
                                echo '<a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-' . $tab_id . '">';
                                echo '<span class="text-dark" style="width: 150px;">' . $text_input . '</span>';
                                echo '</a>';
                                echo '</li>';
                                
                                // Reset $first_tab after setting the first tab to 'active'
                                $first_tab = false;
                            }
                        } catch (Exception $e) {
                            die("Error: " . $e->getMessage());
                        }
                        $stmt->close();
                        ?>
                    </ul>
                    <div class="tab-content">
                        <?php
                        // Re-establish the connection for fetching images
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $first_tab = true; // Reset $first_tab to ensure the first tab pane gets 'active show' class

                        try {
                            $stmt = $conn->prepare("SELECT text_input, image_path, paragraph_input FROM custom");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            while ($row = $result->fetch_assoc()) {
                                $text_input = htmlspecialchars($row['text_input']);
                                $tab_id = htmlspecialchars($text_input);
                                // Unserialize image_path
                                $image_paths = unserialize($row['image_path']);
                                $paragraph_input = htmlspecialchars($row['paragraph_input']);

                                // Add the 'active' class to the first tab pane
                                $active_class = $first_tab ? 'active show' : '';
                                
                                echo '<div id="tab-' . $tab_id . '" class="tab-pane fade show p-0 ' . $active_class . '">';
                                echo '<div class="row g-4">';
                                
                                foreach ($image_paths as $image_path) {
                                    echo '<div class="col-md-6 col-lg-3">';
                                    echo '<div class="event-img position-relative">';
                                    echo '<img class="img-fluid rounded w-100" src="' . htmlspecialchars($image_path) . '" alt="">';
                                    echo '<div class="event-overlay d-flex flex-column p-4">';
                                    echo '<h4 class="me-auto">' . $text_input . '</h4>';
                                    echo '<a href="' . htmlspecialchars($image_path) . '" data-lightbox="event-' . $tab_id . '" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }

                                // Display paragraph input within each tab
                                
                                echo '</div>';
                                echo '<br>';
                                echo '<br>';
                                echo '<br>';
                                echo '<br>';
                                echo '<div class="col-lg-7 wow bounceInUp" data-wow-delay="0.1s">';
                                echo '<small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About the '. $text_input . ' </small>';
                                //  echo '<h1 class="display-5 mb-4">' . $text_input . '</h1>';
                                echo '<p class="mb-4">' . $paragraph_input . '</p>';
                                echo '</div>';
                                echo '</div>';
                                
                                // Reset $first_tab after setting the first tab pane to 'active show'
                                $first_tab = false;
                            }
                        } catch (Exception $e) {
                            die("Error: " . $e->getMessage());
                        }
                        $stmt->close();
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events Gallery End -->

        <!-- Book Us Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="img/2.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <form method="POST" action="insert_order.php">
                            <div class="text-center">
                                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                                <h1 class="display-5 mb-5">Where you want Our Services</h1>
                            </div>
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="fname" name="fname" class="form-control border-primary p-2" placeholder="First Name">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="lname" name="lname" class="form-control border-primary p-2" placeholder="Last Name">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="cn" name="cn" class="form-control border-primary p-2" placeholder="Company Name">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="houseadd" name="houseadd" class="form-control border-primary p-2" placeholder="Address">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="city" name="city" class="form-control border-primary p-2" placeholder="Town City">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" id="state" name="state" required aria-label="Default select example">
                                      <option value="select">Select a state...</option>
                                      <option value="AP">Andhra Pradesh</option>
                                      <option value="AR">Arunachal Pradesh</option>
                                      <option value="AS">Assam</option>
                                      <option value="BR">Bihar</option>
                                      <option value="CT">Chhattisgarh</option>
                                      <option value="GA">Goa</option>
                                      <option value="GJ">Gujarat</option>
                                      <option value="HR">Haryana</option>
                                      <option value="HP">Himachal Pradesh</option>
                                      <option value="JK">Jammu and Kashmir</option>
                                      <option value="JH">Jharkhand</option>
                                      <option value="KA">Karnataka</option>
                                      <option value="KL">Kerala</option>
                                      <option value="MP">Madhya Pradesh</option>
                                      <option value="MH">Maharashtra</option>
                                      <option value="MN">Manipur</option>
                                      <option value="ML">Meghalaya</option>
                                      <option value="MZ">Mizoram</option>
                                      <option value="NL">Nagaland</option>
                                      <option value="OR">Odisha</option>
                                      <option value="PB">Punjab</option>
                                      <option value="RJ">Rajasthan</option>
                                      <option value="SK">Sikkim</option>
                                      <option value="TN">Tamil Nadu</option>
                                      <option value="TG">Telangana</option>
                                      <option value="TR">Tripura</option>
                                      <option value="UP">Uttar Pradesh</option>
                                      <option value="UT">Uttarakhand</option>
                                      <option value="WB">West Bengal</option>
                                      <option value="AN">Andaman and Nicobar Islands</option>
                                      <option value="CH">Chandigarh</option>
                                      <option value="DN">Dadra and Nagar Haveli and Daman and Diu</option>
                                      <option value="LD">Lakshadweep</option>
                                      <option value="DL">Delhi</option>
                                      <option value="PY">Puducherry</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="postcode" name="postcode" required class="form-control border-primary p-2" placeholder="Postcode / ZIP">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" id="phone" name="phone" required class="form-control border-primary p-2" placeholder="Your Contact No.">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" id="email" name="email" required class="form-control border-primary p-2" placeholder="Enter Your Email">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Book Appointment</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="img/1.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">Parampara<span class="text-dark"><br>Exhibition</span></h1>
                            <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" >
                        <div class="footer-item">
                            <h4 class="mb-4">Special Facilities</h4>
                            <div class="d-flex flex-column align-items-start">
                              <a class="text-body mb-3" ><i class="fa fa-check text-primary me-2"></i>Seamless Solutions</a>
                              <a class="text-body mb-3" ><i class="fa fa-check text-primary me-2"></i>Unmatched Execution</a>
                              <a class="text-body mb-3" ><i class="fa fa-check text-primary me-2"></i>Innovative Concepts</a>
                              <a class="text-body mb-3" ><i class="fa fa-check text-primary me-2"></i>Customer Support</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" >
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> C- 702,
                                    Titanium city centre, Satellite,
                                    Ahmedabad - 380051</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> +91 98250 63046</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> parmpara369@gmail.com</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Social Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                     <img src="img/4.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/5.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/6.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/7.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/1.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/2.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="./index.html"><i class="fas fa-copyright text-light me-2"></i>Parampara Exhibition</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                       <a class="border-bottom" href="https://paramparaexhibition.com">Privacy Policy</a>&nbsp; Designed By <a class="border-bottom" href="https://paramparaexhibition.com">Parampara Exhibition</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
