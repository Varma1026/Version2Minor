<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
body {
  background-image: url('admin.jpg');
  background-color: #cccccc;
  height: 100vh;
  justify-content: center;
  align-items: center;
  background-size: cover;
  background-position: center;
  background-color: rgba(255, 255, 255, 0.4);
  -webkit-backdrop-filter: blur(3px) !important;
  backdrop-filter: blur(3px);
}
</style>
<body>
  <div class="nav py-3 px-md-5 d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="aitam.png" height="50px" width="50px" alt="Aitam Logo">
    </div>
     <div class="d-flex justify-content-center"><h4>Student Leave Management System</h4></div>
    <div></div>
</div>
    <div  class="container-fluid main-content-index  pt-3">
    <div class="container">
      <div class="row mt-md-5 justify-content-end pt-5">
        <div class="col-md-6">
            <div class="card py-4 shadow">
              <form id="AdminLoginForm">
              <h2 class="text-center py-4">ADMIN LOGIN</h2>

              <div class="col-11 mx-auto">
                <div class="form-floating mb-4">
                    <input type="text" class="form-control shadow-none" name="adminuserName"  placeholder="name@example.com">
                    <label for="floatingInput">User Name</label>
                </div>

              </div>
              <div class="col-11 mx-auto">
                <div class="form-floating mb-4">
                    <input type="password" class="form-control shadow-none" name="adminuserPassword"  placeholder="name@example.com">
                    <label for="floatingInput">Password</label>
                </div>

              </div>
                <div class="col-11 mx-auto">
                  <div class="row">
                    <div class="col-6">
                      <div class="d-flex  mb-4 ">
                        
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="d-flex  mb-4 justify-content-end">
                        <a onclick="ajaxForgotPasswordPageCall()"  class="forgot mr-4" type="button" rel="noopener noreferrer">Forgot Password ?</a>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-11 mx auto">
                  <div class="row">
                      <div class="col-6 login-response text-danger fw-bold">
                      </div>
                  </div>
                </div>
                <div class="col-11 mx-auto">
                  <div class="d-grid mb-4 gap-2">
                    <button class="btn py-3 LOGIN" onclick="AdminLogin()" type="button">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      </div>
      
    </div>
      <!--Bootstrap js Bundle-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!-- Popper.JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
			<!-- Bootstrap JS -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			<script src="./script.js"></script>
      
</body>
</html>