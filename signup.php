<!-- <!DOCTYPE HTML>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="signup_c.css">
<script>  
function validateform(){  
var name=document.myform.field1.value;
var userid=document.myform.field8.value;  
var password=document.myform.field7.value;
//var repassword=document.myform.field9.value; 
var email=document.myform.field2.value; 
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(email==null || email=="")
{
	alert("Email cant be blank");
	return false;
}
else if(userid==null || userid=="")
{
	alert("Userid cant be blank");
	return false;
}
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
	/*else if(!password.equals(repassword))
	{
		alert("Password mismatch!");
		return false;
	}*/
}
</script>  
</head>
<body>
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<h2 class="sign"><center>Sign Up</center></h2>
<br>
<form action="details.php" name="myform" method="POST" onsubmit="return validateform()" >
<center>
<ul class="form-style-1" >
    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="Name" /> 
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field2" class="field-long" />
    </li>
	<li>
		<label>User ID<span class="required">*</span></label>
		<input type="text" name="field8" class="field-long" >
	</li>
	<li>
		<label>Password<span class="required">*</span></label>
		<input type="password" name="field7" class="field-long" placeholder="**********">
	</li>
	
    <li>
        <label>Vehicle Type</label>
        <select name="field3" class="field-select">
        <option value="None">None</option>
		<option value="Car">Car</option>
        <option value="Bike">Bike</option>
        <option value="Scooter">Scooter</option>
        </select>
    </li>
    <li>
        <label>Address <span class="required">*</span></label>
        <textarea name="field4" id="field5" class="field-long field-textarea"></textarea>
    </li>
	<li>
		<label>Phone No. <span class="required">*</span></label>
		<input type="number" name="field5">
	</li>
	<li>
		<label>Status <span class="required">*</span></label>
		<input type="radio" name="field6" value="owner">Owner<br>
		<input type="radio" name="field6" value="renter">Lessee<br>
	</li>
    <li>
        <input type="submit" value="Submit">
    </li>
	
</ul>
</form>
	<p>Existing User?Please click <a href="signin.html">here</a>
</center>
<footer style="background: #1abc9c;
	color: #fff;
	border: 1px solid #257C9E;">
 <b>
 <p style="color: #b20b00; font-size: 14pt;">Maintained by: Baibhab Biswaranjan(1641012367),Shubham Mishra(1641012130),Sidharth Ranjan Mandal(164101235),Rashmiranjan Baral(1641012102)</p>
  <p style="color: #b20b00;font-size: 14pt;">Contact information:</b> <a href="mailto:baibhab.biswaranjan@gmail.com" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">baibhab.biswaranjan@gmail.com</a>
  ,<a href="mailto:shubhammishra920@gmail.com" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">shubhammishra920@gmail.com</a>
  ,<a href="mailto:sidharth123@gmail.com" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">sidharth123@gmail.com</a>
  ,<a href="mailto:rashmi.baral@gmail.com" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">rashmi.baral@gmail.com</a></p>
</footer>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<title>Sign Up</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style1.css" />
        <script src="https://kit.fontawesome.com/9f1e537989.js"></script>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="text">SignUp Form</div>

                    <form action="register.php" method="post">
                        <div class="data">
                            <label>Full Name<span class="required">*</span></label>
                            <input name="name" type="text" required />
                        </div>
						<div class="data">
                            <label>Email <span class="required">*</span></label>
        					<input name="email" type="email" class="field-long" />
                        </div>
						<div class="data">
                            <label>User ID<span class="required">*</span></label>
							<input type="text" name="User_id" class="field-long" >
                        </div>
						<div class="data">
                            <label>Password<span class="required">*</span></label>
							<input type="password" name="password" class="field-long" placeholder="**********">
                        </div>
						<div class="data">
							<label>Vehicle Type</label>
							<select name="vehicle_type" class="field-select">
							<option value="None">None</option>
							<option value="Car">Car</option>
							<option value="Bike">Bike</option>
							<option value="Scooter">Scooter</option>
							</select>
                        </div>
						
                        <div class="data">
							<label>Address <span class="required">*</span></label>
							<textarea name="address" id="field5" class="field-long field-textarea"></textarea>
                        </div>
						<div class="data">
							<label>Phone No. <span class="required">*</span></label>
							<input type="number" name="phone_no">
                        </div>
						<div class="data">
							<label>Status <span class="required">*</span></label>
							<input type="radio" name="status" 					value="renter">Lessee<br>
						</div>
                        <div class="btn" align="center">
                            <div class="inner"></div>
                            <button type="submit">Login</button>
                        </div>
                            <div class="signup-link">
                             Already a member-><a href="signin.php">Sign-in</a>
                        </div>
                    </form>
                </div>
            </div>
      </section>
    </body>