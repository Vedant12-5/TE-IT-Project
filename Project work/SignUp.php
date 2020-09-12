<?php 
include "connect.php"

$username="";
$email="";
$errors=array();

if(isset($_POST['register'])){
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $password_1=mysql_real_escape_string($_POST['password_1']);
    $password_2=mysql_real_escape_string($_POST['password_2']);
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1 == $password_2){
        array_push($errors,"Passwords do not match");
    }

    if(count($errors) == 0){
        $sql="insert into users(username, email, password) values('$username','$email','$password_1')"
    mysqli_query($connection,$sql);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Sign-Up Page
        </title>
		<link rel="Stylesheet" href="SignUp.css">
    </head>

    <body background="loginwallpaper.jpg">
        <table  border=5 width=500 height=300 id="Login" bgcolor=white>
            <tr>
                <td style="border:0px;padding-top:27px">
					<span style="font-size:40px;padding-left:28%">Sign Up</span><br>
					<span style="padding-left:2%;font-size:12px">Please fill in this form to create an account</span>
                    <form>
                        <table id="LoginInside" border=0 cellpadding=6px width=500 height=300>
							<tr>
                                <td>
                                    <span>Name<span style="color:green">*</span></span><br>
                                    <input type="text" placeholder="Enter Full Name" required></input>
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <span>Email Address<span style="color:green">*</span></span><br>
                                    <input type="email" placeholder="Enter Email Address" required></input>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>UserName<span style="color:green">*</span></span><br>
                                    <input type="text" placeholder="Enter UserName" required></input>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Password<span style="color:green">*</span></span><br>
                                    <input type="password" placeholder="Enter Password" required></input><br><br>
									<input type="password" placeholder="Re-Enter Password" required></input><br>
								
                                </td>
                            </tr>
							
                            <tr>
                                <td align=right>
                                    <button id="buttonLogin" name="register">Sign Me UP!</button><br><br>
									<span style="font-size:17px">Already have an Account?<a href="Login.php">Sign in</a></span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
	
</html>


<!--	<h4 style="text-align:right;font-family:courier">Forget Password?</h4>-->