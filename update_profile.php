<?php

$id = $_POST["id"];
 $first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$phone = $_POST["Phone"];
$username = $_POST["username"];

if(isset($username)){

	$host="35.226.43.57";$dbusername="rooot";$dbpassword="Prdep@123";$dbname="practice";

    $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	 }
	else
	{
            	
		$sql_e = "SELECT id FROM Test WHERE email = '".$email."'";
		$result_e = mysqli_query($conn,$sql_e);
		$i = mysqli_num_rows($result_e);
		$row = mysqli_fetch_assoc($result_e);
		if($i == 0 and ($row["id"] == $id or empty($row["id"])))
		{
			$sql="UPDATE Test SET first = '".$first."', last= '".$last."', email= '".$email."', dob = '".$dob."', Phone = '".$phone."' WHERE id = '".$id."'";

						if($conn->query($sql))
							{
								echo true;
							}
						else
							{
							echo "Error: ".$sql."<br>".$conn->error;
							}
		}
		else
		{
			echo false;
		}
		$conn->close();
	}
	 die();
}
else{
echo "<script>alert('error')</script>","<script>window.location.replace('http://35.226.43.57/Website-design-2/index.php')</script>";
 die();
}
  
?>
