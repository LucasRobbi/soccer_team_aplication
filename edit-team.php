<?php 

    include 'connect.php';
    $teamId = $_GET['id_team'];
    $consultTeam = $connection->query("SELECT * FROM team WHERE id_team = '$teamId'");
    $count = $consultTeam->rowCount();
    $line = $consultTeam->fetch(PDO::FETCH_ASSOC);     

    $i = $line['formation_team'];
    $stri = (string)$i;

    $result = strlen($stri);
    if($result == 3){
        $j = $stri[0];
        $k = $stri[1];
        $l = $stri[2];
        $formation = "".$j." - ".$k." - ".$l."";
    }
    if($result == 4){
        $j = $stri[0];
        $k = $stri[1];
        $l = $stri[2];
        $m = $stri[3];
        $formation = "".$j." - ".$k." - ".$l." - ".$m."";
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Teams - Squad Management Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  </head>
  <body>
    <!-- top bar + begging button + user ---------------------------------------------------------------------------------------------------------------- -->
    <header>
        <div class="container">
            <div class="row d-flex justify-content-between">
                
                <div class="logo col">
                    <a href="/soccer_team_aplication/">
                        <img src="assets/img/venturus-logo.png" alt="Venturus Logo">
                        <span class="title-page">Squad Management Tool</span>
                    </a>
                </div>

                <div class="user col d-flex justify-content-end">
                    <a href="/soccer_team_aplication/" class=" d-flex justify-content-end">
                        <span>John Doe</span>
                        <div class="d-flex user-image-header">
                            <span>JD</span>
                            <!-- <img src="assets/img/user.png" alt=""> -->
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </header>

    <section id="content">
        <div class="container">
            <div class="row">
                
            <!-- team creation ---------------------------------------------------------------------------------------------------------------- -->
                <div class="block col-12">
                    <div id="new-team">
                        <div>
                            <h2>Create your team</h2>
                        </div>

                        <hr>

                        <div class="team-information col-12"> 
                            <h3>team information</h3>
                            <div class="d-block d-sm-flex col-12">
                                <div class="area col-12 col-md-6">
<form method="POST" name="SaveTeam" action="saveEditTeam.php">

                                    <input type="number" name="teamId" hidden value="<?php echo $line['id_team'];?>">

                                    <label class="p-t-20" for="teamName">Team name</label><br>
                                    <input type="text" name="teamName" placeholder="Team Name" value="<?php echo $line['name_team'];?>" required>

                                    <label class="p-t-20" for="teamDescription">Description</label><br>
                                    <textarea type="text" name="teamDescription" rows="6" required><?php echo $line['description_team'];?></textarea>
                                </div>
                                <div class="area col-12 col-md-6 ">
                                    <div>
                                        <label class="p-t-20" for="teamWebsite">Team website</label><br>
                                        <input type="url" id="teamWebsite" name="teamWebsite" placeholder="http://myeam.com" value="<?php echo $line['website_team'];?>"  pattern="(http|https)?://.+.+">
                                    </div>
                                    <div>
                                        <label class="p-t-20" for="teamType">Team type</label>

                                        <?php
                                            if($line['type_team'] == 1){
                                        ?>

                                        <div>
                                            <input type="radio" name="teamType" value="1" checked> <label id="real" for="teamType">Real</label>
                                            <input type="radio" name="teamType" value="0"> <label id="fantasy" for="teamType">Fantasy</label>
                                        </div>

                                        <?php
                                            }
                                            if($line['type_team'] == 0){
                                        ?>

                                        <div>
                                            <input type="radio" name="teamType" value="1"> <label id="real" for="teamType">Real</label>
                                            <input type="radio" name="teamType" value="0" checked> <label id="fantasy" for="teamType">Fantasy</label>
                                        </div>

                                        <?php  
                                            }
                                        ?>
                                    </div>
                                    <div>
                                        <label class="p-t-20" for="teamTags">Tags</label><br>
                                        <input type="text" name="teamTags" data-role="tagsinput" value="<?php echo $line['tags_team'];?>">
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <!-- squad configuration ---------------------------------------------------------------------------------------------------------------- -->
                        <div class="team-information col-12 p-t-30"> 
                            <h3>configure squad</h3>
                            <div class="d-block d-sm-flex col-12">
                                <div class="area col-12 col-md-6">
                                    <label class="p-t-20 m-l-20" for="teamFormation">Formation</label>
                                    <select name="teamFormation" id="teamFormation" onchange="formationChange()">
                                        <option value="<?php echo $line['formation_team'];?>"><?php echo $formation;?></option>
                                        <option value="3223">3 - 2 - 2 - 3</option>
                                        <option value="3231">3 - 2 - 3 - 1</option>
                                        <option value="343">3 - 4 - 3</option>
                                        <option value="352">3 - 5 - 2</option>
                                        <option value="4231">4 - 2 - 3 - 1</option>
                                        <option value="4311">4 - 3 - 1 - 1</option>
                                        <option value="432">4 - 3 - 2</option>
                                        <option value="442">4 - 4 - 2</option>
                                        <option value="451">4 - 5 - 1</option>
                                        <option value="541">5 - 4 -1</option>
                                    </select>

                                    <div class="field"></div>
                                    
                                    <div class="save-formation">
                                        <input class="btn btn-save" type="submit" name="saveEditTeam" formaction="saveEditTeam.php" value="Save">
                                    </div>
                                </div>
</form>
                                <div class="area col-12 col-md-6 ">

                                    <div>
                                        <label class="p-t-20" for="searchPlayers">Search players</label><br>
                                        <input type="text" name="searchPlayers" id="searchPlayers">
                                    </div>

                                    <div id="resultSearch" class="resultSearch" data-draggable="target"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer ------------------------------------------------------------------------------------------------------------- -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="copyrights">
                    <p>2022 - All rights reserved</p>
                </div>

            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>