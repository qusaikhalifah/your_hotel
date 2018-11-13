<?php
$servername="localhost";
$username="root";
$password="";
$db="store";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
	echo "not conncted".connect_error;
}
else{
	
	

	
	$sql2="UPDATE info SET money='80$' WHERE Id='6'";
	
	$conn->multi_query($sql2)==TRUE;
				$table="<table >
	<tr >
	<th>Id</th>
	<th>Hotel</th>
	<th>Money</th>
	<th>Country</th>
	</tr>";
	$sql3="SELECT * FROM info";
	$rsut=$conn->query($sql3);
	if($rsut->num_rows>0){
		while($row=$rsut->fetch_assoc()){
			$table=$table."
<tr>
	<td>".$row["Id"]."</td>
	<td>".$row["Hotel"]."</td>
    <td>".$row["money"]."</td>
    <td>".$row["country"]."</td>
	</tr>
	
	";}
		
			
		
	}else{
		"error";
	}
		
$conn->close;
}
?>
<html>
<head>
<link rel="stylesheet" href="hcss.css">

</head>
<body>
<ul>
<li><a href="hotel.php">Home</a></li>
<li><a href="all.php">Hotels</a></li>
<li><a href="sh.php">Shep hotels</a></li>
<li><a href="ex.php">Expasive hotels</a></li>
</ul>

<h2>Your Hotel</h2>
<br>
<?echo $table;?>
</body>
</html>