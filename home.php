<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		background-image:url(bg8.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
	}
	.login-text{
				width:600px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 0px 0px;
		}
	.login{
				background-color:rgb(0,0,0,0.5);
				width:600px;
				margin:auto;
		}	

    form{
		
		background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:1px 0px 1px 0px;
				text-align:center;
				border-radius:15px 15px 0px 0px;
	}
	.login{
		margin-left:auto;
		margin-top:auto;
		width: 125x;
		color:white;
		font-size:40px;
		font-weight:700;	
	}
	.email{
		margin-left:-2px;
		position:20px;
		left:10px;
		top: -80px;
		line-height:40px;
		width:230px;
		
		border-radius:16px;
		padding: 0 20px;
		font-size:16px;
		color:#555;
	}
	.password{
		margin-left:-2px;
		position:20px;
		
		left:200px;
		top: -80px;
		line-height:40px;
		width:230px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555
	}
	.btn{
		background-color:#3293F0 ;
		display:block;
		margin:20px 0px 0px 20px;
		position:relative;
		left:150px;
		top: -.5px;
		text-align:center;
		border-radius:12px;
		border: 2px solid #366473;
		padding: 14px 110px;
		outline: none;
		color:white;
		cursor:pointer;
		transition:0.25px;
		
	}
		
	</style>
</head>

<body>
	<div class="lginformation">
		<form action="welcome.php" method="POST" class="login">
            
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Log In</p>
	<div class="login">
	
	<table>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input class="email" type="email" placeholder="Email" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input class="password" type="password" placeholder="Password" name="password"  required></td>
			</tr>
			<tr>
				<td>
				<a href="welcome.php">
				<input class="btn" type="submit" value="Submit" name="btnClick">
				</a>
				</td>
			</tr>
	</table>
	</form>
	
	
	
	</div>


</body>
</html>	