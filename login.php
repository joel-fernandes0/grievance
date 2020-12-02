<html>
    <body>
        <form action="" method="POST">
        
        
            
            </form>
    </body>
</html>
<?php
        session_start();
        $con=mysqli_connect("localhost","root","","grievance");
        $user=$_POST['username'];
        $pass1=$_POST['password'];
        $pass=sha1($pass1);
		
        $_SESSION["usrname"] = $user;

        if($user==NULL||$pass==NULL)
        {
          die("Please fill un in complete information");
        }
        
        if(empty($_POST["choose"]))
        {
            die("Please select one of the options below");
        }
        if($_POST['choose']=='student')
        {
            $sql="select * from student_info where stud_id='$user' and stud_pass='$pass';";
            $result=mysqli_query($con,$sql);
            $count_row= mysqli_num_rows($result);
            
            if($count_row>0)
            {
                $row=mysqli_fetch_assoc($result);
                    if($row['stud_id']==$user)
                    {
                       if($row['stud_pass']==$pass)
                       {
                           header("Location:grievance_form.php");
                       }
                       else
                       {
                           echo "Invalid Password";
                       }
                    }
            }else
            {
                echo "Invalid user-id";
            }
           
        }
        else
        {
            $sql_staff="select * from staff_info where staff_id='$user'and staff_password='$pass';";
            $result2=mysqli_query($con,$sql_staff);
            $count_row2= mysqli_num_rows($result2);


            if($count_row2>0)
            {
                $row=mysqli_fetch_assoc($result2);
                    if($row['staff_id']==$user)
                    {
                       if($row['staff_password']==$pass)
                       {
                           header("Location:grievanceall.php");
                       }
                       else
                       {
                           echo "Invalid Password";
                       }
                    }
            }else
            {
                echo "Invalid user-id";
            }
        }
        ?>

