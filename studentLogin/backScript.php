<?php 
session_start();
include './../include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
$details1=mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE `email`='$active_user'");
$array1=mysqli_fetch_array($details1);
$rollnum=$array1['rollnum'];

$details=mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE `email`='$active_user'");
$array=mysqli_fetch_array($details);

if(isset($_POST['registerStudentLeave'])){
   if(isset($_POST['leavefullname']) && $_POST['leavefullname'] != '' && isset($_POST['leaverollnum']) && $_POST['leaverollnum'] != '' && isset($_POST['leavedatel']) && $_POST['leavedatel'] != '' && isset($_POST['leavedater']) && $_POST['leavedater'] != '' && isset($_POST['leaveType']) && $_POST['leaveType'] != '' && isset($_POST['leavereason']) && $_POST['leavereason'] != ''){
      $leavefullname = $conn -> real_escape_string($_POST['leavefullname']);
      $leaverollnum = $conn -> real_escape_string($_POST['leaverollnum']);
      $leavedatel = $conn -> real_escape_string($_POST['leavedatel']);
      $leavedater = $conn -> real_escape_string($_POST['leavedater']);
      $leaveType = $conn -> real_escape_string($_POST['leaveType']);
      $leavereason = $conn -> real_escape_string($_POST['leavereason']);
      
      if($leavedatel < $leavedater){
         $insert=mysqli_query($conn,"INSERT INTO `tbl_leave`(`leavetype`, `todate`, `fromdate`, `reason`, `rollnum`, `fname`) VALUES ('$leaveType','$leavedatel','$leavedater','$leavereason','$leaverollnum','$leavefullname')");
         if($insert){
            echo "Registered Successfully";
         }else{
            echo "Failed";
         }
      }else{
         echo "Date InCorrect";
      }
   }else{
    echo "All Deatils Must be Filled !!!";
   }  
}

if(isset($_POST['PendingList'])){
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Pending' AND `rollnum`='$rollnum'");
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
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Accepted' AND `rollnum`='$rollnum'");
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
            <td><button type="button" class="btn Details">Details</button></td>
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
   $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` WHERE `status`= 'Rejected' AND `rollnum`='$rollnum'");
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
?>
   
<?php }
