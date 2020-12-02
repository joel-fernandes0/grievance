
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&family=Ubuntu&display=swap');

            body {
                font-family: sans-serif;
                background: linear-gradient(to right, #b92b27, #1565c0);
            }
            

            .container{
                background-color: #191919;
                box-shadow: 1px 1px 2px 1px grey;
                padding: 50px 8px 70px 38px;
                width: 30%;
                height: 50%;
                margin-left:33%; 
                border-radius: 20px;
                transition: 0.25s
            }

            .container input [type="text"] {
                border: 0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #3498db;
                padding: 10px 10px;
                width: 255px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s
            }
            

            
            .txt{
                width: 90%;
                height: 5%;
                border: 1px solid brown;
                border-radius: 05px;
                padding: 20px 15px 20px 15px;
                margin: 10px 0px 15px 0px;
            }

            label, p, h1 {
                 
                margin-top: 3px;
                color: white;
                text-transform: uppercase;
                font-weight: 500;
                font-family: 'Merriweather', serif;
                font-family: 'Ubuntu', sans-serif;
            }
            
            .button{

                margin: 20px auto;
                border-radius: 24px;
                border: 2px solid #2ecc71;
                background: none;
                display: block;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 0.25s;
                cursor: pointer
                text-align : center;
                padding: 14px 40px;

            }

            button:hover {
                background: #2ecc71;
                
            }
            input {
                background-color: black;
                font-size: 16px;
                width: 20px;
                height: 20px;
                border: 2px solid #2ecc71;
                border-radius: 5px;
                color: white;
                margin-left: 15px;
            }

            input:focus {
                border : 4px solid blue !important;
            }
            
            p input[type="radio"]{
                /* margin-left:50px; */
                margin-right: 30px;
                margin-top: 5px;
            }

        </style>
    
    <body style="margin-top: 13%;">

        
        <div class="container">
            <center><h1>Please share</h1></center>
            <center><h1>we are here to help</h1></center>
            
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

