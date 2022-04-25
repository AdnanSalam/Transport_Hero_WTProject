<!DOCTYPE html>
<html>
<head>
    
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		
		background-image:url(bg2.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}
	.review{
				position:fixed;
				left:600px;
				top: 300px;
				width:600px;
				background-color:#1F46C3;
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
		<p class="review" style="font-size: 4rem; font-weight: 100;">No available review.</p>
		<form action="emergency.php" method="POST" class="emergency">	</form>	
		<a href="emergency.php">
		<input class="emergency" type="submit" value="Emergency" name="btnClick">
		</a>
		
		<a href="welcome.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>
</body>
</html>