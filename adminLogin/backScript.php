<?php 
session_start();
include './../include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}


if(isset($_POST['PendingList'])){
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Pending' ");
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
            <td><button type="button"onclick="LeaveDetailsPagecall(<?php echo htmlentities($row['slno']) ?>)" class="btn btn-info">Details</button></td>
         </tr>
         <?php
         $i++;
      }
   }else{
      echo "No data found";
   }
?>
   
<?php }


if(isset($_POST['AcceptedList'])){
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Accepted' ");
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
            <td><button type="button" onclick="LeaveDetailsPagecall(<?php echo htmlentities($row['slno']) ?>)" class="btn btn-info" >Details</button></td>
         </tr>
         <?php
         $i++;
      }
   }else{
      echo "No data found";
   }
?>
   
<?php }


if(isset($_POST['RejectedList'])){
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Rejected' ");
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
            <td><button type="button" onclick="LeaveDetailsPagecall(<?php echo htmlentities($row['slno']) ?>)" class="btn btn-info">Details</button></td>
         </tr>
         <?php
         $i++;
      }
   }else{
      echo "No data found";
   }
}

if(isset($_POST['respondleave'])){
   if(isset($_POST['leavestatus']) && $_POST['leavestatus'] != '' && isset($_POST['leaveslno']) && $_POST['leaveslno'] != ''  && isset($_POST['leaveremark']) && $_POST['leaveremark'] != ''){
      $leavestatus = $conn -> real_escape_string($_POST['leavestatus']);
      $leaveremark = $conn -> real_escape_string($_POST['leaveremark']);
      $leaveslno = $conn -> real_escape_string($_POST['leaveslno']);
      $update=mysqli_query($conn,"UPDATE `tbl_leave` SET	`adminremark`='$leaveremark',`adminremarkdate`='".date("d-m-Y H:i:s")."',`status`='$leavestatus' WHERE `slno` = '$leaveslno'");
      
      if($update){
         echo "Updated";
      }else{
         echo "Failed";
      }
     
   }else{
      echo "All details Must be filled";
   }
}

//// password change
if (isset($_POST['ChangePassword'])){
   $oldPassword= md5($conn -> real_escape_string($_POST['oldPassword']));
   // $newPassword = $conn -> real_escape_string($_POST['newPassword']);
   $confirmPassword = $conn -> real_escape_string($_POST['confirmPassword']);
   $Password=md5($confirmPassword);
   $active_user = $_SESSION['sess_user'];
   $sql="SELECT * FROM `admin` where `username`= '$active_user' ";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   if($row['password']==$oldPassword){
       $sql = " UPDATE  `admin` SET  `password` = '$Password' WHERE `username`= '$active_user' ";
       $query=mysqli_query($conn,$sql);
       echo '<p class="text-primary"><i class="fas fa-pencil-alt"></i> Updated Successfully</p>';
   }else{
     echo '<p class="text-primary"><i class="fas fa-exclamation-triangle"></i> Old Password Incorrect</p>';
   }
   
}