<?php
/**
 * Default Page Template
 * This is the default template for regular pages
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<main class="container my-5">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
        <article class="mx-auto" style="max-width: 800px;">
            <h1 class="display-4 fw-bold mb-4"><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()): ?>
                <div class="mb-4">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                </div>
            <?php endif; ?>
            
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php
        endwhile;
    else :
    ?>
        <div class="text-center py-5">
            <h2>No content found</h2>
            <p>This page doesn't have any content yet.</p>
        </div>
    <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>

</body>
</html>