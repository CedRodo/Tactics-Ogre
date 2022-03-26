<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="icon" href="assets/img/logos/tacticsogre.jpg" />
    <title>Tactics Ogre : Let Us Cling Together</title>
</head>
<body>
<div id="logo">
    <img src="assets/img/logos/to-logo.jpg" alt="logo">
</div>
<main>
<h1>Classes et personnages</h1>
<?php require "Personnages.php";
require "Heros.php";
require "Monstres.php"; 

if (isset($_POST['chevalier'])) {
    $chevalier_nom = $_POST['chevalier'];
} else {
    $chevalier_nom = 'chevalier';
}

if (isset($_POST['archer'])) {
    $archer_nom = $_POST['archer'];
} else {
    $archer_nom = 'archer';
}

if (isset($_POST['mage'])) {
    $mage_nom = $_POST['mage'];
} else {
    $mage_nom = 'mage';
}

?>
<br><br>
<section id="description">
    <form id="myFunction" onClick= { myFunction } method="POST" action="">
<div class="description_heros">
<article>
<h2>Chevalier</h2>
<img height=400px src="assets/img/classes/chevaliers.png" alt="chevalier">
<?php require "Chevalier.php";
$chevalier = new Chevalier($chevalier_nom);
echo "<br/>";
$chevalier->description(); ?>
<input type="text" name="chevalier" id="chevalier" value="<?= $chevalier_nom ?>">
<br/><br/><hr>
<?php echo "<p class='statut'>".$chevalier->statut()."</p>"; ?>
</article>
<article>
<h2>Archer</h2>
<img height=400px src="assets/img/classes/archers.png" alt="archer">
<?php require "Archer.php";
$archer = new Archer($archer_nom);
echo "<br/>";
$archer->description(); ?>
<input type="text" placeholder="archer" name="archer" id="archer" value="<?= $archer_nom ?>">
<br/><br/><hr>
<?php echo "<p class='statut'>".$archer->statut()."</p>"; ?>
</article>
<article>
<h2>Mage</h2>
<img height=400px src="assets/img/classes/mages.png" alt="mage">
<?php require "Mage.php";
$mage = new Mage($mage_nom);
echo "<br/>";
$mage->description(); ?>
<input type="text" placeholder="mage" name="mage" id="mage" value="<?= $mage_nom ?>">
<br/><br/><hr>
<?php echo "<p class='statut'>".$mage->statut()."</p>"; ?>
</article>
</div>
<br/><br/>
<input style="font-size: 18px; background-color: navy; color: white; display: none;" type="submit">
<form>
</section>
<h1>Combat</h1>
<?php require "Ogre.php";
require "Goblin.php";
require "Dragon.php";
$ogre = new Ogre;
$goblin = new Goblin;
$dragon = new Dragon;

$h = rand(1, 3);
$m = rand(1, 3);

