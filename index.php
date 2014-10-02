<!DOCTYPE HTML>
     <html>
          <head>
               <title> Manjhi Samaj </title>
               
               <!-- <BASE HREF="http://www.bunnyindia.com/"> -->
               <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
               <meta name="abstract" content="Manjhi Samaj, India">
               <meta NAME="Contact" CONTENT="Manjhi Samaj / bvikasvburman@gmail.com"> 
               <meta NAME="Robots" CONTENT="ALL"> 
               <meta NAME="Robots" CONTENT="INDEX,FOLLOW"> 
               <meta NAME="Revisit-After" CONTENT="7 Days"> 
               <meta Content="Global" name="distribution"> 
               <meta Content="Vikas Burman" name="author"> 
               <meta Content="en-gb" name="language"> 
               <meta Content="All" name="audience"> 
               <meta content="General" name="rating"> 
               <meta content="document" name="resource-type"> 
               <meta name="save" content="history"> 
               <meta name="description" content="Manjhi Samaj">
               <meta name="keywords" content="Manjhi Samaj">

               <!--<link REL="SHORTCUT ICON" HREF="images/dashark.png" />-->
          </head>
          <body>
               <div style="position: relative; top:100px; left:350px;">
                    <img src="images/coming_soon.gif" alt="Comming Soon" title="Manjhi Samaj" />
               </div>
          </body>
     </html>
     
     <?php
          $host     = $_SERVER['HTTP_HOST'];
          $folder   = 'manjhisamaj' ;
          $web_path = 'http://'.$host.'/'. $folder.'/public/';
          
          //print_r($web_path);
          //die;
          
          header('location:' . $web_path);
     ?>