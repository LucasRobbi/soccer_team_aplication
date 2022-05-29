<?php 

$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");

if(isset($_POST["saveEditTeam"])){

    $teamName            = $_POST['teamName'];
    $teamDescription     = $_POST['teamDescription'];
    $teamWebsite         = $_POST['teamWebsite'];
    $teamType            = $_POST['teamType'];
    $teamTags            = $_POST['teamTags'];
    $teamFormation       = $_POST['teamFormation'];
    $teamId              = $_POST['teamId'];
    
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

    $teamMembers  = "0".$playerPosition0."-".$positionTeamValue0.",";
    $teamMembers .= "1".$playerPosition1."-".$positionTeamValue1.",";
    $teamMembers .= "2".$playerPosition2."-".$positionTeamValue2.",";
    $teamMembers .= "3".$playerPosition3."-".$positionTeamValue3.",";
    $teamMembers .= "4".$playerPosition4."-".$positionTeamValue4.",";
    $teamMembers .= "5".$playerPosition5."-".$positionTeamValue5.",";
    $teamMembers .= "6".$playerPosition6."-".$positionTeamValue6.",";
    $teamMembers .= "7".$playerPosition7."-".$positionTeamValue7.",";
    $teamMembers .= "8".$playerPosition8."-".$positionTeamValue8.",";
    $teamMembers .= "9".$playerPosition9."-".$positionTeamValue9.",";
    $teamMembers .= "10".$playerPosition10."-".$positionTeamValue10.",";

	$data = mysqli_real_escape_string($connect, $_POST["saveTeam"]);
	$query = "UPDATE team SET name_team = '$teamName', description_team = '$teamDescription', website_team = '$teamWebsite', type_team = '$teamType', tags_team = '$teamTags', formation_team = '$teamFormation', members_team = '$teamMembers' WHERE id_team = '$teamId'";
    header("location: /soccer_team_aplication/my-teams.php");

}

mysqli_query($connect, $query);

?>