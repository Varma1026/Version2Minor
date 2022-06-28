<?php
session_start();
include './../include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
$details1=mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE  1 ");
$array1=mysqli_fetch_array($details1);


$details=mysqli_query($conn,"SELECT COUNT(`rollnum`) AS coun FROM `tbl_leave` WHERE `status`= 'Pending'");
$array=mysqli_fetch_array($details);

$details3=mysqli_query($conn,"SELECT COUNT(`rollnum`) AS coun FROM `tbl_leave` WHERE `status`= 'Accepted'");
$array3=mysqli_fetch_array($details3);

$details4=mysqli_query($conn,"SELECT COUNT(`rollnum`) AS coun FROM `tbl_leave` WHERE `status`= 'Rejected'");
$array4=mysqli_fetch_array($details4);

?>
<div class="container">
    <div class="row">
        <div class="card px-4 py-4">
            <h3 class="text-start">Overview of Student Leaves</h3>
            <div class="row justify-content-around">
                <div class="col-md-3 mb-3">
                    <div class="row pt-3 align-items-center rounded border shadow">
                        <a type="button" onclick="PendingLeaves()" >
                        <div class="col-2">
                            <i class="icon1 fal fa-hourglass-half fa-2x"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="text-end">Leaves Pending</h5>
                            <h3 class="text-end"><p><?php echo htmlentities($array['coun']) ?></p></h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row pt-3 align-items-center rounded border shadow">
                        <a type="button" onclick="AcceptedLeaves()" >
                        <div class="col-2">
                            <i class="icon2 far fa-2x fa-check"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="text-end">Leaves Accepted</h5>
                            <h3 class="text-end"><p><?php echo htmlentities($array3['coun']) ?></p></h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="row pt-3 align-items-center rounded border shadow">
                        <a type="button" onclick="RejectedLeaves()" >
                        <div class="col-2">
                            <i class="icon3 fas fa-times fa-2x"></i>
                        </div>
                        <div class="col-10">
                            <h5 class="text-end">Leaves Rejected</h5>
                            <h3 class="text-end"><p><?php echo htmlentities($array4['coun']) ?></p></h3>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <p class="leave">Leaves History</p>
    <div class="form-floating mb-4">
    <input onkeyup="filterfun()" type="text" class="form-control shadow-none" id="myinput" >
    <label for="floatingInput">Search</label>
  </div>
   <div class="card p-4 shadow">
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
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody class="LeaveList">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
     $(document).ready(function() {
        PendingLeaves();
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
