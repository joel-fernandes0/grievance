

<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <style>
            .container{
                background-color: whitesmoke;
                box-shadow: 1px 1px 2px 1px grey;
                padding: 50px 8px 70px 38px;
                width: 30%;
                height: 50%;
                margin-left:33%; 
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
        
        <div class="container">
            <center><h1>Please share with us we are here to help</h1></center>
            
            <form action="login.php" method="POST">
                
                <label>USER-ID</label>
                <BR>
                
                <input type="text" class="txt" name="username" placeholder="Please enter your user-id"/>
                <br>
                
                <label>PASSWORD</label>
                <BR>
                
                <input type="password" class="txt" name="password" placeholder="Please enter your password"/>
                <br>
                
                <p><input type="radio"  name="choose" value="student"/>Student</p>
                <p><input type="radio"  name="choose" value="stafft"/>Staff</p>
                
                <button type="submit" name="submit" class="button">LOGIN</button>
                 </form>
            </div>
    </body>
</html>

