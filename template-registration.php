<?php
/**
 * Template Name: Registration/Inscription Page
 * Template for displaying registration page with map and programs
 */
global $wp_query;
if ( $wp_query->is_singular() && $wp_query->get_queried_object() ) {
    $GLOBALS['post'] = $wp_query->get_queried_object();
    setup_postdata( $GLOBALS['post'] );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" 
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" 
          crossorigin=""/>
    
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
        .hero-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .region-button {
            min-width: 180px;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .region-button.active {
            background-color: #dc3545 !important;
            color: white !important;
        }
        .region-button:not(.active) {
            background-color: white;
            color: #333;
        }
        .region-button:not(.active):hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        /* Map Styles */
        #programMap {
            height: 500px;
            width: 100%;
            border: 2px solid #ddd;
            border-radius: 8px;
            z-index: 1;
        }
        .map-legend {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #ddd;
            margin-top: 15px;
        }
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .legend-dot.soccer { background-color: #dc3545; }
        .legend-dot.dek-hockey { background-color: #0d6efd; }
        .legend-dot.multi-sport { background-color: #ffc107; }
        
        /* Program Card Styles */
        .program-card {
            background: white;
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .program-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .sport-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .sport-badge.soccer { background-color: #dc3545; color: white; }
        .sport-badge.dek-hockey { background-color: #0d6efd; color: white; }
        .sport-badge.multi-sport { background-color: #ffc107; color: #333; }
        
        .program-header {
            border-left: 4px solid #dc3545;
            padding-left: 15px;
            margin-bottom: 15px;
        }
        .program-details {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        .program-details div {
            margin-bottom: 5px;
        }
        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #ddd;
        }
        .filter-section select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.95rem;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-wireframe p-0">
    <?php 
    $hero_image = rwmb_meta( 'registration_hero_image' );
    $hero_title = rwmb_meta( 'registration_hero_title' );
    $hero_subtitle = rwmb_meta( 'registration_hero_subtitle' );
    $hero_image_id = sevensports_first_image_id( $hero_image );
    
    if ( $hero_image_id ):
        $hero_image_url = wp_get_attachment_image_url( $hero_image_id, 'full' );
    ?>
        <div class="hero-image-overlay" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
            <div class="hero-overlay">
                <div class="container text-center text-white">
                    <?php if ( $hero_title ): ?>
                        <h1 class="display-2 fw-bold mb-3" style="font-size: 4rem;"><?php echo esc_html($hero_title); ?></h1>
                    <?php endif; ?>
                    
                    <?php if ( $hero_subtitle ): ?>
                        <p class="fs-4 mb-5"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                    
                    <!-- Region Buttons -->
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <?php 
                        for ($i = 1; $i <= 4; $i++):
                            $region_name = rwmb_meta("region_{$i}_name");
                            $region_link = rwmb_meta("region_{$i}_link");
                            if ( $region_name ):
                        ?>
                            <button class="region-button <?php echo ($i === 1) ? 'active' : ''; ?>" 
                                    onclick="<?php echo $region_link ? "window.location.href='" . esc_url($region_link) . "'" : "filterByRegion('" . esc_js($region_name) . "')"; ?>">
                                <?php echo esc_html($region_name); ?>
                            </button>
                        <?php 
                            endif;
                        endfor; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container text-center py-5">
            <?php if ( $hero_title ): ?>
                <h1 class="display-2 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
            <?php else: ?>
                <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">REGISTRATION HERO TITLE</div>
            <?php endif; ?>
            
            <?php if ( $hero_subtitle ): ?>
                <p class="fs-4 mb-5"><?php echo esc_html($hero_subtitle); ?></p>
            <?php endif; ?>
            
            <!-- Region Buttons (Wireframe) -->
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <?php for ($i = 1; $i <= 4; $i++): 
                    $region_name = rwmb_meta("region_{$i}_name");
                    if ( $region_name ):
                ?>
                    <button class="region-button <?php echo ($i === 1) ? 'active' : ''; ?>">
                        <?php echo esc_html($region_name); ?>
                    </button>
                <?php 
                    else:
                ?>
                    <div class="wireframe-box" style="min-width: 180px;">REGION <?php echo $i; ?></div>
                <?php 
                    endif;
                endfor; 
                ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<!-- Filter Section -->
<section class="section-wireframe">
    <div class="container">
        <div class="filter-section">
            <div class="row g-3 align-items-end">
                <div class="col-md">
                    <label class="form-label fw-bold small">City/Region</label>
                    <select class="form-select">
                        <option>All Areas</option>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Age Group</label>
                    <select class="form-select">
                        <option>All Ages</option>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Sport</label>
                    <select class="form-select">
                        <option>All Sports</option>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Season</label>
                    <select class="form-select">
                        <option>All Seasons</option>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Max Distance</label>
                    <select class="form-select">
                        <option>Any Distance</option>
                    </select>
                </div>
                <div class="col-md-auto">
                    <button class="btn btn-danger btn-lg px-4" style="min-width: 150px;">Rechercher</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map and Programs Section -->
<section class="section-wireframe">
    <div class="container">
        <div class="row g-4">
            <!-- Map Column -->
            <div class="col-lg-5">
                <div id="programMap"></div>
                
                <!-- Map Legend -->
                <div class="map-legend">
                    <h6 class="fw-bold mb-3">LEGEND</h6>
                    <div class="legend-item">
                        <span class="legend-dot soccer"></span>
                        <span>Soccer</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot dek-hockey"></span>
                        <span>Dek Hockey</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot multi-sport"></span>
                        <span>Multi-Sport</span>
                    </div>
                    <div class="mt-3 small text-muted">
                        <strong>* Multiple Programs?</strong><br>
                        Some locations (like Pierrefonds) offer multiple program types at the same facility. Click on the location marker or result card to see all programs available at that site.
                    </div>
                </div>
            </div>
            
            <!-- Programs List Column -->
            <div class="col-lg-7">
                <?php 
                $reg_page_id = get_queried_object_id();
                if ( ! $reg_page_id && function_exists( 'is_singular' ) && is_singular( 'page' ) ) {
                    global $wp_query;
                    $reg_page_id = $wp_query->get_queried_object_id();
                }
                if ( ! $reg_page_id ) {
                    $reg_page = get_page_by_path( 'registration' );
                    if ( $reg_page ) {
                        $reg_page_id = $reg_page->ID;
                    }
                }
                if ( ! $reg_page_id ) {
                    $pages = get_pages( array( 'meta_key' => '_wp_page_template', 'meta_value' => 'template-registration.php', 'number' => 1 ) );
                    if ( ! empty( $pages ) ) {
                        $reg_page_id = $pages[0]->ID;
                    }
                }
                if ( ! $reg_page_id ) {
                    $reg_page_id = get_the_ID();
                }
                $programs_title = $reg_page_id ? ( function_exists( 'rwmb_meta' ) ? rwmb_meta( 'programs_list_title', array(), $reg_page_id ) : '' ) : '';
                if ( empty( $programs_title ) && $reg_page_id ) {
                    $programs_title = get_post_meta( $reg_page_id, 'programs_list_title', true );
                }
                $programs = array();
                $program_posts = get_posts( array(
                    'post_type'      => 'program',
                    'numberposts'    => -1,
                    'orderby'        => 'menu_order title',
                    'order'          => 'ASC',
                    'post_status'    => 'publish',
                ) );
                foreach ( $program_posts as $p ) {
                    $programs[] = array(
                        'program_name'       => $p->post_title,
                        'sport_type'         => trim( (string) get_post_meta( $p->ID, 'sport_type', true ) ) ?: 'soccer',
                        'location_address'   => get_post_meta( $p->ID, 'location_address', true ),
                        'location_latitude'  => get_post_meta( $p->ID, 'location_latitude', true ),
                        'location_longitude' => get_post_meta( $p->ID, 'location_longitude', true ),
                        'distance'           => get_post_meta( $p->ID, 'distance', true ),
                        'age_range'          => get_post_meta( $p->ID, 'age_range', true ),
                        'program_type'       => get_post_meta( $p->ID, 'program_type', true ),
                        'schedule'           => get_post_meta( $p->ID, 'schedule', true ),
                        'price'              => get_post_meta( $p->ID, 'price', true ),
                        'inscription_link'   => get_post_meta( $p->ID, 'inscription_link', true ),
                        'trial_link'         => get_post_meta( $p->ID, 'trial_link', true ),
                    );
                }
                $program_count = count( $programs );
                ?>
                
                <div class="mb-4">
                    <h2 class="h3 fw-bold mb-1"><?php echo $programs_title ? esc_html($programs_title) : 'Available Programs'; ?></h2>
                    <p class="text-danger fw-semibold"><?php echo $program_count; ?> programs found</p>
                </div>
                
                <?php 
                if ( !empty($programs) && is_array($programs) ):
                    foreach ( $programs as $program ):
                        $sport_type = isset($program['sport_type']) ? $program['sport_type'] : 'soccer';
                        $sport_label = '';
                        $sport_class = '';
                        
                        switch($sport_type) {
                            case 'soccer':
                                $sport_label = 'Soccer';
                                $sport_class = 'soccer';
                                break;
                            case 'dek_hockey':
                                $sport_label = 'Dek Hockey';
                                $sport_class = 'dek-hockey';
                                break;
                            case 'multi_sport':
                                $sport_label = 'Multi-Sport';
                                $sport_class = 'multi-sport';
                                break;
                        }
                ?>
                    <div class="program-card">
                        <span class="sport-badge <?php echo $sport_class; ?>"><?php echo esc_html($sport_label); ?></span>
                        
                        <div class="program-header">
                            <h3 class="h5 fw-bold mb-2">
                                <?php echo isset($program['program_name']) ? esc_html($program['program_name']) : 'Program Name'; ?>
                            </h3>
                        </div>
                        
                        <div class="program-details">
                            <?php if ( isset($program['location_address']) && $program['location_address'] ): ?>
                                <div>
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 5px;">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <?php echo esc_html($program['location_address']); ?>
                                    <?php if ( isset($program['distance']) && $program['distance'] ): ?>
                                        • <?php echo esc_html($program['distance']); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( isset($program['age_range']) && $program['age_range'] ): ?>
                                <div><?php echo esc_html($program['age_range']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ( isset($program['program_type']) && $program['program_type'] ): ?>
                                <div><?php echo esc_html($program['program_type']); ?></div>
                            <?php endif; ?>
                            
                            <?php if ( isset($program['schedule']) && $program['schedule'] ): ?>
                                <div><?php echo esc_html($program['schedule']); ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if ( isset($program['price']) && $program['price'] ): ?>
                            <div class="mb-3">
                                <strong class="text-danger"><?php echo esc_html($program['price']); ?></strong>
                            </div>
                        <?php endif; ?>
                        
                        <div class="d-flex gap-2">
                            <?php if ( isset($program['inscription_link']) && $program['inscription_link'] ): ?>
                                <a href="<?php echo esc_url($program['inscription_link']); ?>" 
                                   class="btn btn-danger flex-grow-1">
                                    Inscription
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( isset($program['trial_link']) && $program['trial_link'] ): ?>
                                <a href="<?php echo esc_url($program['trial_link']); ?>" 
                                   class="btn btn-danger flex-grow-1">
                                    Essais gratuits
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php 
                    endforeach;
                else:
                ?>
                    <div class="wireframe-box">
                        ADD PROGRAMS IN WORDPRESS ADMIN<br>
                        (Programs & Locations Section)
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA Section -->
<section class="section-wireframe" style="background-color: #000; color: #fff;">
    <div class="container text-center">
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <?php 
            $cta1_text = rwmb_meta( 'registration_cta_button_1_text' );
            $cta1_link = rwmb_meta( 'registration_cta_button_1_link' );
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
            $cta2_text = rwmb_meta( 'registration_cta_button_2_text' );
            $cta2_link = rwmb_meta( 'registration_cta_button_2_link' );
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

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" 
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" 
        crossorigin=""></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Map Settings
    <?php 
    $map_lat = rwmb_meta( 'map_center_latitude' ) ?: '45.5017';
    $map_lng = rwmb_meta( 'map_center_longitude' ) ?: '-73.5673';
    $map_zoom = rwmb_meta( 'map_zoom_level' ) ?: 11;
    ?>
    
    // Initialize map
    var map = L.map('programMap').setView([<?php echo $map_lat; ?>, <?php echo $map_lng; ?>], <?php echo $map_zoom; ?>);
    
    // Add tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    // Custom marker icons for different sports
    var soccerIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background-color: #dc3545; width: 25px; height: 25px; border-radius: 50%; border: 3px solid white;"></div>',
        iconSize: [25, 25],
        iconAnchor: [12, 12]
    });
    
    var dekHockeyIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background-color: #0d6efd; width: 25px; height: 25px; border-radius: 50%; border: 3px solid white;"></div>',
        iconSize: [25, 25],
        iconAnchor: [12, 12]
    });
    
    var multiSportIcon = L.divIcon({
        className: 'custom-marker',
        html: '<div style="background-color: #ffc107; width: 25px; height: 25px; border-radius: 50%; border: 3px solid white;"></div>',
        iconSize: [25, 25],
        iconAnchor: [12, 12]
    });
    
    // Add markers for each program
    <?php 
    if ( !empty($programs) && is_array($programs) ):
        foreach ( $programs as $program ):
            if ( isset($program['location_latitude']) && isset($program['location_longitude']) 
                 && $program['location_latitude'] && $program['location_longitude'] ):
                $lat = $program['location_latitude'];
                $lng = $program['location_longitude'];
                $name = isset($program['program_name']) ? $program['program_name'] : 'Program';
                $sport = isset($program['sport_type']) ? $program['sport_type'] : 'soccer';
    ?>
    var marker = L.marker([<?php echo $lat; ?>, <?php echo $lng; ?>], {
        icon: <?php 
        switch($sport) {
            case 'dek_hockey': echo 'dekHockeyIcon'; break;
            case 'multi_sport': echo 'multiSportIcon'; break;
            default: echo 'soccerIcon';
        }
        ?>
    }).addTo(map);
    marker.bindPopup('<strong><?php echo esc_js($name); ?></strong>');
    <?php 
            endif;
        endforeach;
    endif;
    ?>
});

function filterByRegion(regionName) {
    console.log('Filtering by region:', regionName);
    // Add your filtering logic here
}
</script>

</body>
</html>