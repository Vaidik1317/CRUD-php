<?php include('connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];

$sql = "INSERT INTO workshop_db (username,email,mobile,city) VALUES ('$username','$email','$mobile','$city')";
$query = mysqli_query($con,$sql);
if($query==true)
{
    $data = array(
        'status'=>'success',
    );
    echo json_encode($data);
}
else
{
    $data = array(
        'status'=>'failed'
    );
    echo json_encode($data);
}