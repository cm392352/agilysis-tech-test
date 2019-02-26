<!doctype html>
<html lang="en">
<head>
<   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyWebApp - Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
body {
    font-family: "Lato", sans-serif;
}

.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .reg-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .reg-form{
        margin-top: 45%;
    }
}


.reg-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.reg-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>


<body>

    <div class="sidenav">
         <div class="reg-main-text">
            <h2>Application<br> Registration Page</h2>
            <p>Register to access your dashboard.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="reg-form">
               <form>
                  <div class="form-group">
                     <label for="firstname">First name</label>
                     <input type="text" id="firstname" class="form-control" placeholder="First name">
                  </div>
                  <div class="form-group">
                     <label for="surname">Surname</label>
                     <input type="text" id="surname" class="form-control" placeholder="Surname">
                  </div>
                  <div class="form-group">
                     <label for="emailAddress">Email Address</label>
                     <input type="text" id="emailAddress" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label for="confirmPassword">Confirm Password</label>
                     <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password">
                  </div>
                  <a href="index.php" class="btn btn-secondary">Cancel</a>
                  <button type="submit" class="btn btn-black">Register</button>
               </form>
            </div>
         </div>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>