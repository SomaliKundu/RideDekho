<?php
    $connection= mysqli_connect("localhost:8080","root","");
    $db= mysqli_select_db($connection,"vehicle");

    $query_var= "insert into user_details values ('$_POST[name]','$_POST[User_id]','$_POST[password]','$_POST[email]','$_POST[address]','$_POST[phone_no]','$_POST[vehicle_type]','$_POST[status]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Registration Successful, You can now login")
    window.location.href="signin.php";
</script>