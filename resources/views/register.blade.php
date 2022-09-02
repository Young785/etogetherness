<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>ETogetherness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicsn -->
	<link rel="icon" type="image/png" href="/assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/all.min.css">
	<link rel="stylesheet" href="/assets/css/swiper.min.css">
	<link rel="stylesheet" href="/assets/css/lightcase.css">
	<link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="/">
                                <h3 style="text-decoration: underline">ETogetherness</h3>
                                {{-- <img src="/assets/images/logo/logo.png" alt="logo"> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="/" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header">
                            <h2 class="title">Welcome to ETogetherness </h2>
                            <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account. </p>
                        </div>
                        <div class="main-content">
                            <form action="/register" method="POST">
                                @csrf
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" class="my-form-control" value="{{ old("first_name")}}" name="first_name" placeholder="Enter Your Name">
                                    <p class="error-msg">{{ $errors->first("first_name")}}</p>
                                </div>
                                <div class="form-group">
                                    <label>I am a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender" value="{{ old("gender") ?? "male" }}" id="male"><label for="male">Male</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="gender" value="{{ old("gender") ?? "female" }}" id="female"><label for="female">Female</label>
                                        </div>
                                    </div>
                                    <p class="error-msg">{{ $errors->first("gender")}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Looking for a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="looking_for" value="{{ old("looking_for") ?? "male"}}" id="males"><label for="males">Male</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="looking_for" value="{{ old("looking_for") ?? "female" }}" id="females"><label for="females">Female</label>
                                        </div>
                                    </div>
                                    <p class="error-msg">{{ $errors->first("looking_for")}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Birthday*</label>
                                    <select class="my-form-control" name="age" value="{{ old("age")}}" id="age_no">
                                    </select>
                                    <p class="error-msg">{{ $errors->first("age")}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Email Address*</label>
                                    <input type="email" class="my-form-control" value="{{ old("email")}}" name="email" placeholder="Enter Your Email">
                                    <p class="error-msg">{{ $errors->first("email")}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="password" class="my-form-control" name="password" placeholder="Enter Your Password">
                                    <p class="error-msg">{{ $errors->first("password")}}</p>
                                </div>
                                <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>View Singles Now</span></button>
                                <p class="text-center mt-5">Already have an Account? 
                                    <a href="/login" class="text-decoration-underline">Login</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

	
	

	<!-- All Needed JS -->
	<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="/assets/js/isotope.pkgd.min.js"></script>
	<script src="/assets/js/swiper.min.js"></script>
	<!-- <script src="/assets/js/all.min.js"></script> -->
	<script src="/assets/js/wow.js"></script>
	<script src="/assets/js/counterup.js"></script>
	<script src="/assets/js/jquery.countdown.min.js"></script>
	<script src="/assets/js/lightcase.js"></script>
	<script src="/assets/js/waypoints.min.js"></script>
	<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/plugins.js"></script>
	<script src="/assets/js/main.js"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
        $(function(){
            var $select = $("#age_no");
            for (i=18;i<=99;i++){
                $select.append($('<option></option>').val(i).html(i))
            }
        });
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview');
	</script>
	<script src="../../../../www.google-analytics.com/analytics.js" async></script>
</body>
</html>