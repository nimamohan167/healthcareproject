<!--------------------admin_view_oncology page starts--------------->
<?php include('dashboard_header.php');?>
<!-----------------------table starts------------------>
<table class="container-fluid table">
      <thead>
      <h2>Oncology Department</h2>
         <tr>
             
             <th>Doctor Id</th>
             <th>Name</th>
             <th>Specialization</th>
             <th>Mobile</th>
             <th>E-mail</th>
             <th>Status</th>
             <th></th>
         </tr>
    </thead>
    <tbody>
<?php
include('connection.php');
$var = $_GET['id'];
$sql = "select * from doctor_registration where specialization='".$var."'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{

    ?>
<tr>
<td><?php echo $row['doctor_id']; ?></td>
<td><?php echo $row['doctor_name']; ?></td>
<td><?php echo $row['specialization']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
        <?php 
					  }
                      ?>
                      </tbody>
  </table>
  <!-------------------table ends-------------->

<?php include('dashboard_footer.php');?> 
<!--------------------admin_view_oncology page ends--------------->