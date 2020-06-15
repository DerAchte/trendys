<?php 

$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$_GET["influencer-id"]);


$json = json_decode($str, true);

if ($json['sex'] == "male") {
    $sexe = "Homme";
}
else {
    $sexe = "Femme";
}

//echo '<pre>' . print_r($json, true) . '</pre>';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
</head>

<body>
<div>
        <form action="index.php" method="GET">
            <label>Influencer-ID</label>
            <input type="text" name="influencer-id" required placeholder="Nombre uniquement : 1, 2, 7, 28"/>
            <input type="submit" Value="Rechercher" />
        </form>
    </div>
    <table>
        <tr>
            <td>Prénom : </td>
            <td><?php echo $json['name'] ?></td>
        </tr>
        <tr>
            <td>Sexe : </td>
            <td><?php echo $sexe ?></td>
        </tr>
        <tr>
            <td>Age : </td>
            <td><?php echo $json['age'] ?></td>
        </tr>
        <tr>
            <td>Ville : </td>
            <td><?php echo $json['cities'] ?></td>
        </tr>
        <tr>
            <td>Nombre d'abonnées : </td>
            <td><?php echo $json['subscribers'] ?></td>
        </tr>
        <tr>
            <td>Nombre de visite du profil : </td>
            <td><?php echo $json['profileVisits'] ?></td>
        </tr>
        <tr>
            <td>Promotions : </td>
            <td><?php echo $json['promotions'] ?></td>
        </tr>
        <tr>
            <td>Publications : </td>
            <td><?php echo $json['publications'] ?></td>
        </tr>
        <tr>
            <td>Storys : </td>
            <td><?php echo $json['stories'] ?></td>
        </tr>
        <tr>
            <td>Nombre d'impressions : </td>
            <td><?php echo $json['impressions'] ?></td>
        </tr>
        <tr>
            <td>Nombre d'interaction : </td>
            <td><?php echo $json['interactions'] ?></td>
        </tr>
        <tr>
            <td>Nombre de likes : </td>
            <td><?php echo $json['likes'] ?></td>
        </tr>
        <tr>
            <td>Nombre de commentaire : </td>
            <td><?php echo $json['comments'] ?></td>
        </tr>
        <tr>
            <td>Nombre de couverture : </td>
            <td><?php echo $json['cover'] ?></td>
        </tr>
        <tr>
            <td>Score : </td>
            <td><?php echo $json['rate'] ?></td>
        </tr>
        <tr>
            <td>Audience : </td>
            <td><?php echo $json['reach'] ?></td>
        </tr>
        
    </table>
</body>

</html>