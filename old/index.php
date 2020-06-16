<?php 

$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$_GET["influencer-id"]); //get data from url + custom influencer-id
$str_imp = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$_GET["influencer-id"].'/history/6');
 

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

//echo '<pre>' . print_r($json, true) . '</pre>';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" >
    <title>Workshop</title>
</head>

<body>
    <h1>Rechercher un influenceur par identifiant <span class="badge badge-warning"><i class="fas fa-wrench"></i> En construction</span></h1>
    <div>
        <form action="index.php" method="GET">
            <label class="col-form-label">Influencer-ID</label>
            <input type="text" name="influencer-id" class="form-control" required placeholder="Nombre uniquement : 1, 2, 7, 28" />
            <input type="submit" Value="Rechercher" class="btn btn-primary">
        </form>
    </div>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-sm">
    <?php if ($_GET["influencer-id"] < 1129) { // Si le nombre recherché est inferieur à 1129 alors lancer le tableau.?>
        
    <table class="table">
        <tr>
            <td>Prénom : </td>
            <td><?php echo $json['name'] ?></td>
        </tr>
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
    <?php } else { ?>
    <span class="error"><i class="fas fa-exclamation-circle"></i> Erreur : L'identifiant <span style="font-weight : bold"><?php echo $_GET['influencer-id'] ?></span> ne correspond à aucun influenceur recherché.</span>
    <?php } ?>
        </div>
        <div class="col-sm">
        <canvas id="line-chart" height="40vh" width="80vw"></canvas>
        </div>
    </div>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<canvas id="impressions" height="40vh" width="80vw"></canvas>
<script>
new Chart(document.getElementById("impression"), {
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

</script>
</body>

</html>
