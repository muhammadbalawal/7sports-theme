<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<main class="container mx-auto px-4 py-8">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article class="mb-8">
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>No content found.</p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>