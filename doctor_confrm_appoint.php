<!---------------doctor_appoinment_confirmation page starts------------->
<?php
include('connection.php');
$var = $_GET['id'];
$sql="UPDATE patient_registration SET appoint_status = 'Confirmed' where patient_id = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:doctor_appointments.php');
        }

mysqli_close($conn);
?>
<!---------------doctor_appoinment_confirmation page ends------------->