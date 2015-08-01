<!DOCTYPE html>
<html>
<?php include 'includes/translation.php';?>
<?php 
	$header_page_title = "$header_page_title_faq";
	$header_page_description = "$header_page_description_faq";
	$header_page_keywords = "$header_page_keywords_faq";
	include 'includes/header.php';
?>
		<!-- contain main informative part of the site -->
		<main role="main" id="main">
			<div class="holder">
				<div class="heading">
					<h1><?php echo $faq_h1;?></h1>
					<p><?php echo $faq_p1;?></p>
				</div>
				<div class="promobox">
					<?php include 'includes/ads-leaderboard.php';?>
				</div>
				<div class="four-columns">
					<div class="col">
						<div class="img-holder">
							<img src="<?php echo $images_url_prefix; ?>/images/icon-06.svg" width="55" height="55" alt="<?php echo $faq_image_description_target;?>">
						</div>
						<h2><?php echo $faq_topic_1;?></h2>
						<ul>
							<li><a href="#qgeneral1"><?php echo $faq_general_question_1;?></a></li>
							<li><a href="#qgeneral2"><?php echo $faq_general_question_2;?></a></li>
							<li><a href="#qgeneral3"><?php echo $faq_general_question_3;?></a></li>
							<li><a href="#qgeneral4"><?php echo $faq_general_question_4;?></a></li>
							<li><a href="#qgeneral5"><?php echo $faq_general_question_5;?></a></li>
							<li><a href="#qgeneral6"><?php echo $faq_general_question_6;?></a></li>
							<li><a href="#qgeneral7"><?php echo $faq_general_question_7;?></a></li>
							<li><a href="#qgeneral8"><?php echo $faq_general_question_8;?></a></li>
							<li><a href="#qgeneral9"><?php echo $faq_general_question_9;?></a></li>
							<li><a href="#qgeneral10"><?php echo $faq_general_question_10;?></a></li>
						</ul>
					</div>
					<div class="col">
						<div class="img-holder">
							<img src="<?php echo $images_url_prefix; ?>/images/icon-04.svg" width="57" height="57" alt="<?php echo $faq_image_description_gear;?>">
						</div>
						<h2><?php echo $faq_topic_2;?></h2>
						<ul>
							<li><a href="#qpanel1"><?php echo $faq_panel_question_1;?></a></li>
							<li><a href="#qpanel2"><?php echo $faq_panel_question_2;?></a></li>
							<li><a href="#qpanel3"><?php echo $faq_panel_question_3;?></a></li>
							<li><a href="#qpanel4"><?php echo $faq_panel_question_4;?></a></li>
							<li><a href="#qpanel5"><?php echo $faq_panel_question_5;?></a></li>
							<li><a href="#qpanel6"><?php echo $faq_panel_question_6;?></a></li>
							<li><a href="#qpanel7"><?php echo $faq_panel_question_7;?></a></li>
							<li><a href="#qpanel8"><?php echo $faq_panel_question_8;?></a></li>
							<li><a href="#qpanel9"><?php echo $faq_panel_question_9;?></a></li>
							<li><a href="#qpanel10"><?php echo $faq_panel_question_10;?></a></li>
							<li><a href="#qpanel11"><?php echo $faq_panel_question_11;?></a></li>
							<li><a href="#qpanel12"><?php echo $faq_panel_question_12;?></a></li>
						</ul>
					</div>
					<div class="col">
						<div class="img-holder">
							<img src="<?php echo $images_url_prefix; ?>/images/icon-07.svg" width="54" height="52" alt="<?php echo $faq_image_description_lock;?>">
						</div>
						<h2><?php echo $faq_topic_3;?></h2>
						<ul>
							<li><a href="#qsecurity1"><?php echo $faq_security_question_1;?></a></li>
							<li><a href="#qsecurity2"><?php echo $faq_security_question_2;?></a></li>
						</ul>
						<h2><?php echo $faq_topic_4;?></h2>
						<ul>
							<li><a href="#qpreorder1"><?php echo $faq_preorder_question_1;?></a></li>
							<li><a href="#qpreorder2"><?php echo $faq_preorder_question_2;?></a></li>
							<li><a href="#qpreorder3"><?php echo $faq_preorder_question_3;?></a></li>
							<li><a href="#qpreorder4"><?php echo $faq_preorder_question_4;?></a></li>
							<li><a href="#qpreorder5"><?php echo $faq_preorder_question_5;?></a></li>
						</ul>
					</div>
					<div class="col">
						<div class="img-holder">
							<img src="<?php echo $images_url_prefix; ?>/images/icon-08.svg" width="57" height="54" alt="<?php echo $faq_image_description_hamer;?>">
						</div>
						<h2><?php echo $faq_topic_5;?></h2>
						<ul>
							<li><a href="#qtechnical1"><?php echo $faq_technical_question_1;?></a></li>
							<li><a href="#qtechnical2"><?php echo $faq_technical_question_2;?></a></li>
							<li><a href="#qtechnical3"><?php echo $faq_technical_question_3;?></a></li>
							<li><a href="#qtechnical4"><?php echo $faq_technical_question_4;?></a></li>
							<li><a href="#qtechnical5"><?php echo $faq_technical_question_5;?></a></li>
							<li><a href="#qtechnical6"><?php echo $faq_technical_question_6;?></a></li>
						</ul>
					</div>
				</div>
				<div class="promobox">
					<?php include 'includes/ads-leaderboard.php';?>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral1"></a><?php echo $faq_general_question_1;?></h3>
					<p>
						<?php echo $faq_general_answer_1;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral2"></a><?php echo $faq_general_question_2;?></h3>
					<p>
						<?php echo $faq_general_answer_2;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral3"></a><?php echo $faq_general_question_3;?></h3>
					<p>
						<?php echo $faq_general_answer_3;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral4"></a><?php echo $faq_general_question_4;?></h3>
					<p>
						<?php echo $faq_general_answer_4;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral5"></a><?php echo $faq_general_question_5;?></h3>
					<p>
						<?php echo $faq_general_answer_5;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral6"></a><?php echo $faq_general_question_6;?></h3>
					<p>
						<?php echo $faq_general_answer_6;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral7"></a><?php echo $faq_general_question_7;?></h3>
					<p>
						<?php echo $faq_general_answer_7;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral8"></a><?php echo $faq_general_question_8;?></h3>
					<p>
						<?php echo $faq_general_answer_8;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral9"></a><?php echo $faq_general_question_9;?></h3>
					<p>
						<?php echo $faq_general_answer_9;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qgeneral10"></a><?php echo $faq_general_question_10;?></h3>
					<p>
						<?php echo $faq_general_answer_10;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel1"></a><?php echo $faq_panel_question_1;?></h3>
					<p>
						<?php echo $faq_panel_answer_1;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel2"></a><?php echo $faq_panel_question_2;?></h3>
					<p>
						<?php echo $faq_panel_answer_2;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel3"></a><?php echo $faq_panel_question_3;?></h3>
					<p>
						<?php echo $faq_panel_answer_3;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel4"></a><?php echo $faq_panel_question_4;?></h3>
					<p>
						<?php echo $faq_panel_answer_4;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel5"></a><?php echo $faq_panel_question_5;?></h3>
					<p>
						<?php echo $faq_panel_answer_5;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel6"></a><?php echo $faq_panel_question_6;?></h3>
					<p>
						<?php echo $faq_panel_answer_6;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel7"></a><?php echo $faq_panel_question_7;?></h3>
					<p>
						<?php echo $faq_panel_answer_7;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel8"></a><?php echo $faq_panel_question_8;?></h3>
					<p>
						<?php echo $faq_panel_answer_8;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel9"></a><?php echo $faq_panel_question_9;?></h3>
					<p>
						<?php echo $faq_panel_answer_9;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel10"></a><?php echo $faq_panel_question_10;?></h3>
					<p>
						<?php echo $faq_panel_answer_10;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel11"></a><?php echo $faq_panel_question_11;?></h3>
					<p>
						<?php echo $faq_panel_answer_11;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpanel12"></a><?php echo $faq_panel_question_12;?></h3>
					<p>
						<?php echo $faq_panel_answer_12;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qsecurity1"></a><?php echo $faq_security_question_1;?></h3>
					<p>
						<?php echo $faq_security_answer_1;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qsecurity2"></a><?php echo $faq_security_question_2;?></h3>
					<p>
						<?php echo $faq_security_answer_2;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpreorder1"></a><?php echo $faq_preorder_question_1;?></h3>
					<p>
						<?php echo $faq_preorder_answer_1;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpreorder2"></a><?php echo $faq_preorder_question_2;?></h3>
					<p>
						<?php echo $faq_preorder_answer_2;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpreorder3"></a><?php echo $faq_preorder_question_3;?></h3>
					<p>
						<?php echo $faq_preorder_answer_3;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpreorder4"></a><?php echo $faq_preorder_question_4;?></h3>
					<p>
						<?php echo $faq_preorder_answer_4;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qpreorder5"></a><?php echo $faq_preorder_question_5;?></h3>
					<p>
						<?php echo $faq_preorder_answer_5;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical1"></a><?php echo $faq_technical_question_1;?></h3>
					<p>
						<?php echo $faq_technical_answer_1;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical2"></a><?php echo $faq_technical_question_2;?></h3>
					<p>
						<?php echo $faq_technical_answer_2;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical3"></a><?php echo $faq_technical_question_3;?></h3>
					<p>
						<?php echo $faq_technical_answer_3;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical4"></a><?php echo $faq_technical_question_4;?></h3>
					<p>
						<?php echo $faq_technical_answer_4;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical5"></a><?php echo $faq_technical_question_5;?></h3>
					<p>
						<?php echo $faq_technical_answer_5;?>
					</p>
				</div>
				<div class="question-box">
					<h3><a name="qtechnical6"></a><?php echo $faq_technical_question_6;?></h3>
					<p>
						<?php echo $faq_technical_answer_6;?>
					</p>
				</div>
			</div>
		</main>
<?php include 'includes/footer.php';?>