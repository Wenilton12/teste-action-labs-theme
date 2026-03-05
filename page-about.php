<?php get_header(); ?>

<main class="container page-main">
    <?php while(have_posts()) : the_post(); ?>
        <section class="page-content">
            <h1 class="page-title">Sobre nós</h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>