<h1>Login</h1>
<form name="login" method="POST" action="admin.php">
<p>Username <input name="username" type="text" maxlength=30 /></p>
<p>Password <input name="password" type="password" maxlength=30 /></p>
<?php 
	if(isset($_POST['login']) && !isset($_SESSION['admin'])) {
		?>
		<p><span class="error">Incorrect username or password</span></p>
		<?php
	}
?>

<p><input type="submit" name="login" value="Submit" /></p>
</form>