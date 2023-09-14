<?php session_start();
if (isset($_GET['destroy']) && $_GET['destroy'] == "yes") { session_destroy(); }

if(isset($_SESSION['user_name']))
{
    $user=$_SESSION['user_name'];
    echo "<script>alert('Selamat datang kembali $user');</script>";   echo "<meta http-equiv=\"refresh\" content=\"0;url=menu.php \">"; exit;
}
else
{
?>
<html> <title>Psikotest Online</title>
    <link href="style/bootstrap.css" rel="stylesheet">
    <link href="style/stylesheet.css" rel="stylesheet">
    <style>
		body { 
		  background: url(style/blue-sky.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		.form-2 {
    /* Size and position */
  width: 320px;
  position: fixed;
  top: 50%;
  left: 50%;
  margin-left: -175px;
  padding: 15px 30px;
  background: #fff;
  margin-top: -200px;
    /* Styles */
    background: #fffaf6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
}
		.form-1 {
    /* Size and position */
  width: 320px;
  position: fixed;
  top: 30%;
  left: 52%;
  margin-left: -175px;
  padding: 15px 30px;
  margin-top: -200px;
}
	</style>
    <body  style="">
	<div class="form-1">
	<img src="style/logo.png">
	</div>
	<div class="form-2">
        <div class="login-header bordered">
            <h4>Admin Psikotest Online Persada</h4>
        </div>
        <hr>
        <form action="login_cek.php"method="POST">
            <div class="login-field">
                <label for="username">Username</label>
                <input type="text" name="user_name" id="username" placeholder="Username">
                <i class="icon-user"></i>
            </div>
            <div class="login-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="icon-lock"></i>
            </div>
            <div class="login-button clearfix">
                <i><b>*For Administrator only</b></i><button type="submit" class="pull-right btn btn-large blue">SIGN IN </button>
            </div>
        </form>
    </div>
<?php } ?>


</body></html>