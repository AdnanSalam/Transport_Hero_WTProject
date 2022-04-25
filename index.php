<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">	
	*{
		margin:0;
		padding:0;

	}
	body{
		background-image:url(bg9.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		backgroud-position: center;
		font-family:sans-serif;
		margin-top:200px;
		
	}
	.login-text{
				width:1000px;
				background-color:rgb(0,0,0,6);
				margin:auto;
				color:#FFFFFF;
				padding:10px 0px 10px 0px;
				text-align:center;
				border-radius:15px 15px 0px 0px;
		}
	.registration{
				background-color:rgb(0,0,0,0.5);
				width:1000px;
				margin:auto;
				text-align:center;
	}	
	form{
		padding:20px;
	}
	
	.registration{
		margin-left:auto;
		margin-top:auto;
		width: 125x;
		color:white;
		font-size:18px;
		font-weight:700;	
	}
	.name{
		
		position:relative:
		left:200px;
		top: -37px;
		line-height:40px;
		width:532px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555;
		
		
		
		
	}
	.email{
		
		position:relative:
		left:200px;
		top: -80px;
		line-height:40px;
		width:532px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555;
	}
	.password{
		position:relative:
		left:200px;
		top: -80px;
		line-height:40px;
		width:532px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555
	}
	.cpassword{
		position:relative:
		left:200px;
		top: -80px;
		line-height:40px;
		width:532px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555;
	}
	.loginuser{
		position:relative:
		left:200px;
		top: -80px;
		line-height:40px;
		width:532px;
		border-radius:16px;
		padding: 0 22px;
		font-size:16px;
		color:#555;
		outline:none;
		overflow:hidden;	
	}
	.loginuser option{
					font-size:20px; 
					}
	.radio{
		display:inline-block;
		padding-right:70px;
		font-size:25px;
		margin-left:25px;
		margin-top:15px;
		color:white;
	}
	.radio input{
		width:20px;
		height:20px;
		border-radius:50p%;
		cursor:pointer;
		outline:none;
	}
	.btn{
		background-color:#3293F0 ;
		display:block;
		margin:20px 0px 0px 20px;
		position:relative;
		left:350px;
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
	.login-register-text{
		text-align:center;
		margin-top:15px;
	}
	</style>
	
</head>
<body>
	<div class="information">
		<form action="#" method="POST" class="login">
            
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">New User Registration</p>
			
			<div class="registration">
			<table>
			<tr>
				<td>Name</td>
				<td> :</td>
				<td>
					<input class="name" type="name" placeholder="Username" name="username"  required>
				</td>
			</tr>
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
				<td>Confirm Password</td>
				<td>:</td>
				<td><input class="cpassword" type="password" placeholder="Confirm Password" name="cpassword"  required></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input class="radio" type="radio" name="gender" required value="Male" > &nbsp;Male
					<input class="radio" type="radio" name="gender" required value="Female"> &nbsp;Female
					<input class="radio" type="radio" name="gender" required value="Others"> &nbsp;Others
				</td>
			</tr>
			
			<tr>
					<td>Login As</td>
					<td>:</td>
					<td>
					
						<select class="loginuser" name="user">
						<option value="SO">Select One</option>
						<option value="Customer">Customer</option>
						<option value="Train">Manager-Train</option>
						<option value="Bus">Manager-Bus</option>
						<option value="Air">Manager-Air</option>
					
					</td>
			</tr>
				<tr>
					<td><input class="btn" type="submit" value="Submit" name="btnClick"></td>
				</tr>
			</table>
			
			
			
			<p class="login-register-text">Already Have an Account? <a href="home.php"></br>Login Here</a>.</p> 
		</form>
	</div>
	</div>
</body>
</html>