switch ($h) {

    case 1:
        $hero = $chevalier;
        $h_p = rand(1, 14);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/persos/chevaliers/knight1.png';
            break;
        case 2:
            $hero_photo = 'assets/img/persos/chevaliers/knight2.png';
            break;
        case 3:
            $hero_photo = 'assets/img/persos/chevaliers/knight3.png';
            break;
        case 4:
            $hero_photo = 'assets/img/persos/chevaliers/knight4.png';
            break;
        case 5:
            $hero_photo = 'assets/img/persos/chevaliers/knight5.png';
            break;
        case 6:
            $hero_photo = 'assets/img/persos/chevaliers/knight6.png';
            break;
        case 7:
            $hero_photo = 'assets/img/persos/chevaliers/knight7.png';
            break;
        case 8:
            $hero_photo = 'assets/img/persos/chevaliers/knight8.png';
            break;
        case 9:
            $hero_photo = 'assets/img/persos/chevaliers/knight9.png';
            break;
        case 10:
            $hero_photo = 'assets/img/persos/chevaliers/knight10.png';
            break;
        case 11:
            $hero_photo = 'assets/img/persos/chevaliers/knight11.png';
            break;
        case 12:
            $hero_photo = 'assets/img/persos/chevaliers/knight12.png';
            break;
        case 13:
            $hero_photo = 'assets/img/persos/chevaliers/knight13.png';
            break;
        case 14:
            $hero_photo = 'assets/img/persos/chevaliers/knight14.png';
            break;
        }
        break;

    case 2:
        $hero = $archer;
        $h_p = rand(1, 2);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/persos/archers/archer1.png';
            break;
        case 2:
            $hero_photo = 'assets/img/persos/archers/archer2.png';
            break;
        }
        break;

    case 3:
        $hero = $mage;
        $h_p = rand(1, 5);
        switch ($h_p) {
        case 1:
            $hero_photo = 'assets/img/persos/mages/mage1.png';
            break;
        case 2:
            $hero_photo = 'assets/img/persos/mages/mage2.png';
            break;
        case 3:
            $hero_photo = 'assets/img/persos/mages/mage3.png';
            break;
        case 4:
            $hero_photo = 'assets/img/persos/mages/mage4.png';
            break;
        case 5:
            $hero_photo = 'assets/img/persos/mages/mage5.png';
            break;
        }
        break;
}

switch ($m) {

    case 1:
        $monstre = $ogre;
        $monstre_photo = 'assets/img/Ogre.png';
        break;
    case 2:
        $monstre = $goblin;
        $monstre_photo = 'assets/img/Goblin.png';
        break;
    case 3:
        $monstre = $dragon;
        $monstre_photo = 'assets/img/monstres/dragon.png';
        break;
}
 ?>
<br>
<div class="duel">
    <div class="duel-hero-container">
        <h2><?= $hero->getClasse(); ?></h2>
        <br><br>
        <img class="duel-hero" src="<?= $hero_photo ?>" alt="hero">
        <div class="duel-hero-buttons">
            <button class="attaque">Attaque</button><button class="magie">Magie</button><button class="sante">Sante</button>
        </div>
    </div>
    <div class="duel-monstre-container">
        <h2><?= $monstre->getType(); ?></h2>
        <br><br>
        <img class="duel-monstre" src="<?= $monstre_photo ?>" alt="monstre">
    </div>
</div>
<br><br><br>
<section id="combat">
<?php $tour = 1;
while (($monstre->getHp() > 0) && ($hero->getHp() > 0)) { ?>
<h3 style="border: 2px solid black; border-style: dotted; width: fit-content; padding: 5px;">Tour n° <?= $tour; ?></h3>
<br>
<?php if ($hero->getHp() > 0) { ?>
<h4><span style="text-transform: uppercase;"><?= $hero->getNom(); ?></span> <span style="font-style: italic; font-weight: normal;text-transform: lowercase;">(<?= $hero->getClasse(); ?>)</span></h3>
<?php $hero->attaque($monstre); } ?>
<?php if ($monstre->getHp() > 0) { ?>
<br><br>
<h4 style="text-transform: uppercase;"><?= $monstre->getType(); ?></h3>
<?php $monstre->attaque($hero); ?>
<br><br>
<h4>Statut de <?= $hero->getNom(); ?></h3>
<?php $hero->statut(); } ?>
<br><br>
<?php $tour++; } ?>
<br><br>
<?php
if ($monstre->getHp() <= 0) { ?>
<h3 style="text-align: center; margin-bottom: 50px; font-size: 25px; color: blue;"><?= $hero->getNom(); ?> a vaincu <?= $monstre->getType(); ?> !</h4>
<?php } else { ?>
<h3 style="text-align: center; margin-bottom: 50px; font-size: 25px; color: red;"><?= $monstre->getType(); ?> a défait <?= $hero->getNom(); ?>...</h4>
<?php } ?>
</section>
<main>
<script>
    function myFunction() { 
          document.getElementById("myFunction").submit(); 
        }
</script>
</body>
</html>