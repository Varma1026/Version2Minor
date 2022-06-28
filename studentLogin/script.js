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
   //Leave details page
function LeaveDetailsPagecall(slno) {
  alert(slno);
  $.ajax({
    type : 'POST',
    url: './LeaveDetails.php',
    data:{slno:slno},
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
      document.getElementById("studentLeaveRegisterForm").reset();
    },
  });
}

  //Pending Leave Hisstory
  function PendingLeaves(){
    $.ajax({
      type:'POST',
      url: './backScript.php',
      data:{PendingList:'PendingList'},
      success: function (response) {
        $('.LeaveList').html(response);
      },
    });
  }

  //Accpeted Leave Hisstory
  function AcceptedLeaves(){
    $.ajax({
      type:'POST',
      url: './backScript.php',
      data:{AcceptedList:'AcceptedList'},
      success: function (response) {
        $('.LeaveList').html(response);
      },
    });
  }

  //Rejected Leave Hisstory
  function RejectedLeaves(){
    $.ajax({
      type:'POST',
      url: './backScript.php',
      data:{RejectedList:'RejectedList'},
      success: function (response) {
        $('.LeaveList').html(response);
      },
    });
  }
