<?php
$conn =new mysqli("localhost", "root", "", "unima_exam");
?>



<html>
     <title>fetch data</title>
     <body style="background-color: ">


		<h2 align="center" style="color: darkblue" >UNIVERSITY OF MALAWI EXAM INVIGILATION LIST.</h2>
	   
<table align="center" border="2" style="margin-top: 30px; line-height: 50px; width: 1000px; color: black">
	

	<?php
	$sql = "SELECT * FROM registrar";
	$result = mysqli_query($conn, $sql);

	  if (mysqli_num_rows($result) >0 ){

	  	
	  	  
	  	
        
	  	echo "<thead>";
	    echo "<tr>";
            
	  	    echo "<th>INVIGILATOR</th>";
	  	    echo "<th>ROOM NAME</th>";
	  	    echo "<th>COURSE CODE</th>"; 
	  	    echo "<th>DATE</th>"; 
	  	    echo "<th>TIME</th>";

	  	 echo "</tr>";
	  	 echo "</thead>";
	  }
	  while ($row=mysqli_fetch_assoc($result)) {
	  	

	  echo "<tr>";
	        echo "<td>".$row['Invigilator']."</td>";
	        echo "<td>".$row['roomName']."</td>";
	        echo "<td>".$row['courseCode']."</td>";
	        echo "<td>".$row['date']."</td>";
	        echo "<td>".$row['time']."</td>";

	  echo "</tr>";
	  }

	?>
	

</table>

</body>
</html>