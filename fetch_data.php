<?php include('connection.php');

$sql = "SELECT * FROM workshop_db";
$query = mysqli_query($con, $sql);
$count_all_rows = mysqli_num_rows($query);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE username like '%".$search_value."%'";
	$sql .= " OR email like '%".$search_value."%'";
	$sql .= " OR mobile like '%".$search_value."%'";
	$sql .= " OR city like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY '".$column. "' ".$order;
}
else
{
	$sql .= "ORDER BY id ASC";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$data = array();

$run_query = mysqli_query($con,$sql);
$filtered_rows = mysqli_num_rows($run_query);
while($row = mysqli_fetch_assoc($run_query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['username'];
	$sub_array[] = $row['email'];
	$sub_array[] = $row['mobile'];
	$sub_array[] = $row['city'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'" class="btn btn-sm btn-info editBtn">Edit</a>  
					<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm btnDelete" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'data'=> $data,
	'draw' => intval($_POST['draw']),
	'recordsTotal'=>  $count_all_rows,
	'recordsFiltered' => $filtered_rows,
);

echo json_encode($output);