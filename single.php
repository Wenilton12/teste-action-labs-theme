<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="hero-internal" style="--hero-bg: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
    </section>

    <main class="container">
        <article class="single-post-card">
            
            <div class="post-featured-image">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <div class="post-content-padding">
                <div class="post-category">
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<span class="cat-pill">' . esc_html( $categories[0]->name ) . '</span>';
                    }
                    ?>
                </div>

                <div class="post-meta">
                    <span class="post-date">
                        <img class="meta-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.png" alt="Ícone de calendário">
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="post-tags">
                        <img class="meta-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/ticket.png" alt="Ícone de etiqueta">
                        <?php the_tags('', ', '); ?>
                    </span>
                </div>

                <h1 class="post-title-internal"><?php the_title(); ?></h1>
                
                <p class="post-author">Autor: <?php the_author(); ?></p>

                <div class="post-body-text">
                    <?php the_content(); ?>
                </div>
            </div>

        </article>
    </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>