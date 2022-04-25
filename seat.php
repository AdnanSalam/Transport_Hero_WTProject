<!DOCTYPE html>
<html>
<head>
    
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(bg6.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
backgroud-position: center;
font-family:sans-serif;
margin-top:200px;
position:fixed;
left:600px;
top: 100px;
width:600px;
background-color:rgb(0,0,0,6);
margin:auto;
color:#C91A1A;
padding:10px 0px 10px 0px;
text-align:center;
border-radius:15px 15px 15px 15px;
font-weight: 600;
font-size:40px;
background-color:#3BAF9F;
display:block;
margin:20px 0px 0px 20px;
border-radius:12px;
border: 2px solid #366473;
padding: 14px 110px;
outline: none;
color:white;
	}
	.review{
				position:fixed;
				left:600px;
				top: 300px;
				width:600px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}		

.back-btn{
		background-color:#3293F0 ;
		display:block;
		margin:20px 0px 0px 20px;
		position:fixed;
		left:10px;
		top: 850px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}
	.emergency{
		background-color:#C91A1A;
		display:block;
		margin:20px 0px 0px 20px;
		position:fixed;
		left:1500px;
		top: 850px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #73365f;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}			
	</style>
</head>
<body>
		
		<?php
		$file=fopen('seat.txt','r') or die("Unable to open the file.");
		//echo fread($file, filesize("file.txt"));
		while(!feof($file))
		{
			echo fgets($file)."</br>";
		}
		
		fclose($file);
		




// $jsondata=file_get_contents("BusInformation.json");
// $data=json_decode($jsondata,true);
// echo '<h3> Bus information </h3>';
// $a="";
// foreach($data['bus'] as $b)
// {
// $a.="Name: ".$b['name']."<br/>";
// $a.="Seat: ".$b['seat']."<br/>";
// $a.="Contact: ".$b['contact']."<br/>";
// }
// echo $a;
?>
		
		<form action="emergency.php" method="POST" class="emergency">	</form>	
		<a href="emergency.php">
		<input class="emergency" type="submit" value="Emergency" name="btnClick">
		</a>
		
		<a href="welcome.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>
</body>
</html>