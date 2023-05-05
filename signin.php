<!-- <!DOCTYPE HTML>
<html>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="signup_c.css">
<script>  
function validateform(){  

var userid=document.myform2.field8.value;  
var password=document.myform2.field7.value;
if(userid==null || userid=="")
{
	alert("Userid cant be blank");
	return false;
}
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
	
}
</script>  
</head>
<body>
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<h2 class="sign"><center>Sign IN</center></h2>
<br>
<form action="signin_p.php" name="myform2" method="POST" onsubmit="return validateform()">
<center>
<ul class="form-style-1" style="border-style: solid;">
    
	<li>
		<label>User ID<span class="required"></span></label>
		<input type="text" name="field8" class="field-long" >
	</li>
	<li>
		<label>Password<span class="required"></span></label>
		<input type="password" name="field7" class="field-long" >
	</li>
	
    <li>
        <input type="submit" value="Sign In" />
    </li>
	
</ul>
</form>
	<p>New User?Please click <a href="signup.html">here</a>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
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
</html>
 -->

 <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<title>Sign In</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://kit.fontawesome.com/9f1e537989.js"></script>
    </head>
    <body>
        <section>

          <div class="center">
            
                <div class="text">Login Form</div>
                    <form action="" method="post">
                        <div class="data">
                            <label>Email</label>
                            <input type="text" name="email" required />
                        </div>
                        <div class="data">
                            <label>Password</label>
                            <input type="password" name="password" required />
                        </div>
                        <!-- <div class="forgot-pass">
                            <a href="#">Forgot Password?</a>
                            </div> -->
                        <div class="btn" align="center">
                            <div class="inner"></div>
                            <button type="submit" name="login">Login</button>
                        </div>
                            <div class="signup-link">
                            Not a member? <a href="signup.php">Signup now</a>
                        </div>
                    </form>
                </div>
            </div>
      </section>
    </body>

    <?php 
        session_start();
        if(isset($_POST['login'])){
            $connection = mysqli_connect("localhost:8080","root","");
            $db = mysqli_select_db($connection,"vehicle");
            $query = "select * from user_details where EMAIL = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if($row['EMAIL'] == $_POST['email']){
                    if($row['PASSWORD'] == $_POST['password']){
                        $_SESSION['name'] =  $row['NAME'];
                        $_SESSION['email'] =  $row['EMAIL'];
                        $_SESSION['userid'] =  $row['USERID'];
                        header("Location: ../dashboard/dashboard.php");
                    }
                    else{
                        ?>
                        <script>
                            alert("Wrong details,Try again");
                            window.location="signin.php";
                        </script>
                        <?php
                    }
                }
            }
        }

    ?>
</html>