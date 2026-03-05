<?php get_header(); ?>
<?php 
// Pega a URL da imagem destacada da página atual
$hero_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
?>

<section class="hero" style="--hero-bg: url('<?php echo $hero_url; ?>');">
    <div class="container">
        <h1 class="hero-title">Portal do Cliente</h1>
    </div>
</section>

<main class="container">
    <div class="post-grid">
        
        <?php
        $args = array('post_type' => 'post', 'posts_per_page' => 6);
        $query = new WP_Query($args);
        
        if($query->have_posts()):
            while($query->have_posts()): $query->the_post(); ?>
                
                <article class="post-card">
                    
                    <div class="thumb">
                        <?php the_post_thumbnail('medium_large'); ?>
                        
                        <span class="category-badge">
                            <?php $cat = get_the_category(); echo $cat[0]->name; ?>
                        </span>
                    </div>
                    
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php the_title(); ?>
                        </h2>
                        <div class="card-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="card-link">
                            Leia Mais »
                        </a>
                    </div>

                </article>

            <?php endwhile; wp_reset_postdata();
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>