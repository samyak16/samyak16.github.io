<?php
session_start();

if(!mysql_connect("localhost","samyak16","SamYak@2K16"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("samyak16"))
{
	die('oops database selection problem ! --> '.mysql_error());
}


if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$row=mysql_fetch_array($res);
	if($row['password']==($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		//$_SESSION['email'] = $row['emaili'];
		header("Location: home.php");
	}
	else
	{
?>
	<script>alert('wrong details');</script>
<?php
	}

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="../asserts/script.js" type="text/javascript"></script>
				<script src="../asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<title>Login </title>

</head>
<body>
 
              <div class="container" id="container">
            <?php include '../asserts/header.php'; ?>
<div class="content">
                  <div class="root"><a href="../">Samyak</a><div class="arrow">&#5171;</div><b><a href="./">Register</a></b></div>
                  
    
        
   
     
         <?php //FORM container ?>
        
            
        
        	
            <form  name="registration" class="form-all bubble" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<input type="text" name="email" placeholder="Your Email" required />


<input type="password" name="pass" placeholder="Your Password" required />
<input type="submit" name="btn-login" >

</form>
</div>
</div>
</body>
</html>
