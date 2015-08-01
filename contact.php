<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_contact";
	$header_page_description = "$header_page_description_contact";
	$header_page_keywords = "$header_page_keywords_contact";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<!-- contact form -->
				<form method="post" action="<?php echo $api_ssl;?>://api.2freehosting.com/v-2/contact-form" class="contact-form">
					<fieldset>
						<h1><?php echo $contact_h1;?></h1>
						<div class="form-heading">
							<img class="right-image" src="<?php echo $images_url_prefix; ?>/images/img-03.png" alt="<?php echo $alt_hero_3;?>">
							<div class="heading-frame">
								<h2><?php echo $contact_h2_1;?></h2>
								<p><?php echo $contact_p_1;?></p>
							</div>
						</div>
						<div class="form-row">
							<input type="text" id="api_author_name" name="author_name" placeholder="<?php echo $contact_placeholder_1;?>">
							<input type="email" id="api_author_email" name="author_email" placeholder="<?php echo $contact_placeholder_2;?>">
						</div>
						<div class="form-row">
							<input type="text" id="api_subject" name="subject" placeholder="<?php echo $contact_placeholder_3;?>">
							<textarea cols="3" rows="3" id="api_content" name="content" placeholder="<?php echo $contact_placeholder_4;?>"></textarea>
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
								<img src="<?php echo $api_ssl;?>://api.2freehosting.com/captcha" alt="Captcha" class="api_captcha"/>
							</div>
							<div class="characters-holder">
								<label for="characters"><?php echo $contact_p_2;?></label>
								<input type="hidden" value="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" name="url_error">
								<input id="characters" type="text" id="api_captcha" name="captcha">
							</div>
						</div>
						<input type="submit" value="<?php echo $contact_p_3;?>">
					</fieldset>
				</form>
			</div>
		</main>
<?php include 'includes/footer.php';?>
