@include('users.includes.header')
@include('users.includes.sidebar')
    <link rel="stylesheet" href="/users/css/dashboard.css">
    @if (Auth::user()->email_verified_at == null)
        <div class="btn btn-danger pt-3">
            <p class="h6">Your email address <strong class="text-decoration-underline">{{ Auth::user()->email }}</strong> has not been verified.
                 Please click the button below to verify it.
            </p>
            <a class="btn btn-default" href="{{ route('verify_email')}}">Verify Now</a>
        </div>
    @endif

    <div class="container-fluid px-4">
        <form class="col-12" action="/user/search" method="GET">
            @csrf
            <div class="box container bg-light border pt-4 pb-3 px-5 shadow rounded-3">
                <div class="col" style="width: 11%; flex: 0 0 auto;">
                    <label>Seeking</label>
                    <p>
                        <select name="gender" id="" type="text">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </p>
                </div>
    
                <div class="col">
                    <label>Age</label>
                    <p style="display: flex;" class="col-lg-12">
                        <select name="from_ages" id="from_ages" type="text" class="col-lg-5" style="margin-right: 6px;"></select>
                        <select name="to_ages" id="to_ages" type="text" class="col-lg-5" style="margin-right: 6px;"></select>
                        <i class="dropdown"></i>
                    </p>
                </div>
    
                <div class="col">
                    <label>Country</label>
                    <p><input type="text" name="country" placeholder="Any country"></p>
                </div>
                <div class="col">
                    <label>State/Provine</label>
                    <p><input type="text" name="state" placeholder="Any State"></p>
                </div>
                <div class="col">
                    <label>City</label>
                    <p><input type="text" name="city" placeholder="Any City"></p>
                </div>
                <div class="col">
                    <label>within</label>
                    <p><input type="text" name="kms" placeholder="kms"></p>
                </div>
                <div class="col py-4">
                    <button style=" background: rgb(20, 14, 50); padding: 10px; border: none; outline: none; width: 50%; color: white;">Search</button>
                </div>
            </div>
        </form>
     
    </div>

    <div class="container">
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
                            <i class="fa-regular fa-message"></i>
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@include('users.includes.footer')
<script>
    $(document).ready(function() {
        var select = document.getElementById('from_ages');
        for (var i=17; i< 99; i++) {
            select.options[select.options.length] = new Option(i+1, i);
        }
        var select = document.getElementById('to_ages');
        for (var i=17; i< 99; i++) {
            select.options[select.options.length] = new Option(i+1, i);
        }
    })
</script>