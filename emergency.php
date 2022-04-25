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
	.welcome{
				position:fixed;
				left:600px;
				top: 10px;
				width:600px;
				background-color:#DB2410;
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 15px 15px;
		}
	.emergency{
				position:fixed;
				left:600px;
				top: 300px;
				width:600px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#C91A1A;
				padding:2px 0px 2px 0px;
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
	</style>
</head>
<body>
		<p class="welcome" style="font-size: 2rem; font-weight: 800;">Emergency</p>
		
		<p class="emergency" style="font-size: 4rem; font-family: Times; font-weight: 50;">National Emergency: 999!</br>Our Hotline: 5222</p>
		<a href="welcome.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>
		
</body>
</html>