<?php
include_once 'dbconnect.php';
$msg="";


error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

error_reporting(E_ALL ^ E_DEPRECATED);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="asserts/script.js" type="text/javascript"></script>
      	<script src="asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <title>Samyak 2K16 || Registration</title>
    </head>
    <body>
        <div class="container" id="container">
            <?php include 'asserts/header.php'; ?>
                <div class="content">
                    <div class="root"><a href="index.php">Samyak</a><div class="arrow">&#5171;</div><b>Register</b></div>
<?php //navagation bar ?>
    <div class="heading">Download Registration card</div>
          
        <form name="registration" class="form-all bubble"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                   
                
                        <input type="text" placeholder="Email id" name="email_id">
                            
                        <input type="submit" name="email_submit" value="Submit"></input>
              
                        <?php 
                                if(isset($_POST["email_submit"]))
                                {
                                    $email_id=$_POST['email_id'];

                                    $res=mysql_query("SELECT samyak_id FROM registration WHERE email='$email_id'");

                                    if(mysql_num_rows($res)==0 ){

                                            $msg = "No such id exists";
                                        echo $msg;
                                        echo '<br>Click-><a href="registrations.php">New registration</a>';
                                        }
                                        else{
                                          $res1=mysql_query("SELECT * FROM registration WHERE email='$email_id'");
                                          $row=mysql_fetch_array($res1);
                                          $id=$row[1];
                                          echo '<a href="asserts/pdfs/'.$id.'.pdf" target="_blank" >Download your Registration card</a>';  
                                        } }
                                          
                                          
                                        
                                
                                 ?>
                
            </form>
        
            </div>
        <?php include 'asserts/footer.php'; ?>
        </div>
        
               
    </body>
</html>