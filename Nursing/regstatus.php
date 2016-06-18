<!-- php for login -->
<?php
include ('loginsubmitter.php');
?>

<!-- script for form validation -->
<Script type="text/javascript" src="scripts/script.js">  </script>
<!-- end of script -->

<?php
include("header.php");
?> 
<div class="content_left_section">
			<img src="images/index.png" alt="" />	
			</div>
        </div> 
<!-- end of content left -->
        
        <div id="content_right">
        <div class="product_box">
            <h1 style="background: url(images/templatemo_h1_bg.jpg)" > The Chuka University Department OF Nursing </h1> 			
            <div class="product_info"> 
			<h2 style="text-align:center; color:white;"> Please login in the form below </h2> 
			<h4 style="text-align:center; color:white;"> (fill out the details correctly)</h4> </br>
			<div id="login" style="height:235px;">
			<div class="two" align="center">
			<form  method="post" name="myform" >
			<h3> Log in below </h3>
           <span style="color:skyblue; font-size:12px;"> <strong> Username: </strong> </span> <input class="input-control" type="text" name="username" onmouseout="validUser()"required />  <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> Password: </strong> </span> <input class="input-control" type="password" name="password" onmouseout="validPassword()" required /> <br> </br>
            
			<input  type="submit" name="submit" id="submit" value="Login" onclick="validSubmit()" />
            </form>
			</div>
            </div>
			<br> </br>
			<strong> <marquee style="color:red; font-size:18px;"> Precautionary measures: a) please do not show or tell anyone your login credentials!! 
			b) do not fall prey to strangers calling you for a change in your account 
			c) we only call you from our official number:020 2310512 </marquee> </strong>
			
			<h2 style="text-align:center; color:white;"> Help us help you </h2> 
			<p style="text-align:center;">
			report any malpractice or errors immediately to the dean of students, depertment of science, engineering and technology prof Macharia Muguku on 0728655403
			
			</p>
			
			<!-- put css to make it stop when hovering -->
            </div>
        </div>
    </div><!-- end of content right -->
    
    </div> <!-- end of content -->
 <?php
include("footer.php");
?>   
</div>
</body>
</html>