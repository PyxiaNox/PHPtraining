<?php 
ob_start() 
?>

<br>Les jeux vidéo référencés sur le site.<br><br>

<table class="table table-hover text-center">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Illustration</th>
            <th scope="col">Genre(s)</th>
            <th scope="col">Année de sortie</th>
            <th scope="col">Plateforme(s)</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        for($i=0; $i <count($gamesCRUD->getGames()); $i++) : ?>

        <tr class="table-light">
            <th scope="row"><?= $games[$i]->getTitle() ?></th>
            <td><img src="public/assets/img/<?= $games[$i]->getIllustration() ?>" width="80px"></td>
            <td><?= $games[$i]->getType() ?></td>
            <td><?= $games[$i]->getYear() ?></td>
            <td><?= $games[$i]->getPlatform() ?></td>
            <td><a href="" class="btn btn-warning">Modifier</a></td>
            <td><a href="" class="btn btn-danger">Supprimer</a></td>
        </tr>
        
        <?php endfor ?>
    </tbody>
</table>

<a href="" class="btn btn-info btn-block">Ajouter</a>

<?php
$content = ob_get_clean();
$title = "Jeux vidéo";
require "views/template.php";
?>