
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
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
<style>
        body {
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0);
            margin-top: 10%;
            background-color: #191919;
            /* box-shadow: 1px 1px 2px 1px grey; */
            padding: 50px 8px 70px 38px;
            width: 30%;
            height: 50%;
            margin-left: 33%;
        }

/* 
        .container {
            background-color: #191919;
            box-shadow: 1px 1px 2px 1px grey;
            padding: 50px 8px 70px 38px;
            width: 30%;
            height: 50%;
            margin-left: 33%;
            border-radius: 20px;
            transition: 0.25s
        } */
/* 
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
        } */



        .txt {
            width: 90%;
            height: 5%;
            border: 1px solid brown;
            border-radius: 05px;
            padding: 20px 15px 20px 15px;
            margin: 10px 0px 15px 0px;
        }

        label,p,h1,h2 {

            margin-top: 3px;
            color: white;
            text-transform: uppercase;
            font-weight: 700;
            font-family: 'Merriweather', serif;
            font-family: 'Ubuntu', sans-serif;
        }

        .button {

            margin: 20px auto;
            border-radius: 24px;
            border: 2px solid #2ecc71;
            background: none;
            display: block;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            text-align: center;
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
            border: 4px solid blue !important;
        }

        p input[type="radio"] {
            margin-right: 30px;
            margin-top: 5px;
        }
    </style>
<div class="container">

        <form action="insstaff.php" method="POST">
            
            
            <center><h2>Welcome to Staff Grievance portal</h2></center>
            <label>Name</label>
            <BR>

            <input type="text" class="txt" name="name" placeholder="Please enter your user-id"  onkeyup="showHint(this.value)" />
            <br>
	    <p class="txt">Suggestions: <span id="txtHint"></span></p>
            <label>Usr-Id</label>
            <BR>

            <input type="password" class="txt" name="uname" placeholder="Please enter your password" />
            <br>

            <label>PASSWORD</label>
            <input type="password" class="txt" name="pwd" placeholder="Please enter your password" />
            <br>


            <button type="submit" name="submit" class="button">SUBMIT-QUERY</button>
        </form>
    </div>
