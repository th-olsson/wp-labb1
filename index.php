<?php get_header() ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1><?php wp_title('') ?></h1>

					<?php
					if (have_posts()) :
						while (have_posts()) : the_post(); ?>
							<article>
								<?php the_post_thumbnail() ?>
								<h2 class="title">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date() ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link() ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <?php the_category(', ') ?>
									</li>
								</ul>
								<p><?php the_excerpt() ?></p>
							</article>
					<?php
						endwhile;
						the_posts_pagination();
					endif; ?>

				</div>

				<?php dynamic_sidebar('sidebar-menu') ?>

			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>