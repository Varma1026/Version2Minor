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
        <div class="col-md-12">
            <div class="card rounded p-3 shadow">
                <h1 class="fw-bold text-center">PROFILE</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border p-2 shadow-lg rounded">
                            <div class="row">
                                <div class="col-md-3">
                                <img src="./../dashassets/pic/<?php if($array['gender']=='Male'){?>male.png<?php }else{ ?>female.png <?php }?>" height="250px" width="100%" class="rounded mx-auto" alt="">
                                </div>
                                <div class="col-md-9 d-flex align-items-end">
                                    <div class="align-items-center">
                                    <h2 class="display-6 text-uppercase "><?php echo htmlentities($array['fname']) ?></h2>
                                    <h2 class="text-uppercase"><?php echo htmlentities($array['rollnum']) ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 shadow-lg rounded">
                        <h5 class="detailshead">Personal Details</h5>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['fname']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Full Name</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['rollnum']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Roll Number</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['branch']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Branch</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['section']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Section</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['gender']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Gender</label>
                      </div>
                </div>

            </div>
            <h5 class="detailshead">Contact Details</h5>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['email']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Email Id</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['phonenumber']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Phone Number</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" id="floatingInput" value="<?php echo htmlentities($array['parent|guardian_name']) ?>" readonly placeholder="name@example.com">
                        <label for="floatingInput">Parent / Guardian Name</label>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control shadow-none" value="<?php echo htmlentities($array['parent|guardian_num']) ?>" readonly id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Parent Mobile</label>
                      </div>
                </div>
                

            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>