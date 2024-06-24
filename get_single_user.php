<?php include('connection.php');
$id = $_POST['id'];
$sql = "SELECT * FROM workshop_db WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>