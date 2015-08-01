<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_reviews";
	$header_page_description = "$header_page_description_reviews";
	$header_page_keywords = "$header_page_keywords_reviews";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<div class="heading">
					<h1><?php echo $reviews_h1;?></h1>
					<p><?php echo $reviews_p1;?></p>
				</div>
				<!-- advertisement block -->
				<div class="promobox">
					<?php include 'includes/ads-leaderboard.php';?>
				</div>
				<div class="fb-comments" data-href="http://www.2freehosting.com/" data-width="100%" data-numposts="50" data-colorscheme="light" order_by="reverse_time"></div>
			</div>
		</main>
<?php include 'includes/footer.php';?>