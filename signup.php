<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_signup";
	$header_page_description = "$header_page_description_signup";
	$header_page_keywords = "$header_page_keywords_signup";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<div class="register-block">
					<div class="heading">
						<h1><?php echo $signup_h1;?></h1>
						<p><?php echo $signup_p1;?></p>
					</div>
					<div class="add-box">
						<!-- sign up form -->
						<form id="reg" name="reg" class="sign-up-form" enctype="application/x-www-form-urlencoded" action="<?php echo $api_ssl;?>://api.2freehosting.com/v-2/client-register" method="post">
							<fieldset>
								<h1><?php echo $signup_h1_2;?></h1>
								<p><?php echo $signup_p2;?></p>
								<div class="form-row">
									<input type="text" name="first_name" id="first_name" placeholder="<?php echo $contact_placeholder_1;?>">
									<input type="email" name="email" id="email" placeholder="<?php echo $contact_placeholder_2;?>">
								</div>
								<div class="facebook-holder">
										<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmyfreehosting&amp;width=350&amp;height=25&amp;colorscheme=light&amp;layout=standard&amp;action=recommend&amp;show_faces=false&amp;send=false&amp;appId=253749334664501" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:25px;" allowTransparency="true"></iframe>
								</div>	
								<div class="form-row">
									<input type="password" name="password" id="password" placeholder="<?php echo $signup_password;?>">
									<input type="password" name="password_confirm" id="password_confirm" placeholder="<?php echo $signup_password2;?>">
								</div>
									<?php 
									$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
									if (strpos($url,'The+characters') !== false) {
    								echo '<div class="error_message">' . $signup_error_message . '</div>';
									} else {
    								echo '';}
									?>
								<div class="captcha-box">
									<div class="captcha-holder">
										<img alt="captcha" src="<?php echo $api_ssl;?>://api.2freehosting.com/captcha?transparent=1"/>
									</div>
									<div class="characters-holder">
										<label for="characters"><?php echo $contact_p_2;?></label>
										<input id="characters" type="text" name="captcha" id="captcha" captcha_src="<?php echo $api_ssl;?>://api.2freehosting.com/captcha?transparent=1">
									</div>
								</div>
								<input type="hidden" value="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" name="url_error">
								<input type="submit" name="submit" id="submit" value="<?php echo $signup_button_signup;?>">
								<p><?php echo $signup_p3;?> <a href="<?php echo $footer_terms_link;?>"><?php echo $footer_terms;?></a> <?php echo $signup_p4;?></p>
							</fieldset>
						</form>
						<div class="image-frame">
							<img src="<?php echo $images_url_prefix; ?>/images/img-04.png" alt="<?php echo $alt_hero4;?>">
						</div>
					</div>
				</div>
			</div>
		</main>
<?php include 'includes/footer.php';?>