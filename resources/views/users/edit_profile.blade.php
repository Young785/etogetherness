@include('users.includes.header')
@include('users.includes.sidebar')
<link rel="stylesheet" href="/users/css/edit-profile.css">
@if (Auth::user()->email_verified_at == null)
  <div class="btn btn-danger pt-3">
    <p class="h6">Your email address <strong class="text-decoration-underline">{{ Auth::user()->email }}</strong> has not been verified. Please click the button below to verify it.</p>
    <a class="btn btn-default" href="{{ route('verify_email')}}">Verify Now</a>
  </div>
@endif

  <div class="oil container-md py-4">
    <div class="content">
        <h2>Edit Profile</h2>
        <p>Answering these profile questions will help other users find you in search results and help us to find you more accurate matches. Answer all questions below to complete this step.</p>
    </div>

    &nbsp;&nbsp;
    <div class="basis">
        <h6>Your Basics</h6> <hr>
        
    <div class="form">
        First Name:
        <input type="text" placeholder="">

        i'm a:
        <span><input type="text" placeholder="">&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Change</a></span>
        
        Date of Birth:

        <span class="fly"><p>August</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p>1998</p>&nbsp;&nbsp;&nbsp;&nbsp; <a href="">Change</a></span>
    

    <br/>
        <div class="parent">
            <div class="child">
                Country:
                <div class="input-field">
                    <label for=""></label>
                    <Select  name="user_type" class="details">
                    <option value="Male">Nigeria</option>
                    <option value="Female">Ghana</option>
                    </select>
                </div>
        </div>

        <div class="child">
          State/Province
          <div class="input-field">
            <label for=""></label>
            <Select  name="user_type" class="details">
            <option value="Male">Nigeria</option>
            <option value="Female">Ghana</option>
            </select>
          </div>
        </div>

        <div class="child">
            City
            <div class="input-field">
              <label for=""></label>
              <Select  name="user_type" class="details">
              <option value="Male">Ikeja</option>
              <option value="Female">Ghana</option>
              </select>
            </div>
          </div>
    </div>
    
    </div>
    
    <br/>

<div class="area">
    <h6>Your Apperance</h6><hr>
    <p>Hair color</p><hr>

<div class="area-check">
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Balded/Shaved</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Black</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Blonde</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Brown</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Grey/white</label> 
</div>
</div>

<div class="area-check">
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Light Brown</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Red</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Changes Frequently</label> 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div>
    <i class="fa-regular fa-circle"></i>
   <label for="">Other</label> 
</div>
</div>
</div> 
@include('users.includes.footer')