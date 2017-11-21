<!DOCTYPE html>
<html lang="ru-UA">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>">
	<link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/media.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="row row-zero">
			<div class="col-lg-2 col-md-2 col-sm-2"></div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<!-- <div class="city-2">
					<p>Ваш город: </p>
				</div> -->
				<form name="autodealer-form" method="post" action="<?php bloginfo('template_directory') ?>/form_send.php">
					<div class="city">
						<select name="city_form" id="city-form" required>
							<option value="city_form_1" disabled selected>Выберете город</option>
							<option value="Харьков">Харьков</option>
							<option value="Николаев">Николаев</option>
							<option value="Днепр">Днепр</option>
							<option value="Одесса">Одесса</option>
							<option value="Запорожье">Запорожье</option>
							<option value="Полтава">Полтава</option>
							<option value="Сумы">Сумы</option>
							<option value="Винница">Винница</option>
							<option value="Херсон">Херсон</option>
							<option value="Ровно">Ровно</option>
							<option value="Львов">Львов</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="info">
						<?php
						$args = array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'navbar-menu',
							'container_id'    => '',
							'menu_class'      => 'navbar-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						);
						wp_nav_menu( $args ); ?>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
			</div>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-6">
					<div class="logo">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="schedule">
						<p><span>Режим работы:</span></p>
						<p>Без выходных с 8:00 до 20:00</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="social">
						<a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="phones">
						<a href="tel:+380954839648"><img src="<?php bloginfo('template_directory') ?>/img/vodafon.png" alt="vodafon"> + 38 (095) 483 96 48</a><br>
						<a href="tel:+380933502688"><img src="<?php bloginfo('template_directory') ?>/img/lifecell.png" alt="lifecell"> + 38 (093) 350 26 88</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-zero">
			<div class="col-lg-12 col-zero">
				<div class="button-click">
					<i class="fa fa-bars nav-menu-click" aria-hidden="true"></i>
				</div>
				<div class="nav-menu">
					<ul>
						<li><a href="/legkovye/"><img src="<?php bloginfo('template_directory') ?>/img/legkovie-main.png" alt="legkovie">Легковые</a></li>
						<li><a href="/gruzovye/"><img src="<?php bloginfo('template_directory') ?>/img/gruz-main.png" alt="gruz">Грузовые</a></li>
						<li><a href="/bitye-i-neispravnye/"><img src="<?php bloginfo('template_directory') ?>/img/bitie-main.png" alt="bitie">Битые и неисправные</a></li>
						<li><a href="/kreditnye/"><img src="<?php bloginfo('template_directory') ?>/img/credit-main.png" alt="credit">Кредитные</a></li>
						<li><a href="/s-probegom/"><img src="<?php bloginfo('template_directory') ?>/img/probeg-main.png" alt="probeg">С пробегом (б/у)</a></li>
					</ul>
				</div>
			</div>
		</div>