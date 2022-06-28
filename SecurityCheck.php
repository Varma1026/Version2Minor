<?php 
session_start();
include './include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
?>
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
<body>
  <div class="nav py-3 px-md-5 d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="aitam.png" height="50px" width="50px" alt="Aitam Logo">
    </div>
     <div class="d-flex justify-content-center"><h4>Student Leave Management System</h4></div>
    <div></div>
</div>
    <div class="container-fluid pt-3">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 mb-4">
                    <h1 class="text-center">Security Checking Portal</h1>
                </div>
                <div class="col-md-8">
                    <div class="form-floating mb-4">
                        <input type="text" onkeyup="filterfun()"   id="myinput"  class="form-control shadow-none">
                        <label for="floatingInput">Search By Name<span class="text-danger star">*</span></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-4">
                        <input type="date" class="form-control shadow-none" id="leavefullname">
                        <label for="floatingInput">Select Date<span class="text-danger star">*</span></label>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="card p-3 shadow rounded">
                        <div class="table-responsive">
                        <table id="mytable" class="table">
                <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
    
                    <th scope="col">Leavetype</th>
                    <th scope="col">From date</th>
                    <th scope="col">To date</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
                </thead>
                <tbody class="LeaveList">
                <?php  
                $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status` = 'Accepted' ORDER BY `tbl_leave`.`postingdate` ASC ");
                if(mysqli_num_rows($details)>0){
                    $i=1;
                    while($row=mysqli_fetch_array($details)){
                ?> 
                <tr>
                    <th scope="row"><?php echo htmlentities($i) ?></th>
                    <td><?php echo htmlentities($row['fname']) ?></td>
                    
                    <td><?php echo htmlentities($row['leavetype']) ?></td>
                    <td><?php echo htmlentities($row['fromdate']) ?></td>
                    <td><?php echo htmlentities($row['todate']) ?></td>
                    <td><?php echo htmlentities($row['reason']) ?></td>
                    <td><?php echo htmlentities($row['status']) ?></td>
                    <!-- <td><button type="button" onclick="LeaveDetailsPagecall(<?php echo htmlentities($row['slno']) ?>)" class="btn btn-info">Details</button></td> -->
                </tr>
         <?php
         $i++;
                    }
                }else{
                    echo "No data found";
                } ?>
                </tbody>
            </table>
                        </div>
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
      <script>
        $(document).ready(function() {
          ajaxLoginPageCall();
			});
            function filterfun(){
			let filter=document.getElementById('myinput').value.toUpperCase();
			let mytable=document.getElementById('mytable');
			let tr=mytable.getElementsByTagName('tr');
			for(var i=0;i<tr.length;i++){
				let td=tr[i].getElementsByTagName('td')[0];
				if(td){
					let textvalue=td.textContent || td.innerHTML;
					if(textvalue.toUpperCase().indexOf(filter) > -1){
						tr[i].style.display="";
					}else{
						tr[i].style.display="none";
					}

				}
			}
		}
      </script>
</body>
</html>