<?php
include "header.php";
include "conn.php";
?>

	<br>
	<h1>Quick fix list</h1>

<?php
$sql = "SELECT * FROM procedures order by id_1 asc, id_2 asc, id_3 asc";
$result = $connection->query($sql);



// for ($i=0; $i<count($stuff);$i++){
while($row = $result->fetch_assoc()) {
	// $current = $stuff[$i];
	echo "<h3 class='examples' id='$row[id_1] $row[id_2] $row[id_3]'>$row[device] - $row[id_1] $row[id_2] $row[id_3]</h3>";
	echo "<p class='examples2'>$row[error]</p>";
	echo "<p class='exampledescriptions'>$row[action]</p>";
	echo "<br>";
}

?>
</div> 

<?php
include "footer.php";
?>
