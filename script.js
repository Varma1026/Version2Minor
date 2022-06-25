// Login  Page Call
function ajaxLoginPageCall() {
    $.ajax({
      url: './login.php',
      success: function (response) {
        $('.main-content-index').addClass('login-student').removeClass('register-student');
        $('.main-content-index').html(response);
      },
    });
  }
// Register  Page Call
function ajaxRegisterPageCall() {
    $.ajax({
      url: './student-registration.php',
      success: function (response) {
        $('.main-content-index').addClass('register-student').removeClass('login-student');
        $('.main-content-index').html(response);
      },
    });
  }

 //forgot password page call
 // Register  Page Call
function ajaxForgotPasswordPageCall() {
    $.ajax({
      url: './forgot-password.php',
      success: function (response) {
        $('.main-content-index').addClass('login-student').removeClass('register-student');
        $('.main-content-index').html(response);
      },
    });
  } 

  
  //Register Student
  function  registerStudent(){
    var files = $('#studentRegisterForm')[0];
    var formData = new FormData(files);
    formData.append("registerStudent",'registerStudent');
    $('.registerStudent-response').html('Registering...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './backScript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.registerStudent-response').html(response);
      },
    });
  }

  //Student Login
   function  studentLogin(){
    var files = $('#userLoginForm')[0];
    var formData = new FormData(files);
    formData.append("StudentLogin",'StudentLogin');
    $('.login-response').html('Logging...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './backScript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.login-response').html(response);
        if(response==="Logged"){
          window.location.href="http://localhost/SLMS_V2.0/studentLogin/dashboard.php";
        }
       
      },
    });
  }

  //Admin Login
  function  AdminLogin(){
    var files = $('#AdminLoginForm')[0];
    var formData = new FormData(files);
    formData.append("AdminLogin",'AdminLogin');
    $('.login-response').html('Logging...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './backScript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.login-response').html(response);
        if(response==="Logged"){
          window.location.href="http://localhost/SLMS_V2.0/adminLogin/dashboard.php";
        }
       
      },
    });
  }
  
  