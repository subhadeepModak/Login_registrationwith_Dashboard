<?php   
//task 6(a)
error_reporting(0);

include 'connect.php';

//pic directory
$picpath="../user_pic/";

$id=$_SESSION['user_id'];

if(isset($_POST['submit'])) 
{
	//add a unique name of pic
	$filename   = uniqid() . "_" . time();
	$extension  = strtolower(end(explode('.',$_FILES["fpic"]["name"]))); 
	$basename   = $filename . '.' . $extension;
	$picpath=$picpath.$basename;

	//fetch current file name for detele
	$sql="SELECT `u_pic` FROM user_pic WHERE `u_id` = '$id' ";
	$result =mysqli_query($con,$sql);
	 while($row = $result->fetch_assoc()) {	  
	$dir="../user_pic/".$row['u_pic'];
	 }


	if(move_uploaded_file($_FILES['fpic']['tmp_name'],$picpath))
	{
		$img=$_FILES['fpic']['name'];
		$query="UPDATE `user_pic` SET `u_pic`= '$basename' WHERE `u_id`= ".$id." ";

			if($con->query($query)){
				unlink($dir);// delete old file  
			   header("location: ../dashboard.php");
			   }  
			else
			{
			    echo "Error <br/>".$con->error;        
			}
	}
	else
	{
		echo "Destination error!!";
	}
}
 ?>

