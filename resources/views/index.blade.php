<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Dating & Singles at etogetherness</title>
    <link href="/users/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="/users/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            
            <li class="nav-item">
              <a class="nav-link " href="#" >HOME</a>
            </li>
            
            <!--<li class="nav-item">
              <a class="nav-link" href="#">REGISTER</a>
            </li>-->
  
            <li class="nav-item">
              <a class="nav-link" href="/login">LOG IN</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="/about">ABOUT</a>
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
  <div class="hi">
    <form action="/register" method="post">
      @csrf
      <p>SIGN UP FOR FREE</p>
        <div class="path">
            <label> First Name: </label>
            <input type="text" name="name" value="{{ old("name")}}" >
            <p class="error-msg">{{ $errors->first("name")}}</p>
        </div>

        <div class="path">
          <label for=""> Other Names: </label>
          <input type="text" name="other_name" value="{{ old("other_name")}}" >
          <p class="error-msg">{{ $errors->first("other_name")}}</p>
        </div>

        <div class="path">
          <label for="">Nickname: </label>
          <input type="text" name="nick_name" value="{{ old("nick_name")}}">
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
              <input type="text" name="email" value="{{ old("email")}}">
            <p class="error-msg">{{ $errors->first("email")}}</p>
      </div>

      <div class="path">
            <label for="">Phone Number:</label>
            <input type="number" name="phone" value="{{ old("phone")}}">
            <p class="error-msg">{{ $errors->first("phone")}}</p>
      </div>
      
      <div class="path">
          <label for="">Password:</label>
          <input type="password" name="password">
          <p class="error-msg">{{ $errors->first("password")}}</p>
    </div>
  
      <div class="roll">
          <button name="submit" id="btn" >Sign Up</button>
      </div>
    </form>
    </div>
    </div>

  </div>
  
  <section class="container-md name" style="
  padding: 50px 50px;
">
  <div class="flirt">
    <div class="love" style="margin-right: 30px;border: 2px solid #140e32;padding: 5px;">
      <img src="https://img.freepik.com/free-photo/couple-love-focus-hands-lovers-love-concept_1150-7224.jpg" alt="" style="
  width: 500px;
">
    </div>

    <div class="love">
      <div class="text just">
      <h4 style="
  text-transform: uppercase;
  font-size: 30px;
">Are you looking for a partner?</h4>
      <p style="
  color: #7d7b7b;
">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
        Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
      </p>
    </div>
    </div>
  </div>
</section>

<div class="back" style="
padding: 50px 50px;
">
<section class="container-md mane">
    <div class="container-md flirt">
        <div class="love">
            <div class="text">
                <h4>Why Choose us?</h4>
                <p style="
color: #7d7b7b;
">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
                Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae laboriosam, nobis laborum sequi veniam adipisci.
                Since 2002, etogetherness has connected thousands of African singles around the world, making it the largest and most trusted African dating site. With a remarkable member base of over 4.5 million (and growing), we connect thousands of single men and women internationally.
                
                </p>
            </div>
        </div>
        <div class="love" style="margin-left: 30px;border: 2px solid #140e32;padding: 5px;">
<img src="https://c.tadst.com/gfx/750w/lovers-day-fun1.jpg" alt="" style="
width: 500px;
">
</div>
    </div>
</section>
</div>

<section class="container-md name" style="
    padding: 50px 50px;
">
      <div class="flirt">
        <div class="love" style="margin-right: 30px;border: 2px solid #140e32;padding: 5px;">
        <img src="https://femina.wwmindia.com/content/2019/dec/couple21576824515.jpg" "="" alt="" style="
    width: 500px;
">
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

    <section class="section landing-bg-grey testimonial-section center">
 
        <div class="container row my-2">
            <h4> Members Who Have Found Love </h4>
          <div class="col">
            <img src="/users/img/down.jpg" alt="">
            <p class="my-4">"I can boldly say I found my soulmate on etogetherness. I am from Ghana and he’s from the USA."</p>
            <dd>Amidal</dd>
          </div>
  
          <div class="col">
            <img src="/users/img/image.jpg" alt="">
            <p class="my-4">"We found a lasting love...Thank <br/>you etogetherness❤"</p><br/>
            <dd>Farouk</dd>
          </div>
  
          <div class="col">
            <img src="/users/img/image2.jpg" alt="">
            <p class="my-4">""He's the best thing that ever happened to me and I love him so so much"</p>
            <dd>Joey</dd>
          </div>

          <div class="p-5">
            <a class="header-color inline-block" href="/en/general/success">
                <button style=" background: rgb(255, 1, 234); padding: 5px; border: none; border-radius: 10px; color: white;" class="p-2">Read Testimonials</button>
            </a>
        </div>
        </div>
      </section>

      <section class="section landing-bg testimonial-section center">
 
        <div class="container row my-2">
            <h4> How It Works</h4>
            <p>Get started on etogetherness.com today in 3 simple steps:</p>
          <div class="col">
            <img src="/users/img/images.jpg" alt="">
            <h6 class="my-4">Create A Profile</h6>
            <p >Create your profile in seconds with our easy sign-up. Don't forget to add a photo!</p>
          </div>
  
          <div class="col" style="background-size: cover; background-position: center;">
            <img src="/users/img/coup.jpg" alt="">
            <h6 class="my-4">Browse Photos</h6>
            <p>Search our large member base with ease, with a range of preferences and settings.</p><br/>
          </div>
  
          <div class="col">
            <img src="/users/img/couple.jpg" alt="">
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
        <button style=" background: rgb(255, 1, 234); padding: 5px; border: none; border-radius: 10px; color: white;" class="p-2">Read More</button>
      </div>
    </section>
    

    <!--<footer class="py-5 px-5">
      <div class="row">
        <div class="col-2">
          <h5>Visit our other sites</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>© 2021 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>-->

    <footer class="bg-dark text-white pt-5 pb-4">

      <div class="container text-center text-md-left">

        <div class="row text-center text-md-left">

          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class=" mb-4 font-weight-bold text-warning">
                etogetherness
            </h5>
            <p>where you Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, sunt qui. Consequatur expedita perspiciatis, id sequi, est amet enim atque aperiam porro iste beatae, hic quasi eum adipisci mollitia quibusdam?</p>

          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase">Products</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;">About</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">About</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">About</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">About</a>
              </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Up Coming</h5>
              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Register</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Register</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Register</a>
              </p>

              <p>
                <a href="#" class="text-white" style="text-decoration: none;">Register</a>
              </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Up Coming</h5>
            <p>
              <a href="#" class="text-white" style="text-decoration: none;">Register</a>
            </p>

            <p>
              <a href="#" class="text-white" style="text-decoration: none;">Register</a>
            </p>

            <p>
              <a href="#" class="text-white" style="text-decoration: none;">Register</a>
            </p>

            <p>
              <a href="#" class="text-white" style="text-decoration: none;">Register</a>
            </p>
        </div>

        </div>
      </div>

    </footer>

</body>
</html>