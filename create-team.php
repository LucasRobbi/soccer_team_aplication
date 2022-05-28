<?php include 'connect.php';?>
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
                                    <label class="p-t-20" for="teamName">Team name</label><br>
                                    <input type="text" name="teamName" placeholder="Insert team name">

                                    <label class="p-t-20" for="teamDescription">Description</label><br>
                                    <textarea type="text" name="teamDescription" rows="6"></textarea>
                                </div>
                                <div class="area col-12 col-md-6 ">
                                    <div>
                                        <label class="p-t-20" for="teamWebsite">Team website</label><br>
                                        <input type="url" id="teamWebsite" name="teamWebsite" placeholder="http://myteam.com"  pattern="(http|https)?://.+.+">
                                    </div>
                                    <div>
                                        <label class="p-t-20" for="teamType">Team type</label>
                                        <div>
                                            <input type="radio" name="teamType"> <label class="" for="teamType">Real</label>
                                            <input type="radio" name="teamType"> <label class="" for="teamType">Fantasy</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="p-t-20" for="teamTags">Tags</label><br>
                                        <input type="text" name="teamTags" data-role="tagsinput">
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
                                        <input class="btn btn-save" type="submit" value="Save" onclick="window.location.href='/soccer_team_aplication/my-teams.php'">
                                    </div>
                                </div>

                                <div class="area col-12 col-md-6 ">

                                    <div>
                                        <label class="p-t-20" for="searchPlayers">Search players</label><br>
                                        <input type="text" name="searchPlayers">
                                    </div>

                                    <div class="resultSearch">
                                        <?php 
                                        $consultForSearch = $connection->query("SELECT * FROM player ORDER BY id_player ASC");
                                        $count = $consultForSearch->rowCount();
                                        if ($count == "0"){

                                        }else{

                                            while ($line = $consultForSearch->fetch(PDO::FETCH_ASSOC)) {

                                        ?>
                                        
                                        <div class="playerSearched" draggable="true" id="myDraggableElement<?php echo $line['id_player']?>">
                                            <div class="col-10 m-0">
                                                <p>Name: <span><?php echo $line['name_player']?></span></p>
                                                <p>Nacionality: <span><?php echo $line['country_player']?></span></p>
                                            </div>
                                            <div class="col-2 m-0">
                                                
                                                <?php 
                                                    
                                                    $dateOfBirth = $line['birth_player'];
                                                    $today = date("d-m-Y");
                                                    $diff = date_diff(date_create($dateOfBirth), date_create($today));

                                                ?>
                                                
                                                <p>Age: <span><?php echo $diff->format('%y')?></span></p>
                                                
                                            </div>
                                        </div>

                                        <?php 
                                            
                                            }
                                        }

                                        ?>
                                        

                                    </div>

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

    <script>

        /* DROPZONE PLAYERS*/
        <?php 

            $consultForJS = $connection->query("SELECT * FROM player ORDER BY id_player ASC");
            $count = $consultForJS->rowCount();
            if ($count == "0"){

            }else{

                while ($line2 = $consultForJS->fetch(PDO::FETCH_ASSOC)) {

            ?>
            const draggableElement<?php echo $line2['id_player'];?> = document.querySelector("#myDraggableElement<?php echo $line2['id_player'];?>");

            draggableElement<?php echo $line2['id_player'];?>.addEventListener("dragstart", e => {
                e.dataTransfer.setData("text/plain", draggableElement<?php echo $line2['id_player'];?>.id);
            });
        
        <?php 
                
            }
        }

        ?>

        for (const dropZone of document.querySelectorAll(".drop-zone-player")){

            dropZone.addEventListener("dragover", e => {
                e.preventDefault();
                dropZone.classList.add("drop-zone-over");
            });

            dropZone.addEventListener("dragleave", e => {
                dropZone.classList.remove("drop-zone-over");
            });

            dropZone.addEventListener("drop", e => {
                e.preventDefault();
                const droppedElementId = e.dataTransfer.getData("text/plain");
                const droppedElement =  document.getElementById(droppedElementId);

                dropZone.appendChild(droppedElement);
                dropZone.classList.remove("drop-zone-over");
            });
        }

        for (const playerDroped of document.querySelectorAll(".playerSearched")){

            playerDroped.addEventListener("dragleave", e => {
                playerDroped.classList.add("overrideIni");
            });

            playerDroped.addEventListener("drop", e => {
                e.preventDefault();
                const droppedElementId = e.dataTransfer.getData("text/plain");
                const droppedElement =  document.getElementById(droppedElementId);
                playerDroped.classList.add("overrideIni");

                playerDroped.appendChild(droppedElement);
                playerDroped.classList.remove("drop-zone-over");
            });
        }

    </script>

    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>