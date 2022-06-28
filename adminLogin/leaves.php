<?php
session_start();
include './../include/config.php';
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}

?>
<div class="container">
    
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
                <?php  
                $details=mysqli_query($conn,"SELECT * FROM `tbl_leave` ORDER BY `tbl_leave`.`postingdate` ASC ");
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
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    
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
