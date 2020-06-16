<?php 

    $influencer_id = mt_rand(0,83);

                
    $str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$influencer_id); //get data from url + custom influencer-id
    $str_imp = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$influencer_id.'/history/8');
            
    $json = json_decode($str, true);
    $json_imp = json_decode($str_imp, true);

    if ($json['sex'] == "male") {
        $sexe = '<i class="fas fa-male"></i> Homme';
    }
    elseif ($json['sex'] == "female") {
         $sexe = '<i class="fas fa-female"></i> Femme';
    }
    else {
        $sexe = 'Erreur';
    }

    $arobase =  $json['name'];

    $arobase = substr($arobase, 0, 3);
                
?>
<!DOCTYPE html>
    <html>

    <head>
        <title>Trendys | Voyager avec vos personnalités</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cirrus-ui@0.5.5/dist/cirrus.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="stats.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <div class="header header-fixed unselectable header-animated">
                <div class="header-brand">
                    <div class="nav-item no-hover">
                        <h6 class="title"><a href="mainpage.php"><img src="src/logo.svg" alt="logo" width="60px"></a></h6>
                    </div>
                    <div class="nav-item nav-btn" id="header-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="header-nav" id="header-menu">
                    <div class="nav-left">
                        <div class="nav-item text-center">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-camera"></i>
                                </span>
                            </a>
                        </div>
                        <div class="nav-item text-center">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-route"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="nav-right">
                        <div class="nav-item">
                            <a href="#"><span class="icon"><i class="fas fa-bookmark"></i></span></a>
                        </div>

                        <div class="nav-item has-sub toggle-hover" id="dropdown">
                            <a class="nav-dropdown-link"><i class="fas fa-bell"></i></i></a>
                            <ul class="dropdown-menu dropdown-animated" role="menu">
                                <li role="menu-item"><a href="#"><i class="fas fa-heart"></i> <span
                                            style="color: var(--cirrus-info)">@AliceBerseau</span> a aimé votre photo</a>
                                </li>
                                <li role="menu-item"><a href="#"><i class="fas fa-image"></i> <span
                                            style="color: var(--cirrus-info)">@CamilleLutreau</span> a publié une nouvelle
                                        photo</a></li>
                                <li class="dropdown-menu-divider"></li>
                                <li role="menu-item"><a href="#"><i class="fas fa-bell-on"></i> Gérer mes notifications</a>
                                </li>
                            </ul>
                        </div>


                        <!-- Profil -->
                        <div class="nav-item has-sub toggle-hover" id="dropdown">
                            <a class="nav-dropdown-link"><i class="fas fa-user-circle"></i></a>
                            <ul class="dropdown-menu dropdown-animated" role="menu">
                                <li role="menu-item"><a href="#"><i class="fas fa-id-card"></i> Mes informations
                                        personnelles</a></li>
                                <li role="menu-item"><a href="#"><i class="fas fa-user"></i> Mon profil</a></li>
                                <li role="menu-item"><a href="stats.php"><i class="fas fa-tachometer-alt"></i> Mes
                                        statistiques</a></li>
                                <li role="menu-item"><a href="index.php"><i class="fas fa-cog"></i> Mes paramètres</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Contenu principal -->
        <main>
            <h1>Vos statistiques</h1>
            <div class="row">
                <div class="col-4">
                    <div class="tile m-0 level">
                        <div class="tile__icon">
                            <figure class="avatar avatar--xlarge">
                                <img
                                    src="https://randomuser.me/api/portraits/women/<?php echo $influencer_id; ?>.jpg">
                            </figure>
                        </div>
                        <div class="tile__container">
                            <p class="tile__title m-0"><?php echo $json['name'] ?> Berseau</p>
                            <p class="tile__subtitle m-0"><a href="#">@<?php echo $arobase ?>_berseau</a></p>
                        </div>
                    </div>
                    <h2>Publication en tendance</h2>
                    <div class="card">
                    <div class="card-container">
                        <div class="card-image"
                            style="background-image: url(https://images.unsplash.com/photo-1484804959297-65e7c19d7c9f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=900&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1600)">
                        </div>
                    </div>
                    <div class="content">
                        <space></space>
                        <div class="tile tile--center">
                            <div class="tile__icon">
                                <figure class="avatar">
                                    <img src="https://randomuser.me/api/portraits/women/<?php echo $influencer_id; ?>.jpg" alt="Person">
                                </figure>
                            </div>

                            <div class="tile__container">
                                <p class="tile__title"><?php echo $json['name'] ?> Berseau</p>
                                <p class="tile__subtitle"><a href="#">@<?php echo $arobase ?>_berseau</a></p>
                            </div>
                        </div>
                        <p>Faire du surf à <a href="#">Hawaî</a>, le rêve de toute une vie<br /><a
                                href="#">#SurfParty</a></p>
                    </div>
                    <div class="card-footer level content">
                        19h51 - 15 Mai 2020
                        <div class="pull-right">
                            <div class="level-left ignore-screen">
                                <a class="level-item">
                                    <span class="icon"><i class="fas fa-share fa-2x" aria-hidden="true"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon"><i class="fas fa-comment fa-2x" aria-hidden="true"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon"><img src="src/clap.svg" alt="clap" /></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                <div class="col-4">
                    <table>
                        <tr>
                            <td>Sexe de la majorité des abonnés : </td>
                            <td><?php echo $sexe ?></td>
                        </tr>
                        <tr>
                            <td>Age de la majorité des abonnés : </td>
                            <td><?php echo $json['age'] ?></td>
                        </tr>
                        <tr>
                            <td>Ville : </td>
                            <td><i class="fas fa-city"></i> <?php echo $json['cities'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre d'abonnées : </td>
                            <td><i class="fas fa-users"></i> <?php echo $json['subscribers'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre de visite du profil : </td>
                            <td><i class="fas fa-user-chart"></i> <?php echo $json['profileVisits'] ?></td>
                        </tr>
                        <tr>
                            <td>Promotions : </td>
                            <td><i class="fas fa-ad"></i> <?php echo $json['promotions'] ?></td>
                        </tr>
                        <tr>
                            <td>Publications : </td>
                            <td><i class="fas fa-image"></i> <?php echo $json['publications'] ?></td>
                        </tr>
                        <tr>
                            <td>Storys : </td>
                            <td><i class="fas fa-photo-video"></i> <?php echo $json['stories'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre d'impressions : </td>
                            <td><i class="fas fa-eye"></i> <?php echo $json['impressions'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre d'interaction : </td>
                            <td><i class="fas fa-mouse-pointer"></i> <?php echo $json['interactions'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre de likes : </td>
                            <td><i class="fas fa-heart"></i> <?php echo $json['likes'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre de commentaire : </td>
                            <td><i class="fas fa-comment"></i> <?php echo $json['comments'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre de couverture : </td>
                            <td><i class="fas fa-globe"></i> <?php echo $json['cover'] ?></td>
                        </tr>
                        <tr>
                            <td>Score : </td>
                            <td><i class="fas fa-star-half-alt"></i> <?php echo $json['rate'] ?></td>
                        </tr>
                        <tr>
                            <td>Audience : </td>
                            <td><?php echo $json['reach'] ?></td>
                        </tr>

                    </table>
                </div>
                <div class="col-4">
                    <canvas id="impressions-chart" height="40vh" width="80vw"></canvas>
                    <canvas id="interactions-chart" height="40vh" width="80vw"></canvas>
                    <!--<canvas id="likes-chart" height="40vh" width="80vw"></canvas> -->
                </div>
            </div>
        </main>
        
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

    <script>
    new Chart(document.getElementById("impressions-chart"), {
    type: 'line',
    data: {
        labels: ["h+0" ,"h+1","h+2","h+3","h+4","h+5","h+6","h+7","h+8","h+9"],
        datasets: [{ 
            data: 
            [
                <?php echo $json_imp[0]['impressions']; ?>,
                <?php echo $json_imp[1]['impressions']; ?>,
                <?php echo $json_imp[2]['impressions']; ?>,
                <?php echo $json_imp[3]['impressions']; ?>,
                <?php echo $json_imp[4]['impressions']; ?>,
                <?php echo $json_imp[5]['impressions']; ?>,
                <?php echo $json_imp[6]['impressions']; ?>,

        ],
            label: "<?php echo $json['name'] ?>",
            borderColor: "#3e95cd",
            fill: false
        }
        ]
    },
    options: {
        title: {
        display: true,
        text: 'Nombre d\'impressions par heures',
        }
    }
    });

    new Chart(document.getElementById("interactions-chart"), {
    type: 'line',
    data: {
        labels: ["h+0" ,"h+1","h+2","h+3","h+4","h+5","h+6","h+7","h+8","h+9"],
        datasets: [{ 
            data: 
            [
                <?php echo $json_imp[0]['interactions']; ?>,
                <?php echo $json_imp[1]['interactions']; ?>,
                <?php echo $json_imp[2]['interactions']; ?>,
                <?php echo $json_imp[3]['interactions']; ?>,
                <?php echo $json_imp[4]['interactions']; ?>,
                <?php echo $json_imp[5]['interactions']; ?>,
                <?php echo $json_imp[6]['interactions']; ?>,

        ],
            label: "<?php echo $json['name'] ?>",
            borderColor: "#3e95cd",
            fill: false
        }
        ]
    },
    options: {
        title: {
        display: true,
        text: 'Nombre d\'interactions par heures',
        }
    }
    });

    /*new Chart(document.getElementById("likes-chart"), {
    type: 'line',
    data: {
        labels: ["h+0" ,"h+1","h+2","h+3","h+4","h+5","h+6","h+7","h+8","h+9"],
        datasets: [{ 
            data: 
            [
                <?php echo $json_imp[0]['likes']; ?>,
                <?php echo $json_imp[1]['likes']; ?>,
                <?php echo $json_imp[2]['likes']; ?>,
                <?php echo $json_imp[3]['likes']; ?>,
                <?php echo $json_imp[4]['likes']; ?>,
                <?php echo $json_imp[5]['likes']; ?>,
                <?php echo $json_imp[6]['likes']; ?>,

        ],
            label: "<?php echo $json['name'] ?>",
            borderColor: "#3e95cd",
            fill: false
        }
        ]
    },
    options: {
        title: {
        display: true,
        text: 'Nombre de likes par heures',
        }
    }
    });
    */

    </script>
    <script src="navbar.js"></script>
    </body>

</html>