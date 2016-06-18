<?php
echo ' <div id="footer" > <span  style="float:left;"> Copyright: 2015 &nbsp <a href="http://nitafaulu.wordpress.com"><strong>Macharia Muguku</strong></a> </span>
<!-- php to display date and time -->
	<marquee  width=450 height=20 direction=right behavior=alternate style="float:right;" > '
?>	
<?php
$weekday = date("l");
$daynumber = date("dS");
$monthyear = date("F d");
echo " ".date(" l F d, Y");
echo " Time ".date("h:i:sa");
echo '</marquee>	
</div>'
?>