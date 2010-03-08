<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>VWAN Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	</head>
	<body>
		<div><h3 class='heading'>VWAN Login</h4></div>
		<form id='login' method='POST'>
			<div class='outline'>
				<div class='area'>
					<label for='username'>Username:</label>
					<input type='text' name='username' id='username' />
				</div>
				<div class='area'>
					<label for='password'>Password:</label>
					<input type='password' name='password' id='password' />
				</div>
			</div>
			<div class='submit'><input type='submit' value='Log In' /></div>
		</form>
		<div id='register'>No account yet? <a href='signup.php'>Register Now.</a> It's free!</div>
	</body>
</html>