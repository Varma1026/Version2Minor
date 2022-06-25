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
        <div class="col-md-3 mb-4">
            <div class="card-body profile bg-light rounded shadow ">
             
                <img src="./../dashassets/pic/<?php if($array['gender']=='Male'){?>male.png<?php }else{ ?>female.png <?php }?>" height="100px" width="100px" class="rounded-circle mx-auto" alt="">
                <h5 class="text-center mt-3"><?php echo htmlentities($array['fname']) ?></h5>
                  <p class="text-center"><?php echo htmlentities($array['rollnum']) ?></p>
         
            </div>
        </div>
        <div class="col-md-9">
           <div class="card p-4 bg-light shadow">
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