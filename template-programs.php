<?php
/**
 * Template Name: Programs Page
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        body { 
            font-family: Arial, sans-serif;
            background: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .section-wireframe {
            border: 3px solid #ccc;
            background: #fafafa;
            padding: 40px 20px;
            margin: 0;
        }
        .wireframe-box {
            border: 2px dashed #999;
            background: #f5f5f5;
            padding: 20px;
            margin: 10px 0;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 14px;
            text-align: center;
        }
        
        /* Category Tab Styles */
        .category-tab {
            cursor: pointer;
            transition: all 0.3s;
        }
        .category-tab.active {
            background-color: #000 !important;
            color: #fff !important;
        }
        .program-content {
            display: none;
        }
        .program-content.active {
            display: block;
        }
        
        /* Age Group Tab Styles */
        .age-group-tab {
            cursor: pointer;
            transition: all 0.3s;
        }
        .age-group-tab.active {
            background-color: #000 !important;
            color: #fff !important;
        }
        .age-group-content {
            display: none;
        }
        .age-group-content.active {
            display: block;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-wireframe text-center py-5" style="min-height: 400px;">
    <div class="container">
        <?php 
        $hero_image_id = sevensports_first_image_id( rwmb_meta( 'programs_hero_image' ) );
        if ( $hero_image_id ):
            $hero_image_url = wp_get_attachment_image_url( $hero_image_id, 'full' );
        ?>
            <div class="mb-4">
                <img src="<?php echo esc_url($hero_image_url); ?>" alt="Hero" 
                     class="img-fluid" style="max-height: 300px; width: 100%; object-fit: cover;">
            </div>
        <?php endif; ?>
        
        <?php $hero_title = rwmb_meta( 'programs_hero_title' ); ?>
        <?php if ( $hero_title ): ?>
            <h1 class="display-3 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">HERO TITLE</div>
        <?php endif; ?>
        
        <?php $hero_subtitle = rwmb_meta( 'programs_hero_subtitle' ); ?>
        <?php if ( $hero_subtitle ): ?>
            <p class="fs-5"><?php echo esc_html($hero_subtitle); ?></p>
        <?php endif; ?>
        
        <div class="mt-4">
            <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
            </svg>
        </div>
    </div>
</section>

<!-- Category Navigation Buttons (TABS) -->
<section class="section-wireframe">
    <div class="container">
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <?php 
            for ($i = 1; $i <= 4; $i++):
                $btn_text = rwmb_meta("cat_button_{$i}_text");
                if ( $btn_text ):
            ?>
                <button class="btn btn-outline-dark btn-lg category-tab <?php echo ($i === 1) ? 'active' : ''; ?>" 
                        data-target="program-<?php echo $i; ?>"
                        style="min-width: 150px;">
                    <?php echo esc_html($btn_text); ?>
                </button>
            <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>

<!-- Featured Programs Content (ONE PER CATEGORY) -->
<section class="section-wireframe">
    <div class="container">
        <?php 
        // Loop through 4 possible programs (one for each category button)
        for ($i = 1; $i <= 4; $i++):
            $program_icon = rwmb_meta("featured_program_{$i}_icon");
            $program_title = rwmb_meta("featured_program_{$i}_title");
            $program_image = rwmb_meta("featured_program_{$i}_image");
            $program_desc = rwmb_meta("featured_program_{$i}_description");
            
            // Only show if at least title exists
            if ( $program_title ):
                $icon_id = sevensports_first_image_id( $program_icon );
                $image_id = sevensports_first_image_id( $program_image );
                $icon_url = $icon_id ? wp_get_attachment_image_url( $icon_id, 'thumbnail' ) : '';
                $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'large' ) : '';
        ?>
            <div class="program-content <?php echo ($i === 1) ? 'active' : ''; ?>" id="program-<?php echo $i; ?>">
                <!-- Icon & Title -->
                <div class="text-center mb-5">
                    <?php if ( $icon_url ): ?>
                        <img src="<?php echo esc_url($icon_url); ?>" alt="Icon" 
                             class="mb-3" style="max-height: 80px;">
                    <?php endif; ?>
                    
                    <h2 class="display-5 fw-bold"><?php echo esc_html($program_title); ?></h2>
                </div>
                
                <!-- Image on top, Description below -->
                <div class="mb-4">
                    <?php if ( $image_url ): ?>
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="<?php echo esc_attr($program_title); ?>" 
                             class="img-fluid rounded"
                             style="max-height: 400px; width: 100%; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 400px;">PROGRAM IMAGE</div>
                    <?php endif; ?>
                </div>
                
                <div>
                    <?php if ( $program_desc ): ?>
                        <p class="fs-6"><?php echo nl2br(esc_html($program_desc)); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box">PROGRAM DESCRIPTION</div>
                    <?php endif; ?>
                </div>
            </div>
        <?php 
            endif;
        endfor; 
        ?>
    </div>
