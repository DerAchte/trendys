# Tache à faire

Faire un code php qui calcule le grade de l'influenceur (niveau donné dans le document partagé), 

pour cela, prendre l'api déja existant avec le code suivant 
```php
$influencer_id = mt_rand(0,83);

$str = file_get_contents('https://influence.beta.krugazor.eu/api/influencers/'.$influencer_id); //get data from url + custom influencer-id

$json = json_decode($str, true);
```

Le grade sera calculé en fonction du (taux d'engagements / nombre d'abonnées) * 100.

Définir une limite pour chaque niveau, par exemple si le score est inférieur à 25 et supérieur à 10 = donner le grade "Bronze" ect. Plus le score est élevé et plus le grade sera important.

la variable final avec le nom du grade devra être `$rank`
