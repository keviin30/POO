<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../css/choix.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';
require_once 'jeu.php';
session_start();

?>
<div class="container col-lg-10 col-md-offset-1 ">
    <div class="row">

        <!-- Guerrier!-->
        <div class="col-lg-4">
            <div class="card hovercard">
                <div class="cardheader1">

                </div>
                <div class="avatar">
                    <img alt="" src="img/magicien.png">
                </div>
                <div class="info">
                    <div class="title">
                        <form method="post" action="donjon1.php">
                            <button name="classe" id="classe" value="mage"> Choisir ce personnage : Magicien</button>
                        </form>
                    </div>
                    <div class="desc">Magicien : Grand sorcier , attaquant à distance.</div>
                </div>

            </div>

        </div>
        <!-- Magicien !-->
        <div class="col-lg-4">

            <div class="card hovercard">
                <div class="cardheader2">

                </div>
                <div class="avatar">
                    <img alt="" src="img/guerrier.png">
                </div>
                <div class="info">
                    <div class="title">
                      <form method="post" action="donjon1.php">
                          <button name="classe" id="classe" value="guerrier"> Choisir ce personnage : Guerrier</button>
                      </form>
                    </div>
                    <div class="desc">Guerrier : Grand soldat fort et robuste.</div>
                </div>

            </div>

        </div>

<!-- Paladin !-->

        <div class="col-lg-4">

            <div class="card hovercard">
                <div class="cardheader3">

                </div>
                <div class="avatar">
                    <img alt="" src="img/paladin.png">
                </div>
                <div class="info">
                    <div class="title">
                      <form method="post" action="donjon1.php">
                          <button name="classe" id="classe" value="paladin"> Choisir ce personnage : Paladin</button>
                      </form>
                    </div>
                    <div class="desc">Paladin : Personnage très polvalent à distance et au corps à corps</div>
                </div>

            </div>

        </div>

    </div>
</div>
</body>
