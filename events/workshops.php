<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../asserts/style.css" type="text/css" rel="stylesheet" />
        <script src="../asserts/script.js" type="text/javascript"></script>
      <script src="../asserts/scripts/library/jquery-1.9.1.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <title>Samyak || Workshops</title>
        
    </head>
    
    <body onload="xmlLoad()">
        <script>
            function xmlLoad(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                        loadData(xmlhttp);
                    }
                };
                    xmlhttp.open("GET","../asserts/docs/workshops.xml",true);
                    xmlhttp.send();
            }
            function loadData(xml){
                var xmlDoc = xml.responseXML;
                var tag = xmlDoc.getElementsByTagName('<?php echo $id; ?>');
                var title = tag[0].getElementsByTagName("TITLE")[0].innerHTML;
                var description = tag[0].getElementsByTagName("DESCRIPTION")[0].innerHTML;
                var contact = tag[0].getElementsByTagName("CONTACT")[0].innerHTML;
                var nav = tag[0].getElementsByTagName("NAV")[0].innerHTML;
                document.getElementById("event_title").innerHTML = title;
                document.getElementById("event_description").innerHTML = description;
                document.getElementById("event_contact").innerHTML = contact;
                document.getElementById("nav").innerHTML = nav;
            }
        </script>
        <div class="container" id="container">
            <?php include '../asserts/header.php'; ?>
                <div class="content">
                    <div class="root"><a href="../index.php">Samyak</a><div class="arrow">&#5171;</div><div id="nav"></div></div>
                    <div class="event_wrap">
                        <div id="event_title"></div>
                        <div id="event_description"></div>
                        <div id="event_contact"></div>
                    </div>
                </div>
            <?php include '../asserts/footer.php'; ?>
        </div>
    </body>
</html>