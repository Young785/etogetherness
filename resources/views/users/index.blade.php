@include('users.includes.header')
    <div class="btn btn-danger">
        <p>Your email address johndoe@gmail.com has not been verified. Please click here to verify it.</p>
      </div>

    <div class="container-fluid px-4">
        <div class="box container bg-light border py-3 shadow rounded-3">
            <div class="col">
                <label>Seeking</label>
                <p>
                <select name="" id="" type="text">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </p>
            </div>

            <div class="col">
                <label>Age</label>
                <p><input type="number" placeholder="20 years"><i class="dropdown"></i></p>
            </div>

            <div class="col">
                <label>Country</label>
                <p><input type="text" placeholder="Any country"></p>
            </div>
            <div class="col">
                <label>State/Provine</label>
                <p><input type="text" placeholder="Any State"></p>
            </div>
            <div class="col">
                <label>City</label>
                <p><input type="text" placeholder="Any City"></p>
            </div>
            <div class="col">
                <label>within</label>
                <p><input type="text" placeholder="kms"></p>
            </div>
            <div class="col py-4">
                <button style=" background: rgb(20, 14, 50); padding: 10px; border: none; outline: none; width: 50%; color: white;">Search</button>
            </div>
        </div>
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