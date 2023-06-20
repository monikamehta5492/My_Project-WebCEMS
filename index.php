<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Employee_details</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/animated-services.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md d-md-flex d-lg-flex d-xl-flex justify-content-lg-end" style="background: rgba(23,231,43,0);">
        <div class="container-fluid"><a class="navbar-brand" data-bs-hover-animate="flash" href="index.html" style="margin-right: 0px;padding: 0px;font-size: 22px;color: rgba(52,30,191,0.9);"><strong>CEMS</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse d-md-flex d-lg-flex justify-content-md-end justify-content-lg-end" id="navcol-1">
                <h1 data-bs-hover-animate="pulse" style="color: #ffffff;filter: blur(0px) brightness(0%);margin-bottom: 9px;margin-left: 0px;"><strong>Web Construction Employee Management System (CEMS)</strong></h1>
                <ul class="nav navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item" style="width: 158px;"><a class="nav-link" data-bs-hover-animate="flash" href="Signin.html" style="margin-left: 83px;height: 62px;width: 89px;font-size: 22px;color: rgb(84,61,220);"><strong>Sign in</strong></a></li>
                    <li class="nav-item"></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron" data-bs-hover-animate="pulse" style="background: url(&quot;assets/img/StockSnap_EJZBX7UMTV.jpg&quot;);background-size: cover;opacity: 0.96;filter: blur(0px);height: 520px;">
            <p></p>
        </div>
        <section id="services" class="services">
            <div class="container-md section-title">
                <div class="text-center" data-aos="fade">
                    <h5 class="d-inline-block justify-content-lg-center" style="background-color: #e2d6b5;width: 120px;margin-left: 0px;border-radius: 30px;padding: 5px;margin-top: 20px;color: #ffffff;font-size: 18px;">SERVICES</h5>
                    <h2 data-aos="flip-right" style="color: #75aadb;">We Offer Awesome<span style="color: #d12d33;"><strong>&nbsp;Services</strong></span></h2>
                    <p class="d-inline-block" style="width: 55%;"><strong>Our website provides full assist to agents to maintain their construction site employee data.</strong><br>&nbsp; &nbsp;&nbsp;</p>
                </div>
                <div class="row" style="height: 329px;">
                    <div class="col-12 text-center bounce animated col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="text-center icon-box">
                            <div class="icon"><i class="fab fa-dribbble" style="margin-bottom: 15px;"></i>
                                <h4 class="title"><a href="untitled.html">Maintain Employee details</a></h4>
                                <p class="description">Update data and shifts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center bounce animated col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="text-center icon-box">
                            <div class="icon"><i class="fab fa-renren" style="margin-bottom: 15px;"></i>
                                <h4 class="title"><a href="#">Canteen Facilities</a></h4>
                                <p class="description">Check Menus and charges of canteen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="text-center bounce animated icon-box">
                            <div class="icon"><i class="fab fa-codepen" style="margin-bottom: 15px;"></i>
                                <h4 class="title"><a href="#">Transport Details</a></h4>
                                <p class="description">Check transport timings and Pick-up points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="text-center bounce animated icon-box">
                            <div class="icon"><i class="fab fa-telegram" style="margin-bottom: 15px;"></i>
                                <h4 class="title"><a href="#">Feedback form</a></h4>
                                <p class="description">Provide feedback on employees performance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-4 col-xl-3"><img data-bs-hover-animate="pulse" src="assets/img/img5.jpg" style="width: 350px;height: 466px;margin-left: 55px;"></div>
            <div class="col-lg-4 col-xl-3 offset-xl-1"><img class="d-lg-flex flex-shrink-1 flex-fill" data-bs-hover-animate="pulse" src="assets/img/img7.jpg" style="width: 350px;height: 466px;margin-left: 40px;"></div>
            <div class="col-lg-4 col-xl-3 offset-xl-1"><img data-bs-hover-animate="pulse" src="assets/img/img6.jpg" style="width: 350px;height: 466px;margin-left: 30px;"></div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);"></p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
</body>

</html>