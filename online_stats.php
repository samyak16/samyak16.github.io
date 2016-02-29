<?php
include_once 'dbconnect.php';


$total_count = mysql_result(mysql_query("select max(id) FROM registration"),0);

$tech_count = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,"'));

$non_tech_count = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="nontechnical,"'));

$workshop_count = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="workshop,"'));

$proshow_count = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="proshow,"'));

$tech_non_tech = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,nontechnical,"'));

$tech_workshop =  mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,workshop"'));

$tech_proshow = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,proshow,"'));

$non_tech_workshop = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="nontechnical,workshop,"'));

$non_tech_proshow = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="nontechnical,proshow,"'));

$workshop_proshow = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="workshop,proshow,"'));

$tech_non_work = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,nontechnical,workshop,"'));

$tech_non_pro = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,nontechnical,proshow,"'));

$tech_work_pro = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,workshop,proshow,"'));

$non_work_pro  = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="nontechnical,workshop,proshow,"'));

$tech_non_pro_work = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name="technical,nontechnical,workshop,proshow,"'));

$noneofthese = mysql_num_rows(mysql_query('SELECT id FROM registration where event_name=""'));

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="../asserts/script.js" type="text/javascript"></script>
      	<script src="asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <title>Samyak 2K16 || Events</title>
    </head>
    <body>
        <div class="container" id="container">
            <?php include '../asserts/header.php'; ?>
     <div class="content">
                    <div class="root"><a href="/">Samyak</a><div class="arrow">&#5171;</div><b>Registrations List</b></div>
                  <div class="content">
                      <div class="content_box bubble">
                        <div class="content_box_title">
                          K&nbsp;L&nbsp;University &nbsp;Samyak&nbsp;Registrations List
                        </div>
                        <div class="content_box_desc">
                          Samyak Count : <?php echo $total_count; ?>
                         
                        </div>
                        
                        <div class="content_box_desc">
                          Technical Count : <?php echo $tech_count; ?>
                         
                        </div>
                        <div class="content_box_desc">
                        Non Technical Count : <?php echo $non_tech_count; ?>
                        </div>
                        <div class="content_box_desc">
                          Workshop Count : <?php echo $workshop_count; ?>
                        </div>
                        <div class="content_box_desc">
                         Proshow Count : <?php echo $proshow_count; ?>
                        </div>
                        <div class="content_box_desc">
                          Technical,Non Technical : <? echo $tech_non_tech; ?>
                        </div>
                        <div class="content_box_desc">
                          Technical,workshop  : <?php echo $tech_workshop; ?>
                        </div>
                        <div class="content_box_desc">
                          Technical,proshow  : <?php echo $tech_proshow ?>
                        </div>
                        
                        <div class="content_box_desc">
                          Non Technical,workshop : <?php echo $non_tech_workshop; ?>
                         
                        </div>
                        
                        <div class="content_box_desc">
                          Non Technical,Proshow : <?php echo $non_tech_proshow; ?>
                          
                        </div>
                        
                        <div class="content_box_desc">
                          Workshop,Proshow : <?php echo $workshop_proshow; ?>
                        </div>
                        
                        <div class="content_box_desc" >
                         Technical,Non Technical,Workshop : <?php echo $tech_non_work; ?>
                         
                        </div>
                        
                        <div class="content_box_desc">
                          Technical,Non Technical,Proshow : <?php echo $tech_non_pro; ?>
                          
                        </div>
                        <div class="content_box_desc">
                          Technical,Workshop,Proshow : <?php echo $tech_work_pro; ?>
                          
                        </div>
                        <div class="content_box_desc">
                          Non Technical,Workshop,Proshow : <?php echo $non_work_pro; ?>
                          
                        </div>
                        
                        
                        <div class="content_box_desc">
                          All Technical,Non Technical,Workshop,Proshow : <?php echo $tech_non_pro_work; ?>
                        </div>
                        
                        <div class="content_box_desc">
                         None of these Technical,Non Technical,Workshop,Proshow : <?php echo $noneofthese; ?>
                        </div>
                        <p>
                          <b>Online Stats Made By K.PREM SAI KRISHNA</b>
                        </p>
                      </div>
                   
                  </div>
                </div>
            
          
           <?php include '../asserts/footer.php'; ?>
      </div>
  </body>
</html>