

<?php 
include "connect.php"

$username="";
$errors="";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Login Page
        </title>
		<link rel="Stylesheet" href="Login.css">
    </head>

    <body background="loginwallpaper.jpg">
        <table  border=5 width=400 height=400 id="Login" bgcolor=white>
            <tr>
                <td style="border:0px">
					<img src="userlogin.png" id="UserLoginImg"><br>
					<span style="padding-left:28%">Welcome Back!</span>
                    <form>
                        <table id="LoginInside" border=0 width=400 height=300>
                            <tr>
                                <td>
                                    <span>UserName<span style="color:green">*</span></span><br>
                                    <input type="text" placeholder="Enter UserName" name="username" required></input>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Password<span style="color:green">*</span></span><br>
                                    <input type="password" placeholder="Enter Password" name="password" required></input><br>
									<h4 style="text-align:right;font-family:courier">Forget Password?</h4>
                                </td>
                            </tr>
                            <tr>
                                <td align=right>
                                    <button id="buttonLogin" name="login">Login</button><br><br>
									<span style="font-size:17px">Create Account?<a href="SignUp.php">Sign Up</a></span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
	
</html>