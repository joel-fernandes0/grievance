
<?php
$n="";
$succes=0;
if(isset($_POST['uname']))
{
	$n=$_POST['uname'];
	$ps=$_POST['pwd'];
	$conn= new mysqli("localhost","root","","greviances");
	if($conn -> connect_error)
		die("Connection Failed :" . $conn -> connect_error);
	$sql="select * from saccount where suname='$n' and pwd='$ps' and status='a'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	
		//header("Location:caccountin.php");
	
	}
	else
	{
		echo "Invalid Username/Password<BR>";
	}
}
if($succes==0)
{
?>

<form action="sacclogin.php" method=POST>
	USERNAME:<input type="text" name="uname" value="<?php echo $n;?>"><br>
	PASSWORD:<input type="PASSWORD" name="pwd"><br>
	<input type="submit">	
</form>
<?php
}
?>
