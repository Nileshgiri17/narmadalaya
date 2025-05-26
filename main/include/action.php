<?php require "config.php"?>
    <link rel="stylesheet" href="plugins/sweetalert/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <script src="plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="plugins/toastr/toastr.min.js"></script>
    <script type="text/javascript">
        function sendSuccess(){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end', 
            showConfirmButton: false,
            timer: 3000
        });
    
        Toast.fire({
            type: 'success',
            title: ' Message Sent Successfully.'
        })
}
</script>

<?php
include_once 'config.php';
if(isset($_POST['submit']))
{	 
	    $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $datefrom = $_POST['datefrom'];
        $dateto = $_POST['dateto'];
        $timefrom = $_POST['timefrom'];
        $timeto = $_POST['timeto'];
        $type = $_POST['type'];
        $addess = $_POST['addess'];
        
	 $sql = "INSERT INTO exhibition_org(ex_name, ex_email, ex_contact, ex_date_from, ex_date_to, ex_time_from, ex_time_to, ex_type, ex_place) VALUES('$name', '$email', '$mobile', '$datefrom', '$dateto', '$timefrom', '$timeto', '$type', '$addess')";
	 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
		   header('Location: ../exhibition_org.php');
		   exit;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>