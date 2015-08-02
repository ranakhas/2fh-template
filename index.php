<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_home";
	$header_page_description = "$header_page_description_home";
	$header_page_keywords = "$header_page_keywords_home";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<div class="two-columns">
					<div class="col">
						<div class="main-img">
							<img src="<?php echo $images_url_prefix; ?>/images/img-01.png" alt="<?php echo $alt_hero;?>">
						</div>
						<!-- social plugin container -->
						<div class="social-placeholder">
							<div class="fb-like" data-href="https://www.facebook.com/MyFreeHosting" data-width="375" data-layout="standard" data-action="recommend" data-show-faces="true" data-share="true"></div>
						</div>
						<a href="<?php echo $youtube_presentation_link;?>" class="btn"><?php echo $watch_presentation;?></a>
						<p><?php echo $index_p1;?></p>
					</div>
					<div class="col">
						<div class="register-box">
							<div class="content-box">
								<h1><?php echo $index_h1;?><?php echo $index_h1_2;?><?php echo $index_h1_3;?></h1>
								<ul class="icon-list">
									<li>
										<img src="<?php echo $images_url_prefix; ?>/images/icon-01.svg" width="61" height="59" alt="<?php echo $icon_description_disk;?>">
										<h2><?php echo $index_features_1;?></h2>
										<h3><a href="#"><?php echo $index_features_1_1;?></a></h3>
									</li>
									<li>
										<img src="<?php echo $images_url_prefix; ?>/images/icon-02.svg" width="63" height="63" alt="<?php echo $icon_description_bandwidth;?>">
										<h2><?php echo $index_features_2;?></h2>
										<h3><a href="#"><?php echo $index_features_2_1;?></a></h3>
									</li>
									<li>
										<img src="<?php echo $images_url_prefix; ?>/images/icon-03.svg" width="52" height="51" alt="<?php echo $icon_description_uptime;?>">
										<h2><?php echo $index_features_3;?></h2>
										<h3><a href="#"><?php echo $index_features_3_1;?></a></h3>
									</li>
									<li>
										<img src="<?php echo $images_url_prefix; ?>/images/icon-04.svg" width="57" height="57" alt="<?php echo $icon_description_cpanel;?>">
										<h2><?php echo $index_features_free;?></h2>
										<h3><a href="#"><?php echo $index_features_4_1;?></a></h3>
									</li>
									<li>
										<img src="<?php echo $images_url_prefix; ?>/images/icon-05.svg" width="46" height="56" alt="<?php echo $icon_description_subdomain;?>">
										<h2><?php echo $index_features_free;?></h2>
										<h3><a href="#"><?php echo $index_features_5_1;?></a></h3>
									</li>
								</ul>
								<a href="<?php echo $header_register_link;?>" class="btn red">
									<?php echo $index_register_free;?>
									<span class="small"><?php echo $index_register_free_2;?></span>
								</a>
							</div>
							<p><?php echo $index_p2;?></p>
						</div>
					</div>
				</div>
				<!-- advertisement block -->
				<div class="promobox">
					<?php include 'includes/ads-leaderboard.php';?>
				</div>
				<div class="links-list">
					<div class="col">
						<h2><?php echo $footer_title1;?></h2>
						<ul>
							<li><a href="<?php echo $footer_link_name1_link;?>" target="_blank"><?php echo $footer_link_name1;?></a></li>
							<li><a href="<?php echo $footer_link_name2_link;?>" target="_blank"><?php echo $footer_link_name2;?></a></li>
							<li><a href="<?php echo $footer_link_name3_link;?>" target="_blank"><?php echo $footer_link_name3;?></a></li>
						</ul>
					</div>
					<div class="col second-col">
						<h2><?php echo $footer_title2;?></h2>
						<ul>
							<li><a href="<?php echo $footer_link_name4_link;?>"><?php echo $footer_link_name4;?></a></li>
							<li><a href="<?php echo $footer_link_name5_link;?>"><?php echo $footer_link_name5;?></a></li>
							<li><a href="<?php echo $footer_link_name6_link;?>"><?php echo $footer_link_name6;?></a></li>
							<li><a href="<?php echo $footer_link_name7_link;?>"><?php echo $footer_link_name7;?></a></li>
							<li><a href="<?php echo $footer_link_name8_link;?>"><?php echo $footer_link_name8;?></a></li>
						</ul>
					</div>
					<div class="col third-col">
						<h2><?php echo $footer_title3;?></h2>
						<ul class="list">
							<li><a href="<?php echo $free_hosting_1_link;?>"><?php echo $free_hosting_1;?></a></li>
							<li><a href="<?php echo $free_hosting_2_link;?>"><?php echo $free_hosting_2;?></a></li>
							<li><a href="<?php echo $free_hosting_3_link;?>"><?php echo $free_hosting_3;?></a></li>
							<li><a href="<?php echo $free_hosting_4_link;?>"><?php echo $free_hosting_4;?></a></li>
							<li><a href="<?php echo $free_hosting_5_link;?>"><?php echo $free_hosting_5;?></a></li>
							<li><a href="<?php echo $free_hosting_6_link;?>"><?php echo $free_hosting_6;?></a></li>
							<li><a href="<?php echo $free_hosting_7_link;?>"><?php echo $free_hosting_7;?></a></li>
							<li><a href="<?php echo $free_hosting_8_link;?>"><?php echo $free_hosting_8;?></a></li>
							<li><a href="<?php echo $free_hosting_9_link;?>"><?php echo $free_hosting_9;?></a></li>
							<li><a href="<?php echo $free_hosting_10_link;?>"><?php echo $free_hosting_10;?></a></li>
						</ul>
					</div>
					<div class="col fourth-col">
						<h2><?php echo $footer_title4;?></h2>
						<!-- social networks -->
						<ul class="social-networks">
							<li><a class="icon-facebook" href="<?php echo $social_facebook;?>" target="_blank"></a></li>
							<li><a class="icon-google" href="<?php echo $social_google;?>" target="_blank"></a></li>
							<li><a class="icon-youtube" href="<?php echo $social_youtube;?>" target="_blank"></a></li>
							<li><a class="icon-twitter" href="<?php echo $social_twitter;?>" target="_blank"></a></li>
							<li><a class="icon-linkedin" href="<?php echo $social_linkedin;?>" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</main>
<?php include 'includes/footer.php';?>