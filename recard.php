<?php										
include_once 'dbconnect.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

error_reporting(E_ALL ^ E_DEPRECATED);

$id=$_GET['id'];

$query1="";
$query2="";
$query3="";
$query4="";

$res=mysql_query("SELECT * FROM registration WHERE samyak_id='$id' ");
				while($row = mysql_fetch_array($res))
				{
				
				$query1 = $row['samyak_id'];
				$query2 = $row['name'];
                $query3 = $row['contact']    ;
                $query4 = $row['email'];
                }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="asserts/script.js" type="text/javascript"></script>
			<script src="asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <title>Samyak 2K15 || Registration</title>
    </head>
    <body>
        <div class="container" id="container">
            <?php include 'asserts/header.php'; ?>
                <div class="content">
                    <div class="root"><a href="/">Samyak</a><div class="arrow">&#5171;</div><b>Registration</b></div>
                    
                    
               
        <form name="registration"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <legend class="middle">Download Registration card</legend>
            <fieldset  >
                <br><br>
                
                    
                            
                            <?php echo 'Samyak id: '.$query1.'<br> Name:   '.$query2.'<br> Contact:  '.$query3.'<br>  Email id:'.$query4   ; ?>    
                        
                 
                        <?php
if($id!=""){

echo'<a href="asserts/pdfs/'.$id.'.pdf">Download your Registration card</a>';
                            }
                            else{
                            echo 'sorry! some went worng go to the home page';
                            
                            }?>
                        <a href="index.php">BACK TO HOME</a>
            </fieldset>
            </form>
            
            
            
            </div>
            <?php include 'asserts/footer.php'; ?>
        </div>
        
        
    </body>

	<!-- 
	
	  <input type="text" placeholder="Samyak id" name="samyakid" id="form-h-it" >
                            
                        <button type="submit" name="id_submit" value="update_id">Submit</button>
                        <?php /*
                                if(isset($_POST["id_submit"]))
                                {
                                    $id=$_POST['samyakid'];

                                    $res=mysql_query("SELECT samyak_id FROM registration WHERE samyak_id='$id'");

                                    if(mysql_num_rows($res)==0 ){

                                            $msg = "No such id exists";
                                        echo $msg;
                                        echo '<br>Click-><a href="registrations.php">New registration</a>';
                                        }
                                        else{
                                echo'<a href="asserts/pdfs/'.$id.'.pdf" target="_blank" >Download your Registration card</a>';
                                }
                                } */?>
	
	-->
</html>
	
