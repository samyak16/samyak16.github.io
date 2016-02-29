
<?php 

if(isset($_POST["resetpass"]))
                                {
	
	$newpass=$_POST['newpass'];
	
                                    
$servername = "localhost";
              $username = "samyak16";
                                          $password = "SamYak@2K16";
                                          $dbname = "samyak16";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $sql = "UPDATE userdetails ". "SET technicalspot = '$newpass' ". 
               "WHERE samyak_id='sk4819' " ;

    

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo " Password UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

}
?>


<html>
  <body>
    
    <form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
           ENter new password <input type="text" name="newpass">
      
      <input type="submit" name="resetpass" value="Submit"></input>
    </form>
  </body>
</html>