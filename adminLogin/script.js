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
