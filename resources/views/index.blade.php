<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>African Dating &amp; Singles at etogetherness</title>
  <link href="/users/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="/users/assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/users/font-awesome/css/fontawesome-all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="/users/css/practice.css">
  <script src="https://kit.fontawesome.com/0000000000.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="hero">

  <!--video-->
  <!--video-->
  <!--video-->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="back-video">
    <source src="/users/pexels-askar-abayev-6200804.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!--nav-->

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-md">
      <a class="navbar-brand" href="#" style="color: white; font-weight: bold;"><span>e</span>togetherness</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" style="color: #ffffff" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          {{-- <li class="nav-item">
            <a class="nav-link " href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">ABOUT</a>
          </li>     --}}
          <li class="nav-item">
            <a class="nav-link" href="/login">LOG IN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link register-link" href="/register">REGISTER</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>

  <!-- content -->
  <!-- content -->
  <!-- content -->


  <div class="flex-container">
    <div class="lap col-2 col-xl-6 "> <!--col-8 col-xl-9-->
      <h5> Meet African Singles</h5>
        <p>Largest African Dating Site With Over 4.5 million Members</p>
        <button>View Singles Now</button>
      </div>
<!-- flex form-->
<div class="hi" style="margin-top: 100px;">
  <form action="/register" method="post">
    @csrf
    <p>SIGN UP FOR FREE</p>
      <div class="path">
          <label> Fullname: </label>
          <input type="text" name="name" value="">
          <p class="error-msg">{{ $errors->first("name")}}</p>
      </div>

      <div class="path">
        <label for="">Nickname: </label>
        <input type="text" name="nick_name" value="">
        <p class="error-msg">{{ $errors->first("nick_name")}}</p>
      </div>
      
      <div class="path">
        <label for=""> Gender: </label>
        <select name="gender" class="form-control" id="">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <p class="error-msg">{{ $errors->first("gender")}}</p>
      </div>

    <div class="path">
            <label for="">Email:</label>
            <input type="text" name="email" value="">
            <p class="error-msg">{{ $errors->first("email")}}</p>
    </div>

    <div class="path">
          <label for="">Phone Number:</label>
          <input type="number" name="phone" value="">
          <p class="error-msg">{{ $errors->first("phone")}}</p>
    </div>
    
    <div class="path">
        <label for="">Password:</label>
        <input type="password" name="password">
        <p class="error-msg">{{ $errors->first("password")}}</p>
  </div>

    <div class="roll">
        <button name="submit" id="btn">Sign Up</button>
    </div>
  </form>
  </div>
  </div>

</div>

  <section class="container-md name">
  <div class="flirt">
    <div class="love col-md-6 col-lg-6" style="margin-right: 30px;border: 2px solid #140e32;padding: 5px;">
      <img src="https://images.pexels.com/photos/6190849/pexels-photo-6190849.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" alt="" style="" class="col-lg-12">
    </div>

    <div class="love">
      <div class="text just">
      <h4 style="text-transform: uppercase;font-size: 30px;">Are you looking for a partner?</h4>
      <p style="color: #7d7b7b;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
        Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
      </p>
    </div>
    </div>
  </div>
  </section>
  {{-- <div class="container-md flirt p-5" style="background-color: #f8f8f8;">
    <div class="love">
        <div class="text">
            <h4>Why Choose us?</h4>
            <p style="color: #7d7b7b;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
              Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
              Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
            </p>
          </div>
      </div>
      <div class="love col-md-6 col-lg-6" style="margin-left: 30px;border: 2px solid #140e32;padding: 5px;">
        <img src="https://images.pexels.com/photos/8589004/pexels-photo-8589004.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" alt="" class="col-md-12">
      </div>
    </div>

    <section class="container-md name p-5">
      <div class="flirt">
        <div class="love col-md-6 col-lg-6" style="margin-right: 30px;border: 2px solid #140e32;padding: 5px;">
        <img src="https://images.pexels.com/photos/5710891/pexels-photo-5710891.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" class="col-md-12">
      </div>

        <div class="love">
          <div class="text">
          <h4>Why Choose us?</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
            Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
          </p>
        </div>
        </div>
      </div>
    </section>
  </div> --}}
    <section class="section landing-bg-grey testimonial-section center">
      <div class="container my-2 pt-5">
          <h4> Members Who Have Found Love </h4>
          <div class="pt-4 row">
            <div class="col">
              <div class="">
                <img src="https://images.pexels.com/photos/5635541/pexels-photo-5635541.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" alt="">
              </div>
              <p class="my-4">"I can boldly say I found my soulmate on etogetherness. I am from Ghana and he’s from the USA."</p>
              <dd>Amidal</dd>
            </div>
  
          <div class="col">
            <img src="https://images.pexels.com/photos/11369147/pexels-photo-11369147.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" alt="">
            <p class="my-4">"We found a lasting love...Thank <br>you etogetherness❤"</p><br>
            <dd>Farouk</dd>
          </div>
  
          <div class="col">
            <img src="https://images.pexels.com/photos/5711426/pexels-photo-5711426.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=800" alt="">
            <p class="my-4">""He's the best thing that ever happened to me and I love him so so much"</p>
            <dd>Joey</dd>
          </div>
          </div>
        <div class="p-5">
          <a class="header-color inline-block" href="/en/general/success">
              <button style=" background: rgb(255, 1, 234); padding: 5px; border: none; border-radius: 10px; color: white;" class="p-2">Read Testimonials</button>
          </a>
      </div>
      </div>
    </section>

    <section class="section landing-bg testimonial-section center">
      <div class="container row my-2 pt-5">
          <h4> How It Works</h4>
          <p>Get started on etogetherness.com today in 3 simple steps:</p>
        <div class="col">
          <img src="https://images.pexels.com/photos/2219275/pexels-photo-2219275.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
          <h6 class="my-4">Create A Profile</h6>
          <p>Create your profile in seconds with our easy sign-up. Don't forget to add a photo!</p>
        </div>

        <div class="col" style="background-size: cover; background-position: center;">
          <img src="https://images.pexels.com/photos/7236739/pexels-photo-7236739.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
          <h6 class="my-4">Browse Photos</h6>
          <p>Search our large member base with ease, with a range of preferences and settings.</p><br>
        </div>

        <div class="col">
          <img src="https://images.pexels.com/photos/5710892/pexels-photo-5710892.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
          <h6 class="my-4">Start Communicating</h6>
          <p>"Send a message or interest to start communicating with members. It's your time to shine</p>
        </div>

        <div class="p-5">
          <a class="header-color inline-block" href="/en/general/success">
              <button style=" background: rgb(255, 1, 234); padding: 5px; border: none; border-radius: 10px; color: white;" class="p-2">Read Testimonials</button>
          </a>
      </div>
      </div>
    </section>

    <section class="header">
    <div class="text-box">
      <h2>etogetherness</h2>
      <div class="btn-box padding-top-30px">
        <a href="#" class="d-inline-block m-3">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/2560px-Download_on_the_App_Store_Badge.svg.png" class="col-md-6" style="width: 175px;">
        </a>
        <a href="#" class="d-inline-block" style="border: 1px solid #929292; border-radius: 5px;">
          <img src="https://techcrunch.com/wp-content/uploads/2012/03/google-play-logo.jpg" alt="" style="width: 175px;">
        </a>
    </div>
      {{-- <button style=" background: rgb(255, 1, 234); padding: 5px; border: none; border-radius: 10px; color: white;" class="p-2">Read More</button> --}}
    </div>
  </section>
</body></html>