<?PHP
include './../include/config.php';
session_start();
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
 $details=mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE `email`='$active_user'");
 $array=mysqli_fetch_array($details);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto leave">
            <div class="card shadow py-4">
                <h2 class="text-center mb-4">Leave Request Form</h2>
                <div class="row">
                    <form id="studentLeaveRegisterForm">
                    <div class="col-11 mx-auto">
                    
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control shadow-none" id="leavefullname" value="<?php echo htmlentities($array['fname']) ?>" readonly >
                            <label for="floatingInput">Full Name<span class="text-danger star">*</span></label>
                        </div>

                    </div>
                    <div class="col-11 mx-auto">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control shadow-none" value="<?php echo htmlentities($array['rollnum']) ?>" readonly id="leaverollnum" >
                            <label for="floatingInput">Roll Number<span class="text-danger star">*</span></label>
                          </div>

                    </div>
                    <div class="col-11 mx-auto">
                        <div class="form-floating mb-4">
                            <input type="date" class="form-control shadow-none" id="leavedatel" >
                            <label for="floatingInput">Leaving Date<span class="text-danger star">*</span></label>
                          </div>

                    </div>
                    <div class="col-11 mx-auto">
                        <div class="form-floating mb-4">
                            <input type="date" class="form-control shadow-none" id="leavedater" >
                            <label for="floatingInput">Arriving Date<span class="text-danger star">*</span></label>
                          </div>

                    </div>
                    <div class="col-11 mx-auto">
                        <div class="form-floating mb-4">
                            <select class="form-select" id="leaveType" aria-label="Floating label select example">
                              <option value="" selected>Open this select menu</option>
                              <option value="Sick Leave">Sick Leave</option>
                              <option value="Casual Leave">Casual Leave</option>
                            </select>
                            <label for="floatingSelect">Select Permission Type<span class="text-danger star">*</span></label>
                          </div>
                    </div>
                    <div class="col-11 mx-auto">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control shadow-none" id="leavereason" >
                            <label for="floatingInput">Reason<span class="text-danger star">*</span></label>
                          </div>

                    </div>
                    <div class="col-11 mx-auto registerStudentleave-response text-danger fw-bold"></div>
                    <div class="col-11 mx-auto">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn dark me-md-2" onclick="registerStudentLeave()" type="button">Apply</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>