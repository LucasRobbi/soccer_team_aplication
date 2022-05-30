<?php 

$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");

if(isset($_POST["saveEditTeam"])){

    // PULL INFORMATION FROM DATABASE
    $teamId              = $_POST['teamId'];
    $teamName            = $_POST['teamName'];
    $teamDescription     = $_POST['teamDescription'];
    $teamWebsite         = $_POST['teamWebsite'];
    $teamType            = $_POST['teamType'];
    $teamTags            = $_POST['teamTags'];
    $teamFormation       = $_POST['teamFormation'];
    $teamMembers         = $_POST['teamMembers'];

    // UPDATE INFORMATION FROM DATABASE
	$data = mysqli_real_escape_string($connect, $_POST["saveTeam"]);
	$query = "UPDATE team SET name_team = '$teamName', description_team = '$teamDescription', website_team = '$teamWebsite', type_team = '$teamType', tags_team = '$teamTags', formation_team = '$teamFormation', members_team = '$teamMembers' WHERE id_team = '$teamId'";
    header("location: /soccer_team_aplication/my-teams.php");

}

mysqli_query($connect, $query);

?>