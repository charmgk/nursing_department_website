<?php
echo '
<html > <!-- <img src="images/socialicons.jpg" style=" margin-top:220px; margin-left:0px;"> </img> -->
<head>
<title>The Nursing Depertment</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="carousel/js/bootstrap.js"></script> 
</head>
<body>
 
 
<div id="container">

	<div id="menu">
	<ul >
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="entryrequired.php">Entry Requirements</a></li>  
			<li><a href="contact.php">Contact Us</a></li> 
			<li ><a href="registration.php">Apply Online <span class="darrow"> &#9660 </span></a> </li>
			<li><a href="regstatus.php">Registered </a></li> 
	</ul>		
    	   
		<!-- write the css for div searchbtn -->
	<div id="searchbtn">
	<form method="post" action="displaydata.php" name="searchForm">
    <input  type="text" name="search" placeholder="input your search term" required>  
    <input type="submit" value="Search" onclick="displaydata.php">
    </form>	</div>
    </div> ' ;
	?>

<?php 
include ('carousel/bootstrapcarousel.php');
 	
echo '
     
    <div id="content">
    	
        <div id="content_left">
        	<div class="content_left_section">
            	<h1>Other Locations on this site</h1>
                <ul>     
                    <li><a href="entryrequired.php">Entry Requirements</a></li>
                    <li><a href="registration.php">Register Online</a></li>
                    <li><a href="regstatus.php">Check Registration status</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="aboutus.php">About Chuka University</a></li>
                </ul>
            </div>
			<div class="content_left_section">
            	<h1>Links to our other depertments</h1>
                <ul>
                     <li><a href="http://www.chuka.ac.ke">Computer Science and ICT</a></li>
                    <li><a href="http://www.chuka.ac.ke">Physical sciences</a></li>
                    <li><a href="http://www.chuka.ac.ke">Biological Sciences</a></li>
                    <li><a href="http://www.chuka.ac.ke">Engineering</a></li>
               	</ul>
            </div>
			<div class="content_left_section">
			<h1>Links to our other Faculties</h1>
			 <ul>
                     <li><a href="http://www.chuka.ac.ke">Business Studies</a></li>
                    <li><a href="http://www.chuka.ac.ke">Arts and humanities</a></li>
                    <li><a href="http://www.chuka.ac.ke">Education and resources development</a></li>
                    <li><a href="http://www.chuka.ac.ke">Agriculture and environmental studies</a></li>
                    <li><a href="http://www.chuka.ac.ke">Science, engineering and technology</a></li>
			</ul>
			</div> ';
?>