</section>

<!-- Age Groups Section with Tabs -->
<section class="section-wireframe">
    <div class="container">
        <!-- Age Group Tabs -->
        <div class="d-flex flex-wrap gap-3 justify-content-center mb-4">
            <?php for ($i = 1; $i <= 3; $i++): 
                $age_title = rwmb_meta("age_group_{$i}_title");
                if ( $age_title ):
            ?>
                <button class="btn btn-outline-dark btn-lg age-group-tab <?php echo ($i === 1) ? 'active' : ''; ?>" 
                        data-target="age-group-<?php echo $i; ?>"
                        style="min-width: 180px;">
                    <?php echo esc_html($age_title); ?>
                </button>
            <?php 
                endif;
            endfor; 
            ?>
        </div>
        
        <!-- Age Group Content -->
        <?php for ($i = 1; $i <= 3; $i++): 
            $age_content = rwmb_meta("age_group_{$i}_content");
            if ( $age_content ):
        ?>
            <div class="age-group-content <?php echo ($i === 1) ? 'active' : ''; ?>" 
                 id="age-group-<?php echo $i; ?>">
                <div class="p-5 bg-dark text-white rounded">
                    <?php echo wpautop($age_content); ?>
                </div>
            </div>
        <?php 
            endif;
        endfor; 
        ?>
    </div>
</section>

<!-- Registration CTA -->
<section class="section-wireframe">
    <div class="container text-center">
        <?php 
        $reg_btn_text = rwmb_meta( 'registration_button_text' );
        $reg_btn_link = rwmb_meta( 'registration_button_link' );
        if ( $reg_btn_text && $reg_btn_link ):
        ?>
            <a href="<?php echo esc_url($reg_btn_link); ?>" 
               class="btn btn-danger btn-lg px-5 py-3" 
               style="min-width: 300px; font-size: 1.5rem;">
                <?php echo esc_html($reg_btn_text); ?>
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16" style="margin-left: 10px;">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </a>
        <?php else: ?>
            <div class="wireframe-box mx-auto" style="max-width: 400px;">INSCRIPTION BUTTON</div>
        <?php endif; ?>
    </div>
</section>

