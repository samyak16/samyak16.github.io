<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<?php


$msg="";
error_reporting(E_ERROR | E_PARSE);




if(isset($_POST['submit']))
 {
    
	

$servername = "localhost";
$username = "samyak16";
$password = "SamYak@2K16";
$dbname = "samyak16";


		$samyak_id = $_POST['samid'];
  $techn_issue = $_POST['techissue'];

    
    
   
    
    
  
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $sql = "UPDATE userdetails ". "SET literary_issue = '$techn_issue' ". 
               "WHERE samyak_id='$samyak_id' " ;

    

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    $msg= " Changed successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

                     

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
			<title>Samyak 2K16 || Registration Entry</title>
			
			
    </head>
    <body>
      
  

  <div class="container" id="container">
            <?php //navagation bar ?>
            <?php include '../asserts/header.php'; ?>
	
                <div class="content">
                  <div class="root"><a href="../">Samyak</a><div class="arrow">&#5171;</div><b><a href="./">Register</a></b><div class="arrow">&#5171;</div><b><a href="issuse.php">Issue</a></b></div>
                  <div class="content_box bubble">       
                  <div id="content-desc">
        	hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
                  </div>
    
        
   
     
         <?php //FORM container ?>
        
            
        
        	<div class="form-all bubble" align="center">
            
                  
            <form  name="registration" class="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
                <?phph //samyak id?>
							<?php echo $msg ;?>
              
              <table border="1">
                
              <tr>
                    <th>    <label>Enter SAMYAK ID of the participant</label></th> 
                        <td><input type="text" placeholder="samyak id" name="samid"  required></td>
               </tr> 
              
        
                <tr>
                  <th><label>Make Technical as issue</label></th>
                  <td> <object>
                        <input type="radio"  name="techissue" value="Yes" required><label for="yes">Yes</label></span>
										<input type="radio"  name="techissue" value="Yes" disabled><label for="yes">No</label></span>
						          	
						          	</object></td>
                  </tr>
                  
           
                          
                         
                        
             
                   
                   <?php //submit ?>  
                    
</table>
                    
                        <input  type="submit" name="submit" value="submit"></input>
                    
                

        </form>
    
      </div>
          
           
        
        
        
      
                    
              
                    
                    
                    
                </div>
            <?php //footer ?>
            <?php include 'asserts/footer.php'; ?>
        </div>

</body>
</html>