// Profile  Page Call
function ajaxLeavesPageCall() {
    $.ajax({
      url: './leaves.php',
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

//register leave
 function  RespondLeave(){
  var files = $('#leaveresponse')[0];
  var formData = new FormData(files);
  formData.append("respondleave",'respondleave');
  $('.leaverespond').html('Updating...');
  $.ajax({
    type: 'POST',
    enctype: 'multipart/form-data',
    url: './backScript.php',
    data: formData,
    contentType: false,
    processData: false,
    success: function (response) {
      $('.leaverespond').html(response);
      document.getElementById("leaveresponse").reset();

      // $('#leaveresponse').empty();
    },
  });
}


///update password
function ChangePassword() {
  $('.Change-Password-Alerts').html('Loading...');
  var formData = {
    oldPassword: $('#oldpassword').val(),
    newPassword: $('#newpassword').val(),
    confirmPassword: $('#confirmpassword').val(),
    ChangePassword: 'ChangePassword',
  };
  if (formData.oldPassword == '' || formData.newPassword == '' || formData.confirmPassword == '' || formData.ChangePassword == '') {
    // $('.alert-bell').removeClass('d-none');
    $('.Change-Password-Alerts').html('All fields must be filled!');
  } 
  else{

      if(formData.newPassword == formData.confirmPassword) {
        $.ajax({
          type: 'POST',
          url: './backScript.php',
          data: formData,
          success: function (response) {
            // $('.alert-bell').removeClass('d-none');
            $('.Change-Password-Alerts').html(response);
            $('.Change-Password-btn').hide();
          },
        });
      }
    else {
        $('.Change-Password-Alerts').html('Password and confirm password should be same!!');
    }
  }
}
