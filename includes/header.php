<?php include 'global.php';?>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $header_page_title; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $amazon_url; ?>/favicon.ico">
	<meta name="description" content="<?php echo $header_page_description; ?>" />
	<meta name="keywords" content="<?php echo $header_page_keywords; ?>" />
	<link rel="alternate" href="https://www.2freehosting.com/" hreflang="en" />
	<link rel="alternate" href="https://www.2freehosting.com/es/" hreflang="es" />
	<link rel="alternate" href="https://www.2freehosting.com/ru/" hreflang="ru" />
	<link rel="alternate" href="https://www.2freehosting.com/fr/" hreflang="fr" />
	<link rel="alternate" href="https://www.2freehosting.com/lt/" hreflang="lt" />
	<link rel="alternate" href="https://www.2freehosting.com/de/" hreflang="de" />
	<link rel="alternate" href="https://www.2freehosting.com/id/" hreflang="id" />
	<link rel="alternate" href="https://www.2freehosting.com/pt/" hreflang="pt" />
	<!-- include the site stylesheet -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700%7CPassion+One:400' rel='stylesheet' type='text/css'>
	<link media="all" rel="stylesheet" href="<?php echo $home_page_url; ?>/css/all.css">
</head>
<!--Google analytics-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5263515-3']);
  _gaq.push(['_setDomainName', '.2freehosting.com']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!--End Google analytics-->
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=253749334664501";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header">
			<div class="holder">
				<div class="left-header">
					<!-- page logo -->
					<div class="logo">
						<a href=".">
							<img src="<?php echo $images_url_prefix; ?>/images/logo.png" alt="<?php echo $header_logo_alt; ?>">
						</a>
					</div>
					<a class="logoname" href="."><?php echo $logo_name; ?></a>
					<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
						<option class="hideme" value="/"><?php echo $language_english; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/es') !== false) {echo 'selected';} ?> value="/es"><?php echo $language_spanish; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/ru') !== false) {echo 'selected';} ?> value="/ru"><?php echo $language_russian; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/fr') !== false) {echo 'selected';} ?> value="/fr"><?php echo $language_french; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/lt') !== false) {echo 'selected';} ?> value="/lt"><?php echo $language_lithuanian; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/de') !== false) {echo 'selected';} ?> value="/de"><?php echo $language_german; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/id') !== false) {echo 'selected';} ?> value="/id"><?php echo $language_indonesian; ?></option>
						<option <?php if (stripos($_SERVER['REQUEST_URI'],'/pt') !== false) {echo 'selected';} ?> value="/pt"><?php echo $language_portuguese; ?></option>
					</select>
				</div>
				<div class="right-header">
					<!-- main navigation of the page -->
					<nav id="nav">
						<a href="#" class="opener-menu"><span></span></a>
						<ul class="menu">
							<li><a href="<?php echo $header_reviews_link; ?>"><?php echo $header_reviews; ?></a></li>
							<li><a href="<?php echo $header_hosting_link; ?>"><?php echo $header_hosting; ?></a></li>
							<li><a href="<?php echo $header_forum_link; ?>"><?php echo $header_forum; ?></a></li>
							<li><a href="<?php echo $header_faq_link; ?>"><?php echo $header_faq; ?></a></li>
						</ul>
					</nav>
					<div class="buttons">
						<a href="<?php echo $cpanel_link; ?>"><?php echo $header_login; ?></a>
						<a class="red" href="<?php echo $header_register_link; ?>"><?php echo $header_register; ?></a>
					</div>
				</div>
			</div>
		</header>