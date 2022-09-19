@include('users.includes.header')
<link rel="stylesheet" href="/users/css/profile.css">
<div class="btn btn-danger">
    <p>Your email address {{ $user->email }} has not been verified. Please click here to verify it.</p>
  </div>

  <div class="btn btn-success">
    <h3>Why verify my profile?</h3>
    <p>Confirm your identity and show others your profile is genuine. Get the<br/> "verified" badge on your profile by uploading your identification</p>
    <button id="verify_now_btn" class="btn">Verify Now</button>
  </div>

  <div class="holding-container">
    <div>
      <div class="image">
        <div class="image2">
          <img src="/users/img/avi.jpeg" alt="">
        </div>
      </div>
    </div>

    <!--second div-->
      <div class="image" style="margin-left: 20px;">
      <span style=" display: inline; justify-content:space-between;">
      <h4>{{ $user->name }}
      <!-- message iconn-->
      <!-- message iconn-->
      <!-- message iconn-->
      <i class="fa-solid fa-user" style="font-size: 1em;"></i>
      <i class="fa solid fa-circle" style="font-size: .5em; color: green;"></i>
      <i class="fa-solid fa-pen" style="font-size: 1em;"></i> 
    </h4>
      </span>
      <p>{{ ''.$user->city.' '.$user->state.' '.$user->country }}</p>
      <h6>Male / ID: 12345678</h6>
      <section class="intro text-dark">
          <div class="bg-image h-100">
            <div class="mask d-flex align-items-center h-100">
              <div class="c">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="card bg-transparent shadow-2-strong">
                      <div class="card-body">
                        <div class="table-responsive text-dark">
                          <table class="table table-transparent text-dark table-borderless mb-0">
                            <thead>
                              <tr>
                                <th scope="col" class="text-dark">Overview</th>
                                <th scope="col" class="text-dark">Rachael</th>
                                <th scope="col" class="text-dark">She's looking for</th>
                                <th scope="col" class="text-dark">Skills</th>
                                <th scope="col" class="text-dark">Attributes</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row" class="text-dark">Education</th>
                                <td>No Answer</td>
                                <td>Any</td>
                                <td>Can Cook</td>
                                <td>Patient</td>
                                
                              </tr>
                              <tr>
                                <th scope="row" class="text-dark">Have Children?</th>
                                <td>No Answer</td>
                                <td>Any</td>
                                <td>Can Cook</td>
                                <td>Patient</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-dark">Drink</th>
                                <td>No Answer</td>
                                <td>Any</td>
                                <td>Can Cook</td>
                                <td>Patient</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-dark">Smoke</th>
                                <td>Don't Smoke</td>
                                <td>Any</td>
                                <td>Can Cook</td>
                                <td>Patient</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-dark">Religion</th>
                                <td>No Answer</td>
                                <td>Any</td>
                                <td>Can Cook</td>
                                <td>Patient</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-dark">Education</th>
                                <td>No Answer</td>
                                <td>Any</td> 
                                <td>Can Cook</td>
                                <td>Patient</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>
  </div>

  <section class="about">
      <h4>More About Me</h4>
      <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="table-responsive bg-white">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th scope="col">EMPLOYEES</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">CONTACTS</th>
                        <th scope="col">AGE</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">SALARY</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="color: #666666;">Tiger Nixon</th>
                        <td>System Architect</td>
                        <td>tnixon12@example.com</td>
                        <td>61</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Sonya Frost</th>
                        <td>Software Engineer</td>
                        <td>sfrost34@example.com</td>
                        <td>23</td>
                        <td>Edinburgh</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Jena Gaines</th>
                        <td>Office Manager</td>
                        <td>jgaines75@example.com</td>
                        <td>30</td>
                        <td>London</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Quinn Flynn</th>
                        <td>Support Lead</td>
                        <td>qflyn09@example.com</td>
                        <td>22</td>
                        <td>Edinburgh</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Charde Marshall</th>
                        <td>Regional Director</td>
                        <td>cmarshall28@example.com</td>
                        <td>36</td>
                        <td>San Francisco</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Haley Kennedy</th>
                        <td>Senior Marketing Designer</td>
                        <td>hkennedy63@example.com</td>
                        <td>43</td>
                        <td>London</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: #666666;">Tatyana Fitzpatrick</th>
                        <td>Regional Director</td>
                        <td>tfitzpatrick00@example.com</td>
                        <td>19</td>
                        <td>Warsaw</td>
                        <td>$385,750</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@include('users.includes.footer')