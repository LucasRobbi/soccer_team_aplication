<?php 

$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");

if(isset($_POST["saveCreateTeam"])){

    $teamName            = $_POST['teamName'];
    $teamDescription     = $_POST['teamDescription'];
    $teamWebsite         = $_POST['teamWebsite'];
    $teamType            = $_POST['teamType'];
    $teamTags            = $_POST['teamTags'];
    $teamFormation       = $_POST['teamFormation'];
    
    $positionTeamValue0  = $_POST['positionTeamValue0'];
    $playerPosition0     = $_POST['playerPosition0'];
    $positionTeamValue1  = $_POST['positionTeamValue1'];
    $playerPosition1     = $_POST['playerPosition1'];
    $positionTeamValue2  = $_POST['positionTeamValue2'];
    $playerPosition2     = $_POST['playerPosition2'];
    $positionTeamValue3  = $_POST['positionTeamValue3'];
    $playerPosition3     = $_POST['playerPosition3'];
    $positionTeamValue4  = $_POST['positionTeamValue4'];
    $playerPosition4     = $_POST['playerPosition4'];
    $positionTeamValue5  = $_POST['positionTeamValue5'];
    $playerPosition5     = $_POST['playerPosition5'];
    $positionTeamValue6  = $_POST['positionTeamValue6'];
    $playerPosition6     = $_POST['playerPosition6'];
    $positionTeamValue7  = $_POST['positionTeamValue7'];
    $playerPosition7     = $_POST['playerPosition7'];
    $positionTeamValue8  = $_POST['positionTeamValue8'];
    $playerPosition8     = $_POST['playerPosition8'];
    $positionTeamValue9  = $_POST['positionTeamValue9'];
    $playerPosition9     = $_POST['playerPosition9'];
    $positionTeamValue10 = $_POST['positionTeamValue10'];
    $playerPosition10    = $_POST['playerPosition10'];

    $teamMembers  = "".$playerPosition0."-".$positionTeamValue0.",";
    $teamMembers .= "".$playerPosition1."-".$positionTeamValue1.",";
    $teamMembers .= "".$playerPosition2."-".$positionTeamValue2.",";
    $teamMembers .= "".$playerPosition3."-".$positionTeamValue3.",";
    $teamMembers .= "".$playerPosition4."-".$positionTeamValue4.",";
    $teamMembers .= "".$playerPosition5."-".$positionTeamValue5.",";
    $teamMembers .= "".$playerPosition6."-".$positionTeamValue6.",";
    $teamMembers .= "".$playerPosition7."-".$positionTeamValue7.",";
    $teamMembers .= "".$playerPosition8."-".$positionTeamValue8.",";
    $teamMembers .= "".$playerPosition9."-".$positionTeamValue9.",";
    $teamMembers .= "".$playerPosition10."-".$positionTeamValue10.",";

	$data = mysqli_real_escape_string($connect, $_POST["saveTeam"]);
	$query = "INSERT INTO team (name_team, description_team, website_team, type_team, tags_team, formation_team, members_team) VALUES ('$teamName', '$teamDescription', '$teamWebsite', '$teamType', '$teamTags', '$teamFormation', '$teamMembers')";
    header("location: /soccer_team_aplication/my-teams.php");

}

mysqli_query($connect, $query);

?>