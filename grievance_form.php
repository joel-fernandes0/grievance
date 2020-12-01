

<html>
    
        <meta charset="UTF-8">
        <title>Welcome</title>
        <style>
            .container{
                background-color: whitesmoke;
                box-shadow: 1px 1px 2px 1px grey;
                padding: 100px 8px 250px 38px;
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
            <center><h1>GRIEVANCES REDRESSAL COMMITTEE FORM</h1></center>
            
            <form action="grievance_form_info.php" method="POST">
            <label>Full Name(first-middle-last name)</label>
            <input type="text"  name="full_name" placeholder="Please enter your full name"/>
            <br>
            <br>
            <label>Gender</label>
            <input type="text"  name="gender" placeholder="Enter your gender"/>
            <br>
            <br>
              <label>College/Institute</label>
            <input type="text"  name="college" placeholder=""/>
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
            <input type="text"  name="sem" placeholder=""/>
            <br>
            <br>
             <label>Mobile/Contact-No</label>
            <input type="text"  name="mobile_no" placeholder="Required**"/>
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
            <input type="date"  name="date" placeholder=""/>
            <br>
             <br>
            <label>Detailed information 
                of grievance</label>
            <input type="text"  name="detail" class="txt" placeholder="500 words maximum(Please add important sentences only)"/>
            <br>
            <label>Root Cause</label>
            <input type="text"  name="root_cause" placeholder=""/>
            <br>
            <br>
            <button type="submit" name="submit" class="button">SUBMIT</button>
            
            <br>
            <br>
             <br>
            <label>**I agree to all the information filled above is true to my knowledge</label>
             
            </form>
            </div>
            </body>
        </html>
        
        
        
        
        
      
           
            
            
       
        


