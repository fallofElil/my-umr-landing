<?php get_header(); ?>

<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3><?php the_title(); ?></h3>
    <h4>Выложено в <?php the_time('F jS, Y') ?></h4>
    <p><?php the_content(__('(more...)')); ?></p>
</div>

<?php endwhile; else: ?>
<p><?php _e('Извините, нет совпадений по статьям по заданным критериям.'); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>