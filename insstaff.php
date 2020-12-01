
<?php
	
	$con=mysqli_connect("localhost","root","","grievance");
    if(isset($_POST['uname']))
    {
        $user=$_POST['uname'];
        $pass1=$_POST['pwd'];
		$pass=sha1($pass1);
        $n=$_POST['name'];
        $sql="INSERT into staff_info VALUES('$n','$user','$pass')";
        mysqli_query($con,$sql);
        echo "Insertion succesful";
    }
?>
<form action="insstaff.php" method="POST">
Name <input type="text" name="name"> <BR>
Username <input type="text" name="uname"> <BR>
Password <input type="password" name="pwd"><BR>
<input type="submit">
	</form>
