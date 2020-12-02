<html>

<meta charset="UTF-8">
<title>Welcome</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&family=Ubuntu&display=swap');
    body {
        font-family: sans-serif;
        background: linear-gradient(to right, #b92b27, #1565c0);
    }
    .container {
        background-color: #191919;
        box-shadow: 1px 1px 2px 1px grey;
        padding: 100px 8px 250px 38px;
        width: 50%;
        height: 55%;
        margin-top: 5%;
        margin-left: 25%;
    }
    

    .txt {
        width: 90%;
        height: 5%;
        border: 1px solid brown;
        border-radius: 05px;
        padding: 20px 15px 20px 15px;
        margin: 10px 0px 15px 0px;
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

    label{
        font-size: 20px;
        color : white;
        font-weight: 500;
        font-family: 'Merriweather', serif;
        font-family: 'Ubuntu', sans-serif;
    }

    h1 {
        margin-top :-5%;
        margin-bottom: 3%;
        font-family: 'Ubuntu', sans-serif;
        font-weight: 700;
        color: white
    }

    input {
        background-color: black;
        font-size: 16px;
        width: 300px;
        height: 30;
        border: 2px solid #2ecc71;
        border-radius: 5px;
        color: white;
        margin-left: 20px;
    }

    input:focus {
        border : 4px solid blue !important;
    }

    p {
        margin-top: 0.4%;
    }

</style>

<body>

    <div class="container">
        <center>
            <h1>GRIEVANCES REDRESSAL COMMITTEE FORM</h1>
        </center>

        <form action="grievance_form_info.php" method="POST">
            <label>Full Name(first-middle-last name)</label>
            <input type="text" name="full_name" placeholder="Please enter your full name" />
            <br>
            <br>
            
            <label>Gender</label>
            <input type="text" name="gender" placeholder="Enter your gender" />
            <br>
            <br>
            
            <label>College/Institute</label>
            <input type="text" name="college" placeholder="" />
            <br>
            <br>
            
            <label>Department</label>
            
            <select name="department">
                <option value="Civil">Civil</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Construction">Construction</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer">Computer</option>
                <option value="Electrical">Electrical</option>
                <option value="Electronics & Telecommunicat">Electronics & Telecommunication</option>
                <option value="Instrumentation">Instrumentation</option>
                <option value="Production">Production</option>
                <option value="Bio-Technology">Bio-Technology</option>
                <option value="Bio-Informatics">Bio-Informatics</option>
                <option value="Printing & Packaging Technology">Printing & Packaging Technology</option>
                <option value="Marine">Marine</option>
            </select>
            
            <br>
            <br>
            <label>Semester</label>
            <input type="text" name="sem" placeholder="" />
            
            <br>
            <br>
            <label>Mobile/Contact-No</label>
            <input type="text" name="mobile_no" placeholder="Required**" />
            <br>
            <br>
            
            <label>Category</label>
            <select name="category">
                <option value="department">Department Level</option>
                <option value="college_institute">College/Institute Level</option>
                <option value="university">University Level</option>
            </select>
            
            <br>
            <br>
            <label>Type of Grievance</label>
            
            <select name="type">
                <option value="placement">Placement</option>
                <option value="assessment">Assessment</option>
                <option value="attendance">Attendance</option>
                <option value="fees">College fees</option>
                <option value=" Abuse">Abuse by student/faculty</option>
                <option value="exam">Examination</option>
                <option value="admission">Admission</option>
                <option value="finance">Finance</option>
                <option value="learning">Lecture time/Learning</option>
                <option value="re_evaluation">Paper Re-evaluation</option>
                <option value="other">Other</option>
            </select>
            <br>
            <br>
            
            <label>Date of grievance</label>
            <input type="date" name="date" placeholder="" />
            <br>
            <br>
            
            <label><center><p>Detailed information of grievance</p></center></label>
            <input style="border-radius: 10px" type="text" name="detail" class="txt"
                placeholder="500 words maximum(Please add important sentences only)" />
            <br>
            <label>Root Cause</label>
            <input type="text" name="root_cause" placeholder="" />
            
            <br>
            <br>
            <button type="submit" name="submit" class="button">SUBMIT</button>


            <label><center>**I agree all the information mentioned is true to my Knowledge**</center></label>

        </form>
    </div>
</body>

</html>