		<!-- footer of the page -->
		<footer id="footer">
			<div class="f1">
				<div class="holder">
					<div class="left-footer">
						<div class="footer-logo">
							<a href="#">
								<img src="<?php echo $images_url_prefix; ?>/images/logo-01.png" alt="<?php echo $header_logo_alt; ?>">
							</a>
						</div>
						<span class="copyright"><?php echo $footer_copytight; ?></span>
						<ul class="footer-list">
							<li><a href="<?php echo $footer_privacy_link; ?>"><?php echo $footer_privacy; ?></a></li>
							<li><a href="<?php echo $footer_terms_link; ?>"><?php echo $footer_terms; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
<!-- include jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo $home_page_url; ?>/js/jquery-1.11.2.min.js"><\/script>')</script>
<!-- include custom JavaScript -->
<script type="text/javascript" src="<?php echo $home_page_url; ?>/js/jquery.main.js"></script>
</body>
</html>