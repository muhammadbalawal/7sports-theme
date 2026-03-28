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
    
    <link href="https://fonts.cdnfonts.com/css/more-sugar" rel="stylesheet">
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
            background: #fafafa;
            padding: 24px 20px;
            margin: 0;
        }
        .section-wireframe.p-0 {
            min-height: 600px;
        }
        .registration-hero-subtitle {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
        }
        .registration-hero-title {
            margin-top: 5rem;
            font-family: 'More Sugar', cursive;
            color: #fff;
            -webkit-text-stroke: 16px #000;
            paint-order: stroke fill;
            font-size: 8rem !important;
            letter-spacing: -0.05em;
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
            min-height: 700px;
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
        .region-buttons-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 60px;
        }
        @media (max-width: 768px) {
            .region-buttons-wrap {
                gap: 12px;
                padding: 0 16px;
            }
            .region-button {
                min-width: 0;
                width: calc(50% - 6px);
                padding: 12px 16px;
                font-size: 0.95rem;
            }
            .registration-hero-title {
                font-size: 4rem !important;
                -webkit-text-stroke: 8px #000;
                margin-top: 2rem;
            }
        }
        .region-button {
            min-width: 240px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 14px;
            cursor: default;
            transition: none;
            margin: 0;
            background-color: #fff !important;
            color: #000 !important;
            pointer-events: none;
        }
        .region-button.active {
            background-color: #fff !important;
            color: #000 !important;
        }
        .region-button:not(.active) {
            background-color: #fff !important;
            color: #000 !important;
        }
        .region-button:hover,
        .region-button:not(.active):hover {
            background-color: #fff !important;
            color: #000 !important;
            transform: none;
            box-shadow: none;
        }
        .cta-buttons-wrap {
            gap: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
            font-size: 1.3rem;
        }
        .cta-buttons-wrap .region-button {
            padding: 18px 120px !important;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
            font-size: 1.3rem;
            min-width: 0;
        }
        @media (max-width: 768px) {
            .cta-buttons-wrap {
                gap: 16px;
                flex-direction: column;
                align-items: center;
            }
            .cta-buttons-wrap .btn {
                padding: 14px 32px !important;
                font-size: 1.1rem !important;
                width: 100%;
                max-width: 320px;
            }
        }
        .cta-section-dark .region-button:not(.active) {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }
        .cta-section-dark .region-button:not(.active):hover {
            background: #fff;
            color: #000;
            border-color: #fff;
        }
        .cta-btn-white,
        .cta-section-dark .cta-btn-white {
            background: #fff !important;
            color: #000 !important;
            border: none !important;
        }
        .cta-btn-white:hover,
        .cta-section-dark .cta-btn-white:hover {
            background: #e6e6e6 !important;
            color: #000 !important;
        }
        .cta-section-dark {
            margin-top: 48px;
            padding-top: 120px;
            padding-bottom: 140px;
            position: relative;
        }
        .cta-section-dark .cta-wave {
            position: absolute;
            top: -60px;
            left: 0;
            width: 100%;
            line-height: 0;
            overflow: visible;
            z-index: 1;
        }
        .cta-section-dark .cta-wave svg {
            width: 100%;
            height: 60px;
            display: block;
            vertical-align: top;
        }
        .cta-section-dark .cta-wave path {
            fill: #000;
        }
        .cta-section-dark .cta-wave {
            background: #fafafa;
        }
        
        /* Map Styles */
        .map-wrapper {
            position: relative;
        }
        #programMap {
            height: 500px;
            width: 100%;
            border: 2px solid #ddd;
            border-radius: 8px;
            z-index: 1;
        }
        .map-legend {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
            background: white;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 0.75rem;
            max-width: 200px;
        }
        .map-legend-note-card {
            position: relative;
            margin-top: 10px;
        }
        .map-legend-note-back {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            background: #d62829;
            border-radius: 6px;
            z-index: 0;
        }
        .map-legend-note-front {
            position: relative;
            z-index: 1;
            margin-left: 8px;
            padding: 8px 10px;
            background: white;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            font-size: 0.65rem;
            line-height: 1.3;
            color: #666;
        }
        .map-legend-note-front strong {
            color: #d62829;
        }
        .map-legend .fw-bold {
            font-size: 0.7rem;
            margin-bottom: 6px;
        }
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 4px;
        }
        .legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 6px;
            flex-shrink: 0;
        }
        .legend-dot.soccer { background-color: #dc3545; }
        .legend-dot.dek-hockey { background-color: #0d6efd; }
        .legend-dot.multi-sport { background-color: #ffc107; }
        
        /* Program Card Styles */
        .programs-scroll {
            height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
            padding-right: 6px;
        }
        .programs-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .programs-scroll::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 3px;
        }
        .programs-scroll::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 3px;
        }
        .program-card-active {
            border-color: #d62829 !important;
            box-shadow: 0 0 0 3px rgba(214,40,41,0.25);
        }
        .program-card {
            background: white;
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
            overflow: hidden;
        }
        .program-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .program-card-image {
            width: calc(100% + 40px);
            height: 100px;
            margin: -20px -20px 0 -20px;
            padding: 0;
            background: #eee;
            overflow: hidden;
        }
        .program-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .program-price-buttons-row {
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #ddd;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }
        .program-card-buttons {
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: flex-end;
            margin-left: auto;
        }
        .program-card-buttons .btn {
            min-width: 240px;
            padding: 15px 40px;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            background-color: #d62829;
            color: white;
        }
        .program-card-buttons .btn:hover {
            background-color: #c52223;
            color: white;
        }
        .program-title-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-top: 16px;
            margin-bottom: 15px;
            background-color: #d62829;
            color: white;
        }
        .program-details {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }
        .program-details-heading {
            font-weight: 700;
            font-size: 1.25rem;
            color: #000;
            margin-bottom: 4px;
        }
        .program-details-location-heading {
            font-weight: 700;
            margin-bottom: 4px;
        }
        .program-details-location {
            margin-bottom: 8px;
        }
        .program-details-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem 1rem;
        }
        .program-detail-item {
            margin-bottom: 0;
        }
        .filter-section {
            padding: 20px;
            border-radius: 8px;
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
                        <h1 class="display-2 fw-bold mb-3 registration-hero-title" style="font-size: 4rem;"><?php echo esc_html($hero_title); ?></h1>
                    <?php endif; ?>
                    
                    <?php if ( $hero_subtitle ): ?>
                        <p class="fs-4 mb-5 registration-hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                    
                    <!-- Region Buttons -->
                    <div class="region-buttons-wrap">
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
                <h1 class="display-2 fw-bold mb-3 registration-hero-title"><?php echo esc_html($hero_title); ?></h1>
            <?php else: ?>
                <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">REGISTRATION HERO TITLE</div>
            <?php endif; ?>
            
            <?php if ( $hero_subtitle ): ?>
                <p class="fs-4 mb-5"><?php echo esc_html($hero_subtitle); ?></p>
            <?php endif; ?>
            
            <!-- Region Buttons (Wireframe) -->
            <div class="region-buttons-wrap">
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

<?php
// Load all program data here so filter dropdowns (rendered before the list) have the variables they need.
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
$programs      = array();
$program_posts = get_posts( array(
    'post_type'   => 'program',
    'numberposts' => -1,
    'orderby'     => 'menu_order title',
    'order'       => 'ASC',
    'post_status' => 'publish',
) );
foreach ( $program_posts as $p ) {
    $program_image_raw = function_exists( 'rwmb_meta' ) ? rwmb_meta( 'program_image', array(), $p->ID ) : get_post_meta( $p->ID, 'program_image', true );
    $program_image_id  = null;
    if ( is_numeric( $program_image_raw ) ) {
        $program_image_id = (int) $program_image_raw;
    } elseif ( is_array( $program_image_raw ) && function_exists( 'sevensports_first_image_id' ) ) {
        $program_image_id = sevensports_first_image_id( $program_image_raw );
    }
    $program_image_url = $program_image_id ? wp_get_attachment_image_url( $program_image_id, 'medium' ) : get_the_post_thumbnail_url( $p->ID, 'medium' );
    $programs[] = array(
        'program_name'       => $p->post_title,
        'program_image_url'  => is_string( $program_image_url ) ? $program_image_url : '',
        'sport_type'         => trim( (string) get_post_meta( $p->ID, 'sport_type', true ) ),
        'location_heading'   => get_post_meta( $p->ID, 'location_heading', true ),
        'location_address'   => get_post_meta( $p->ID, 'location_address', true ),
        'location_city'      => get_post_meta( $p->ID, 'location_city', true ),
        'location_latitude'  => get_post_meta( $p->ID, 'location_latitude', true ),
        'location_longitude' => get_post_meta( $p->ID, 'location_longitude', true ),
        'age_range'          => get_post_meta( $p->ID, 'age_range', true ),
        'program_type'       => get_post_meta( $p->ID, 'program_type', true ),
        'season'             => get_post_meta( $p->ID, 'season', true ),
        'schedule'           => get_post_meta( $p->ID, 'schedule', true ),
        'price'              => get_post_meta( $p->ID, 'price', true ),
        'inscription_link'   => get_post_meta( $p->ID, 'inscription_link', true ),
        'trial_link'         => get_post_meta( $p->ID, 'trial_link', true ),
    );
}
$program_count  = count( $programs );
$unique_cities  = array();
$unique_sports  = array();
$unique_ages    = array();
$unique_seasons = array();
foreach ( $programs as $p_item ) {
    if ( ! empty( $p_item['location_city'] ) && ! in_array( $p_item['location_city'], $unique_cities, true ) ) {
        $unique_cities[] = $p_item['location_city'];
    }
    if ( ! empty( $p_item['sport_type'] ) && ! in_array( $p_item['sport_type'], $unique_sports, true ) ) {
        $unique_sports[] = $p_item['sport_type'];
    }
    if ( ! empty( $p_item['age_range'] ) && ! in_array( $p_item['age_range'], $unique_ages, true ) ) {
        $unique_ages[] = $p_item['age_range'];
    }
    if ( ! empty( $p_item['season'] ) && ! in_array( $p_item['season'], $unique_seasons, true ) ) {
        $unique_seasons[] = $p_item['season'];
    }
}
sort( $unique_cities );
sort( $unique_sports );
sort( $unique_ages );
sort( $unique_seasons );
$sport_labels = array(
    'soccer'      => 'Soccer',
    'dek_hockey'  => 'Dek Hockey',
    'multi_sport' => 'Multi-Sport',
);
$programs_js = array();
foreach ( $programs as $pi => $p_item ) {
    $programs_js[] = array(
        'index' => $pi,
        'name'  => $p_item['program_name'],
        'lat'   => $p_item['location_latitude'],
        'lng'   => $p_item['location_longitude'],
        'sport' => $p_item['sport_type'],
    );
}
?>

<!-- Filter Section -->
<?php
$reg_section_bg = function_exists( 'sevensports_section_wireframe_bg_style' ) ? sevensports_section_wireframe_bg_style( get_queried_object_id() ?: get_the_ID(), 'registration_section_bg_image' ) : '';
?>
<section class="section-wireframe"<?php echo $reg_section_bg ? ' style="' . $reg_section_bg . '"' : ''; ?>>
    <div class="container">
        <div class="filter-section">
            <div class="row g-3 align-items-end">
                <div class="col-md">
                    <label class="form-label fw-bold small">City/Region</label>
                    <select class="form-select" id="filter-city">
                        <option value="">All Areas</option>
                        <?php foreach ( $unique_cities as $city ) : ?>
                            <option value="<?php echo esc_attr( $city ); ?>"><?php echo esc_html( $city ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Age Group</label>
                    <select class="form-select" id="filter-age">
                        <option value="">All Ages</option>
                        <?php foreach ( $unique_ages as $age ) : ?>
                            <option value="<?php echo esc_attr( $age ); ?>"><?php echo esc_html( $age ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Sport</label>
                    <select class="form-select" id="filter-sport">
                        <option value="">All Sports</option>
                        <?php foreach ( $unique_sports as $sport ) : ?>
                            <option value="<?php echo esc_attr( $sport ); ?>">
                                <?php echo esc_html( isset( $sport_labels[ $sport ] ) ? $sport_labels[ $sport ] : $sport ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Season</label>
                    <select class="form-select" id="filter-season">
                        <option value="">All Seasons</option>
                        <?php foreach ( $unique_seasons as $season ) : ?>
                            <option value="<?php echo esc_attr( $season ); ?>"><?php echo esc_html( $season ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md">
                    <label class="form-label fw-bold small">Max Distance</label>
                    <select class="form-select" id="filter-distance">
                        <option value="0">Any Distance</option>
                        <option value="5">Within 5 km</option>
                        <option value="10">Within 10 km</option>
                        <option value="25">Within 25 km</option>
                        <option value="50">Within 50 km</option>
                    </select>
                </div>
                <div class="col-md-auto">
                    <button id="filter-search-btn" class="btn btn-danger btn-lg px-4" style="min-width: 240px; border-radius: 14px; font-weight: 600;">Rechercher</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map and Programs Section -->
<section class="section-wireframe"<?php echo ! empty( $reg_section_bg ) ? ' style="' . $reg_section_bg . '"' : ''; ?>>
    <div class="container">
        <div class="row g-4">
            <!-- Map Column -->
            <div class="col-lg-5">
                <div class="map-wrapper">
                    <div id="programMap"></div>
                    <!-- Map Legend (top right on map) -->
                    <div class="map-legend">
                        <h6 class="fw-bold mb-1">LEGEND</h6>
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
                        <div class="map-legend-note-card">
                            <div class="map-legend-note-back"></div>
                            <div class="map-legend-note-front">
                                <strong>📍 Multiple Programs?</strong><br>
                                Some locations (like Pierrefonds) offer multiple program types at the same facility. Click on the location marker or result card to see all programs available at that site.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Programs List Column -->
            <div class="col-lg-7">
                
                <div class="mb-4">
                    <h2 class="h3 fw-bold mb-1"><?php echo $programs_title ? esc_html($programs_title) : 'Available Programs'; ?></h2>
                    <p class="text-danger fw-semibold" id="programs-count"><?php echo $program_count; ?> programs found</p>
                </div>
                
                <div class="programs-scroll">
                <?php
                if ( !empty($programs) && is_array($programs) ):
                    foreach ( $programs as $program_index => $program ):
                ?>
                    <div class="program-card"
                         data-index="<?php echo (int) $program_index; ?>"
                         data-city="<?php echo esc_attr( $program['location_city'] ?? '' ); ?>"
                         data-sport="<?php echo esc_attr( $program['sport_type'] ?? '' ); ?>"
                         data-age="<?php echo esc_attr( $program['age_range'] ?? '' ); ?>"
                         data-season="<?php echo esc_attr( $program['season'] ?? '' ); ?>"
                         data-lat="<?php echo esc_attr( $program['location_latitude'] ?? '' ); ?>"
                         data-lng="<?php echo esc_attr( $program['location_longitude'] ?? '' ); ?>">
                        <?php include get_template_directory() . '/inc/program-card-image.php'; ?>
                        <?php if ( ! empty( $program['sport_type'] ) ) : ?>
                            <span class="program-title-badge">
                                <?php echo esc_html( isset( $sport_labels[ $program['sport_type'] ] ) ? $sport_labels[ $program['sport_type'] ] : $program['sport_type'] ); ?>
                            </span>
                        <?php endif; ?>
                        
                        <div class="program-details">
                            <div class="program-details-heading"><?php echo esc_html( isset( $program['location_heading'] ) && $program['location_heading'] !== '' ? $program['location_heading'] : 'Location' ); ?></div>
                            <?php if ( isset($program['location_address']) && $program['location_address'] ): ?>
                                <div class="program-details-location">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 5px; vertical-align: middle;">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                    <?php echo esc_html($program['location_address']); ?>
                                    <span class="program-distance" style="display:none;"> • <span class="program-distance-value"></span></span>
                                </div>
                            <?php endif; ?>
                            <div class="program-details-meta">
                                <?php if ( isset($program['age_range']) && $program['age_range'] ): ?>
                                    <span class="program-detail-item"><?php echo esc_html($program['age_range']); ?></span>
                                <?php endif; ?>
                                <?php if ( isset($program['program_type']) && $program['program_type'] ): ?>
                                    <span class="program-detail-item"><?php echo esc_html($program['program_type']); ?></span>
                                <?php endif; ?>
                                <?php if ( isset($program['schedule']) && $program['schedule'] ): ?>
                                    <span class="program-detail-item"><?php echo esc_html($program['schedule']); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="program-price-buttons-row">
                            <?php if ( isset($program['price']) && $program['price'] ): ?>
                                <strong class="text-danger mb-0"><?php echo esc_html($program['price']); ?></strong>
                            <?php endif; ?>
                            <div class="program-card-buttons">
                                <?php if ( isset($program['inscription_link']) && $program['inscription_link'] ): ?>
                                    <a href="<?php echo esc_url($program['inscription_link']); ?>"
                                       class="btn btn-danger inscription-btn">
                                        Inscription
                                    </a>
                                <?php endif; ?>
                                <?php if ( isset($program['trial_link']) && $program['trial_link'] ): ?>
                                    <a href="<?php echo esc_url($program['trial_link']); ?>"
                                       class="btn btn-danger">
                                        Essais gratuits
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                else:
                ?>
                    <div class="wireframe-box">
                        ADD PROGRAMS IN WORDPRESS ADMIN<br>
                        (Programs &amp; Locations Section)
                    </div>
                <?php endif; ?>
                </div><!-- /.programs-scroll -->
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA Section -->
<section class="section-wireframe cta-section-dark" style="background-color: #000; color: #fff;">
    <div class="cta-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,0 L0,30 Q360,60 720,30 Q1080,0 1440,30 L1440,60 L0,60 Z"/>
        </svg>
    </div>
    <div class="container text-center">
        <div class="d-flex flex-wrap cta-buttons-wrap justify-content-center">
            <?php 
            $cta1_text = rwmb_meta( 'registration_cta_button_1_text' );
            $cta1_link = rwmb_meta( 'registration_cta_button_1_link' );
            if ( $cta1_text && $cta1_link ):
            ?>
                <a href="<?php echo esc_url($cta1_link); ?>"
                   class="btn btn-danger btn-lg" style="min-width: 240px; padding: 18px 120px; border-radius: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif; font-size: 1.3rem; font-weight: 600;">
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
                   class="btn btn-lg cta-btn-white" style="min-width: 240px; padding: 18px 120px; border-radius: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif; font-size: 1.3rem; font-weight: 600;">
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
(function () {
    // Programs data from PHP
    var programsData = <?php echo wp_json_encode( $programs_js ); ?>;

    var userLat = null;
    var userLng = null;
    var markers = [];
    var map;

    // Haversine distance in km
    function haversine(lat1, lon1, lat2, lon2) {
        var R = 6371;
        var dLat = (lat2 - lat1) * Math.PI / 180;
        var dLon = (lon2 - lon1) * Math.PI / 180;
        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    }

    function updateDistances() {
        if (userLat === null || userLng === null) return;
        document.querySelectorAll('.program-card').forEach(function (card) {
            var lat = parseFloat(card.dataset.lat);
            var lng = parseFloat(card.dataset.lng);
            var distWrap = card.querySelector('.program-distance');
            var distVal  = card.querySelector('.program-distance-value');
            if (distWrap && distVal && lat && lng) {
                var dist = haversine(userLat, userLng, lat, lng);
                distVal.textContent = dist.toFixed(1) + ' km away';
                distWrap.style.display = 'inline';
            }
        });
    }

    function applyFilters() {
        var filterCity   = document.getElementById('filter-city').value.toLowerCase();
        var filterSport  = document.getElementById('filter-sport').value.toLowerCase();
        var filterAge    = document.getElementById('filter-age').value.toLowerCase();
        var filterSeason = document.getElementById('filter-season').value.toLowerCase();
        var filterDist   = parseFloat(document.getElementById('filter-distance').value) || 0;

        var visibleCount = 0;

        document.querySelectorAll('.program-card').forEach(function (card) {
            var idx    = parseInt(card.dataset.index, 10);
            var city   = (card.dataset.city   || '').toLowerCase();
            var sport  = (card.dataset.sport  || '').toLowerCase();
            var age    = (card.dataset.age    || '').toLowerCase();
            var season = (card.dataset.season || '').toLowerCase();
            var lat    = parseFloat(card.dataset.lat);
            var lng    = parseFloat(card.dataset.lng);

            var show = true;

            if (filterCity   && city   !== filterCity)   show = false;
            if (filterSport  && sport  !== filterSport)  show = false;
            if (filterAge    && age    !== filterAge)    show = false;
            if (filterSeason && season !== filterSeason) show = false;

            if (filterDist > 0) {
                if (userLat === null || userLng === null) {
                    // Distance filter requested but no location — leave cards visible
                } else if (!lat || !lng || haversine(userLat, userLng, lat, lng) > filterDist) {
                    show = false;
                }
            }

            card.style.display = show ? '' : 'none';
            if (show) visibleCount++;

            // Show/hide map marker
            if (markers[idx]) {
                if (show) {
                    if (!map.hasLayer(markers[idx])) markers[idx].addTo(map);
                } else {
                    if (map.hasLayer(markers[idx])) map.removeLayer(markers[idx]);
                }
            }
        });

        var countEl = document.getElementById('programs-count');
        if (countEl) countEl.textContent = visibleCount + ' programs found';
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Map settings
        <?php
        $map_lat  = rwmb_meta( 'map_center_latitude' )  ?: '45.5017';
        $map_lng  = rwmb_meta( 'map_center_longitude' ) ?: '-73.5673';
        $map_zoom = rwmb_meta( 'map_zoom_level' )        ?: 11;
        ?>
        map = L.map('programMap').setView([<?php echo (float) $map_lat; ?>, <?php echo (float) $map_lng; ?>], <?php echo (int) $map_zoom; ?>);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Sport-specific marker icons
        var sportColors = {
            soccer:      '#dc3545',
            dek_hockey:  '#0d6efd',
            multi_sport: '#ffc107'
        };
        function makeIcon(color, active) {
            var size   = active ? 35 : 25;
            var anchor = active ? 17 : 12;
            var shadow = active ? ';box-shadow:0 0 0 3px ' + color : '';
            return L.divIcon({
                className: 'custom-marker',
                html: '<div style="background-color:' + color + ';width:' + size + 'px;height:' + size + 'px;border-radius:50%;border:3px solid white' + shadow + ';"></div>',
                iconSize:   [size, size],
                iconAnchor: [anchor, anchor]
            });
        }

        function scrollToCard(index) {
            var card      = document.querySelector('.program-card[data-index="' + index + '"]');
            var container = document.querySelector('.programs-scroll');
            if (!card || !container) return;
            document.querySelectorAll('.program-card').forEach(function (c) { c.classList.remove('program-card-active'); });
            card.classList.add('program-card-active');
            container.scrollTo({ top: card.offsetTop - container.offsetTop, behavior: 'smooth' });
        }

        function highlightMarker(index) {
            programsData.forEach(function (p) {
                if (markers[p.index]) {
                    markers[p.index].setIcon(makeIcon(sportColors[p.sport] || '#dc3545', false));
                }
            });
            if (markers[index]) {
                var sport = programsData[index] ? programsData[index].sport : 'soccer';
                markers[index].setIcon(makeIcon(sportColors[sport] || '#dc3545', true));
                map.panTo(markers[index].getLatLng());
            }
        }

        // Place markers
        programsData.forEach(function (p) {
            if (p.lat && p.lng) {
                var icon   = makeIcon(sportColors[p.sport] || '#dc3545', false);
                var marker = L.marker([parseFloat(p.lat), parseFloat(p.lng)], { icon: icon }).addTo(map);
                marker.on('click', function () { scrollToCard(p.index); });
                markers[p.index] = marker;
            } else {
                markers[p.index] = null;
            }
        });

        // Card click → highlight marker (ignore clicks on buttons/links)
        document.querySelectorAll('.program-card').forEach(function (card) {
            card.style.cursor = 'pointer';
            card.addEventListener('click', function (e) {
                if (e.target.closest('a, button')) return;
                var idx = parseInt(card.dataset.index, 10);
                scrollToCard(idx);
                highlightMarker(idx);
            });
        });


        // Filter button
        var searchBtn = document.getElementById('filter-search-btn');
        if (searchBtn) {
            searchBtn.addEventListener('click', applyFilters);
        }
    });

    function filterByRegion(regionName) {
        var citySelect = document.getElementById('filter-city');
        if (!citySelect) return;
        for (var i = 0; i < citySelect.options.length; i++) {
            if (citySelect.options[i].value.toLowerCase() === regionName.toLowerCase()) {
                citySelect.selectedIndex = i;
                break;
            }
        }
        applyFilters();
    }

    // expose filterByRegion for the region buttons
    window.filterByRegion = filterByRegion;
})();
</script>

</body>
</html>