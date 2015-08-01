<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_about";
	$header_page_description = "$header_page_description_about";
	$header_page_keywords = "$header_page_keywords_about";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<div class="heading">
					<h1><?php echo $about_h1;?></h1>
				</div>
				<h2><?php echo $about_h2_1;?></h2>
				<p><?php echo $about_p_1;?></p>
				<div class="video-container">
        			 <iframe src="https://www.youtube.com/embed/4u80CKJ43-A" frameborder="0" width="560" height="315"></iframe>
				</div>
				<h2><?php echo $about_h2_2;?></h2>
				<p><?php echo $about_p_2;?></p>
				<h2><?php echo $about_h2_3;?></h2>
				<ul class="social-networks" style="padding-left:0px;">
							<li><a class="icon-facebook" href="<?php echo $social_facebook;?>" target="_blank"></a></li>
							<li><a class="icon-google" href="<?php echo $social_google;?>" target="_blank"></a></li>
							<li><a class="icon-youtube" href="<?php echo $social_youtube;?>" target="_blank"></a></li>
							<li><a class="icon-twitter" href="<?php echo $social_twitter;?>" target="_blank"></a></li>
							<li><a class="icon-linkedin" href="<?php echo $social_linkedin;?>" target="_blank"></a></li>
				</ul>
			</div>
		</main>
<?php include 'includes/footer.php';?>