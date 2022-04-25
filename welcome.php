<?php
if(isset($_POST['btnClick']))
{
$email = $_POST['email']; 
$password = $_POST['password'];
session_start();
		$email = $_POST['email'];
		$_SESSION["email"]=$email;
		
		if($email =='adnan@gmail.com' && $password =='12345')
				{
					header("location: welcome.php");
				}
				
		// else
		// {
			// echo "<p align='center'><font color=red size='7pt'>Invalid Username or Password</font></p>";
		// }

}
 ?>

<!DOCTYPE html>
<html>
<head>
    
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(bg11.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}
	.welcome{
				position:fixed;
				left:600px;
				top: 10px;
				width:600px;
				background-color:#1F46C3;
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
	.manager{
				position:fixed;
				left:1570px;
				top: 10px;
				width:300px;
				//background-color:#1F46C3;
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
	.help-desk{
				position:fixed;
				left:10px;
				top: 10px;
				width:300px;
				//background-color:#1F46C3;
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
		top: 750px;
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
	.review-btn{
		background-color:#3293F0 ;
		display:block;
		margin:200px 0px 0px 750px;
		position:fixed;
		left:-80px;
		top: 280px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 160px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}	
	.recommendation{
		background-color:#3293F0 ;
		display:block;
		margin:200px 0px 0px 750px;
		position:fixed;
		left:-450px;
		top: 50px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 128px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}
	.add-recommendation{
		background-color:#3293F0 ;
		display:block;
		margin:250px 0px 0px 750px;
		position:fixed;
		left:-450px;
		top: 110px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 102px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}	
	
	.seat{
		background-color:#3293F0 ;
		display:block;
		margin:170px 0px 0px 750px;
		position:fixed;
		left:300px;
		top: 180px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 92px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		font-weight: 600;
		font-size:20px;
	}
	
	.businfo{
		background-color:#3293F0 ;
		display:block;
		margin:170px 0px 0px 750px;
		position:fixed;
		left: 300px;
		top: 73px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 115px;
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
		left:700px;
		top: 100px;
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
	<form action="home.php" method="POST" class="hpage"></form>
    <p class="welcome" style="font-size: 2rem; font-weight: 800;">Welcome!</p>
    <p class="manager" style="font-size: 2rem; font-weight: 300;">User Portal</p>
	<p class="help-desk" style="font-size: 1rem; font-weight: 100;">Help Desk</br>Email:adnan123@gmail.com</p>
	
	<a href="home.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>
		<form action="review.php" method="POST" class="reviewpage">	</form>	
		<a href="review.php">
		<input class="review-btn" type="submit" value="Review" name="btnClick">
		</a>
		
		<form action="recommendation.php" method="POST" class="recommendation">	</form>	
		<a href="recommendation.php">
		<input class="recommendation" type="submit" value="Book Car/Bike/MicroBus" name="btnClick">
		</a>
		
		<form action="addrecommendation.php" method="POST" class="add-recommendation">	</form>	
		<a href="addrecommendation.php">
		<input class="add-recommendation" type="submit" value="Local/International Delivery" name="btnClick">
		</a>
		
		
		
		<form action="emergency.php" method="POST" class="emergency">	</form>	
		<a href="emergency.php">
		<input class="emergency" type="submit" value="Emergency Service" name="btnClick">
		</a>
		
		
		<form action="seat.php" method="POST" class="seat">	</form>	
		<a href="seat.php">
		<input class="seat" type="submit" value="Medicine/Grocery/Food" name="btnClick">
		</a>
		
		
		<form action="businfo.php" method="POST" class="businfo">	</form>	
		<a href="businfo.php">
		<input class="businfo" type="submit" value="Book Bus/Train/Plane" name="btnClick">
		</a>
		
</body>
</html>