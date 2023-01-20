<?php
get_header(); ?>
<?php $pageIntro = get_field('page_intro'); ?>
    <div class="blog-page">
        <div class="page-intro">
            <img src="<?php echo $pageIntro['image']; ?>" alt="">
            <div class="container">
                <div class="page-intro__content">
					<?php if (!empty($pageIntro['title'])): ?>
                        <h2 class="page-intro__title"><?php echo $pageIntro['title']; ?></h2>
					<?php else: ?>
                        <h2 class="page-intro__title"><?php the_title(); ?></h2>
					<?php endif; ?>

                    <div class="page-intro__text">
						<?php echo $pageIntro['text']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="single-blog">
                <div class="container__big">
                    <div class="single-blog__content">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
