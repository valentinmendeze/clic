<?php
/*
Template Name: Connexion
*/

// connexion

$user = wp_get_current_user();

if($user->ID != 0) {
	wp_redirect( 'profil');
	exit();
}

if(!empty($_POST['user_login']) && !empty($_POST['user_password'])) {
	$user = wp_signon($_POST);

	if(is_wp_error($user)) {
		$error = $user->get_error_message();
	} else {
		wp_redirect( 'profil');
		exit();
	}
} else {
	$user = wp_get_current_user();

	if($user->ID != 0) {
		wp_redirect( 'profil');
		exit();
	}
}

get_header(); ?>

	<section class="container-fluid login">
		<div class="row-fluid">
			<div class="span12">
				<div class="span5 offset1 log">
					<h2>Se connecter</h2>
					<p>Identifiez-vous à l'aide de votre nom de connexion et votre mot de passe.</p>
					<?php if(isset($error)): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $error; ?>
					</div>
					<?php endif; ?>

					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
						<label for="user_login">Identifiant</label>
						<input type="text" name="user_login" id="user_login">
						<label for="user_password">Mot de passe</label>
						<input type="password" name="user_password" id="user_password">
						<br>
						<input type="checkbox" name="renember" id="renember" value="1">
						<span class="renember">Se souvenir de moi</span>
						<br>
						<input type="submit" value="Se connecter" class="btn">
						<br>
						<a href="<?php bloginfo( 'url' ) ?>/wp-login.php?action=lostpassword" class="passwordlost">Mot de passe oublié ?</a>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>