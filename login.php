<?php

include("system_header.php");


if(isset($_POST['user_box']) and $_POST['user_box']!='' and isset($_POST['password_box']) and $_POST['password_box']!=''){
	
	if($_POST['user_box']==$admin_user and $_POST['password_box']==$admin_password){
		
		$_SESSION['session_secret'] = uniqid('', true);
		$_SESSION['session_admin'] = md5($_SESSION['session_secret'].$settings_secret);
		
		// return to gallery url by default, or to the url saved in session
		$return_url = $gallery_url;
		if(isset($_SESSION['session_return_url']) and $_SESSION['session_return_url']!=''){
			$return_url = $_SESSION['session_return_url'];
			$_SESSION['session_return_url'] = '';
		}
		
		
		header("Location: ".$return_url."?message=you are logged in&message_type=success");
		exit;
		
	} else {
		
		header("Location: ".$gallery_url."/login?message=login failed&message_type=error");
		exit;
		
	}
	
}



?>
<?php include("header.php");?>

<h1>Connexion</h1>


<p class="breadcrumb"><a href="<?php echo $home_url;?>">Accueil</a> &gt; <a href="<?php echo $gallery_url;?>">Galerie</a> &gt; Connexion</p>



<form id="form1" name="form1" method="post" action="" style="margin-bottom:0px;">

	<label for="user_box">Utilisateur</label><br />
	<input type="text" name="user_box" id="user_box" style="width:150px;" />

	<br />
	<br />
    
	<label for="password_box">Mot de passe</label><br />
	<input type="password" name="password_box" id="password_box" style="width:150px;" />
 
	<br />
	<br />
	<input type="submit" name="button" id="button" value="Connexion" class="button_110" />
</form>

<script type="text/javascript">
document.getElementById('user_box').focus();
</script>


<?php include("footer.php");?>
