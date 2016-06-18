<!-- php for display is down there -->

<?php
include("header.php");
?> 
<div class="content_left_section">
<img src="images/imagedfs.jpg" alt="" />	
</div>
</div> 
<!-- end of content left -->
        
        <div id="content_right">
        <div class="product_box">
            <h1 style="background: url(images/templatemo_h1_bg.jpg)" > The Chuka University Department OF Nursing </h1> 			
            <div class="product_info"> 
			<!-- php to display the data as a table -->
<?php
		
		// imported
        $host="localhost"; // Host name
        $username="root"; // Mysql username
        $password=""; // Mysql password

        // Connect to server and select database.
         mysql_connect("$host", "$username", "$password")or die("cannot connect");
        mysql_select_db("nursing")or die("Sorry unable to connect to database"); 

           // Get all the data from the table
           $result = mysql_query("SELECT firstname, lastname, username, idnumber, age, gender, phone, date FROM newstudents;") 
            or die(mysql_error());  

             echo "<table border='5'  width='60%'  height='90%'  CELLSPACING='2' >";
             echo "<tr> <th>first name</th> <th>last name</th> <th>username name</th> <th>id number</th> <th>Age</th> <th>gender</th> <th>phone number</th> <th>date</th> </tr>";
             // keeps getting the next row until there are no more to get
             while($row = mysql_fetch_array( $result )) {
	        // Print out the contents of each row into a table
	        echo "<tr> <td>"; 
	        echo $row['firstname'];
	        echo "</td> <td>"; 
	        echo $row['lastname'];
			echo "</td> <td>"; 
			echo $row['username'];
			echo "</td> <td>";
	        echo $row['idnumber'];
	        echo "</td> <td>"; 
	        echo $row['age'];
			echo "</td> <td>"; 
	        echo $row['gender'];
	        echo "</td> <td>"; 
	        echo $row['phone'];
			echo "</td> <td>";   
	        echo $row['date'];
	        echo "</tr>"; 
			} 
			echo "</table>";
			mysql_close();
?>
            </div>
        </div>
    </div><!-- end of content right -->
    
    </div> <!-- end of content -->
    <?php
	include('footer.php')
	?>
</div>
</body>
</html>