<!-- Additional Services Section -->
<section class="section-wireframe">
    <div class="container">
        <?php $services_title = rwmb_meta( 'services_section_title' ); ?>
        <?php if ( $services_title ): ?>
            <h2 class="display-6 fw-bold text-center mb-3"><?php echo esc_html($services_title); ?></h2>
        <?php endif; ?>
        
        <?php $services_desc = rwmb_meta( 'services_description' ); ?>
        <?php if ( $services_desc ): ?>
            <p class="text-center mb-5"><?php echo esc_html($services_desc); ?></p>
        <?php endif; ?>
        
        <div class="row g-4 mx-auto" style="max-width: 720px;">
            <?php 
            for ($i = 1; $i <= 5; $i++):
                $service_title = rwmb_meta("service_{$i}_title");
                if ( $service_title ):
                    $service_icon = rwmb_meta("service_{$i}_icon");
                    $service_desc = rwmb_meta("service_{$i}_description");
                    $icon_id = sevensports_first_image_id( $service_icon );
                    $icon_url = $icon_id ? wp_get_attachment_image_url( $icon_id, 'thumbnail' ) : '';
            ?>
                <div class="col-12">
                    <div class="border border-2 rounded p-4 bg-white h-100">
                        <div class="d-flex align-items-start gap-3">
                            <?php if ( $icon_url ): ?>
                                <img src="<?php echo esc_url($icon_url); ?>" 
                                     alt="<?php echo esc_attr($service_title); ?>" 
                                     style="width: 50px; height: 50px; object-fit: contain;">
                            <?php else: ?>
                                <div class="wireframe-box" style="width: 50px; height: 50px; min-height: auto;">Image</div>
                            <?php endif; ?>
                            
                            <div class="flex-grow-1">
                                <h5 class="fw-bold mb-2"><?php echo esc_html($service_title); ?></h5>
                                <?php if ( $service_desc ): ?>
                                    <p class="mb-0 small"><?php echo esc_html($service_desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>

<!-- Submission CTA -->
<section class="section-wireframe">
    <div class="container text-center">
        <?php 
        $sub_btn_text = rwmb_meta( 'submission_button_text' );
        $sub_btn_link = rwmb_meta( 'submission_button_link' );
        if ( $sub_btn_text && $sub_btn_link ):
        ?>
            <a href="<?php echo esc_url($sub_btn_link); ?>" 
               class="btn btn-danger btn-lg px-5 py-3" 
               style="min-width: 300px; font-size: 1.5rem;">
                <?php echo esc_html($sub_btn_text); ?>
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16" style="margin-left: 10px;">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </a>
        <?php else: ?>
            <div class="wireframe-box mx-auto" style="max-width: 400px;">SOUMISSION BUTTON</div>
        <?php endif; ?>
    </div>
</section>

<!-- Bottom CTA Buttons -->
<section class="section-wireframe" style="background-color: #000; color: #fff;">
    <div class="container text-center">
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <?php 
            $cta1_text = rwmb_meta( 'programs_cta_button_1_text' );
            $cta1_link = rwmb_meta( 'programs_cta_button_1_link' );
            if ( $cta1_text && $cta1_link ):
            ?>
                <a href="<?php echo esc_url($cta1_link); ?>" 
                   class="btn btn-danger btn-lg px-5 py-3" style="min-width: 250px;">
                    <?php echo esc_html($cta1_text); ?>
                </a>
            <?php else: ?>
                <div class="wireframe-box" style="min-width: 250px; background: #333; border-color: #666;">BUTTON 1</div>
            <?php endif; ?>
            
            <?php 
            $cta2_text = rwmb_meta( 'programs_cta_button_2_text' );
            $cta2_link = rwmb_meta( 'programs_cta_button_2_link' );
            if ( $cta2_text && $cta2_link ):
            ?>
                <a href="<?php echo esc_url($cta2_link); ?>" 
                   class="btn btn-outline-light btn-lg px-5 py-3" style="min-width: 250px;">
                    <?php echo esc_html($cta2_text); ?>
                </a>
            <?php else: ?>
                <div class="wireframe-box" style="min-width: 250px; background: #333; border-color: #666;">BUTTON 2</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category Tabs functionality (Program switcher)
    const categoryTabs = document.querySelectorAll('.category-tab');
    const programContents = document.querySelectorAll('.program-content');
    
    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            
            // Remove active class from all category tabs and program contents
            categoryTabs.forEach(t => t.classList.remove('active'));
            programContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding program
            this.classList.add('active');
            document.getElementById(target).classList.add('active');
        });
    });
    
    // Age Group Tabs functionality
    const ageTabs = document.querySelectorAll('.age-group-tab');
    const ageContents = document.querySelectorAll('.age-group-content');
    
    ageTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            
            // Remove active class from all age tabs and contents
            ageTabs.forEach(t => t.classList.remove('active'));
            ageContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(target).classList.add('active');
        });
    });
});
</script>

</body>
</html>