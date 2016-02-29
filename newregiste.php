
<?php

   $msg="";


error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

error_reporting(E_ALL ^ E_DEPRECATED);

if(isset($_POST['submit']))
 {
    //includes the database connections 
    
    include_once 'dbconnect.php';
	
	//variables to receive user input
    
    $name=$_POST['uname'];
    
    $gender=$_POST['gender'];
	
    $college_name = $_POST['college_name'];
    
    $college_id = $_POST['college_id'];
    
    $stream = $_POST['stream'];
    
    $branch = $_POST['branch'];
    
    $event_name=$_POST['event_name'];  
    
    $chk="";  
    
    foreach($event_name as $chk1)  
    {  
      $chk .= $chk1.",";  
    }
    
    //$chk is as event array
    
    $contact=$_POST['contact'];
    
    $email=$_POST['email'];
	
    $city=$_POST['city'];
    
    $state=$_POST['state'];
    
    //query to get max id and concatnate with samyak for samyakid
    
	$query = mysql_result(mysql_query("select max(id) FROM registration"),0);
    
    $new = $query+1;
    
    // Assigning new id with increment of previous id
    
    $samyak_id = "samyak@".$new;
    
    $res=mysql_query("SELECT email FROM registration WHERE email='$email'");
 
    //checking  the email already exits are not
    
    
   if(mysql_num_rows($res)!=0 ){

            $msg = "email already exists";
        }
    
    else{
    
                    //inserting the user values into the database
    
                    $insert=mysql_query("insert into registration values('','$samyak_id','$name','$gender','$college_name','$college_id','$stream','$branch','$chk','$contact','$email','$city','$state')") or die(mysql_error());


                        
                         if($insert)
                       {

                                //creating the registration pdf file for the registred members

                                require('asserts/u/fpdf.php');

                                class PDF extends FPDF
                                {


                                    function Footer()
                                    {
                                    $this->SetY(-15);
                                    $this->SetFont('Arial','I',8);

                                    }

                                }
                                
                                // creating the pdf file 
                             
                                $pdf = new PDF();
                                $pdf->AliasNbPages();
                                $pdf->AddPage();
                                $pdf->SetFont('Times','',8);
                                $pdf->SetTextColor(32);
                                
                                //registration form background image 

                                $pdf->Image('asserts/images/registration_form.png',5,0,200);

                                //printing on the form depending on values stored in database and setting the X,Y axis of the cell to load the value.


                                $pdf->SetX(38);
                                $pdf->SetY(47);
                                $pdf->Cell(200,9,$samyak_id,0,0,'C');

                                $pdf->SetX(38);
                                $pdf->SetY(60);
                                $pdf->Cell(148,9,$name,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(83);
                                $pdf->Cell(148,4,$gender,0,0,'C');

                                $pdf->SetX(38);
                                $pdf->SetY(88);
                                $pdf->Cell(240,9,$college_name,0,0,'C');

                                $pdf->SetX(38);
                                $pdf->SetY(97);
                                $pdf->Cell(178,9,$college_id,0,0,'C');

                                $pdf->SetX(38);
                                $pdf->SetY(106);
                                $pdf->Cell(100,9,$stream,0,0,'C');

                                $pdf->SetX(38);
                                $pdf->SetY(106);
                                $pdf->Cell(260,9,$branch,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(123);
                                $pdf->Cell(240,11,$chk,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(143);
                                $pdf->Cell(145,9,$contact,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(153);
                                $pdf->Cell(248,7,$email,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(161);
                                $pdf->Cell(113,8,$city,0,0,'C');

                                $pdf->SetX(30);
                                $pdf->SetY(171);
                                $pdf->Cell(113,7.5,$state,0,0,'C');

                                // creating the pdf file to the new samyak id and saving in the local folder and also sending email to the user email
                             
                                $filename="asserts/pdfs/".$samyak_id.".pdf";
                                         
                                $pdf->Output($filename,'F');
													 			$to = $email;
													 ?>
													 	<script type="text/javascript">
window.location.href = 'http://klusamyak.com/rcard.php';
</script><?php

                                $form_email_download = "http://klusamyak.com/asserts/pdfs/".$samyak_id.".pdf";

                                $subject = 'KLU SAMYAK REGISTRATION';


                                $email_message = "Application ID: ".$samyak_id."\n";

                                $email_message .= "Name: ".$name."\n";

                                $email_message .= "College Name: ".$college_name."\n";

                                $email_message .= "Register Events: ".$chk."\n";

                                $email_message .= "Registration Form Download: ".$form_email_download."\n";

                                //mail function to send the email   4
                             
                             
                              
															mail($to,$subject,$email_message); 
															
													 
													 
	
                     }

                  }

}
?>

<!--------------------------------------Frontend coded by Vayuputra , Siva prakash , Hari krishnan , Narendra , Manoj khasyap --------->                    
<!--------------------------------------Backend coded by K.Prem sai krishna ----------------------------->

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
    <body onload="firstfocus();" >
        <div class="container" id="container">
            <?php //navagation bar ?>
            <?php include 'asserts/header.php'; ?>
                <div class="content">
                    <div class="root"><a href="/">Samyak</a><div class="arrow">&#5171;</div><b>Register</b></div>
                  
    
        
   
     
         <?php //FORM container ?>
        
            
        
        
            <form  name="registration" class="form-all bubble" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
                
                
              

                    <?php //name ?>
                    
                   	
                        <input type="text" placeholder="Name" name="uname"  maxlength="30" required>
												
                
                    <?php //Gender ?>
              <object>
                        <input type="radio"  name="gender" value="male" required><label for="male">Male</label></span>
							<span><input type="radio"  name="gender" value="female" required><label for="female">Female</label></span>
							</object>
							
                    

                    <?php //college_name ?>
                  <br>			
                        <input type="text" placeholder="College Name" name="college_name" maxlength="30" required>
                  
									<br>
                    <?php //college_id ?>
                  <br>
                        <input type="text" placeholder="College Id number" name="college_id" maxlength="15" required>
                 <br><br>
                     <?php //stream ?>
                        <br>
                        <select onchange="  UpdateOptions(this)" name="stream" required>

                            <option disable value="Not selected">Stream</option>

                            <option value="B.Tech">B.Tech</option>

                            <option value="Management">Management</option>

                        </select>

                    <?php //branch ?>
               
                        <select id="target1" name="branch"></select>
                   
                                 
                
                    <?php //Event For registration ?>
                   
							<span><input type="checkbox" name="event_name[]" value="Technical" ><label>&nbsp;Technical</label></span>
															<span style="margin-right: auto;"><input type="checkbox" name="event_name[]" value="NonTechnical">&nbsp;NON-Technical</label></span>
															<span><input type="checkbox" name="event_name[]" value="Workshop">&nbsp;Workshop</label></span>
                            <span><input type="checkbox" name="event_name[]" value="Proshow">&nbsp;Proshow</label></span>
                  
               
                
                    <?php //contact ?>
   
                        <input type="tel" placeholder="Contact number" name="contact" maxlength="15" required>
                     
                                        
                    <?php //email ?>

                        <input type="email" placeholder="Email" name="email" maxlength="70"  <?php //onblur="ValidateEmail()"?> required><?php echo $msg; ?>
                       
                
                 <?php //city ?>
                    
                    
                        <input type="text" placeholder="City" name="city" maxlength="25" required>
                    
                 <?php //state ?>
                    
                    
                        <input type="text" placeholder="State" name="state" maxlength="25" required >
                    
                   
                   <?php //submit ?>  
                    

                    
                        <input  type="submit" name="submit" value="submit"></input>
                    
                

        </form>
    
    
          
           
        
        
        
      
                    
              
                    
                    
                    
                </div>
            <?php //footer ?>
            <?php include 'asserts/footer.php'; ?>
        </div>
                    
        
        
        
        <script>
                  function firstfocus()  
  {  
      var uname = document.registration.uname.focus();
      return true;  
  }  
        
        </script>
        
  
        <?php // javascript code for stream and branch ?>
        
		
    <script type="text/javascript">

	function ClearOptions(sel){

		//while (sel.options.length>0) sel.options[0]=null;

		sel.options.length=0;

	}

	function PopulateSelect(sel,optsArray){

		for (var i=0,len=optsArray.length;i<len;i++) sel.options[i]=optsArray[i];

	}

	function UpdateOptions(sel){

		var destSel = document.getElementById('target1');

		ClearOptions(destSel);

		if (sel.value=="Not selected") return;

		var opts = [];

		var srcObjs = availVals[sel.value];

		for (var i=0,len=srcObjs.length;i<len;i++) opts[i]=new Option(srcObjs[i].text,srcObjs[i].value!=null?srcObjs[i].value:srcObjs[i].text);

		PopulateSelect(destSel,opts);

	}


    
    
	var availVals = {
        
		"B.Tech":   [{value:'Not selected',text:'Branch'},{value:'Bio_Technology',text:'Bio Technology'},{value:'MECH',text:'MECH'},{value:'Civil',text:'CIVIL'},{value:'CSE',text:'CSE'},{value:'ECE',text:'ECE'},{value:'ECM',text:'ECM'},{value:'EEE',text:'EEE'},{value:'Petroleum',text:'Petroleum'},{value:'CAMS',text:'CAMS'},{value:'B.arch',text:'B.arch'}],
        Management:   [{value:'Not selected',text:'Branch'},{value:'BBA',text:'BBA'},{value:'BCOM',text:'BCOM'},{value:'MBA',text:'MBA'},{value:'B.L',text:'B.L'},{value:'BHM',text:'BHM'}],
    };

    
</script>
	
		</body>
</html>