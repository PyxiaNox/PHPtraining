<?php 
require_once "Games.class.php"; 

$game1 = new Games(1, "Zelda : A link to the Past", "alinktothepast.webp", "Aventure", 1992, "Super Nintendo");
$game2 = new Games(2, "Secret of Evermore", "secretofevermore.jpg", "Action-RPG", 1996, "Super Nintendo");
$game3 = new Games(3, "Age of Empires II : Age of the Kings", "ageofempires2.jpg", "RTS", 1999, "PC");
$game4 = new Games(4, "Quake", "quake.jpg", "FPS", 1996, "PC - Nintendo 64");

$games = [$game1, $game2, $game3, $game4];

ob_start() ?>

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
        <?php for($i=0; $i <count($games); $i++) : ?>

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
require "template.php";
?>