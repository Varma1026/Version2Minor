<?php 
session_start();
include './../include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
if(isset($_POST['slno'])){

    $slno=$conn ->  real_escape_string($_POST['slno']);
    $leave=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `slno` = '$slno'");
    $row=mysqli_fetch_array($leave);
    $rollnum=$row['rollnum'];
    $details=mysqli_query($conn,"SELECT * FROM `tbl_student` where `rollnum` = '$rollnum'");
    $row2=mysqli_fetch_array($details);
?>
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow rounded p-3">
                        <h1 class="text-start">Leave Details :</h1>
                        <div class="table-responsive mt-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <td >Name :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['fname']) ?></td>
                                    <td>Roll NO :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['rollnum']) ?></td>
                                    <td>Branch :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row2['branch']) ?></td>
                                    </tr>                                                              
                                    <tr>
                                    <td >Section :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row2['section']) ?></td>
                                    <td>Gender :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row2['gender']) ?></td>
                                    <td>Phone Number :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row2['phonenumber']) ?></td>
                                    </tr>
                                    <tr>
                                    <td >Email :</td>
                                    <td class="fw-bold"><?php echo htmlentities($row2['email']) ?></td>
                                    <td>Parent / Guardian Name :</td>
                                    <td class="fw-bold"><?php echo htmlentities($row2['parent|guardian_name']) ?></td>
                                    <td>Parent / Guardian Number :</td>
                                    <td class="fw-bold"><?php echo htmlentities($row2['parent|guardian_num']) ?></td>
                                    </tr>
                                    <tr>
                                    <td >Leave Type :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['leavetype']) ?></td>
                                    <td>Leave Date :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['fromdate']) ?> to <?php echo htmlentities($row['todate']) ?></td>
                                    <td>Posting Date :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['postingdate']) ?></td>
                                    </tr>
                                    <tr>
                                    <td >Leave Discription :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['reason']) ?></td>
                                    <td>Leave Status :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['status']) ?></td>
                                    <td>Admin Remarks :</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['adminremark']) ?></td>
                                    </tr>
                                    <tr>
                                    <td>Admin Action Taken Date:</td>
                                    <td class="fw-bold color"><?php echo htmlentities($row['adminremarkdate']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Take Action</button>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
<?php } ?>