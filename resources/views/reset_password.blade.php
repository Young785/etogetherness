<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>ETogetherness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
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
                            <h3 style="text-decoration: underline">ETogetherness</h3>
                            {{-- <a href="/"><img src="/assets/images/logo/logo.png" alt="logo"></a> --}}
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
                <div class="image image-log"></div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header inloginp">
                            <h2 class="title">Welcome to ETogetherness</h2>
                        </div>
                        <div class="main-content inloginp">
                            <form action="/password/send_reset_link" method="POST">
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
								@endif
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="email" class="my-form-control" name="email" placeholder="Enter Your Email">
                                    <p class="error-msg">{{ $errors->first("email")}}</p>
                                </div>
                                {{-- <p class="f-pass">Forgot your password? <a href="/password/reset">recover password</a></p> --}}
                                <div class="text-center">
                                    <button type="submit" class="default-btn"><span>Recorver Password</span></button>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="default-btn reverse"><img src="/assets/images/login/google.png" alt="google"> <span>Sign Up with Google</span></a>
                                    <p class="or-signup"> Don't have an account? <a href="/register" class="text-decoration-underline">Sign up here</a></p>
                                </div>
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
	<!-- <script src="assets/js/all.min.js"></script> -->
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
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="../../../../www.google-analytics.com/analytics.js" async></script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/ollya/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Aug 2022 20:37:57 GMT -->
</html>