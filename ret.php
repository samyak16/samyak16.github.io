<!-- 
 <?php
   $dbhost = 'localhost';
   $dbuser = 'samyak16';
   $dbpass = 'SamYak@2K16';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'Select * from registrations where gender="female" ' ;
   mysql_select_db('samyak16');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "SAMYAK ID :{$row['name'],$row['contact']}<br>";
 
       }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?> 
$workshop_count = mysql_query('SELECT email FROM registration where event_name="workshop,"'));
$tech_workshop =  mysql_query('SELECT email FROM registration where event_name="technical,workshop"'));
$non_tech_workshop =mysql_query('SELECT email FROM registration where event_name="nontechnical,workshop,"'));
$workshop_proshow = mysql_query('SELECT email FROM registration where event_name="workshop,proshow,"'));

$tech_non_work = mysql_query('SELECT email FROM registration where event_name="technical,nontechnical,workshop,"'));
$tech_work_pro = mysql_query('SELECT email FROM registration where event_name="technical,workshop,proshow,"'));

$non_work_pro  = mysql_query('SELECT email FROM registration where event_name="nontechnical,workshop,proshow,"'));

$tech_non_pro_work =mysql_query('SELECT email FROM registration where event_name="technical,nontechnical,workshop,proshow,"'));
-->