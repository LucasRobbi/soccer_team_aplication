<?php


$connect = mysqli_connect("localhost", "root", "", "soccer_team_app");
$output = '';

if(isset($_POST["query"])){

	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM player WHERE name_player LIKE '%$search%' ORDER BY name_player ASC";

}else{

	$query = "SELECT * FROM player ORDER BY name_player ASC";

}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0){
    $try = 0;
	while($row = mysqli_fetch_array($result)){

        $playerId = $row["id_player"];
        $playerName = $row["name_player"];
        $playerCountry = $row["country_player"];
        $playerBirth = $row["birth_player"];
        $today = date("d-m-Y");
        $diff = date_diff(date_create($playerBirth), date_create($today));
        
        $age = $diff->format("%y");

        $words = explode(" ", $playerName);
        
        //this will give you the first word of the $words array , which is the first name
        $firtsName = reset($words); 
        
        //this will give you the last word of the $words array , which is the last name
        $lastName  = end($words);
        
        substr($firtsName,0,1); // this will echo the first letter of your first name
        substr($lastName ,0,1); // this will echo the first letter of your last name

		$output .= '
            <div id="playerPosition'.$try.'" name="playerPosition'.$try.'"  data-id="'.$playerId.'" class="playerSearched" draggable="true" ondrag="showInitials()">
                <div class="col-10 m-0">
                    <p>Name: <span>'.$playerName.'</span></p>
                    <p>Nacionality: <span>'.$playerCountry.'</span></p>
                </div>
                <div class="col-2 m-0">
                    <p>Age: <span>'.$age.'</span></p>
                </div>
            </div>
            <div id="playerPositionInitial'.$try.'" class="initials" draggable="true" >
                <span class="initialsDesign">'.$firtsName[0].''.$lastName[0].'</span>
            </div>
		';
        $try ++;
	}

	echo $output;
    
}else{

	echo 'Player not found';

}

?>