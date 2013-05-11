<?php

/*
Template Name: Inscription
*/

// inscription

if (!empty($_POST['user_login']) && !empty($_POST['user_email']) && !empty($_POST['user_password']) && !empty($_POST['user_password2']) && !empty($_POST['antibot'])) {
	$d = $_POST;

	if($d['antibot'] == '5') {
		if($d['user_password'] != $d['user_password2']) {
			$error = 'Les deux mots de passes ne correspondents pas !';
		} else {
			if (!is_email($d['user_email'])) {
				$error = 'Veuillez entrer un email valide.';
			} else {
				$user = wp_insert_user(array(
					'user_login' => $d['user_login'],
					'user_email' => $d['user_email'],
					'user_pass'	 => $d['user_password'],
					'user_registered' => date('Y-m-d H:i:s')
				));

				if (is_wp_error($user)) {
					$error = $user->get_error_message();
				} else {
					$msg = 'Vous êtes inscrit';
					$headers = 'From : ' . get_option('admin_email') . "\r\n";
					wp_mail($d['user_email'], 'Inscription réussie', $msg, $headers);
					
					wp_signon($d);
					wp_redirect( 'profil?inscription=true');
					exit();
				}
			}
		}
	} else {
		$error = 'Je ne suis pas certain que 2 + 3 soit égal à ' . $d['antibot'];
	}
} else {
	$error = 'Veuillez remplir les champs d\'inscription avant de valider';
}

get_header(); ?>

	<section class="container-fluid login">
		<div class="row-fluid">
			<div class="span12">
				<div class="span5 offset1 signin">
					<h2>Pas encore inscrit ?</h2>
					<?php if(isset($error)): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $error; ?>
					</div>
					<?php endif; ?>

					<form action="/studentprojects/signup" method="post">
						<label for="user_login">Login</label>
						<input type="text" value="<?php echo isset($d['user_login']) ? $d['user_login'] : '' ; ?>" name="user_login" id="user_login">

						<label for="user_email">Email</label>
						<input type="email" value="<?php echo isset($d['user_email']) ? $d['user_email'] : '' ; ?>" name="user_email" id="user_email">

						<label for="user_pass">Mot de passe</label>
						<input type="password" name="user_password" id="user_pass">

						<label for="user_pass2">Mot de passe</label>
						<input type="password" name="user_password2" id="user_pass2">

						<label for="antibot">Combien font 2+3 ?</label>
						<input type="text" name="antibot" id="antibot">
						<br>
						<input type="submit" value="Se connecter" class="btn">
					</form>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>