<?php

	echo "hello"; 
	echo "<h1>heelo</h1>";
	echo "<h1 style='font-size:28px;color:red;'>heelo</h1>";
	//echo "<script>var a=10; alert(a);</script>";
	echo "<table border='1'>
<th>1</th>
<th>2</th>
<tr>
	<td>1</td>
	<td>2</td>
</tr>
</table>";
	
	if(isset($_POST['submit'])){
		//echo "<h1>your password is:".$_GET['password']."</h1>";
		//echo "<br/>";
		//echo "your username is:".$_GET['username'];
		//print_r($_POST);  // Array ( [username] => admins [password] => 12345ssd [submit] => Submit )
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if($username=='1' and $password=='1'){
				echo "<script>alert('success');window.location.href='https://fb.com'</script>";
		}
		else{
				echo "fail";
		}
	}
	
	// isset THIS METHOD IS USED TO CHECKED WHETHER CLICKED OR NOT it will return only 1 and 0 only
?>

<form method="POST">
	Enter username
	<input type="text" name="username" id="username" required>
	
	ENter Password
	<input type="password" name="password" id="password" required>
	
	<input type="submit" name="submit" id="submit">
	
</form>
