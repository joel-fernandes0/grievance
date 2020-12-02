
<?php
    
        $con=mysqli_connect("localhost","root","","grievance");
        
        if(!$con)
        {
            echo "Connection not established";
        }
        else
        {
            $fname=$_POST['full_name'];
            $gend=$_POST['gender'];
            $college=$_POST['college'];
            $sem=$_POST['sem'];
            $cont_no=$_POST['mobile_no'];
            $cat=$_POST['category'];
            $dept=$_POST['department'];
            $type=$_POST['type'];
            $date=$_POST['date'];
            $detail=$_POST['detail'];
            $root=$_POST['root_cause'];


            if($fname==NULL||$gend==NULL||$college==NULL||$sem==NULL||$cont_no==NULL||$cat==NULL||$dept==NULL||$type==NULL||$date==NULL||$detail==NULL)
            {
                echo 'Please fill in the complete required information';
            }
            else
            {
            //$sql="insert into grieviance_info(full_name,gender,college,department,semester,contact_no,category,grievance_type,date_of_grievance,detail,root_cause,date_post)values('$fname','$gend','$college','$dept','$sem','$cont_no','$cat','$type','$date','$detail','$root','2020-01-14');";
            $sql="INSERT into grievance_info values('$fname','$gend','$college','$dept','$sem','$cont_no','$cat','$type','$date','$detail','$root',now());";
            mysqli_query($con,$sql);
			echo "Thank you for Submitting the Grievance Form";
            }
        }
       