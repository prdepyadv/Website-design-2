<?php

$username = $_POST["username"];

if(isset($username))
{
              $host="35.226.43.57";
              $dbusername="rooot";
              $dbpassword="Prdep@123";
              $dbname="practice";
              $conn=new mysqli ($host ,$dbusername,$dbpassword,$dbname);

                if(mysqli_connect_error())
                       {
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                  }
                else
                  {
			if($username == "prdepyadv")
			{
			    $sql_e = "SELECT * FROM Test";
			    $upload = array();
				$i = 0;
			    $result_e = mysqli_query($conn,$sql_e);
			    while ($row = mysqli_fetch_assoc($result_e))
			    {	 
				    $upload[$i] = array("id" => $row["id"],"first" => $row["first"],"last" => $row["last"],"email" => $row["email"],"password" => $row["password"],"dob" => $row["dob"],"register_date" => $row["register_date"],"Phone" => $row["Phone"], "image_path" => $row["image_path"], "username" => $row["username"]);
					$i = $i+1;
			    }
				echo json_encode($upload);
				echo json_encode(mysqli_fetch_assoc($result_e);
			}
			else
			{
			    $sql_e = "SELECT * FROM Test WHERE username = '".$username."'";
			    $upload = array();
				$i = 0;
			    $result_e = mysqli_query($conn,$sql_e);
			    while ($row = mysqli_fetch_assoc($result_e))
			    {	 
				    $upload[$i] = array("id" => $row["id"],"first" => $row["first"],"last" => $row["last"],"email" => $row["email"],"password" => $row["password"],"dob" => $row["dob"],"register_date" => $row["register_date"],"Phone" => $row["Phone"], "image_path" => $row["image_path"], "username" => $row["username"]);
					$i = $i+1;
			    }
				echo json_encode($upload);
			}
                  }	
}
?>
