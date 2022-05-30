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
                <!-- teams + add team  ---------------------------------------------------------------------------------------------------- -->
                <div class="col-12 col-md-6">
                    <div id="my-teams">

                        <div class="d-flex justify-content-between">
                            <h2>My teams</h2>
                            <button class="btn add-team" onclick="window.location.href='/soccer_team_aplication/create-team.php'">+</button>
                        </div>

                        <hr>

                        <table id="myTeams" class="display table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <!-- DATA BASE CONSULT TO BRING INFORMATION -->
                                <?php 

                                $consultTeams = $connection->query("SELECT * FROM team ORDER BY name_team ASC");
                                $count = $consultTeams->rowCount();
                                if ($count == "0"){

                                }else{

                                    while ($line = $consultTeams->fetch(PDO::FETCH_ASSOC)) {

                                ?>

                                <tr>
                                    <td scope="row"><?php echo $line['name_team'];?></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0"><?php echo $line['description_team'];?></p>
                                            <!-- edit team --------------------------------------------- -->
                                            <div class="actions-buttons">
                                                <a href="/soccer_team_aplication/deleteTeam.php?id_team=<?php echo $line['id_team']; ?>"><i class="bi bi-trash2-fill" title="Delete"></i></a>
                                                <a href=""><i class="bi bi-share-fill" title="Share"></i></a>
                                                <a href="/soccer_team_aplication/edit-team.php?id_team=<?php echo $line['id_team']; ?>"><i class="bi bi-pencil-fill" title="Edit"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <?php 
                                    
                                    }
                                }

                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div id="top">

                    <!-- analytics ------------------------------------------------------------------------------------------------------------- -->
                        <div class="d-flex justify-content-between">
                            <h2>Top 5</h2>
                        </div>

                        <hr>

                        <div class="d-block d-lg-flex d-md-flex d-sm-block d-xs-block">
                            <div class="age-data col-12 col-md-6 col-sm-12 p-r-5">
                                <label>Highest avg age</label>
                                <div class="bg-grey age-big-box">

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box m-0">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                </div>
                            </div>

                            <div class="age-data col-12 col-md-6 col-sm-12 p-l-5">
                                <label>Lowest avg age</label>
                                <div class="bg-grey age-big-box">

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                    <div class="bg-white age-box m-0">
                                        <p class="team-name">Inter Milan</p>
                                        <p class="high-avg-age">31.9</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <!-- most/less picked players ------------------------------------------------------------------------------------------------------------- -->
                    <div class="picked-player">

                        <div class="choosen col-6">
                            <h2 class="text-white">Most picked player</h2>
                            <div class="pick-rate col-3 col-md-3"><p>75%</p></div>
                            <img src="assets/img/player1.png" alt="Player Name">
                        </div>

                        <div class="section-divider"></div>

                        <div class="choosen col-6">
                            <h2 class="text-white">Less picked player</h2>
                            <div class="pick-rate col-3 col-md-3"><p>25%</p></div>
                            <img src="assets/img/player2.png" alt="Player Name">
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
        /* DATA TABLE -------------------------------------------------------------------------------------------------- */

        document.addEventListener('DOMContentLoaded', function () {
            let table = new DataTable('#myTeams');
        });
    </script>

    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>