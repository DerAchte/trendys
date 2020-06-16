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
    <link href="mainpage.css" rel="stylesheet" />
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
                            <li role="menu-item"><a href="stats.php"><i class="fas fa-tachometer-alt"></i> Mes statistiques</a></li>
                            <li role="menu-item"><a href="index.php"><i class="fas fa-cog"></i> Mes paramètres</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Contenu principal -->
    <main>
        <!-- Les publications du jour -->
        <h2>Les publications du jour</h2>
        <div class="row">
            <div class="col-4">
                <div class="card u-flex u-flex-column h-100">
                    <div class="card-container">
                        <div class="card-image"
                            style="background-image: url(https://d1lss44hh2trtw.cloudfront.net/assets/article/2019/09/19/overview_feature.jpg)">
                        </div>
                    </div>
                    <div class="content">
                        <space></space>
                        <div class="tile tile--center">
                            <div class="tile__icon">
                                <figure class="avatar">
                                    <img src="https://randomuser.me/api/portraits/women/18.jpg" alt="Person">
                                </figure>
                            </div>

                            <div class="tile__container">
                                <p class="tile__title">Alice Berseau</p>
                                <p class="tile__subtitle"><a>@AliceBerseau</a></p>
                            </div>
                        </div>
                        <p>Je suis arrivé sur Haven Island, histoire de découvrir de nouvelles identités dans le coin.
                            <a href="#">#HastaLaPlaya</a> <a href="#">#Haven</a></p>
                    </div>
                    <div class="card-footer level content">
                        7h58 - 31 Février 2019
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
                <div class="card u-flex u-flex-column h-100">
                    <div class="card-container">
                        <div class="card-image"
                            style="background-image: url(https://images.unsplash.com/photo-1496438296155-bd1e7ece2b0b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=900&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1600)">
                        </div>
                    </div>
                    <div class="content">
                        <space></space>
                        <div class="tile tile--center">
                            <div class="tile__icon">
                                <figure class="avatar">
                                    <img src="https://randomuser.me/api/portraits/women/73.jpg" alt="Person">
                                </figure>
                            </div>

                            <div class="tile__container">
                                <p class="tile__title">Amelie Poulain</p>
                                <p class="tile__subtitle"><a>@AmeliePoulain</a></p>
                            </div>
                        </div>
                        <p>Le lac bleu, un des plus beau lac de la Thaîlande. <a href="#">#CouleurSchtroumpf</a></p>
                    </div>
                    <div class="card-footer level content">
                        10h42 - 12 septembre 2019
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
                <div class="card u-flex u-flex-column h-100">
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
                                    <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="Person">
                                </figure>
                            </div>

                            <div class="tile__container">
                                <p class="tile__title">Jade Danger</p>
                                <p class="tile__subtitle"><a>@JadeDanger</a></p>
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
        </div>
        <h2>Comptes recommandés</h2>
        <?php

        $sexe = mt_rand(0,100);

        if ($sexe < 50 ) {
            $genre = "men";
        }
        elseif ($sexe > 50) {
            $genre = "women";
        }

        ?>
        <div class="row">
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                    <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/women/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/men/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/women/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/men/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/women/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/".$genre."/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
            <div class="col-1">
                <figure class="avatar avatar--xlarge">
                <img src="<?php echo "https://randomuser.me/api/portraits/men/".rand(0,83).".jpg" ?>"/>
                </figure>
            </div>
    </div>







    </main>




    <script src="navbar.js"></script>
</body>

</html>