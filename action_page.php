<html>
<head>
	<style >
		body{
			text-align: center;
		}
	</style>
</head>
<body>
<?php
$i=0;

$servername = "localhost";
$username = "tiger";
$password = "353535";
$dbname = "mydb";



function test_input($data) {

	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;

}
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
 
	if(empty($_POST["usr"]) || empty($_POST["comment"]))
	{
		echo "<h1>Sorry!! Textbox was empty.</h1>";
		global $i;
		$i++;
	}
	else
	{
	 echo "<strong>Hint:</strong>".test_input($_POST["usr"]); 
	 echo "<br><strong>Comment: </strong>".test_input($_POST["comment"]);
	 }

echo "<br>";


		if($i==0)
		{
			echo "<h1>Thanks for your interest.</h1>";
				// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
			if (mysqli_connect_errno()) {
			    //die("Connection failed: " . mysqli_connect_errno());
			    die("Connection failed: Database problem");
			}

			// to secure from any sql injunction
			$username = mysqli_real_escape_string($conn,test_input($_POST["usr"]));
			$comment = mysqli_real_escape_string($conn,test_input($_POST["comment"]));
			//insert data query.
			$sql = "INSERT INTO `datatable`(`Hint`, `Comment`, `Ip`) VALUES ('" .$username."','".$comment."','".get_client_ip()."')";
			
			//checking this IP user how many times inserted comments.
			$sqlCountAccessBefore = "SELECT COUNT(*) FROM datatable where Ip = '".get_client_ip()."' ";
			$result = $conn->query($sqlCountAccessBefore);
			$row = $result->fetch_assoc();
			$numberOfAccess=$row["COUNT(*)"];
			
			if($numberOfAccess<3){
					if ($conn->query($sql) === TRUE) //insert data sent to DB
					{
					    echo "New record created successfully";
					} else {
					    //echo "Error: " . $sql . "<br>" . $conn->error;
					    echo "Sorry!! Something went wrong";
					}
				}
			else
			{
				echo "<H1>Your limit exceeded.</H1>";
			}

			$conn->close();

			global $i;
			$i++;
		}
?>

</body>
</html> 