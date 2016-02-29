<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="../asserts/script.js" type="text/javascript"></script>
      	<script src="../asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <title>Samyak 2K16 || User</title>
    </head>
    <body>
        <div class="container" id="container">
            <?php include '../asserts/header.php'; ?>
        
                <div class="content">
                    <div class="root"><a href="../">Samyak</a><div class="arrow">&#5171;</div><b><a href="./">Register</a></b></div>
                  <div class="content_box bubble">       
         
                  </div>
<?php //navagation bar ?>

                  
                  <div class="content_box_title">
                          View all users details
                        </div>
                        <div class="form-all bubble">
                  
                  
                     <form name="registration" class=""  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                   
                
                         <P>
													 CLICK OK 2 GET ALL THE USERS
											 </P>   
                        <input type="submit" name="randc_submit" value="OK"></input>
              </form>
          </div>
					<div class="bubble" align="center">
                        <?php 
                                if(isset($_POST["randc_submit"]))
                                {
                                    $sampm_id=$_POST['samy_id'];
                                  echo "<table style='border: solid 1px black; width:50%'>";
echo "<tr> </tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
    $servername = "localhost";
                                          $username = "samyak16";
                                          $password = "SamYak@2K16";
                                          $dbname = "samyak16";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM users  "); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
                                
                                }
                                          
                                          
                                        
                                
                                 ?>
          
        </div>
					
            

            </div>
	
        <?php include '../asserts/footer.php'; ?>
        </div>
        
               
    </body>
</html>


