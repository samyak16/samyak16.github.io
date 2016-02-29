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
                  <div id="content-desc">
        	hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
                  </div>
<?php //navagation bar ?>
    <div class="heading">Users</div>
                  
                  <div class="content_box_title">
                          By Samyak Id
                        </div>
                        <div class="form-all bubble">
                  
                  
                     <form name="registration" class=""  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                   
                
                        <input type="text" placeholder="samyak id" name="samy_id">
                            
                        <input type="submit" name="randc_submit" value="Submit"></input>
              </form>
          </div>
					<div class="bubble" align="center">
                        <?php 
                                if(isset($_POST["randc_submit"]))
                                {
                                    $sampm_id=$_POST['samy_id'];
                                  echo "<table style='border: solid 1px black; width:50%'>";
echo "<tr><th>Samyak Id</th><th>Name</th><th>Gender</th><th>College Name</th><th>Technical</th><th>Technical Spot</th><th>Literary</th><th>Technical issue</th><th>Technical spot issue</th><th>Literary issue</th> </tr>";

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
    $stmt = $conn->prepare("SELECT samyak_id,name,gender,college_name,technical,technicalspot,literary,tech_issue,tech_spot_issue,literary_issue FROM userdetails where samyak_id='$sampm_id' "); 
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
					
            
          <div class="content_box_title">
                          By Name
                        </div>
          <div class="content_box_desc">
                   <form name="registration" class="form-all bubble"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                   
                
                        <input type="text" placeholder="Name" name="name_id">
                            
                        <input type="submit" name="randcemail_submit" value="Submit"></input>
                    
            </form>
          </div>
<div class="bubble" align="center">
                        <?php 
                                if(isset($_POST["randcemail_submit"]))
                                {
                                    $sampd_id=$_POST['name_id'];
                                  echo "<table style='border: solid 1px black; width:50%'>";
echo "<tr><th>Samyak Id</th><th>Name</th><th>Gender</th><th>College Name</th><th>Technical</th><th>Technical Spot</th><th>Literary</th><th>Technical issue</th><th>Technical spot issue</th><th>Literary issue</th> </tr>";

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
     $stmt = $conn->prepare("SELECT samyak_id,name,gender,college_name,technical,technicalspot,literary,tech_issue,tech_spot_issue,literary_issue FROM userdetails where name='$sampd_id' "); 
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


