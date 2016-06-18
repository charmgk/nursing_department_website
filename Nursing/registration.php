<?php
include ('formsubmitter.php');
?>

<!-- script for form validation -->
<Script type="text/javascript" src="scripts/script.js">  </script>
<!-- end of script -->

<?php
include("header.php");
?> 
<div class="content_left_section">
			<img src="images/imageers.jpg" alt="" />	
			</div>
        </div> 
<!-- end of content left -->

	   <div id="content_right">
        <div class="product_box">
            <h1 style="background: url(images/templatemo_h1_bg.jpg); text-align:center;" > The Chuka University Department OF Nursing </h1> 			
            <div class="product_info">
			<h2 style="text-align:center; color:white;"> Please register in the form below </h2> 
			<h4 style="text-align:center; color:white;"> (ensure you have completely filled out all the details correctly)</h4> </br>
			<div id="login"  >
			<div class="two" align="center">
			<form  method="post" name="myform" >
			<h3> Register below </h3>
			<!--blur to confirm that id number and age are numbers  -->
           <span style="color:skyblue; font-size:12px;"> <strong> First Name: </strong> </span> <input class="input-control" type="text" name="firstname" required /> <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> Last Name: </strong> </span>  <input class="input-control" type="text" name="lastname"  required /> <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> Username: </strong> </span> <input class="input-control" type="text" name="username"  onmouseout="validUser()" onblur="validUser()" required />  <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> Password: </strong> </span> <input class="input-control" type="password" name="password" onblur="validPassword()" onmouseout="validPassword()" required /> <br> </br>
		   <span style="color:skyblue; font-size:12px;"> <strong> Id Number: </strong> </span> <input class="input-control" type="text" name="idnumber"   required /> <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Age: </strong> </span> <input class="input-control" type="text" name="age" /> <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> &nbsp &nbsp &nbsp Gender: </strong> </span> <input class="input-control" type="text" name="gender" required /> <br> </br>
           <span style="color:skyblue; font-size:12px;"> <strong> Phone no: </strong> </span> <input class="input-control" type="text" name="phone" required  /> <br> </br>
		   <span style="color:skyblue; font-size:12px;"> <strong> &nbsp &nbsp Email : </strong> </span> <input class="input-control" type="email" name="email" required /> <br> </br>
		   <span style="color:skyblue; font-size:12px;"> <strong> &nbsp &nbsp Date : </strong> </span> <input class="input-control" type="date" name="date"  /> <br> </br>
		   
   	     
            <input  type="submit" name="submit" id="submit" value="Register" onclick="validSubmit()" />
            </form>
			</div>
            </div>			
            </div>
        </div>
    </div> <!-- end of content right -->
    </div> <!-- end of content -->
<?php
include("footer.php");
?> 
</div>
</body>
</html>