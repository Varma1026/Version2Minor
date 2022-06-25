// Profile  Page Call
function ajaxProfilePageCall() {
    $.ajax({
      url: './profilepage.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }

  //Leave Request page
function ajaxLeaveRequestPageCall() {
    $.ajax({
      url: './LeaveRequestpage.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }

  //Leave Hisstory
function ajaxLeaveHistoryPageCall() {
    $.ajax({
      url: './Leaveshistorypage.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }
  //Change Password
function ajaxChangepasswordPageCall() {
    $.ajax({
      url: './changepassword.php',
      success: function (response) {
        $('.ajax-main-content').html(response);
      },
    });
  }

 //register leave
 function  registerStudentLeave(){
  var files = $('#studentLeaveRegisterForm')[0];
  var formData = new FormData(files);
  formData.append("registerStudentLeave",'registerStudentLeave');
  $('.registerStudentleave-response').html('Registering...');
  $.ajax({
    type: 'POST',
    enctype: 'multipart/form-data',
    url: './backScript.php',
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
      $('.registerStudentleave-response').html(response);
    },
  });
}
