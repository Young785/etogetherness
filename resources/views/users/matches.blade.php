@include('users.includes.header')
@include('users.includes.sidebar')
<link rel="stylesheet" href="/users/css/dashboard.css">
        <nav class="navbar navbar-expand-lg">
            <div class="container-md">
              <a class="navbar-brand" href="#" style="color: white; font-weight: bold;"><i class="fa-regular fa-heart">LOGO</i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item">
                    <a href="" class="nav-link text-white">4938
                      <i class="fa-solid fa-user"></i></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Register</a>
                  </li>
        
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Matches</a>
                  </li>
        
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Search</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Messages</a>
                  </li>
  
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Activities</a>
                  </li>
  
                  
                    <a class="nav-link text-white pad" href="#"><button id="hop">Say goodbye to ads<br/>Upgrade Membership</button></a>
                  
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fa-solid fa-globe"></i></a>
                    </li>
  
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fa-solid fa-address-card"></i></a>
                    </li>
  
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#"><i class="fa-solid fa-gear"></i></a>
                    </li>
  
                    
                </ul>
                
              </div>
            </div>
          </nav>

          <div class="another">
            <nav class="how navbar navbar-expand-lg">
                <div class="container-md">
                  <a class="navbar-brand" href="#" style="color: white; font-weight: bold;"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      
                      <li class="one nav-item">
                        <a href="" class="nav-link text-white">My Matches</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Mutual Matches &nbsp;<i class="fa-solid fa-unlock"></i></a>
                      </li>
            
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Reverse Matches &nbsp;<i class="fa-solid fa-unlock"></i></a>
                      </li>
                                              
                    </ul>
                    
                  </div>
                </div>
              </nav>
          </div>

        
    <div class="container-fluid">
        <div class="grid-container">
            @foreach ($users as $user)
                <div class="grid-item">
                    <a href="#">
                        @if ($user->gender == "male")
                            <img src="/users/img/male.jpeg" class="card-img-top" style= "height: 200px;" alt="...">
                        @else
                            <img src="/users/img/female.png" class="card-img-top" style= "height: 200px;" alt="...">
                        @endif
                        @if ($user->online_status == "1")
                            <i class="fa-solid fa-circle online_status"></i>
                        @else
                            <i class="fa-solid fa-circle offline_status"></i>
                        @endif
                    </a>
                    <div class="card-content">
                        <div class="card-text">
                        <h6>{{ substr($user->name, 0, 15) }} <i class="fa-solid fa-user"></i></h6>
                        <p>{{ substr(''.$user->city.' '.$user->state.' '.$user->country, 0, 20), '...' }}</p></p>
                        <p>Seeking: {{ $user->looking_for }} {{ $user->seeking_age_from }} - {{ $user->seeking_age_to }}</p>
                        @if ($user->online_status == "0")
                            <p>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</p>
                            @else
                            <p>Active now.</p>
                       @endif
                        </div>
                        
                        <div class="icons" style="display: flex; justify-content:space-between;">
                            <i class="fa-regular fa-heart"></i>
                            <span>
                                <a href="{{ route('oneUserMessage', $user->user_secid) }}" class="text-dark">
                                    <i class="fa-regular fa-message"></i>
                                </a>
                            </span>
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function (){
            el.classList.toggle("toggled")
        }
    </script>
</body>
</html>