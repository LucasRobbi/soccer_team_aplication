<?php 

$teamId = $_GET['id_team'];

$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");
    // REMOVE DATA FROM DATABASE
	$data = mysqli_real_escape_string($connect, $_POST["saveTeam"]);
	$query = "DELETE FROM team WHERE id_team = '$teamId'";
    header("location: /soccer_team_aplication/my-teams.php");

mysqli_query($connect, $query);

?>