
<html>
    <meta charset="UTF-8">
        <title>Welcome</title>
        <style type="text/css">
            table{
                border-collapse: collapse;
                width: 100%;
                color: #8e44ad;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            
            .container{
                background-color: whitesmoke;
                box-shadow: 1px 1px 2px 1px grey;
                padding: 250px 800px 200px 300px;
                width: 30%;
                height: 50%;
                margin-left: 06%; 
                            }
                            .txt{
                                width: 90%;
                                height: 5%;
                                border: 1px solid brown;
                                border-radius: 05px;
                                padding: 20px 15px 20px 15px;
                                margin: 10px 0px 15px 0px;
                            }
                            .button{
                                width: 30%;
                                height: 10%;
                                margin-left :30%;
                            }
        </style>
    
    <body style="background-color: #bdc3c7">
        <form action="" method="POST">
           
        <table border="3">	
            <tr>
                <th>COLLEGE</th>
                <th>DEPARTMENT</th>
                <th>TYPE OF GRIEVANCE</th>
                <th>DATE OF GRIEVANCE</th>
                <th>DETAILED INFORMATION</th>
                <th>ROOT CAUSE</th>
            </tr>
        <?php
        session_start();
        $id=$_SESSION["usrname"];
		
            
        $con=mysqli_connect("localhost","root","","grievance");
        
        
        
        $sql="select * from grievance_info";
        $result2=mysqli_query($con,$sql);
        
        $count_row2=mysqli_num_rows($result2);
        
        if($count_row2>0)
        {
            while($row2=mysqli_fetch_assoc($result2))
            {
                echo "<tr><td>".$row2['college']."</td><td>".$row2['department']."</td><td>".$row2['grievance_type']."</td><td>".$row2['date_of_grievance']."</td><td>".$row2['detail']."</td><td>".$row2['root_cause']."</td></tr>";
            }
            echo "</table>";
        }
         ?>
         </table>
         </form>
         </body>
         
</html>

   
