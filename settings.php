<?php

$admin_user = "administrateurphotopral";
$admin_password = "5uxX8Nb3k79YHrWYVE95tYSQrji89RPPmjHUXrP2vhnaj";

$settings_page_title = "Galerie Photo PRAL";
$settings_page_description = "Galerie photo PRAL";

$public_upload = true; // Set to true to allow public upload
$photos_visibility = false; // Set to true to allow photo display

// if you will change thumbnail width or height, then login to admin area and re-generate thumbnails
$settings_thumbnail_width = '200';
$settings_thumbnail_height = '100';

$settings_photo_width = '1200';
$settings_photo_height = '650';

$settings_secret = "BRamhNZBaQv8WVxGPFGAJm9aR2mNVNBzsZkCb8RjPQvM4K5MF4VEqVMFGn8bFrFKUMHq3XUaFEReFt59qVUaDCP8CNqFZMPQVBheP5xQhPZy7SGij56PJa";
$settings_gallery_version = "1.0.2";

// Log user email ?
$ask_for_email = true; // Set to true to ask email and store it in a file with the corresponding file name
$email_is_required = true; // Set to true to force the user to set the email before uploading photo
$email_file_path = "/home/contact.csv"; // Check the permissions for www-data on file and folder if you change location outside webroot

$welcome_message = '<p align="center"><img src="https:\/\/pral.cen-aquitaine.org/wp-content/uploads/2018/01/web-new_LOGO_PRAL.jpg" style="height: 60px;"><img data-shadow="none" data-shadow-direction="middle" class="img-with-animation  animated-in" data-delay="0" data-animation="fade-in" src="https:\/\/pral.cen-aquitaine.org/wp-content/uploads/2019/04/oafs_horiz_small.png" alt="" style="opacity: 1;" height="60px"> <img src="https:\/\/pral.cen-aquitaine.org/wp-content/uploads/2019/04/LPO_Aquitaine.png" alt=""style="opacity: 1;margin-left:30px;" height="60px"> </p>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Appel &agrave; photographes&nbsp;!</p>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Dans le cadre de l&rsquo;Atlas des papillons de jour d&rsquo;Aquitaine, nous vous sollicitons pour illustrer certaines esp&egrave;ces. Vous pouvez t&eacute;l&eacute;verser vos photos sur ce site selon les modalit&eacute;s suivantes&nbsp;:</p>
<ul>
<li>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Nommez vos photos selon ce format&nbsp;: Auteur(Nom_Pr&eacute;nom)_Ann&eacute;emoisjour_D&eacute;partement&nbsp;;</p>
</li>
<li>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Limitez le nombre de vos photos par esp&egrave;ces&nbsp;;</p>
</li>
<li>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Limitez le poids de vos photos pour l&rsquo;envoi&nbsp;(ne pas d&eacute;passer 10 Mo par photo);</p>
</li>
<li>
<p style="margin-bottom: 0.28cm; line-height: 108%;">Les photos doivent &ecirc;tre prises en Aquitaine ou dans les d&eacute;partements fran&ccedil;ais limitrophes.</p>
</li>
</ul>
<p style="margin-bottom: 0.28cm; line-height: 108%;" align="justify">Les photos du site <span style="color: #0563c1;"><u><a href="http://www.faune-aquitaine.org/">www.faune-aquitaine.org</a></u></span> pourront &ecirc;tre s&eacute;lectionn&eacute;es pour l&rsquo;atlas, ce n&rsquo;est donc pas la peine de les remettre sur la plateforme.</p>
<p style="margin-bottom: 0cm; line-height: 100%;" align="justify">Les photos ne sont volontairement pas visibles publiquement afin de les prot&eacute;ger contre le vol.</p>
<p style="margin-bottom: 0cm; line-height: 100%;" align="justify">En cas de s&eacute;lection des photos pour l&rsquo;Atlas, une convention de cession de droits pr&eacute;cisant les conditions d&rsquo;utilisation des fichiers sera sign&eacute;e avec l&rsquo;auteur. Les auteurs des photos seront &eacute;galement nomm&eacute;s et remerci&eacute;s dans l&rsquo;ouvrage.</p>
<p style="margin-bottom: 0cm; line-height: 100%;" align="justify">Seules les photographies s&eacute;lectionn&eacute;es pour l&rsquo;&eacute;dition de l&rsquo;Atlas seront utilis&eacute;es. Par cons&eacute;quent, la phototh&egrave;que constitu&eacute;e pour l&rsquo;occasion ne sera en aucun cas utilis&eacute;e par la suite et de quelque fa&ccedil;on que ce soit (l\'ensemble de la galerie sera supprim&eacute;e).</p>
<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>
<p style="margin-left: 1.27cm; margin-bottom: 0.28cm; line-height: 108%;" align="right">Merci&nbsp;!</p>';

$home_url = "https://pral.cen-aquitaine.org";

$ask_upload_confirmation = true; // Set to true to add a button to submit (useful when $email_is_required is true !)

?>
