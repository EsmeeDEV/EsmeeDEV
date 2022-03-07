<?php
include('assets/inc/main.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HabboCast, habbo, habboradio, fansite, onofficieel, nederland, belgie, hc">
    <meta name="description" content="HabboCast is een onofficiële fansite van Habbo Nederland. Wij streamen dagelijks tientallen hits uit, posten wekelijks veel nieuwsartikelen en zorgen ervoor dat jouw bezoek aan Habbo nog leuker wordt!" />
    <meta name="googlebot" content="noodp" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/global.css?NOCACHE=<?php echo time(); ?>" rel="stylesheet">
	
    <title>HabboCast</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a onclick="$HabboCast.pagemanagement('home');" class="nav-link active" aria-current="page">Home</a></li>
					
                    <li class="nav-item"><a onclick="$HabboCast.pagemanagement('onsteam');" class="nav-link">Ons Team</a></li>
                    <li class="nav-item"><a onclick="$HabboCast.pagemanagement('verzoeklijn');" class="nav-link">Verzoeklijn</a></li>
                    <li class="nav-item"><a onclick="$HabboCast.pagemanagement('vacatures');" class="nav-link">Vacatures</a></li>


                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container">
            <div class="row" style="margin-left: 10px;">
                <div id="statusLive" class="airr"></div>
                <div class="col-md-7">
                    <div class="radio">

                        <audio id="player" id="radio" autoplay style="width: 350px;" volume="20">

                            <source src="https://listen.habbocast.nl/radio/8000/radio.mp3?cache=<?php echo time(); ?>" type="audio/mpeg">

                            Your browser does not support the audio element.

                        </audio>

                        <div id="statusArt" class="circle">
                            <div id="statusDj" class="dj" style="background: transparent url(&quot;https://www.habbo.nl/habbo-imaging/avatarimage?hb=img&amp;user=Stieneke&amp;action=wav&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=l&quot;) no-repeat scroll 0px 0px; height: 182px; border-radius: 0% 0% 60% 60%; width: 129px;">
                            </div>
                        </div>

                        <div class="play" onclick="document.getElementById('player').play();$('.wave').removeClass('no-animation');">
                        </div>
                        <div class="pauze" onclick="document.getElementById('player').pause();waveAfterWave();"></div>
                        <div class="min" onclick="document.getElementById('player').volume -= 0.1"></div>
                        <div class="plus" onclick="document.getElementById('player').volume += 0.1"></div>

                        <div class="nummer"></div>
                        <div class="luisteraar"></div>
                        <div class="livedj">
                            <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>
                        </div>
                        <div class="datum"><?php
                                            $datum = date("j F Y");
                                            $dagvanweek = date("l");
                                            $arraydag = array(
                                                "Zondag",
                                                "Maandag",
                                                "Dinsdag",
                                                "Woensdag",
                                                "Donderdag",
                                                "Vrijdag",
                                                "Zaterdag"
                                            );
                                            $dagvanweek = $arraydag[date("w")];
                                            $arraymaand = array(
                                                "Januari",
                                                "Februari",
                                                "Maart",
                                                "April",
                                                "Mei",
                                                "Juni",
                                                "Juli",
                                                "Augustus",
                                                "September",
                                                "Oktober",
                                                "November",
                                                "December"
                                            );
                                            $datum = date("j ") . $arraymaand[date("n") - 1] . date(" Y");
                                            echo "$dagvanweek $datum";
                                            ?></div>
                        <div class="livenummer">
                            <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>
                        </div>
                        <div class="luister">
                            <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"><img src="assets/images/hc1.png" style="margin-top: 20px;"></div>
            </div>
        </div>
    </header>
	<center>
	    <div class="alert alert-primary">
        <div class="container">
     
            <b><img src="https://www.habbocast.nl/assets/images/icons/chat_wolk.gif" alt="Trulli" width="17" height="17">
 ALERT:</b> Wil jij deel uitmaken van ons team? Check dan snel de <a onclick="$HabboCast.pagemanagement('vacatures');"><u>vacatures</u></a> en solliciteer snel!
        </div>
    </div>
	</center>
    </div>
    </div>
    <div class="container" style="margin-top:50px;">
        <div id="left">

            <?php if (!$Users->loggedIn() == NULL) { ?>
                <div id="statusArt" class="teampage" style="background-color: #f2b1c3
;width: 100%;margin-top: 0px;">
                    <div id="statusDj" class="dj" style="background: transparent url(&quot;https://www.habbo.nl/habbo-imaging/avatarimage?hb=img&amp;user=<?php echo $Users->sessionGetUserInfo($Users->sessionGetUserId())->fetch(PDO::FETCH_BOTH)['username']; ?>&amp;action=wav&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=l&quot;) no-repeat scroll 0px 0px;height: 136px;/* border-radius: 0% 0% 60% 60%; */width: 121px;margin-top: -95px;/* float: left; */margin-left: -27px;">
                    </div>
                    <div id="userteams"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $Users->sessionGetUserInfo($Users->sessionGetUserId())->fetch(PDO::FETCH_BOTH)['username']; ?></div>
                    <div id="userranks"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $habbo->user('nl', $Users->sessionGetUserInfo($Users->sessionGetUserId())->fetch(PDO::FETCH_BOTH)['username'])['motto']; ?></div>
                </div>
                <button type="button" class="btn btn-danger" style="width: 100%;" onclick="$HabboCast.user.signOut()">Uitloggen</button>
                <br><br>
            <?php } else { ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Inloggen op HabboCast</h5>
                        <p>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/follow_oldclient.gif"></span>
                            <input type="text" class="form-control" placeholder="Habbonaam" id="signin_Username" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <p>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/new_13.gif"></span>
                            <input type="password" class="form-control" id="signin_Password" placeholder="Wachtwoord" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <button type="button" class="btn btn-success" onclick="$HabboCast.user.signIn();" style="margin-top: 15px;width: 162px;">Inloggen</button>
                        <button type="button" class="btn btn-secondary" onclick="$HabboCast.user.register();" style="margin-top: 15px;width: 167px;">Registeren</button>
                    </div>
                </div>
            <?php } ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Minirooster (<?php
                                            $datum = date("j F Y");
                                            $dagvanweek = date("l");
                                            $arraydag = array(
                                                "Zondag",
                                                "Maandag",
                                                "Dinsdag",
                                                "Woensdag",
                                                "Donderdag",
                                                "Vrijdag",
                                                "Zaterdag"
                                            );
                                            $dagvanweek = $arraydag[date("w")];
                                            $arraymaand = array(
                                                "Januari",
                                                "Februari",
                                                "Maart",
                                                "April",
                                                "Mei",
                                                "Juni",
                                                "Juli",
                                                "Augustus",
                                                "September",
                                                "Oktober",
                                                "November",
                                                "December"
                                            );
                                            $datum = date("j ") . $arraymaand[date("n") - 1] . date(" Y");
                                            echo "$datum";
                                            ?>)</h5>
                    <?php
                    // include($_SERVER['DOCUMENT_ROOT'] . '/crew00000/assets/inc/main.php');
                    $Untils->miniSchedule();

                    ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Twitter</h5>
                    <iframe style="border:none;height: 670px;" data-tweet-url="https://twitter.com/habbocastnl" src="data:text/html;charset=utf-8,%3Ca%20class%3D%22twitter-timeline%22%20href%3D%22https%3A//twitter.com/habbocastnl%3Fref_src%3Dtwsrc%255Etfw%22%3ETweets%20by%20habbocastnl%3C/a%3E%0A%3Cscript%20async%20src%3D%22https%3A//platform.twitter.com/widgets.js%22%20charset%3D%22utf-8%22%3E%3C/script%3E%0A%3Cstyle%3Ehtml%7Boverflow%3Ahidden%20%21important%3B%7D%3C/style%3E"></iframe>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Laatste Badges</h5>
                    <div id="loadBadges">
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Laatste Kleding</h5>
                    <div id="loadClothing">
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="right">

            <div id="root"><?php include 'assets/inc/models/home.php'; ?></div>
        </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
    <script>
        var $settings = {
            habbo_mission: "<?php echo $Untils->getMotto('signup'); ?>",
            habbo_mission_lostpass: "<?php echo $Untils->getMotto('lostpass'); ?>"
        }
    </script>
    <script src="assets/js/habbocast.js?v=<?php echo time(); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <input type="hidden" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
</body>



</html>