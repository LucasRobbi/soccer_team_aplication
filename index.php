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
    <!-- start button ---------------------------------------------------------------------------------------------------------------- -->

    <section id="content">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <button class="btn btn-start" onclick="window.location.href='/soccer_team_aplication/my-teams.php'">My Teams</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>