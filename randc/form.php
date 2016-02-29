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
		$name=$_POST['uname'];
		$gender=$_POST['gender'];
		$college_name = $_POST['college_name'];

    $tech_event = $_POST['techyop'];
    $non_event = $_POST['techspotyop'];
    $workshop = $_POST['literaryyop'];
    
    
   $res=mysql_query("SELECT samyak_id FROM userdetails WHERE samyak_id='$samyak_id'");
 
    //checking  the email already exits are not
    
    
   if(mysql_num_rows($res)!=0 ){

            $msg = "samyak id  already exists";
        }
    
    else{
    
    
    
  
	
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO userdetails (samyak_id, name, gender, college_name, technical,technicalspot,literary)
    VALUES ('$samyak_id','$name','$gender','$college_name','$tech_event','$non_event','$workshop' )";
    // use exec() because no results are returned
    $conn->exec($sql);
    $msg = "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

                     

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
			<title>Samyak 2K16 || Registration Entry</title>
			
    </head>
    <body>
      
  

  <div class="container" id="container">
            <?php //navagation bar ?>
            <?php include '../asserts/header.php'; ?>
	
                <div class="content">
                  <div class="root"><a href="../">Samyak</a><div class="arrow">&#5171;</div><b><a href="./">Register</a></b></div>
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
                        <td><input type="text" placeholder="samyak id" name="samid" id="c1" onchanged="check" required>
													<br><h6>Donot enter spaces between samyak id and capital SK.<br>Example : not allowed sk 121, SK 1213, SK121<br>Example : alowed sk1214</h6>
								</td>
							
               </tr> 
              

                    
                <tr>
                  <th><label>ENTER Name of the user</label></th>
                  <td><input type="text" placeholder="Name" name="uname"   required></td>
                </tr>
                   
                <tr>
                  <th><label>Choose the Gender</label></th>
                  <td> <object>
                        <input type="radio"  name="gender" value="male" required><label for="male">Male</label></span>
						          	<span><input type="radio"  name="gender" value="female" required><label for="female">Female</label></span>
						          	</object></td>
                  </tr>
                  
                  <tr>
                    <th><label>Enter the college name</label></th>
                    <td><input type="text" placeholder="College Name" name="college_name" required></td>
                  </tr>
                  
                 <tr>
                    <th><label>Technical Event</label></th> 
                    <td> <input type='radio' name='technical_participated' value='Yes' id="techyes" required>Yes
                      <input type='radio' name='technical_participated' value='No' id="techno" required>No</td>              
                 </tr>
                  
                <tr>
                    <th><label>If Yes,Enter the name of event </label> &nbsp&nbsp</th>
                    <td><input type="text" name="techyop" id="techyop" disabled></td>
                  <script>
                          document.getElementById('techyes').onchange = displayTextBox;
                          document.getElementById('techno').onchange = displayTextBox;

                          var textBox = document.getElementById('techyop');

                          function displayTextBox(evt){
                              console.log(evt.target.value)
                              if(evt.target.value=="Yes"){
                                  textBox.disabled = false;
																textBox.required = true;
                              }else{
                                  textBox.disabled = true;
                              }
                          }
                  
                  </script>
                  </tr>
                  
                  
                       
                  
                  <tr>
                    <th><label> Technical Spot Event</label></th> 
                    <td> <input type='radio' name='technical_spot_participated' value='Yes' id="techspotyes" required>Yes
                      <input type='radio' name='technical_spot_participated' value='No' id="techspotno" required>No</td>              
                 </tr>
                  
                <tr>
                    <th><label>If Yes,Enter the name of event </label> &nbsp&nbsp</th>
                    <td><input type="text" name="techspotyop" id="techspotyop" disabled></td>
                  <script>
                          document.getElementById('techspotyes').onchange = displayTextBox1;
                          document.getElementById('techspotno').onchange = displayTextBox1;

                          var textBox1 = document.getElementById('techspotyop');

                          function displayTextBox1(evt1){
                              console.log(evt1.target.value)
                              if(evt1.target.value=="Yes"){
                                  textBox1.disabled = false;
																textBox1.required = true;
                              }else{
                                  textBox1.disabled = true;
                              }
                          }
                  
                  </script>
                  </tr>
                  
                         
                  <tr>
                    <th><label>Literary Event</label></th> 
                    <td> <input type='radio' name='literary_participated' value='Yes' id="literaryyes" required>Yes
											<input type='radio' name='literary_participated' value='No' id="literaryno" required>No</td>              
                 </tr>
                  
                <tr>
                    <th><label>If Yes,Enter the Literary </label> &nbsp&nbsp</th>
                    <td><input type="text" name="literaryyop" id="literaryyop" disabled></td>
                  <script>
                          document.getElementById('literaryyes').onchange = displayTextBox2;
                          document.getElementById('literaryno').onchange = displayTextBox2;

                          var textBox2 = document.getElementById('literaryyop');

                          function displayTextBox2(evt2){
                              console.log(evt2.target.value)
                              if(evt2.target.value=="Yes"){
                                  textBox2.disabled = false;
																	textBox2.required = true;
                              }else{
                                  textBox2.disabled = true;
                              }
                          }
                  
                  </script>
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