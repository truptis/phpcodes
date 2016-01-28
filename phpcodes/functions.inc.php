<?php
 
function show_userbox()
{
	// retrieve the session information
	$u = $_SESSION['username'];
	$uid = $_SESSION['loginid'];
	// display the user box
	echo "<div id='userbox'>
	 Welcome $u
		<ul>
		   <li><a href='./logout.php'>Logout</a></li>
		</ul>
			 </div>";
 
}
?>
