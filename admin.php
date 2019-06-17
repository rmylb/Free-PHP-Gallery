<?php

include("system_header.php");

admin_only();


?>
<?php include("header.php");?>
<h1>Admin </h1>
<p class="breadcrumb"><a href="/">Accueil</a> &gt; <a href="<?php echo $gallery_url;?>">Galerie</a> &gt; Administration</p>

<p>
<strong><a href="<?php echo $gallery_url;?>/admin-categories">Administrer les catégories (<?php echo count($categories_array);?>)</a></strong><br />
Créer de nouvelles catégories, supprimer ou renommer des catégories existantes...
</p>

<p>
<strong><a href="javascript:void(0);" onmouseup="if(confirm('Etes-vous sûr de vouloir lancer le script ? Cela peut prendre quelques minutes en fonction du nombre de photos et de la puissance de votre serveur.')){window.location='<?php echo $gallery_url;?>/admin-regenerate-images';}">Regénérer les images</a></strong> <br />
Utiliser cette fonction lorsque vous souhaitez regénérer les vignettes. Chaque image est stockée sur le serveur en trois fichiers (original <em>file.jpg</em>, <em>file_small.jpg</em> et <em>file_thumbnail.jpg</em>).<br />
Vous pouvez également lancer ce script si vous changez la hauteur/largeur de vos images dans le fichier <em>settings.php</em><br />

<span style="color:#EA0000;">Si le script ne s'exécute pas complètement ou si vous avez une erreur côté serveur, essayez d'augmenter la durée d'éxécution des script PHP ou augmenter la mémoire allouée à PHP.</span>
</p>

<?php include("footer.php");?>
