<footer>
	<?php wp_footer(); ?>
	<div class="row row-zero">
		<div class="col-lg-12 col-zero">
			<div class="button-click">
				<i class="fa fa-bars nav-menu-footer-click" aria-hidden="true"></i>
			</div>	
			<div class="nav-menu-footer">
				<ul>
					<li><a href="/legkovye/"><img src="<?php bloginfo('template_directory') ?>/img/legkovie.png" alt="legkovie">Легковые</a></li>
					<li><a href="/gruzovye/"><img src="<?php bloginfo('template_directory') ?>/img/gruz.png" alt="gruz">Грузовые</a></li>
					<li><a href="/bitye-i-neispravnye/"><img src="<?php bloginfo('template_directory') ?>/img/bitie.png" alt="bitie">Битые и неисправные</a></li>
					<li><a href="/kreditnye/"><img src="<?php bloginfo('template_directory') ?>/img/credit.png" alt="credit">Кредитные</a></li>
					<li><a href="/s-probegom/"><img src="<?php bloginfo('template_directory') ?>/img/probeg.png" alt="probeg">С пробегом (б/у)</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1 col-md-offset-1 col-lg-5 col-md-5 col-sm-4 footer-height">
					<div class="info">
						<ul>
							<li><a href="/dopolnitelnie-uslugi/">Дополнительные услуги</a></li>
							<li><a href="/o-nas/">О нас</a></li>
							<li><a href="/zakonodatelnie-akti/">Законодательные акты</a></li>
						</ul>
					</div>
					<div class="info info-2">
						<ul>
							<li><a href="/blog/">Блог</a></li>
							<li><a href="/kontakti/">Контакты</a></li>
						</ul>
					</div>
					<div class="info-991">
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
				<div class="col-lg-3 col-md-3 col-sm-4 footer-height">
					<div class="social">
						<a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 footer-height">
					<div class="phones">
						<a href="tel:+380502302323"><img src="<?php bloginfo('template_directory') ?>/img/vodafon.png" alt="vodafon"> + 38 (050) 230 23 23</a><br>
						<a href="tel:+380962302323"><img src="<?php bloginfo('template_directory') ?>/img/kyivstar.png" alt="kyivstar"> + 38 (096) 230 23 23</a><br>
						<a href="tel:+380932302323"><img src="<?php bloginfo('template_directory') ?>/img/lifecell.png" alt="lifecell"> + 38 (093) 230 23 23</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/dropdown-menu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/avto-slider.js"></script>
</body>
</html>