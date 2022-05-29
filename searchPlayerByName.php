<?php

// include 'connect.php';

//INFORMAÇÕES DO BANCO
// $host = "localhost"; //computador onde o servidor de banco de dados esta instalado
// $user = "root"; //seu usuario para acessar o banco
// $pass = ""; //senha do usuario para acessar o banco
// $db = "soccer_team_app"; //banco que deseja acessar

// $connection = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);
// $connection->exec("set names utf8");
// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

	while($row = mysqli_fetch_array($result)){

        $playerName = $row["name_player"];
        $playerCountry = $row["country_player"];
        $playerBirth = $row["birth_player"];
        $today = date("d-m-Y");
        $diff = date_diff(date_create($playerBirth), date_create($today));
        
        $age = $diff->format("%y");

		$output .= '
            <div class="playerSearched" draggable="true">
                <div class="col-10 m-0">
                    <p>Name: <span>'.$playerName.'</span></p>
                    <p>Nacionality: <span>'.$playerCountry.'</span></p>
                </div>
                <div class="col-2 m-0">
                    <p>Age: <span>'.$age.'</span></p>
                </div>
            </div>
		';
	}

	echo $output;
    
}else{

	echo 'Player not found';

}

?>