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
?>
   
<?php }
