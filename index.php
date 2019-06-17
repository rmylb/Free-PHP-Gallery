<?php

include("system_header.php");



?>
<?php include("header.php");?>

<h1>Galerie photo</h1>

<p class="breadcrumb"><a href="<?php echo $home_url;?>">Accueil</a> &gt; <a href="<?php echo $gallery_url;?>"> Galerie </a></p>

<!-- Add gallery filter -->
<form action="<?php echo $gallery_url;?>">
    <p class="breadcrumb" style="text-align: right; padding-right: 30px"> Rechercher une galerie <input type="text" id="filter" name="filter"><input type="submit" value="Filtrer"></p>
<!-- End gallery filter -->
</form>

<?php
    if($welcome_message) {
        echo $welcome_message;
} ?>

<?php if(count($categories_array)<=0){?>
<p>Il n'y a pas encore de catégories, créez une catégorie pour téléverser des photos.</p>
<?php } ?>


<?php if(count($categories_array)>0){?>

<div>

	<?php foreach($categories_array as $photo_category=>$photos_array){?>
    
    	<?php 
		$category_thumbnail = $gallery_url."/layout/pixel.gif";

		if(file_exists('files/'.$photo_category.'/thumbnail.jpg') && ($is_admin || $photos_visibility) ){ // Hide thumbnail if visibility is false
			$category_thumbnail = $gallery_url.'/'.rawurlencode($photo_category).'.jpg';
		}

		$category_url = $gallery_url.'/'.rawurlencode($photo_category);

            if($_GET['filter'] && preg_match("/{$_GET['filter']}/i", $photo_category)){?>

                <span class="category_thumbnail_span" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height+20;?>px;">
                <a class="category_thumbnail_image" href="<?php echo $category_url;?>" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height;?>px; background-image:url('<?php echo $gallery_url;?>/layout/default.png');" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
                <img src="<?php echo $category_thumbnail;?>" width="<?php echo $settings_thumbnail_width;?>" height="<?php echo $settings_thumbnail_height;?>" alt="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>" />
                </a>
                <a class="category_thumbnail_title" href="<?php echo $category_url;?>" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
                <?php echo htmlentities(str_replace('-',' ', truncate_by_letters($photo_category, $settings_thumbnail_width / 6, '..')), ENT_QUOTES, "UTF-8");?> (<?php echo count($photos_array);?>)
                </a>
                </span>

            <?php } elseif(!isset($_GET['filter']))  { ?>

                <span class="category_thumbnail_span" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height+20;?>px;">
                <a class="category_thumbnail_image" href="<?php echo $category_url;?>" style="width:<?php echo $settings_thumbnail_width;?>px; height:<?php echo $settings_thumbnail_height;?>px; background-image:url('<?php echo $gallery_url;?>/layout/default.png');" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
                <img src="<?php echo $category_thumbnail;?>" width="<?php echo $settings_thumbnail_width;?>" height="<?php echo $settings_thumbnail_height;?>" alt="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>" />
                </a>
                <a class="category_thumbnail_title" href="<?php echo $category_url;?>" title="<?php echo htmlentities(ucwords(str_replace('-', ' ', $photo_category)), ENT_QUOTES, "UTF-8");?>">
                <?php echo htmlentities(str_replace('-',' ', truncate_by_letters($photo_category, $settings_thumbnail_width / 6, '..')), ENT_QUOTES, "UTF-8");?> (<?php echo count($photos_array);?>)
                </a>
                </span>

            <?php } ?>
    

	<?php } ?>

</div><!-- end of categories container -->

<?php } ?>


<?php include("footer.php");?>
