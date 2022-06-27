<?php
include('./../include/config.php');
session_start();
if(!isset($_SESSION["sess_user"])){
	echo "<script type='text/javascript'> document.location = './../index.php'; </script>";
	echo session_status();
}
else
{
	$active_user=$_SESSION["sess_user"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf-8'>
    <!--Favicon-->
    <!-- <link rel="icon" href="./assets/images/aitamlogo.png" type="image/gif" sizes="16x16"> -->
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>AdminDashBoard-Aitam</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    
	
    <link rel="stylesheet" href="./../dashassets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>	
    <link rel="stylesheet" href="./../main.css">
    <!-- table-->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     -->
    <!-- sidenavbar -->
	<link rel="stylesheet" href="./../dashassets/assets/style.css">
    

</head>
<body>
<body oncontextmenu='return false' class='snippet-body body-pd'>
<body id="body-pd" >
<img src="" alt="">

   

    <header class="header shadow body-pd d-flex justify-content-center" id="header">
       
        <h3 class="text-dark my-5 text-center fw-bold ">Student Leave Management System</h4>
    </header>
  </style>
    <div class="l-navbar show1 show" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">SLMS</span> </a>
                <div class="nav_list">
                    <a href="#" onclick="ajaxProfilePageCall()" class="nav_link active"> <i class="fal fa-user-circle"></i> <span class="nav_name">My Profile</span> </a>
                    <a href="#" onclick="ajaxLeaveRequestPageCall()" class="nav_link"> <i class="fal fa-list"></i> <span class="nav_name">Leave Request</span> </a>
                    <a href="#" onclick="ajaxLeaveHistoryPageCall()" class="nav_link" ><i class="fal fa-history"></i><span class="nav_name">Leave History</span> </a>
                    <a href="#" onclick="ajaxChangepasswordPageCall()" class="nav_link"><i class="fal fa-key-skeleton"></i> <span class="nav_name">Change Password</span> </a>
                    
                </div>
                
            </div>           
            <a href="./../logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>       
    </div>
    </div>
    <!--Container Main start-->
    <!--Container Main end-->
    <!-- table container -->
    <!--ajax-main-content-->
    <div class="ajax-main-content overview" >
       
           
    </div>
    <!-- table container -->
    
 
    <script type='text/javascript' src='./../dashassets/assets/script.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'> </script>
    <!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Core theme JS--> 
	<!-- <script src="./../assets/js/DashboardScript.js"></script> -->
    <script src="script.js"></script>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            ajaxProfilePageCall();
			});
      </script>
</body>
</html>
<?php } ?>