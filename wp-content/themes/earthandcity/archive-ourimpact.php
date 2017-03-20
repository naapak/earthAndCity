<h1>i am in archive ourimpact</h1>


<?php while (have_posts() ) : (the_post());?>
    <article <?php post_class(); ?>>
        <header>
            <?php ?>
            <h2 class="entry-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php endwhile?>
