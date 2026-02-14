<?php
/**
 * Home Page Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-black text-white'); ?>>

<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="text-center">
        <h1 class="text-6xl font-bold mb-4">Welcome to 7Sports</h1>
        <p class="text-2xl mb-8">Your Ultimate Sports Experience</p>
        <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100">Get Started</a>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>