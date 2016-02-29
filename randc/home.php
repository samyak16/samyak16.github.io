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
        <title>Samyak 2K16 || Registration</title>
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
                    <div class="event_box">
                        <a class="event" href="form.php">
                          <div class="event_info">
                            <div class="event_info-front">
                             <h3>
                               
                               R & C Entry</h3>
                            </div>
                            <div class="event_info-back">
                              <h3>
                               USER ENTRY
                              </h3>
                            </div>
                          </div>
                        </a>
                            <a class="event" href="view.php">
                              <div class="event_info">
                            <div class="event_info-front">
                              <h3>R & C View</h3>
                            </div>
                            <div class="event_info-back">
                              <h3>
                                USER DETAILS
                              </h3>
                            </div>
                          </div>
                      </a>
											 <a class="event" href="issuse.php">
                              <div class="event_info">
                            <div class="event_info-front">
                              <h3>R & C ISSUE MANAGEMENT</h3>
                            </div>
                            <div class="event_info-back">
                              <h3>
                                ISSUE DETAILS
                              </h3>
                            </div>
                          </div>
                      </a>
                           
                    </div>
                </div>
            <?php include '../asserts/footer.php'; ?>
        </div>
        
               
    </body>
</html>