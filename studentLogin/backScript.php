<?php 
if(isset($_POST['registerStudentLeave'])){
   if(isset($_POST['leavefullname']) && $_POST['leavefullname'] != '' && isset($_POST['leaverollnum']) && $_POST['leaverollnum'] != '' && isset($_POST['leavedatel']) && $_POST['leavedatel'] != '' && isset($_POST['leavedater']) && $_POST['leavedater'] != '' && isset($_POST['leaveType']) && $_POST['leaveType'] != '' && isset($_POST['leavereason']) && $_POST['leavereason'] != ''){
    echo "done";
   }else{
    echo "failed     ";
    echo $_POST['leavefullname'] ,  $_POST['leaverollnum'] , $_POST['leavedatel']  , $_POST['leavedater'] ,  $_POST['leaveType']   , $_POST['leavereason'] ;
   }  
}
?>