<?php
include ("config.php");

$row="";
$db=connect();
$sql = "SELECT id FROM login WHERE login = '$myusername' and password = '$mypassword'";
$row=$db->query($sql);

if($row == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: http://localhost/workshop_blockchain/welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }	
?>	
<html>
	
   <head>	
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
		    background-color:#2E2382
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#FFFFFF; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>