<?php
$conn =new mysqli("localhost", "root", "", "unima_exam");
?>



<html>
     <title>fetch data</title>
     <body style="background-color: white">


		<h2 align="center" style="color: darkblue" >UNIVERSITY OF MALAWI EXAM INVIGILATION LIST.</h2>
	   
<table align="center" border="2" style="margin-top: 30px; line-height: 50px; width: 1000px; color: black">
	

	<?php
	$sql = "SELECT * FROM student";
	$result = mysqli_query($conn, $sql);

	  if (mysqli_num_rows($result) >0 ){

	  	
	  	  
	  	
        
	  	echo "<thead>";
	    echo "<tr>";
            
	  	    echo "<th>STUDENTS ATTENDED EXAM</th>";
	  	    //echo "<th>ROOM NAME</th>";
	  	   

	  	 echo "</tr>";
	  	 echo "</thead>";
	  }
	  while ($row=mysqli_fetch_assoc($result)) {
	  	

	  echo "<tr>";
	        echo "<td>".$row['result']."</td>";
	       // echo "<td>".$row['roomName']."</td>";
	        

	  echo "</tr>";
	  }

	?>
	

</table>

</body>
</html>