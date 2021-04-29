<?php $title = 'Accueil';
ob_start(); ?>

<h1>Bienvenue!</h1>
<ul>
<h2>Quelques animaux de l'élevage:</h2>
<?php
foreach ($animalsNames as $animalsName) {
?>
<li><?= $animalsName; ?></li>
<?php
}
?>
</ul>
<?php $content = ob_get_clean();
require('template.php'); ?>