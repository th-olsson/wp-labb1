<?php get_header() ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">

					<?php
					if (have_posts()) :
						while (have_posts()) : the_post(); ?>
							<div class="text">
								<h1><?php the_title() ?></h1>
								<p><?php the_content() ?></p>
							</div>
					<?php
						endwhile;
					endif; ?>

				</div>
				<aside id="secondary" class="col-xs-12 col-md-3">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'subpages',
							'menu_class' => 'side-menu',
							'theme_location' => 'subpages',
						)
					); ?>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>