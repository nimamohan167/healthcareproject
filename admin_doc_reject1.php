<!------------------admin_doctor_rejected connection page starts--------------->
<?php
include('connection.php');
$var = $_GET['id'];
$sql="UPDATE doctor_registration SET status = 'Removed' where doctor_id = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:admin_doctors.php');
        }

mysqli_close($conn);
?>
<!------------------admin_doctor_rejected connection page ends--------------->