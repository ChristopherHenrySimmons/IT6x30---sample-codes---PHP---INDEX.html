<html>  
<body>  
<table align="left" border="1" cellpadding="3" cellspacing="0">  
<tr>
	<td>No.</td>
	<td>Name</td>
	<td>Location</td>
	<td>Remarks</td>
</tr>
<?php
for ($row=1; $row <= 10; $row++) {   
	$col1 = "No.: $row";
	$col2 = "Name: $row";
	$col3 = "Location: $row";
	$col4 = "Remarks: $row";
	
	echo "<tr>\n";
	echo "<td>$col1</td>\n";
	echo "<td>$col2</td>\n";
	echo "<td>$col3</td>\n";
	echo "<td>$col4</td>\n";
	echo "</tr>\n";
}
?>  
</table>  
</body>  
</html>

