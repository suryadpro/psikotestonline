<?php
require "config.php";
$LS->init();
?>
<html>
 <head>
  <title>Reset Password</title>
 </head>
 <body>
  <div id="content">
   <h1>Log In</h1>
   <?php $LS->forgotPassword();?>
  </div>
  <!-- http://subinsb.com-logSys -->
 </body>
</html>