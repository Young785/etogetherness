@include('users.includes.header')
<link rel="stylesheet" href="/users/css/advsearch.css">
        <div class="container ">
            <header>Advanced Search</header>
    
            <!--<a href="#" class="logo">
                <img src="img/crwlg.png" alt="Logo" class="img-responsive" style="width:16%;">
            </a>-->
              <form action="" method="post">
                  <div class="form first">
                    <div class="details personal">
                      <span class="title">Personal Details</span>
                    </div>

                    <div class="fields">
    
                        <div class="input-field">
                            <label for="">I'm a</label>
                            <Select  class="form-control" name="user_type" class="details">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                          </div>
    
                          <div class="input-field">
                            <label for="">Seeking</label>
                            <Select  class="form-control" name="user_type" class="details">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                          </div>
    
                      <div class="input-field">
                        <label class="details">Gender</label>
                        <input type="text" placeholder="Gender" class="form-control" name="gender" required/>
                      </div>
    
    
                      <div class="input-field">
                        <label for="">A</label>
                        <Select  class="form-control" name="user_type" class="details">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                      </div>
    
                      <div class="input-field">
                        <label class="details">Email Address</label>
                        <input type="text" placeholder="Enter your email address" class="form-control" name="email" required/>
                      </div>
    
                      <div class="input-field">
                        <label class="details">Visitor's Address</label>
                        <input type="text" placeholder="Address" class="form-control" name="address" required/>
                      </div>
    
                      <!--<div class="input-field">
                        <label class="details">Town</label>
                        <input type="text" placeholder="Town" class="form-control" name="address" required/>
                      </div>-->
    
                    </div>
    
                    <!--Second part--> <!--Second part--> <!--Second part--> <!--Second part-->
    
                    <div class="details ID">
                      <span class="title"> Visiting Details </span>
                    </div>
    
                    <div class="fields">
    
                      <div class="input-field">
                        <label class="details">Reasons For Visiting</label>
                        <input type="text" placeholder= "" class="form-control" name="reasons" required/>
                      </div>
    
                      <div class="input-field">
                        <label class="details">Who Are You Visiting / Ward</label>
                        <input type="text" placeholder="Who Are You Visiting" class="form-control" name="who" required/>
                      </div>
    
                      <div class="input-field">
                        <label for="">Select</label>
                        <Select  class="form-control" name="user_type" class="details">
                        <option value="parents">Parents</option>
                        <option value="siblings">Sibling</option>
                        <option value="relative">Relative</option>
                        <option value="delivery">Delivery</option>
                        <option value="others">Others</option>
                        </select>
                      </div>
    
                      <div class="input-field">
                        <label class="details">State</label>
                        <input type="text" placeholder="State" class="form-control" name="state" required/>
                      </div>
    
                      <div class="input-field">
                        <label class="details">Password</label>
                        <input type="password" placeholder="Password" class="form-control" name="password" required/>
                      </div>
    
                      <div class="input-field">
                        <label class="details">Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" required/>
    
                      </div>
                      <!--<input type="checkbox" onclick="myFunction()">Show Passwword-->
                 </div>
                 <button name="submit" class="nextBtn">
                  <span class="btnText">Search</span>
                </button>
              </form>
          </div>
              </div>
        </div>
        </div>
@include('users.includes.footer')