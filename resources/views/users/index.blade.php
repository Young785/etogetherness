@include('users.includes.header')

        <div class="container-fluid px-4">
            <div class="box container bg-light border py-3 shadow rounded-3">
                <div class="col">
                    <label>Seeking</label>
                    <p><input type="text" placeholder="female"></p>
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
                    <button style=" background: rgb(199, 112, 13); padding: 10px; border: none; outline: none; width: 50%; color: white;">Search</button>
                </div>
            </div>
        </div>

            <div class="container py-4" style=" width: 80%; align-items: center; justify-content:space-between;">
                <div class="row">
                    @foreach ($users as $user)
                        <div class="card col" style="width: 100%; height: 500px;">
                            @if ($user->gender == "male")
                                <img src="/users/img/male.jpeg" class="card-img-top" style= "height: 300px;" alt="...">
                            @else
                                <img src="/users/img/female.png" class="card-img-top" style= "height: 300px;" alt="...">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}<i class="fas fa-body"></i></h5>
                            <p class="card-text">23. Ikeja, Lagos, Nigeria</p>
                            <p class="card-text">Seeking: Male {{ $user->seeking_ages }} I'm Online</p>
                            </div>
                        </div>
                    @endforeach
              </div>
        </div> 
    </div>
@include('users.includes.footer')