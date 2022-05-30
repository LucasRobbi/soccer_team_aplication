<?php 

$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");

if(isset($_POST["saveCreateTeam"])){

    $teamName            = $_POST['teamName'];
    $teamDescription     = $_POST['teamDescription'];
    $teamWebsite         = $_POST['teamWebsite'];
    $teamType            = $_POST['teamType'];
    $teamTags            = $_POST['teamTags'];
    $teamFormation       = $_POST['teamFormation'];
    $teamMembers         = $_POST['teamMembers'];

	$data = mysqli_real_escape_string($connect, $_POST["saveTeam"]);
	$query = "INSERT INTO team (name_team, description_team, website_team, type_team, tags_team, formation_team, members_team) VALUES ('$teamName', '$teamDescription', '$teamWebsite', '$teamType', '$teamTags', '$teamFormation', '$teamMembers')";
    header("location: /soccer_team_aplication/my-teams.php");

}

mysqli_query($connect, $query);

?>