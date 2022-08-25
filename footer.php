	</div><!-- end of gallery_wrapper -->

<div class="gallery_footer">
<p align="center"> Ce plan est co-financ&eacute; par : </p>
    <p align="center"> <img src="https:\/\/pral.cen-aquitaine.org/wp-content/uploads/2018/01/bandeaufinanceursPRAL-carre.jpg" height="160px"></p>
Powered by <a href="http:\/\/www.adriantnt.com/products/free-php-gallery/">Free PHP Gallery</a>
&nbsp;|&nbsp;<a href="<?php echo $gallery_url;?>/admin">admin</a>
<?php if($is_admin){?>
&nbsp;|&nbsp;<a href="<?php echo $gallery_url;?>/logout">logout</a>
<?php } ?>
&nbsp;|&nbsp;<?php echo round((microtime(true)-$page_load_start)*1000)." ms"; ?>
</div><!-- end of gallery footer -->

</body>
</html>
