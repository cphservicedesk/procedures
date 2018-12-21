<?php
include "header.php";
include "conn.php";

if (!empty($_POST)){
	$stmt = mysqli_prepare($connection, "
		INSERT INTO `NIGRUN`.`procedures`
		(`id_1`,
		`id_2`,
		`id_3`,
		`device`,
		`error`,
		`action`,
		`images`)
		VALUES
		(?,?,?,?,?,?,?)
		"
	);
	echo $stmt->error;
	mysqli_stmt_bind_param($stmt, 'sssssss', $_POST["alarm1"], $_POST["alarm2"], $_POST["alarm3"], $_POST["device"], $_POST["error"], $_POST["description"], $_POST["images"]);
	echo $stmt->error;
	echo(mysqli_error($connection));
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	echo(mysqli_error($connection));

	echo "<br>";
	echo "<h1>$_POST[device] added</h1>";

}
?>
<br>
<h1>
	Add procedure
</h1>
<form class="submitform" action="submit.php" method="POST">
	Alarm identifier 1 is related to the subsystem (01 – TMS; 02 – IXL; 03 – ERTMS; 04 AUX;) <br>
	<input type="number" name="alarm1" placeholder="Alarm identifier 1"> <br>
	Alarm identifier 2 is related to the module within the subsystem <br>
	<input type="number" name="alarm2" placeholder="Alarm identifier 2"> <br>
	Alarm identifier 3 is related to the specific alarm. <br>
	<input type="number" name="alarm3" placeholder="Alarm identifier 3"> <br>
	Device name <br>
	<input type="text" name="device" placeholder="device name"> <br>
	Error name <br>
	<input type="text" name="error" placeholder="error name"> <br>
	Images <br>
	<input type="file" name="images" multiple> <br>
	Description of how to solve the problem <br>
	<textarea type="text" name="description"></textarea> <br>
	<input type="submit" name="" value="submit">
</form>


<?php
$stuff = ["device", "error", "action", "id"];
?>


<?php
include "footer.php";
?>