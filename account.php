<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
    
    <link rel="stylesheet" href="account.css">
    <title>Account</title>
</head>
<body onload=display_ct();>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand fs-1 text-uppercase" id href="#"><img src="petLogo.png" alt="LOGO" id="logo">Pet Adoption</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
        <!-- Navbar -->
        <div class="sidebar offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <!-- Sidebar Header -->
            <div class="offcanvas-header text-white border-bottom">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item d-flex flex-column" style="display: inline-flex; justify-content: center; align-items: right;">
                        <span style="padding-right: 15px;" class="fs-3">Welcome, Username</span>
                        <span id='ct7' style="background-color: none"></span>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-pic">
                            <img src="https://source.unsplash.com/250x250?girl" alt="Profile Picture">
                        </div>
    
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="account.php"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                          </ul>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>
    
        <!-- JS for live clock and date -->
        <script>
        function display_ct7() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            hours = hours.toString().length==1? 0+hours.toString() : hours;
        
            var minutes=x.getMinutes().toString()
            minutes=minutes.length==1 ? 0+minutes : minutes;
        
            var seconds=x.getSeconds().toString()
            seconds=seconds.length==1 ? 0+seconds : seconds;
        
            var month=(x.getMonth() +1).toString();
            month=month.length==1 ? 0+month : month;
        
            var dt=x.getDate().toString();
            dt=dt.length==1 ? 0+dt : dt;
        
            var x1=month + "/" + dt + "/" + x.getFullYear(); 
            x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
            document.getElementById('ct7').innerHTML = x1;
            display_c7();
        }
    
        function display_c7(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct7()',refresh)
        }
        
        display_c7()
        </script>
    
    
        <!-- JS for profile pic drop down, to account, settings, and logout -->
        <script>
        document.querySelectorAll('.dropdown-toggle').forEach(item => {
            item.addEventListener('click', event => {
            
                if(event.target.classList.contains('dropdown-toggle') ){
                event.target.classList.toggle('toggle-change');
                }
                else if(event.target.parentElement.classList.contains('dropdown-toggle')){
                event.target.parentElement.classList.toggle('toggle-change');
                }
            })
        });
        </script>
        
        <div class="container" style="padding: 10px; margin-top: 10px;">
            <h1>Edit Profile</h1>
              <hr>
            <div class="row-cols-lg-1">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                  <h6 class="mt-3 mb-3">Upload a different photo...</h6>
                  
                  <input type="file" class="form-control">
                </div>
              </div>
              
              <!-- edit form column -->
              <div class="col-md-10 personal-info">
                <div class="alert alert-info alert-dismissable mt-3">
                  <a class="panel-close close" data-dismiss="alert" style="text-decoration: none; float: right;" id="close">×</a> 
                  <i class="fa fa-exclamation-circle" style="color: red;"></i>
                    Please fill out information.
                </div>
                <h3 style="padding-bottom: 10px; padding-top: 10px;">Personal Information</h3>
                
                <form class="form-horizontal" role="form">
                  <div class="form-group row">
                        <label class="col-lg-2 control-label">First name:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" placeholder="Juan">
                        </div>

                        <label class="col-lg-2 control-label">Middle name:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" placeholder="Dela">
                        </div>

                        <label class="col-lg-2 control-label">Last name:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" placeholder="Cruz">
                        </div>
                  </div>

                

                  <div class="form-group row">
                    <label class="col-lg-2 control-label">Age:</label>
                    <div class="col-lg-2">
                    <input class="form-control" type="text">
                    </div>

                    <label class="col-lg-2 control-label">Contact Number:</label>
                    <div class="col-lg-2">
                    <input class="form-control" type="text">
                    </div>

                    <label class="col-lg-2 control-label">Email Address:</label>
                    <div class="col-lg-2">
                    <input class="form-control" type="text" placeholder="jdcruz@gmail.com">
                    </div>

                  </div>

                  <div class="form-group row">
                      <label class="col-lg-2 control-label">Date of Birth:</label>
                      <div class="col-lg-2">
                      <input class="form-control" type="date">
                      </div>

                      <label class="col-lg-2 control-label">Occupation:</label>
                      <div class="col-lg-2">
                      <input class="form-control" type="text">
                      </div>

                      <label class="col-lg-2 control-label">Owned a pet before?</label>
                    <div class="col-lg-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="owned" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="owned" value="option2">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                          </div>
                    </div>
                  </div>

                  

                <div class="form-group row">
                    <label class="col-lg-2 control-label">Identification Number:</label>
                    <div class="col-lg-2">
                    <input class="form-control" type="text">
                    </div>

                    <label class="col-lg-2 control-label">Salary:</label>
                    <div class="col-lg-2">
                    <input class="form-control" type="text">
                    </div>

                    <label class="col-lg-2 control-label">Sex:</label>
                    <div class="col-lg-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sex" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sex" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                          </div>
                    </div>
                </div>
                <hr>

                    
                <h3 style="padding-bottom: 10px; padding-top: 10px;">Address</h3>

                    <div class="form-group row">
                        <label class="col-lg-2 control-label">City:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" value="Manila">
                        </div>

                        <label class="col-lg-2 control-label">Street:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" value="Sampaloc Street">
                        </div>

                        <label class="col-lg-2 control-label">Barangay:</label>
                        <div class="col-lg-2">
                        <input class="form-control" type="text" value="Tondo">
                        </div>
                    </div>
                    <hr>
                    <h3 style="padding-bottom: 10px; padding-top: 10px;">Change Password</h3>
                  
                  <div class="form-group row password">
                    <label class="col-md-2 control-label">Password:</label>
                    <div class="col-md-2">
                      <input class="form-control password" type="password">
                    </div>
                    <label class="col-md-2 control-label">Confirm password:</label>
                    <div class="col-md-2">
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="container mt-1">
                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                        <a href="adoptionProcess.php" class="btn btn-secondary">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
   
</body>
</html>
