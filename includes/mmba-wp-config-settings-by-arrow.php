<?php

function mmba_arrow_get_options()
{

    //Create new menus
    $mmba_arrow_options[ ] = array(
        "type" => "menu",
        "menu_type" => "add_options_page",
        "page_name" => __( "Maintenance", 'mmba-wp-arrow' ),
        "menu_slug" => "maintenance-mode-page"
    );

    //Settings Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_setting",
        "label" => __( "Content", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_content",
    );

    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_general",
        "label" => __( "General", 'mmba-wp-arrow' ),
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_status",
        "label" => __( "Status", 'mmba-wp-arrow' ),
        "default_value" => "0",
        "option_values" => array(
            '0' => __( 'Disabled', 'mmba-wp-arrow' ),
            '1' => __( 'Enable Maintenance Mode', 'mmba-wp-arrow' )
        )
    );

    // Page Setttings
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_page_settings",
        "label" => __( "Page Settings", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "upload",
        "id" => MMBA_ARROW_ID_PREFIX."_logo",
        "label" => __( "Logo", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_headline",
        "label" => __( "Headline", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_footer",
        "label" => __( "Footer", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_msg_description",
        "label" => __( "Description", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_footer_credits",
        "label" => __( "By Arrow plugins", 'mmba-wp-arrow' ),
        "default_value" => "1",
        "option_values" => array(
            '0' => __( 'No', 'mmba-wp-arrow' ),
            '1' => __( 'Yes', 'mmba-wp-arrow' )
        )
    );

    // Header Setttings
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_header_settings",
        "label" => __( "Header", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "upload",
        "id" => MMBA_ARROW_ID_PREFIX."_favicon",
        "label" => __( "Favicon", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_seo_title",
        "label" => __( "Seo Title", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_seo_meta_description",
        "label" => __( "SEO Meta Description", 'mmba-wp-arrow' )
    );
        
    // Advance Setttings
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_advance_settings",
        "label" => __( "Advance", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_by_pass_url",
        "label" => __( "Bypass url", 'mmba-wp-arrow' )
    );

    // Design Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_design",
        "label" => __( "Design", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_design"
    );

    // Background
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_background",
        "label" => __( "Background", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_background_color",
        "label" => __( "Background Color", 'mmba-wp-arrow' ),
        "default_value" => "#48cfea",
        "validate" => 'color',
        "desc" => __( "Choose between having a solid background color or a background image, uploaded image will be shown instead of background color.", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "upload",
        "id" => MMBA_ARROW_ID_PREFIX."_background_image",
        "label" => __( "Background Image", 'mmba-wp-arrow' ),
    );

    $mmba_arrow_options[ ] = array(
        "type" => "upload",
        "id" => MMBA_ARROW_ID_PREFIX."_background_video",
        "label" => __( "Background video", 'mmba-wp-arrow' ),
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_background_video_repeat",
        "label" => __( "Background video repeat", 'mmba-wp-arrow' ),
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
        "desc" => "Video will be repeated infinity in case of empty or 0."
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_bg_cover",
        "label" => __( "Responsive Background", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1",
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_bg_size",
        "label" => __( "Responsive Size", 'mmba-wp-arrow' ),
        "option_values" => array(
            'cover' => __( 'Cover', 'mmba-wp-arrow' ),
            'contain' => __( 'Contain', 'mmba-wp-arrow' ),
        )
    );

    // Text
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_text",
        "label" => __( "Color", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_text_color",
        "label" => __( "Text", 'mmba-wp-arrow' ),
        "default_value" => "#666666"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_link_color",
        "label" => __( "Link", 'mmba-wp-arrow' ),
        "default_value" => "#FF5733"
    );

    // Headline
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_headline_section",
        "label" => __( "Headline text", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_headline_color",
        "label" => __( "Color", 'mmba-wp-arrow' ),
        "default_value" => "#444444"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_headline_size",
        "label" => __( "Size", 'mmba-wp-arrow' ),
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
        "append_text" => "px"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_headline_font",
        "label" => __( "Font", 'mmba-wp-arrow' ),
        "option_values" => array(
            '' => __( '---select---', 'mmba-wp-arrow' ),
            'Aclonica' => __( 'Aclonica', 'mmba-wp-arrow' ),
            'Allan' => __( 'Allan', 'mmba-wp-arrow' ),
            'Annie Use Your Telescope' => __( 'Annie Use Your Telescope', 'mmba-wp-arrow' ),
            'Anonymous Pro' => __( 'Anonymous Pro', 'mmba-wp-arrow' ),
            'Allerta Stencil' => __( 'Allerta Stencil', 'mmba-wp-arrow' ),
            'Allerta' => __( 'Allerta', 'mmba-wp-arrow' ),
            'Amaranth' => __( 'Amaranth', 'mmba-wp-arrow' ),
            'Anton' => __( 'Anton', 'mmba-wp-arrow' ),
            'Architects Daughter' => __( 'Architects Daughter', 'mmba-wp-arrow' ),
            'Arimo' => __( 'Arimo', 'mmba-wp-arrow' ),
            'Artifika' => __( 'Artifika', 'mmba-wp-arrow' ),
            'Arvo' => __( 'Arvo', 'mmba-wp-arrow' ),
            'Asset' => __( 'Asset', 'mmba-wp-arrow' ),
            'Astloch' => __( 'Astloch', 'mmba-wp-arrow' ),
            'Bangers' => __( 'Bangers', 'mmba-wp-arrow' ),
            'Bentham' => __( 'Bentham', 'mmba-wp-arrow' ),
            'Bevan' => __( 'Bevan', 'mmba-wp-arrow' ),
            'Bigshot One' => __( 'Bigshot One', 'mmba-wp-arrow' ),
            'Bowlby One' => __( 'Bowlby One', 'mmba-wp-arrow' ),
            'Bowlby One SC' => __( 'Bowlby One SC', 'mmba-wp-arrow' ),
            'Brawler' => __( 'Brawler', 'mmba-wp-arrow' ),
            'Buda:300' => __( 'Buda:300', 'mmba-wp-arrow' ),
            'Cabin' => __( 'Cabin', 'mmba-wp-arrow' ),
            'Calligraffitti' => __( 'Calligraffitti', 'mmba-wp-arrow' ),
            'Candal' => __( 'Candal', 'mmba-wp-arrow' ),
            'Cantarell' => __( 'Cantarell', 'mmba-wp-arrow' ),
            'Cardo' => __( 'Cardo', 'mmba-wp-arrow' ),
            'Carter One' => __( 'Carter One', 'mmba-wp-arrow' ),
            'Caudex' => __( 'Caudex', 'mmba-wp-arrow' ),
            'Cedarville Cursive' => __( 'Cedarville Cursive', 'mmba-wp-arrow' ),
            'Cherry Cream Soda' => __( 'Cherry Cream Soda', 'mmba-wp-arrow' ),
            'Chewy' => __( 'Chewy', 'mmba-wp-arrow' ),
            'Coda' => __( 'Coda', 'mmba-wp-arrow' ),
            'Coming Soon' => __( 'Coming Soon', 'mmba-wp-arrow' ),
            'Copse' => __( 'Copse', 'mmba-wp-arrow' ),
            'Corben:700' => __( 'Corben:700', 'mmba-wp-arrow' ),
            'Cousine' => __( 'Cousine', 'mmba-wp-arrow' ),
            'Covered By Your Grace' => __( 'Covered By Your Grace', 'mmba-wp-arrow' ),
            'Crafty Girls' => __( 'Crafty Girls', 'mmba-wp-arrow' ),
            'Crimson Text' => __( 'Crimson Text', 'mmba-wp-arrow' ),
            'Crushed' => __( 'Crushed', 'mmba-wp-arrow' ),
            'Cuprum' => __( 'Cuprum', 'mmba-wp-arrow' ),
            'Damion' => __( 'Damion', 'mmba-wp-arrow' ),
            'Dancing Script' => __( 'Dancing Script', 'mmba-wp-arrow' ),
            'Dawning of a New Day' => __( 'Dawning of a New Day', 'mmba-wp-arrow' ),
            'Didact Gothic' => __( 'Didact Gothic', 'mmba-wp-arrow' ),
            'Droid Sans' => __( 'Droid Sans', 'mmba-wp-arrow' ),
            'Droid Sans Mono' => __( 'Droid Sans Mono', 'mmba-wp-arrow' ),
            'Droid Serif' => __( 'Droid Serif', 'mmba-wp-arrow' ),
            'EB Garamond' => __( 'EB Garamond', 'mmba-wp-arrow' ),
            'Expletus Sans' => __( 'Expletus Sans', 'mmba-wp-arrow' ),
            'Fontdiner Swanky' => __( 'Fontdiner Swanky', 'mmba-wp-arrow' ),
            'Forum' => __( 'Forum', 'mmba-wp-arrow' ),
            'Francois One' => __( 'Francois One', 'mmba-wp-arrow' ),
            'Geo' => __( 'Geo', 'mmba-wp-arrow' ),
            'Give You Glory' => __( 'Give You Glory', 'mmba-wp-arrow' ),
            'Goblin One' => __( 'Goblin One', 'mmba-wp-arrow' ),
            'Goudy Bookletter 1911' => __( 'Goudy Bookletter 1911', 'mmba-wp-arrow' ),
            'Gravitas One' => __( 'Gravitas One', 'mmba-wp-arrow' ),
            'Gruppo' => __( 'Gruppo', 'mmba-wp-arrow' ),
            'Hammersmith One' => __( 'Hammersmith One', 'mmba-wp-arrow' ),
            'Holtwood One SC' => __( 'Holtwood One SC', 'mmba-wp-arrow' ),
            'Homemade Apple' => __( 'Homemade Apple', 'mmba-wp-arrow' ),
            'Inconsolata' => __( 'Inconsolata', 'mmba-wp-arrow' ),
            'Indie Flower' => __( 'Indie Flower', 'mmba-wp-arrow' ),
            'IM Fell DW Pica' => __( 'IM Fell DW Pica', 'mmba-wp-arrow' ),
            'IM Fell DW Pica SC' => __( 'IM Fell DW Pica SC', 'mmba-wp-arrow' ),
            'IM Fell Double Pica' => __( 'IM Fell Double Pica', 'mmba-wp-arrow' ),
            'IM Fell Double Pica SC' => __( 'IM Fell Double Pica SC', 'mmba-wp-arrow' ),
            'IM Fell English' => __( 'IM Fell English', 'mmba-wp-arrow' ),
            'IM Fell English SC' => __( 'IM Fell English SC', 'mmba-wp-arrow' ),
            'IM Fell French Canon' => __( 'IM Fell French Canon', 'mmba-wp-arrow' ),
            'IM Fell French Canon SC' => __( 'IM Fell French Canon SC', 'mmba-wp-arrow' ),
            'IM Fell Great Primer' => __( 'IM Fell Great Primer', 'mmba-wp-arrow' ),
            'IM Fell Great Primer SC' => __( 'IM Fell Great Primer SC', 'mmba-wp-arrow' ),
            'Irish Grover' => __( 'Irish Grover', 'mmba-wp-arrow' ),
            'Irish Growler' => __( 'Irish Growler', 'mmba-wp-arrow' ),
            'Istok Web' => __( 'Istok Web', 'mmba-wp-arrow' ),
            'Josefin Sans' => __( 'Josefin Sans', 'mmba-wp-arrow' ),
            'Josefin Slab' => __( 'Josefin Slab', 'mmba-wp-arrow' ),
            'Judson' => __( 'Judson', 'mmba-wp-arrow' ),
            'Jura' => __( 'Jura', 'mmba-wp-arrow' ),
            'Jura:500' => __( 'Jura:500', 'mmba-wp-arrow' ),
            'Jura:600' => __( 'Jura:600', 'mmba-wp-arrow' ),
            'Just Another Hand' => __( 'Just Another Hand', 'mmba-wp-arrow' ),
            'Just Me Again Down Here' => __( 'Just Me Again Down Here', 'mmba-wp-arrow' ),
            'Kameron' => __( 'Kameron', 'mmba-wp-arrow' ),
            'Kenia' => __( 'Kenia', 'mmba-wp-arrow' ),
            'Kranky' => __( 'Kranky', 'mmba-wp-arrow' ),
            'Kreon' => __( 'Kreon', 'mmba-wp-arrow' ),
            'Kristi' => __( 'Kristi', 'mmba-wp-arrow' ),
            'La Belle Aurore' => __( 'La Belle Aurore', 'mmba-wp-arrow' ),
            'Lato:100' => __( 'Lato:100', 'mmba-wp-arrow' ),
            'Lato:100italic' => __( 'Lato:100italic', 'mmba-wp-arrow' ),
            'Lato:300' => __( 'Lato:300', 'mmba-wp-arrow' ), 
            'Lato' => __( 'Lato', 'mmba-wp-arrow' ),
            'Lato:bold' => __( 'Lato:bold', 'mmba-wp-arrow' ),  
            'Lato:900' => __( 'Lato:900', 'mmba-wp-arrow' ),
            'League Script' => __( 'League Script', 'mmba-wp-arrow' ),
            'Lekton' => __( 'Lekton', 'mmba-wp-arrow' ),  
            'Limelight' => __( 'Limelight', 'mmba-wp-arrow' ),  
            'Lobster' => __( 'Lobster', 'mmba-wp-arrow' ),
            'Lobster Two' => __( 'Lobster Two', 'mmba-wp-arrow' ),
            'Lora' => __( 'Lora', 'mmba-wp-arrow' ),
            'Love Ya Like A Sister' => __( 'Love Ya Like A Sister', 'mmba-wp-arrow' ),
            'Loved by the King' => __( 'Loved by the King', 'mmba-wp-arrow' ),
            'Luckiest Guy' => __( 'Luckiest Guy', 'mmba-wp-arrow' ),
            'Maiden Orange' => __( 'Maiden Orange', 'mmba-wp-arrow' ),
            'Mako' => __( 'Mako', 'mmba-wp-arrow' ),
            'Maven Pro' => __( 'Maven Pro', 'mmba-wp-arrow' ),
            'Maven Pro:500' => __( 'Maven Pro:500', 'mmba-wp-arrow' ),
            'Maven Pro:700' => __( 'Maven Pro:700', 'mmba-wp-arrow' ),
            'Maven Pro:900' => __( 'Maven Pro:900', 'mmba-wp-arrow' ),
            'Meddon' => __( 'Meddon', 'mmba-wp-arrow' ),
            'MedievalSharp' => __( 'MedievalSharp', 'mmba-wp-arrow' ),
            'Megrim' => __( 'Megrim', 'mmba-wp-arrow' ),
            'Merriweather' => __( 'Merriweather', 'mmba-wp-arrow' ),
            'Metrophobic' => __( 'Metrophobic', 'mmba-wp-arrow' ),
            'Michroma' => __( 'Michroma', 'mmba-wp-arrow' ),
            'Miltonian Tattoo' => __( 'Miltonian Tattoo', 'mmba-wp-arrow' ),
            'Miltonian' => __( 'Miltonian', 'mmba-wp-arrow' ),
            'Modern Antiqua' => __( 'Modern Antiqua', 'mmba-wp-arrow' ),
            'Monofett' => __( 'Monofett', 'mmba-wp-arrow' ),
            'Molengo' => __( 'Molengo', 'mmba-wp-arrow' ),
            'Mountains of Christmas' => __( 'Mountains of Christmas', 'mmba-wp-arrow' ),
            'Muli:300' => __( 'Muli:300', 'mmba-wp-arrow' ), 
            'Muli' => __( 'Muli', 'mmba-wp-arrow' ), 
            'Neucha' => __( 'Neucha', 'mmba-wp-arrow' ),
            'Neuton' => __( 'Neuton', 'mmba-wp-arrow' ),
            'News Cycle' => __( 'News Cycle', 'mmba-wp-arrow' ),
            'Nixie One' => __( 'Nixie One', 'mmba-wp-arrow' ),
            'Nobile' => __( 'Nobile', 'mmba-wp-arrow' ),
            'Nova Cut' => __( 'Nova Cut', 'mmba-wp-arrow' ),
            'Nova Flat' => __( 'Nova Flat', 'mmba-wp-arrow' ),
            'Nova Mono' => __( 'Nova Mono', 'mmba-wp-arrow' ),
            'Nova Oval' => __( 'Nova Oval', 'mmba-wp-arrow' ),
            'Nova Round' => __( 'Nova Round', 'mmba-wp-arrow' ),
            'Nova Script' => __( 'Nova Script', 'mmba-wp-arrow' ),
            'Nova Slim' => __( 'Nova Slim', 'mmba-wp-arrow' ),
            'Nova Square' => __( 'Nova Square', 'mmba-wp-arrow' ),
            'Nunito:light' => __( 'Nunito:light', 'mmba-wp-arrow' ),
            'Nunito' => __( 'Nunito', 'mmba-wp-arrow' ),
            'OFL Sorts Mill Goudy TT' => __( 'OFL Sorts Mill Goudy TT', 'mmba-wp-arrow' ),
            'Old Standard TT' => __( 'Old Standard TT', 'mmba-wp-arrow' ),
            'Open Sans:300' => __( 'Open Sans:300', 'mmba-wp-arrow' ),
            'Open Sans' => __( 'Open Sans', 'mmba-wp-arrow' ),
            'Open Sans:600' => __( 'Open Sans:600', 'mmba-wp-arrow' ),
            'Open Sans:800' => __( 'Open Sans:800', 'mmba-wp-arrow' ),
            'Open Sans Condensed:300' => __( 'Open Sans Condensed:300', 'mmba-wp-arrow' ),
            'Orbitron' => __( 'Orbitron', 'mmba-wp-arrow' ),
            'Orbitron:500' => __( 'Orbitron:500', 'mmba-wp-arrow' ),
            'Orbitron:700' => __( 'Orbitron:700', 'mmba-wp-arrow' ),
            'Orbitron:900' => __( 'Orbitron:900', 'mmba-wp-arrow' ),
            'Oswald' => __( 'Oswald', 'mmba-wp-arrow' ),
            'Over the Rainbow' => __( 'Over the Rainbow', 'mmba-wp-arrow' ),
            'Reenie Beanie' => __( 'Reenie Beanie', 'mmba-wp-arrow' ),
            'Pacifico' => __( 'Pacifico', 'mmba-wp-arrow' ),
            'Patrick Hand' => __( 'Patrick Hand', 'mmba-wp-arrow' ),
            'Paytone One' => __( 'Paytone One', 'mmba-wp-arrow' ), 
            'Permanent Marker' => __( 'Permanent Marker', 'mmba-wp-arrow' ),
            'Philosopher' => __( 'Philosopher', 'mmba-wp-arrow' ),
            'Play' => __( 'Play', 'mmba-wp-arrow' ),
            'Playfair Display' => __( 'Playfair Display', 'mmba-wp-arrow' ),
            'Podkova' => __( 'Podkova', 'mmba-wp-arrow' ),
            'PT Sans' => __( 'PT Sans', 'mmba-wp-arrow' ),
            'PT Sans Narrow' => __( 'PT Sans Narrow', 'mmba-wp-arrow' ),
            'PT Sans Narrow:regular,bold' => __( 'PT Sans Narrow:regular,bold', 'mmba-wp-arrow' ),
            'PT Serif' => __( 'PT Serif', 'mmba-wp-arrow' ),
            'PT Serif Caption' => __( 'PT Serif Caption', 'mmba-wp-arrow' ),
            'Puritan' => __( 'Puritan', 'mmba-wp-arrow' ),
            'Quattrocento' => __( 'Quattrocento', 'mmba-wp-arrow' ),
            'Quattrocento Sans' => __( 'Quattrocento Sans', 'mmba-wp-arrow' ),
            'Radley' => __( 'Radley', 'mmba-wp-arrow' ),
            'Raleway:100' => __( 'Raleway:100', 'mmba-wp-arrow' ),
            'Redressed' => __( 'Redressed', 'mmba-wp-arrow' ),
            'Rock Salt' => __( 'Rock Salt', 'mmba-wp-arrow' ),
            'Rokkitt' => __( 'Rokkitt', 'mmba-wp-arrow' ),
            'Ruslan Display' => __( 'Ruslan Display', 'mmba-wp-arrow' ),
            'Schoolbell' => __( 'Schoolbell', 'mmba-wp-arrow' ),
            'Shadows Into Light' => __( 'Shadows Into Light', 'mmba-wp-arrow' ),
            'Shanti' => __( 'Shanti', 'mmba-wp-arrow' ),
            'Sigmar One' => __( 'Sigmar One', 'mmba-wp-arrow' ),
            'Six Caps' => __( 'Six Caps', 'mmba-wp-arrow' ),
            'Slackey' => __( 'Slackey', 'mmba-wp-arrow' ),
            'Smythe' => __( 'Smythe', 'mmba-wp-arrow' ),
            'Sniglet:800' => __( 'Sniglet:800', 'mmba-wp-arrow' ),
            'Special Elite' => __( 'Special Elite', 'mmba-wp-arrow' ),
            'Stardos Stencil' => __( 'Stardos Stencil', 'mmba-wp-arrow' ),
            'Sue Ellen Francisco' => __( 'Sue Ellen Francisco', 'mmba-wp-arrow' ),
            'Sunshiney' => __( 'Sunshiney', 'mmba-wp-arrow' ),
            'Swanky and Moo Moo' => __( 'Swanky and Moo Moo', 'mmba-wp-arrow' ),
            'Syncopate' => __( 'Syncopate', 'mmba-wp-arrow' ),
            'Tangerine' => __( 'Tangerine', 'mmba-wp-arrow' ),
            'Tenor Sans' => __( 'Tenor Sans', 'mmba-wp-arrow' ),
            'Terminal Dosis Light' => __( 'Terminal Dosis Light', 'mmba-wp-arrow' ),
            'The Girl Next Door' => __( 'The Girl Next Door', 'mmba-wp-arrow' ),
            'Tinos' => __( 'Tinos', 'mmba-wp-arrow' ),
            'Ubuntu' => __( 'Ubuntu', 'mmba-wp-arrow' ),
            'Ultra' => __( 'Ultra', 'mmba-wp-arrow' ),
            'Unkempt' => __( 'Unkempt', 'mmba-wp-arrow' ),
            'UnifrakturCook:bold' => __( 'UnifrakturCook:bold', 'mmba-wp-arrow' ),
            'UnifrakturMaguntia' => __( 'UnifrakturMaguntia', 'mmba-wp-arrow' ),
            'Varela' => __( 'Varela', 'mmba-wp-arrow' ),
            'Varela Round' => __( 'Varela Round', 'mmba-wp-arrow' ),
            'Vibur' => __( 'Vibur', 'mmba-wp-arrow' ),
            'Vollkorn' => __( 'Vollkorn', 'mmba-wp-arrow' ),
            'VT323' => __( 'VT323', 'mmba-wp-arrow' ),
            'Waiting for the Sunrise' => __( 'Waiting for the Sunrise', 'mmba-wp-arrow' ),
            'Wallpoet' => __( 'Wallpoet', 'mmba-wp-arrow' ),
            'Walter Turncoat' => __( 'Walter Turncoat', 'mmba-wp-arrow' ),
            'Wire One' => __( 'Wire One', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:300' => __( 'Yanone Kaffeesatz:300', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:400' => __( 'Yanone Kaffeesatz:400', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:700' => __( 'Yanone Kaffeesatz:700', 'mmba-wp-arrow' ),
            'Yeseva One' => __( 'Yeseva One', 'mmba-wp-arrow' ),
            'Zeyada' => __( 'Zeyada', 'mmba-wp-arrow' )
        )
    );

    // Description
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_description_section",
        "label" => __( "Description text", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_description_color",
        "label" => __( "Color", 'mmba-wp-arrow' ),
        "default_value" => "#444444"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_description_size",
        "label" => __( "Size", 'mmba-wp-arrow' ),
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
        "append_text" => "px"        
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_description_font",
        "label" => __( "Font", 'mmba-wp-arrow' ),
        "option_values" => array(
            '' => __( '---select---', 'mmba-wp-arrow' ),
            'Aclonica' => __( 'Aclonica', 'mmba-wp-arrow' ),
            'Allan' => __( 'Allan', 'mmba-wp-arrow' ),
            'Annie Use Your Telescope' => __( 'Annie Use Your Telescope', 'mmba-wp-arrow' ),
            'Anonymous Pro' => __( 'Anonymous Pro', 'mmba-wp-arrow' ),
            'Allerta Stencil' => __( 'Allerta Stencil', 'mmba-wp-arrow' ),
            'Allerta' => __( 'Allerta', 'mmba-wp-arrow' ),
            'Amaranth' => __( 'Amaranth', 'mmba-wp-arrow' ),
            'Anton' => __( 'Anton', 'mmba-wp-arrow' ),
            'Architects Daughter' => __( 'Architects Daughter', 'mmba-wp-arrow' ),
            'Arimo' => __( 'Arimo', 'mmba-wp-arrow' ),
            'Artifika' => __( 'Artifika', 'mmba-wp-arrow' ),
            'Arvo' => __( 'Arvo', 'mmba-wp-arrow' ),
            'Asset' => __( 'Asset', 'mmba-wp-arrow' ),
            'Astloch' => __( 'Astloch', 'mmba-wp-arrow' ),
            'Bangers' => __( 'Bangers', 'mmba-wp-arrow' ),
            'Bentham' => __( 'Bentham', 'mmba-wp-arrow' ),
            'Bevan' => __( 'Bevan', 'mmba-wp-arrow' ),
            'Bigshot One' => __( 'Bigshot One', 'mmba-wp-arrow' ),
            'Bowlby One' => __( 'Bowlby One', 'mmba-wp-arrow' ),
            'Bowlby One SC' => __( 'Bowlby One SC', 'mmba-wp-arrow' ),
            'Brawler' => __( 'Brawler', 'mmba-wp-arrow' ),
            'Buda:300' => __( 'Buda:300', 'mmba-wp-arrow' ),
            'Cabin' => __( 'Cabin', 'mmba-wp-arrow' ),
            'Calligraffitti' => __( 'Calligraffitti', 'mmba-wp-arrow' ),
            'Candal' => __( 'Candal', 'mmba-wp-arrow' ),
            'Cantarell' => __( 'Cantarell', 'mmba-wp-arrow' ),
            'Cardo' => __( 'Cardo', 'mmba-wp-arrow' ),
            'Carter One' => __( 'Carter One', 'mmba-wp-arrow' ),
            'Caudex' => __( 'Caudex', 'mmba-wp-arrow' ),
            'Cedarville Cursive' => __( 'Cedarville Cursive', 'mmba-wp-arrow' ),
            'Cherry Cream Soda' => __( 'Cherry Cream Soda', 'mmba-wp-arrow' ),
            'Chewy' => __( 'Chewy', 'mmba-wp-arrow' ),
            'Coda' => __( 'Coda', 'mmba-wp-arrow' ),
            'Coming Soon' => __( 'Coming Soon', 'mmba-wp-arrow' ),
            'Copse' => __( 'Copse', 'mmba-wp-arrow' ),
            'Corben:700' => __( 'Corben:700', 'mmba-wp-arrow' ),
            'Cousine' => __( 'Cousine', 'mmba-wp-arrow' ),
            'Covered By Your Grace' => __( 'Covered By Your Grace', 'mmba-wp-arrow' ),
            'Crafty Girls' => __( 'Crafty Girls', 'mmba-wp-arrow' ),
            'Crimson Text' => __( 'Crimson Text', 'mmba-wp-arrow' ),
            'Crushed' => __( 'Crushed', 'mmba-wp-arrow' ),
            'Cuprum' => __( 'Cuprum', 'mmba-wp-arrow' ),
            'Damion' => __( 'Damion', 'mmba-wp-arrow' ),
            'Dancing Script' => __( 'Dancing Script', 'mmba-wp-arrow' ),
            'Dawning of a New Day' => __( 'Dawning of a New Day', 'mmba-wp-arrow' ),
            'Didact Gothic' => __( 'Didact Gothic', 'mmba-wp-arrow' ),
            'Droid Sans' => __( 'Droid Sans', 'mmba-wp-arrow' ),
            'Droid Sans Mono' => __( 'Droid Sans Mono', 'mmba-wp-arrow' ),
            'Droid Serif' => __( 'Droid Serif', 'mmba-wp-arrow' ),
            'EB Garamond' => __( 'EB Garamond', 'mmba-wp-arrow' ),
            'Expletus Sans' => __( 'Expletus Sans', 'mmba-wp-arrow' ),
            'Fontdiner Swanky' => __( 'Fontdiner Swanky', 'mmba-wp-arrow' ),
            'Forum' => __( 'Forum', 'mmba-wp-arrow' ),
            'Francois One' => __( 'Francois One', 'mmba-wp-arrow' ),
            'Geo' => __( 'Geo', 'mmba-wp-arrow' ),
            'Give You Glory' => __( 'Give You Glory', 'mmba-wp-arrow' ),
            'Goblin One' => __( 'Goblin One', 'mmba-wp-arrow' ),
            'Goudy Bookletter 1911' => __( 'Goudy Bookletter 1911', 'mmba-wp-arrow' ),
            'Gravitas One' => __( 'Gravitas One', 'mmba-wp-arrow' ),
            'Gruppo' => __( 'Gruppo', 'mmba-wp-arrow' ),
            'Hammersmith One' => __( 'Hammersmith One', 'mmba-wp-arrow' ),
            'Holtwood One SC' => __( 'Holtwood One SC', 'mmba-wp-arrow' ),
            'Homemade Apple' => __( 'Homemade Apple', 'mmba-wp-arrow' ),
            'Inconsolata' => __( 'Inconsolata', 'mmba-wp-arrow' ),
            'Indie Flower' => __( 'Indie Flower', 'mmba-wp-arrow' ),
            'IM Fell DW Pica' => __( 'IM Fell DW Pica', 'mmba-wp-arrow' ),
            'IM Fell DW Pica SC' => __( 'IM Fell DW Pica SC', 'mmba-wp-arrow' ),
            'IM Fell Double Pica' => __( 'IM Fell Double Pica', 'mmba-wp-arrow' ),
            'IM Fell Double Pica SC' => __( 'IM Fell Double Pica SC', 'mmba-wp-arrow' ),
            'IM Fell English' => __( 'IM Fell English', 'mmba-wp-arrow' ),
            'IM Fell English SC' => __( 'IM Fell English SC', 'mmba-wp-arrow' ),
            'IM Fell French Canon' => __( 'IM Fell French Canon', 'mmba-wp-arrow' ),
            'IM Fell French Canon SC' => __( 'IM Fell French Canon SC', 'mmba-wp-arrow' ),
            'IM Fell Great Primer' => __( 'IM Fell Great Primer', 'mmba-wp-arrow' ),
            'IM Fell Great Primer SC' => __( 'IM Fell Great Primer SC', 'mmba-wp-arrow' ),
            'Irish Grover' => __( 'Irish Grover', 'mmba-wp-arrow' ),
            'Irish Growler' => __( 'Irish Growler', 'mmba-wp-arrow' ),
            'Istok Web' => __( 'Istok Web', 'mmba-wp-arrow' ),
            'Josefin Sans' => __( 'Josefin Sans', 'mmba-wp-arrow' ),
            'Josefin Slab' => __( 'Josefin Slab', 'mmba-wp-arrow' ),
            'Judson' => __( 'Judson', 'mmba-wp-arrow' ),
            'Jura' => __( 'Jura', 'mmba-wp-arrow' ),
            'Jura:500' => __( 'Jura:500', 'mmba-wp-arrow' ),
            'Jura:600' => __( 'Jura:600', 'mmba-wp-arrow' ),
            'Just Another Hand' => __( 'Just Another Hand', 'mmba-wp-arrow' ),
            'Just Me Again Down Here' => __( 'Just Me Again Down Here', 'mmba-wp-arrow' ),
            'Kameron' => __( 'Kameron', 'mmba-wp-arrow' ),
            'Kenia' => __( 'Kenia', 'mmba-wp-arrow' ),
            'Kranky' => __( 'Kranky', 'mmba-wp-arrow' ),
            'Kreon' => __( 'Kreon', 'mmba-wp-arrow' ),
            'Kristi' => __( 'Kristi', 'mmba-wp-arrow' ),
            'La Belle Aurore' => __( 'La Belle Aurore', 'mmba-wp-arrow' ),
            'Lato:100' => __( 'Lato:100', 'mmba-wp-arrow' ),
            'Lato:100italic' => __( 'Lato:100italic', 'mmba-wp-arrow' ),
            'Lato:300' => __( 'Lato:300', 'mmba-wp-arrow' ), 
            'Lato' => __( 'Lato', 'mmba-wp-arrow' ),
            'Lato:bold' => __( 'Lato:bold', 'mmba-wp-arrow' ),  
            'Lato:900' => __( 'Lato:900', 'mmba-wp-arrow' ),
            'League Script' => __( 'League Script', 'mmba-wp-arrow' ),
            'Lekton' => __( 'Lekton', 'mmba-wp-arrow' ),  
            'Limelight' => __( 'Limelight', 'mmba-wp-arrow' ),  
            'Lobster' => __( 'Lobster', 'mmba-wp-arrow' ),
            'Lobster Two' => __( 'Lobster Two', 'mmba-wp-arrow' ),
            'Lora' => __( 'Lora', 'mmba-wp-arrow' ),
            'Love Ya Like A Sister' => __( 'Love Ya Like A Sister', 'mmba-wp-arrow' ),
            'Loved by the King' => __( 'Loved by the King', 'mmba-wp-arrow' ),
            'Luckiest Guy' => __( 'Luckiest Guy', 'mmba-wp-arrow' ),
            'Maiden Orange' => __( 'Maiden Orange', 'mmba-wp-arrow' ),
            'Mako' => __( 'Mako', 'mmba-wp-arrow' ),
            'Maven Pro' => __( 'Maven Pro', 'mmba-wp-arrow' ),
            'Maven Pro:500' => __( 'Maven Pro:500', 'mmba-wp-arrow' ),
            'Maven Pro:700' => __( 'Maven Pro:700', 'mmba-wp-arrow' ),
            'Maven Pro:900' => __( 'Maven Pro:900', 'mmba-wp-arrow' ),
            'Meddon' => __( 'Meddon', 'mmba-wp-arrow' ),
            'MedievalSharp' => __( 'MedievalSharp', 'mmba-wp-arrow' ),
            'Megrim' => __( 'Megrim', 'mmba-wp-arrow' ),
            'Merriweather' => __( 'Merriweather', 'mmba-wp-arrow' ),
            'Metrophobic' => __( 'Metrophobic', 'mmba-wp-arrow' ),
            'Michroma' => __( 'Michroma', 'mmba-wp-arrow' ),
            'Miltonian Tattoo' => __( 'Miltonian Tattoo', 'mmba-wp-arrow' ),
            'Miltonian' => __( 'Miltonian', 'mmba-wp-arrow' ),
            'Modern Antiqua' => __( 'Modern Antiqua', 'mmba-wp-arrow' ),
            'Monofett' => __( 'Monofett', 'mmba-wp-arrow' ),
            'Molengo' => __( 'Molengo', 'mmba-wp-arrow' ),
            'Mountains of Christmas' => __( 'Mountains of Christmas', 'mmba-wp-arrow' ),
            'Muli:300' => __( 'Muli:300', 'mmba-wp-arrow' ), 
            'Muli' => __( 'Muli', 'mmba-wp-arrow' ), 
            'Neucha' => __( 'Neucha', 'mmba-wp-arrow' ),
            'Neuton' => __( 'Neuton', 'mmba-wp-arrow' ),
            'News Cycle' => __( 'News Cycle', 'mmba-wp-arrow' ),
            'Nixie One' => __( 'Nixie One', 'mmba-wp-arrow' ),
            'Nobile' => __( 'Nobile', 'mmba-wp-arrow' ),
            'Nova Cut' => __( 'Nova Cut', 'mmba-wp-arrow' ),
            'Nova Flat' => __( 'Nova Flat', 'mmba-wp-arrow' ),
            'Nova Mono' => __( 'Nova Mono', 'mmba-wp-arrow' ),
            'Nova Oval' => __( 'Nova Oval', 'mmba-wp-arrow' ),
            'Nova Round' => __( 'Nova Round', 'mmba-wp-arrow' ),
            'Nova Script' => __( 'Nova Script', 'mmba-wp-arrow' ),
            'Nova Slim' => __( 'Nova Slim', 'mmba-wp-arrow' ),
            'Nova Square' => __( 'Nova Square', 'mmba-wp-arrow' ),
            'Nunito:light' => __( 'Nunito:light', 'mmba-wp-arrow' ),
            'Nunito' => __( 'Nunito', 'mmba-wp-arrow' ),
            'OFL Sorts Mill Goudy TT' => __( 'OFL Sorts Mill Goudy TT', 'mmba-wp-arrow' ),
            'Old Standard TT' => __( 'Old Standard TT', 'mmba-wp-arrow' ),
            'Open Sans:300' => __( 'Open Sans:300', 'mmba-wp-arrow' ),
            'Open Sans' => __( 'Open Sans', 'mmba-wp-arrow' ),
            'Open Sans:600' => __( 'Open Sans:600', 'mmba-wp-arrow' ),
            'Open Sans:800' => __( 'Open Sans:800', 'mmba-wp-arrow' ),
            'Open Sans Condensed:300' => __( 'Open Sans Condensed:300', 'mmba-wp-arrow' ),
            'Orbitron' => __( 'Orbitron', 'mmba-wp-arrow' ),
            'Orbitron:500' => __( 'Orbitron:500', 'mmba-wp-arrow' ),
            'Orbitron:700' => __( 'Orbitron:700', 'mmba-wp-arrow' ),
            'Orbitron:900' => __( 'Orbitron:900', 'mmba-wp-arrow' ),
            'Oswald' => __( 'Oswald', 'mmba-wp-arrow' ),
            'Over the Rainbow' => __( 'Over the Rainbow', 'mmba-wp-arrow' ),
            'Reenie Beanie' => __( 'Reenie Beanie', 'mmba-wp-arrow' ),
            'Pacifico' => __( 'Pacifico', 'mmba-wp-arrow' ),
            'Patrick Hand' => __( 'Patrick Hand', 'mmba-wp-arrow' ),
            'Paytone One' => __( 'Paytone One', 'mmba-wp-arrow' ), 
            'Permanent Marker' => __( 'Permanent Marker', 'mmba-wp-arrow' ),
            'Philosopher' => __( 'Philosopher', 'mmba-wp-arrow' ),
            'Play' => __( 'Play', 'mmba-wp-arrow' ),
            'Playfair Display' => __( 'Playfair Display', 'mmba-wp-arrow' ),
            'Podkova' => __( 'Podkova', 'mmba-wp-arrow' ),
            'PT Sans' => __( 'PT Sans', 'mmba-wp-arrow' ),
            'PT Sans Narrow' => __( 'PT Sans Narrow', 'mmba-wp-arrow' ),
            'PT Sans Narrow:regular,bold' => __( 'PT Sans Narrow:regular,bold', 'mmba-wp-arrow' ),
            'PT Serif' => __( 'PT Serif', 'mmba-wp-arrow' ),
            'PT Serif Caption' => __( 'PT Serif Caption', 'mmba-wp-arrow' ),
            'Puritan' => __( 'Puritan', 'mmba-wp-arrow' ),
            'Quattrocento' => __( 'Quattrocento', 'mmba-wp-arrow' ),
            'Quattrocento Sans' => __( 'Quattrocento Sans', 'mmba-wp-arrow' ),
            'Radley' => __( 'Radley', 'mmba-wp-arrow' ),
            'Raleway:100' => __( 'Raleway:100', 'mmba-wp-arrow' ),
            'Redressed' => __( 'Redressed', 'mmba-wp-arrow' ),
            'Rock Salt' => __( 'Rock Salt', 'mmba-wp-arrow' ),
            'Rokkitt' => __( 'Rokkitt', 'mmba-wp-arrow' ),
            'Ruslan Display' => __( 'Ruslan Display', 'mmba-wp-arrow' ),
            'Schoolbell' => __( 'Schoolbell', 'mmba-wp-arrow' ),
            'Shadows Into Light' => __( 'Shadows Into Light', 'mmba-wp-arrow' ),
            'Shanti' => __( 'Shanti', 'mmba-wp-arrow' ),
            'Sigmar One' => __( 'Sigmar One', 'mmba-wp-arrow' ),
            'Six Caps' => __( 'Six Caps', 'mmba-wp-arrow' ),
            'Slackey' => __( 'Slackey', 'mmba-wp-arrow' ),
            'Smythe' => __( 'Smythe', 'mmba-wp-arrow' ),
            'Sniglet:800' => __( 'Sniglet:800', 'mmba-wp-arrow' ),
            'Special Elite' => __( 'Special Elite', 'mmba-wp-arrow' ),
            'Stardos Stencil' => __( 'Stardos Stencil', 'mmba-wp-arrow' ),
            'Sue Ellen Francisco' => __( 'Sue Ellen Francisco', 'mmba-wp-arrow' ),
            'Sunshiney' => __( 'Sunshiney', 'mmba-wp-arrow' ),
            'Swanky and Moo Moo' => __( 'Swanky and Moo Moo', 'mmba-wp-arrow' ),
            'Syncopate' => __( 'Syncopate', 'mmba-wp-arrow' ),
            'Tangerine' => __( 'Tangerine', 'mmba-wp-arrow' ),
            'Tenor Sans' => __( 'Tenor Sans', 'mmba-wp-arrow' ),
            'Terminal Dosis Light' => __( 'Terminal Dosis Light', 'mmba-wp-arrow' ),
            'The Girl Next Door' => __( 'The Girl Next Door', 'mmba-wp-arrow' ),
            'Tinos' => __( 'Tinos', 'mmba-wp-arrow' ),
            'Ubuntu' => __( 'Ubuntu', 'mmba-wp-arrow' ),
            'Ultra' => __( 'Ultra', 'mmba-wp-arrow' ),
            'Unkempt' => __( 'Unkempt', 'mmba-wp-arrow' ),
            'UnifrakturCook:bold' => __( 'UnifrakturCook:bold', 'mmba-wp-arrow' ),
            'UnifrakturMaguntia' => __( 'UnifrakturMaguntia', 'mmba-wp-arrow' ),
            'Varela' => __( 'Varela', 'mmba-wp-arrow' ),
            'Varela Round' => __( 'Varela Round', 'mmba-wp-arrow' ),
            'Vibur' => __( 'Vibur', 'mmba-wp-arrow' ),
            'Vollkorn' => __( 'Vollkorn', 'mmba-wp-arrow' ),
            'VT323' => __( 'VT323', 'mmba-wp-arrow' ),
            'Waiting for the Sunrise' => __( 'Waiting for the Sunrise', 'mmba-wp-arrow' ),
            'Wallpoet' => __( 'Wallpoet', 'mmba-wp-arrow' ),
            'Walter Turncoat' => __( 'Walter Turncoat', 'mmba-wp-arrow' ),
            'Wire One' => __( 'Wire One', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:300' => __( 'Yanone Kaffeesatz:300', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:400' => __( 'Yanone Kaffeesatz:400', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:700' => __( 'Yanone Kaffeesatz:700', 'mmba-wp-arrow' ),
            'Yeseva One' => __( 'Yeseva One', 'mmba-wp-arrow' ),
            'Zeyada' => __( 'Zeyada', 'mmba-wp-arrow' )
        )
    );

    // Footer
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_footer_section",
        "label" => __( "Footer text", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_footer_color",
        "label" => __( "Color", 'mmba-wp-arrow' ),
        "default_value" => "#FF5733"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_footer_size",
        "label" => __( "Size", 'mmba-wp-arrow' ),
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
        "append_text" => "px"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_footer_font",
        "label" => __( "Font", 'mmba-wp-arrow' ),
        "option_values" => array(
            '' => __( '---select---', 'mmba-wp-arrow' ),
            'Aclonica' => __( 'Aclonica', 'mmba-wp-arrow' ),
            'Allan' => __( 'Allan', 'mmba-wp-arrow' ),
            'Annie Use Your Telescope' => __( 'Annie Use Your Telescope', 'mmba-wp-arrow' ),
            'Anonymous Pro' => __( 'Anonymous Pro', 'mmba-wp-arrow' ),
            'Allerta Stencil' => __( 'Allerta Stencil', 'mmba-wp-arrow' ),
            'Allerta' => __( 'Allerta', 'mmba-wp-arrow' ),
            'Amaranth' => __( 'Amaranth', 'mmba-wp-arrow' ),
            'Anton' => __( 'Anton', 'mmba-wp-arrow' ),
            'Architects Daughter' => __( 'Architects Daughter', 'mmba-wp-arrow' ),
            'Arimo' => __( 'Arimo', 'mmba-wp-arrow' ),
            'Artifika' => __( 'Artifika', 'mmba-wp-arrow' ),
            'Arvo' => __( 'Arvo', 'mmba-wp-arrow' ),
            'Asset' => __( 'Asset', 'mmba-wp-arrow' ),
            'Astloch' => __( 'Astloch', 'mmba-wp-arrow' ),
            'Bangers' => __( 'Bangers', 'mmba-wp-arrow' ),
            'Bentham' => __( 'Bentham', 'mmba-wp-arrow' ),
            'Bevan' => __( 'Bevan', 'mmba-wp-arrow' ),
            'Bigshot One' => __( 'Bigshot One', 'mmba-wp-arrow' ),
            'Bowlby One' => __( 'Bowlby One', 'mmba-wp-arrow' ),
            'Bowlby One SC' => __( 'Bowlby One SC', 'mmba-wp-arrow' ),
            'Brawler' => __( 'Brawler', 'mmba-wp-arrow' ),
            'Buda:300' => __( 'Buda:300', 'mmba-wp-arrow' ),
            'Cabin' => __( 'Cabin', 'mmba-wp-arrow' ),
            'Calligraffitti' => __( 'Calligraffitti', 'mmba-wp-arrow' ),
            'Candal' => __( 'Candal', 'mmba-wp-arrow' ),
            'Cantarell' => __( 'Cantarell', 'mmba-wp-arrow' ),
            'Cardo' => __( 'Cardo', 'mmba-wp-arrow' ),
            'Carter One' => __( 'Carter One', 'mmba-wp-arrow' ),
            'Caudex' => __( 'Caudex', 'mmba-wp-arrow' ),
            'Cedarville Cursive' => __( 'Cedarville Cursive', 'mmba-wp-arrow' ),
            'Cherry Cream Soda' => __( 'Cherry Cream Soda', 'mmba-wp-arrow' ),
            'Chewy' => __( 'Chewy', 'mmba-wp-arrow' ),
            'Coda' => __( 'Coda', 'mmba-wp-arrow' ),
            'Coming Soon' => __( 'Coming Soon', 'mmba-wp-arrow' ),
            'Copse' => __( 'Copse', 'mmba-wp-arrow' ),
            'Corben:700' => __( 'Corben:700', 'mmba-wp-arrow' ),
            'Cousine' => __( 'Cousine', 'mmba-wp-arrow' ),
            'Covered By Your Grace' => __( 'Covered By Your Grace', 'mmba-wp-arrow' ),
            'Crafty Girls' => __( 'Crafty Girls', 'mmba-wp-arrow' ),
            'Crimson Text' => __( 'Crimson Text', 'mmba-wp-arrow' ),
            'Crushed' => __( 'Crushed', 'mmba-wp-arrow' ),
            'Cuprum' => __( 'Cuprum', 'mmba-wp-arrow' ),
            'Damion' => __( 'Damion', 'mmba-wp-arrow' ),
            'Dancing Script' => __( 'Dancing Script', 'mmba-wp-arrow' ),
            'Dawning of a New Day' => __( 'Dawning of a New Day', 'mmba-wp-arrow' ),
            'Didact Gothic' => __( 'Didact Gothic', 'mmba-wp-arrow' ),
            'Droid Sans' => __( 'Droid Sans', 'mmba-wp-arrow' ),
            'Droid Sans Mono' => __( 'Droid Sans Mono', 'mmba-wp-arrow' ),
            'Droid Serif' => __( 'Droid Serif', 'mmba-wp-arrow' ),
            'EB Garamond' => __( 'EB Garamond', 'mmba-wp-arrow' ),
            'Expletus Sans' => __( 'Expletus Sans', 'mmba-wp-arrow' ),
            'Fontdiner Swanky' => __( 'Fontdiner Swanky', 'mmba-wp-arrow' ),
            'Forum' => __( 'Forum', 'mmba-wp-arrow' ),
            'Francois One' => __( 'Francois One', 'mmba-wp-arrow' ),
            'Geo' => __( 'Geo', 'mmba-wp-arrow' ),
            'Give You Glory' => __( 'Give You Glory', 'mmba-wp-arrow' ),
            'Goblin One' => __( 'Goblin One', 'mmba-wp-arrow' ),
            'Goudy Bookletter 1911' => __( 'Goudy Bookletter 1911', 'mmba-wp-arrow' ),
            'Gravitas One' => __( 'Gravitas One', 'mmba-wp-arrow' ),
            'Gruppo' => __( 'Gruppo', 'mmba-wp-arrow' ),
            'Hammersmith One' => __( 'Hammersmith One', 'mmba-wp-arrow' ),
            'Holtwood One SC' => __( 'Holtwood One SC', 'mmba-wp-arrow' ),
            'Homemade Apple' => __( 'Homemade Apple', 'mmba-wp-arrow' ),
            'Inconsolata' => __( 'Inconsolata', 'mmba-wp-arrow' ),
            'Indie Flower' => __( 'Indie Flower', 'mmba-wp-arrow' ),
            'IM Fell DW Pica' => __( 'IM Fell DW Pica', 'mmba-wp-arrow' ),
            'IM Fell DW Pica SC' => __( 'IM Fell DW Pica SC', 'mmba-wp-arrow' ),
            'IM Fell Double Pica' => __( 'IM Fell Double Pica', 'mmba-wp-arrow' ),
            'IM Fell Double Pica SC' => __( 'IM Fell Double Pica SC', 'mmba-wp-arrow' ),
            'IM Fell English' => __( 'IM Fell English', 'mmba-wp-arrow' ),
            'IM Fell English SC' => __( 'IM Fell English SC', 'mmba-wp-arrow' ),
            'IM Fell French Canon' => __( 'IM Fell French Canon', 'mmba-wp-arrow' ),
            'IM Fell French Canon SC' => __( 'IM Fell French Canon SC', 'mmba-wp-arrow' ),
            'IM Fell Great Primer' => __( 'IM Fell Great Primer', 'mmba-wp-arrow' ),
            'IM Fell Great Primer SC' => __( 'IM Fell Great Primer SC', 'mmba-wp-arrow' ),
            'Irish Grover' => __( 'Irish Grover', 'mmba-wp-arrow' ),
            'Irish Growler' => __( 'Irish Growler', 'mmba-wp-arrow' ),
            'Istok Web' => __( 'Istok Web', 'mmba-wp-arrow' ),
            'Josefin Sans' => __( 'Josefin Sans', 'mmba-wp-arrow' ),
            'Josefin Slab' => __( 'Josefin Slab', 'mmba-wp-arrow' ),
            'Judson' => __( 'Judson', 'mmba-wp-arrow' ),
            'Jura' => __( 'Jura', 'mmba-wp-arrow' ),
            'Jura:500' => __( 'Jura:500', 'mmba-wp-arrow' ),
            'Jura:600' => __( 'Jura:600', 'mmba-wp-arrow' ),
            'Just Another Hand' => __( 'Just Another Hand', 'mmba-wp-arrow' ),
            'Just Me Again Down Here' => __( 'Just Me Again Down Here', 'mmba-wp-arrow' ),
            'Kameron' => __( 'Kameron', 'mmba-wp-arrow' ),
            'Kenia' => __( 'Kenia', 'mmba-wp-arrow' ),
            'Kranky' => __( 'Kranky', 'mmba-wp-arrow' ),
            'Kreon' => __( 'Kreon', 'mmba-wp-arrow' ),
            'Kristi' => __( 'Kristi', 'mmba-wp-arrow' ),
            'La Belle Aurore' => __( 'La Belle Aurore', 'mmba-wp-arrow' ),
            'Lato:100' => __( 'Lato:100', 'mmba-wp-arrow' ),
            'Lato:100italic' => __( 'Lato:100italic', 'mmba-wp-arrow' ),
            'Lato:300' => __( 'Lato:300', 'mmba-wp-arrow' ), 
            'Lato' => __( 'Lato', 'mmba-wp-arrow' ),
            'Lato:bold' => __( 'Lato:bold', 'mmba-wp-arrow' ),  
            'Lato:900' => __( 'Lato:900', 'mmba-wp-arrow' ),
            'League Script' => __( 'League Script', 'mmba-wp-arrow' ),
            'Lekton' => __( 'Lekton', 'mmba-wp-arrow' ),  
            'Limelight' => __( 'Limelight', 'mmba-wp-arrow' ),  
            'Lobster' => __( 'Lobster', 'mmba-wp-arrow' ),
            'Lobster Two' => __( 'Lobster Two', 'mmba-wp-arrow' ),
            'Lora' => __( 'Lora', 'mmba-wp-arrow' ),
            'Love Ya Like A Sister' => __( 'Love Ya Like A Sister', 'mmba-wp-arrow' ),
            'Loved by the King' => __( 'Loved by the King', 'mmba-wp-arrow' ),
            'Luckiest Guy' => __( 'Luckiest Guy', 'mmba-wp-arrow' ),
            'Maiden Orange' => __( 'Maiden Orange', 'mmba-wp-arrow' ),
            'Mako' => __( 'Mako', 'mmba-wp-arrow' ),
            'Maven Pro' => __( 'Maven Pro', 'mmba-wp-arrow' ),
            'Maven Pro:500' => __( 'Maven Pro:500', 'mmba-wp-arrow' ),
            'Maven Pro:700' => __( 'Maven Pro:700', 'mmba-wp-arrow' ),
            'Maven Pro:900' => __( 'Maven Pro:900', 'mmba-wp-arrow' ),
            'Meddon' => __( 'Meddon', 'mmba-wp-arrow' ),
            'MedievalSharp' => __( 'MedievalSharp', 'mmba-wp-arrow' ),
            'Megrim' => __( 'Megrim', 'mmba-wp-arrow' ),
            'Merriweather' => __( 'Merriweather', 'mmba-wp-arrow' ),
            'Metrophobic' => __( 'Metrophobic', 'mmba-wp-arrow' ),
            'Michroma' => __( 'Michroma', 'mmba-wp-arrow' ),
            'Miltonian Tattoo' => __( 'Miltonian Tattoo', 'mmba-wp-arrow' ),
            'Miltonian' => __( 'Miltonian', 'mmba-wp-arrow' ),
            'Modern Antiqua' => __( 'Modern Antiqua', 'mmba-wp-arrow' ),
            'Monofett' => __( 'Monofett', 'mmba-wp-arrow' ),
            'Molengo' => __( 'Molengo', 'mmba-wp-arrow' ),
            'Mountains of Christmas' => __( 'Mountains of Christmas', 'mmba-wp-arrow' ),
            'Muli:300' => __( 'Muli:300', 'mmba-wp-arrow' ), 
            'Muli' => __( 'Muli', 'mmba-wp-arrow' ), 
            'Neucha' => __( 'Neucha', 'mmba-wp-arrow' ),
            'Neuton' => __( 'Neuton', 'mmba-wp-arrow' ),
            'News Cycle' => __( 'News Cycle', 'mmba-wp-arrow' ),
            'Nixie One' => __( 'Nixie One', 'mmba-wp-arrow' ),
            'Nobile' => __( 'Nobile', 'mmba-wp-arrow' ),
            'Nova Cut' => __( 'Nova Cut', 'mmba-wp-arrow' ),
            'Nova Flat' => __( 'Nova Flat', 'mmba-wp-arrow' ),
            'Nova Mono' => __( 'Nova Mono', 'mmba-wp-arrow' ),
            'Nova Oval' => __( 'Nova Oval', 'mmba-wp-arrow' ),
            'Nova Round' => __( 'Nova Round', 'mmba-wp-arrow' ),
            'Nova Script' => __( 'Nova Script', 'mmba-wp-arrow' ),
            'Nova Slim' => __( 'Nova Slim', 'mmba-wp-arrow' ),
            'Nova Square' => __( 'Nova Square', 'mmba-wp-arrow' ),
            'Nunito:light' => __( 'Nunito:light', 'mmba-wp-arrow' ),
            'Nunito' => __( 'Nunito', 'mmba-wp-arrow' ),
            'OFL Sorts Mill Goudy TT' => __( 'OFL Sorts Mill Goudy TT', 'mmba-wp-arrow' ),
            'Old Standard TT' => __( 'Old Standard TT', 'mmba-wp-arrow' ),
            'Open Sans:300' => __( 'Open Sans:300', 'mmba-wp-arrow' ),
            'Open Sans' => __( 'Open Sans', 'mmba-wp-arrow' ),
            'Open Sans:600' => __( 'Open Sans:600', 'mmba-wp-arrow' ),
            'Open Sans:800' => __( 'Open Sans:800', 'mmba-wp-arrow' ),
            'Open Sans Condensed:300' => __( 'Open Sans Condensed:300', 'mmba-wp-arrow' ),
            'Orbitron' => __( 'Orbitron', 'mmba-wp-arrow' ),
            'Orbitron:500' => __( 'Orbitron:500', 'mmba-wp-arrow' ),
            'Orbitron:700' => __( 'Orbitron:700', 'mmba-wp-arrow' ),
            'Orbitron:900' => __( 'Orbitron:900', 'mmba-wp-arrow' ),
            'Oswald' => __( 'Oswald', 'mmba-wp-arrow' ),
            'Over the Rainbow' => __( 'Over the Rainbow', 'mmba-wp-arrow' ),
            'Reenie Beanie' => __( 'Reenie Beanie', 'mmba-wp-arrow' ),
            'Pacifico' => __( 'Pacifico', 'mmba-wp-arrow' ),
            'Patrick Hand' => __( 'Patrick Hand', 'mmba-wp-arrow' ),
            'Paytone One' => __( 'Paytone One', 'mmba-wp-arrow' ), 
            'Permanent Marker' => __( 'Permanent Marker', 'mmba-wp-arrow' ),
            'Philosopher' => __( 'Philosopher', 'mmba-wp-arrow' ),
            'Play' => __( 'Play', 'mmba-wp-arrow' ),
            'Playfair Display' => __( 'Playfair Display', 'mmba-wp-arrow' ),
            'Podkova' => __( 'Podkova', 'mmba-wp-arrow' ),
            'PT Sans' => __( 'PT Sans', 'mmba-wp-arrow' ),
            'PT Sans Narrow' => __( 'PT Sans Narrow', 'mmba-wp-arrow' ),
            'PT Sans Narrow:regular,bold' => __( 'PT Sans Narrow:regular,bold', 'mmba-wp-arrow' ),
            'PT Serif' => __( 'PT Serif', 'mmba-wp-arrow' ),
            'PT Serif Caption' => __( 'PT Serif Caption', 'mmba-wp-arrow' ),
            'Puritan' => __( 'Puritan', 'mmba-wp-arrow' ),
            'Quattrocento' => __( 'Quattrocento', 'mmba-wp-arrow' ),
            'Quattrocento Sans' => __( 'Quattrocento Sans', 'mmba-wp-arrow' ),
            'Radley' => __( 'Radley', 'mmba-wp-arrow' ),
            'Raleway:100' => __( 'Raleway:100', 'mmba-wp-arrow' ),
            'Redressed' => __( 'Redressed', 'mmba-wp-arrow' ),
            'Rock Salt' => __( 'Rock Salt', 'mmba-wp-arrow' ),
            'Rokkitt' => __( 'Rokkitt', 'mmba-wp-arrow' ),
            'Ruslan Display' => __( 'Ruslan Display', 'mmba-wp-arrow' ),
            'Schoolbell' => __( 'Schoolbell', 'mmba-wp-arrow' ),
            'Shadows Into Light' => __( 'Shadows Into Light', 'mmba-wp-arrow' ),
            'Shanti' => __( 'Shanti', 'mmba-wp-arrow' ),
            'Sigmar One' => __( 'Sigmar One', 'mmba-wp-arrow' ),
            'Six Caps' => __( 'Six Caps', 'mmba-wp-arrow' ),
            'Slackey' => __( 'Slackey', 'mmba-wp-arrow' ),
            'Smythe' => __( 'Smythe', 'mmba-wp-arrow' ),
            'Sniglet:800' => __( 'Sniglet:800', 'mmba-wp-arrow' ),
            'Special Elite' => __( 'Special Elite', 'mmba-wp-arrow' ),
            'Stardos Stencil' => __( 'Stardos Stencil', 'mmba-wp-arrow' ),
            'Sue Ellen Francisco' => __( 'Sue Ellen Francisco', 'mmba-wp-arrow' ),
            'Sunshiney' => __( 'Sunshiney', 'mmba-wp-arrow' ),
            'Swanky and Moo Moo' => __( 'Swanky and Moo Moo', 'mmba-wp-arrow' ),
            'Syncopate' => __( 'Syncopate', 'mmba-wp-arrow' ),
            'Tangerine' => __( 'Tangerine', 'mmba-wp-arrow' ),
            'Tenor Sans' => __( 'Tenor Sans', 'mmba-wp-arrow' ),
            'Terminal Dosis Light' => __( 'Terminal Dosis Light', 'mmba-wp-arrow' ),
            'The Girl Next Door' => __( 'The Girl Next Door', 'mmba-wp-arrow' ),
            'Tinos' => __( 'Tinos', 'mmba-wp-arrow' ),
            'Ubuntu' => __( 'Ubuntu', 'mmba-wp-arrow' ),
            'Ultra' => __( 'Ultra', 'mmba-wp-arrow' ),
            'Unkempt' => __( 'Unkempt', 'mmba-wp-arrow' ),
            'UnifrakturCook:bold' => __( 'UnifrakturCook:bold', 'mmba-wp-arrow' ),
            'UnifrakturMaguntia' => __( 'UnifrakturMaguntia', 'mmba-wp-arrow' ),
            'Varela' => __( 'Varela', 'mmba-wp-arrow' ),
            'Varela Round' => __( 'Varela Round', 'mmba-wp-arrow' ),
            'Vibur' => __( 'Vibur', 'mmba-wp-arrow' ),
            'Vollkorn' => __( 'Vollkorn', 'mmba-wp-arrow' ),
            'VT323' => __( 'VT323', 'mmba-wp-arrow' ),
            'Waiting for the Sunrise' => __( 'Waiting for the Sunrise', 'mmba-wp-arrow' ),
            'Wallpoet' => __( 'Wallpoet', 'mmba-wp-arrow' ),
            'Walter Turncoat' => __( 'Walter Turncoat', 'mmba-wp-arrow' ),
            'Wire One' => __( 'Wire One', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:300' => __( 'Yanone Kaffeesatz:300', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:400' => __( 'Yanone Kaffeesatz:400', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:700' => __( 'Yanone Kaffeesatz:700', 'mmba-wp-arrow' ),
            'Yeseva One' => __( 'Yeseva One', 'mmba-wp-arrow' ),
            'Zeyada' => __( 'Zeyada', 'mmba-wp-arrow' )
        )
    );

    // Notify button
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_section",
        "label" => __( "Notify button text", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "color",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_color",
        "label" => __( "Color", 'mmba-wp-arrow' ),
        "default_value" => "#FF5733"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_size",
        "label" => __( "Size", 'mmba-wp-arrow' ),
        "default_value" => "12",
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
        "append_text" => "px"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_font",
        "label" => __( "Font", 'mmba-wp-arrow' ),
        "option_values" => array(
            '' => __( '---select---', 'mmba-wp-arrow' ),
            'Aclonica' => __( 'Aclonica', 'mmba-wp-arrow' ),
            'Allan' => __( 'Allan', 'mmba-wp-arrow' ),
            'Annie Use Your Telescope' => __( 'Annie Use Your Telescope', 'mmba-wp-arrow' ),
            'Anonymous Pro' => __( 'Anonymous Pro', 'mmba-wp-arrow' ),
            'Allerta Stencil' => __( 'Allerta Stencil', 'mmba-wp-arrow' ),
            'Allerta' => __( 'Allerta', 'mmba-wp-arrow' ),
            'Amaranth' => __( 'Amaranth', 'mmba-wp-arrow' ),
            'Anton' => __( 'Anton', 'mmba-wp-arrow' ),
            'Architects Daughter' => __( 'Architects Daughter', 'mmba-wp-arrow' ),
            'Arimo' => __( 'Arimo', 'mmba-wp-arrow' ),
            'Artifika' => __( 'Artifika', 'mmba-wp-arrow' ),
            'Arvo' => __( 'Arvo', 'mmba-wp-arrow' ),
            'Asset' => __( 'Asset', 'mmba-wp-arrow' ),
            'Astloch' => __( 'Astloch', 'mmba-wp-arrow' ),
            'Bangers' => __( 'Bangers', 'mmba-wp-arrow' ),
            'Bentham' => __( 'Bentham', 'mmba-wp-arrow' ),
            'Bevan' => __( 'Bevan', 'mmba-wp-arrow' ),
            'Bigshot One' => __( 'Bigshot One', 'mmba-wp-arrow' ),
            'Bowlby One' => __( 'Bowlby One', 'mmba-wp-arrow' ),
            'Bowlby One SC' => __( 'Bowlby One SC', 'mmba-wp-arrow' ),
            'Brawler' => __( 'Brawler', 'mmba-wp-arrow' ),
            'Buda:300' => __( 'Buda:300', 'mmba-wp-arrow' ),
            'Cabin' => __( 'Cabin', 'mmba-wp-arrow' ),
            'Calligraffitti' => __( 'Calligraffitti', 'mmba-wp-arrow' ),
            'Candal' => __( 'Candal', 'mmba-wp-arrow' ),
            'Cantarell' => __( 'Cantarell', 'mmba-wp-arrow' ),
            'Cardo' => __( 'Cardo', 'mmba-wp-arrow' ),
            'Carter One' => __( 'Carter One', 'mmba-wp-arrow' ),
            'Caudex' => __( 'Caudex', 'mmba-wp-arrow' ),
            'Cedarville Cursive' => __( 'Cedarville Cursive', 'mmba-wp-arrow' ),
            'Cherry Cream Soda' => __( 'Cherry Cream Soda', 'mmba-wp-arrow' ),
            'Chewy' => __( 'Chewy', 'mmba-wp-arrow' ),
            'Coda' => __( 'Coda', 'mmba-wp-arrow' ),
            'Coming Soon' => __( 'Coming Soon', 'mmba-wp-arrow' ),
            'Copse' => __( 'Copse', 'mmba-wp-arrow' ),
            'Corben:700' => __( 'Corben:700', 'mmba-wp-arrow' ),
            'Cousine' => __( 'Cousine', 'mmba-wp-arrow' ),
            'Covered By Your Grace' => __( 'Covered By Your Grace', 'mmba-wp-arrow' ),
            'Crafty Girls' => __( 'Crafty Girls', 'mmba-wp-arrow' ),
            'Crimson Text' => __( 'Crimson Text', 'mmba-wp-arrow' ),
            'Crushed' => __( 'Crushed', 'mmba-wp-arrow' ),
            'Cuprum' => __( 'Cuprum', 'mmba-wp-arrow' ),
            'Damion' => __( 'Damion', 'mmba-wp-arrow' ),
            'Dancing Script' => __( 'Dancing Script', 'mmba-wp-arrow' ),
            'Dawning of a New Day' => __( 'Dawning of a New Day', 'mmba-wp-arrow' ),
            'Didact Gothic' => __( 'Didact Gothic', 'mmba-wp-arrow' ),
            'Droid Sans' => __( 'Droid Sans', 'mmba-wp-arrow' ),
            'Droid Sans Mono' => __( 'Droid Sans Mono', 'mmba-wp-arrow' ),
            'Droid Serif' => __( 'Droid Serif', 'mmba-wp-arrow' ),
            'EB Garamond' => __( 'EB Garamond', 'mmba-wp-arrow' ),
            'Expletus Sans' => __( 'Expletus Sans', 'mmba-wp-arrow' ),
            'Fontdiner Swanky' => __( 'Fontdiner Swanky', 'mmba-wp-arrow' ),
            'Forum' => __( 'Forum', 'mmba-wp-arrow' ),
            'Francois One' => __( 'Francois One', 'mmba-wp-arrow' ),
            'Geo' => __( 'Geo', 'mmba-wp-arrow' ),
            'Give You Glory' => __( 'Give You Glory', 'mmba-wp-arrow' ),
            'Goblin One' => __( 'Goblin One', 'mmba-wp-arrow' ),
            'Goudy Bookletter 1911' => __( 'Goudy Bookletter 1911', 'mmba-wp-arrow' ),
            'Gravitas One' => __( 'Gravitas One', 'mmba-wp-arrow' ),
            'Gruppo' => __( 'Gruppo', 'mmba-wp-arrow' ),
            'Hammersmith One' => __( 'Hammersmith One', 'mmba-wp-arrow' ),
            'Holtwood One SC' => __( 'Holtwood One SC', 'mmba-wp-arrow' ),
            'Homemade Apple' => __( 'Homemade Apple', 'mmba-wp-arrow' ),
            'Inconsolata' => __( 'Inconsolata', 'mmba-wp-arrow' ),
            'Indie Flower' => __( 'Indie Flower', 'mmba-wp-arrow' ),
            'IM Fell DW Pica' => __( 'IM Fell DW Pica', 'mmba-wp-arrow' ),
            'IM Fell DW Pica SC' => __( 'IM Fell DW Pica SC', 'mmba-wp-arrow' ),
            'IM Fell Double Pica' => __( 'IM Fell Double Pica', 'mmba-wp-arrow' ),
            'IM Fell Double Pica SC' => __( 'IM Fell Double Pica SC', 'mmba-wp-arrow' ),
            'IM Fell English' => __( 'IM Fell English', 'mmba-wp-arrow' ),
            'IM Fell English SC' => __( 'IM Fell English SC', 'mmba-wp-arrow' ),
            'IM Fell French Canon' => __( 'IM Fell French Canon', 'mmba-wp-arrow' ),
            'IM Fell French Canon SC' => __( 'IM Fell French Canon SC', 'mmba-wp-arrow' ),
            'IM Fell Great Primer' => __( 'IM Fell Great Primer', 'mmba-wp-arrow' ),
            'IM Fell Great Primer SC' => __( 'IM Fell Great Primer SC', 'mmba-wp-arrow' ),
            'Irish Grover' => __( 'Irish Grover', 'mmba-wp-arrow' ),
            'Irish Growler' => __( 'Irish Growler', 'mmba-wp-arrow' ),
            'Istok Web' => __( 'Istok Web', 'mmba-wp-arrow' ),
            'Josefin Sans' => __( 'Josefin Sans', 'mmba-wp-arrow' ),
            'Josefin Slab' => __( 'Josefin Slab', 'mmba-wp-arrow' ),
            'Judson' => __( 'Judson', 'mmba-wp-arrow' ),
            'Jura' => __( 'Jura', 'mmba-wp-arrow' ),
            'Jura:500' => __( 'Jura:500', 'mmba-wp-arrow' ),
            'Jura:600' => __( 'Jura:600', 'mmba-wp-arrow' ),
            'Just Another Hand' => __( 'Just Another Hand', 'mmba-wp-arrow' ),
            'Just Me Again Down Here' => __( 'Just Me Again Down Here', 'mmba-wp-arrow' ),
            'Kameron' => __( 'Kameron', 'mmba-wp-arrow' ),
            'Kenia' => __( 'Kenia', 'mmba-wp-arrow' ),
            'Kranky' => __( 'Kranky', 'mmba-wp-arrow' ),
            'Kreon' => __( 'Kreon', 'mmba-wp-arrow' ),
            'Kristi' => __( 'Kristi', 'mmba-wp-arrow' ),
            'La Belle Aurore' => __( 'La Belle Aurore', 'mmba-wp-arrow' ),
            'Lato:100' => __( 'Lato:100', 'mmba-wp-arrow' ),
            'Lato:100italic' => __( 'Lato:100italic', 'mmba-wp-arrow' ),
            'Lato:300' => __( 'Lato:300', 'mmba-wp-arrow' ), 
            'Lato' => __( 'Lato', 'mmba-wp-arrow' ),
            'Lato:bold' => __( 'Lato:bold', 'mmba-wp-arrow' ),  
            'Lato:900' => __( 'Lato:900', 'mmba-wp-arrow' ),
            'League Script' => __( 'League Script', 'mmba-wp-arrow' ),
            'Lekton' => __( 'Lekton', 'mmba-wp-arrow' ),  
            'Limelight' => __( 'Limelight', 'mmba-wp-arrow' ),  
            'Lobster' => __( 'Lobster', 'mmba-wp-arrow' ),
            'Lobster Two' => __( 'Lobster Two', 'mmba-wp-arrow' ),
            'Lora' => __( 'Lora', 'mmba-wp-arrow' ),
            'Love Ya Like A Sister' => __( 'Love Ya Like A Sister', 'mmba-wp-arrow' ),
            'Loved by the King' => __( 'Loved by the King', 'mmba-wp-arrow' ),
            'Luckiest Guy' => __( 'Luckiest Guy', 'mmba-wp-arrow' ),
            'Maiden Orange' => __( 'Maiden Orange', 'mmba-wp-arrow' ),
            'Mako' => __( 'Mako', 'mmba-wp-arrow' ),
            'Maven Pro' => __( 'Maven Pro', 'mmba-wp-arrow' ),
            'Maven Pro:500' => __( 'Maven Pro:500', 'mmba-wp-arrow' ),
            'Maven Pro:700' => __( 'Maven Pro:700', 'mmba-wp-arrow' ),
            'Maven Pro:900' => __( 'Maven Pro:900', 'mmba-wp-arrow' ),
            'Meddon' => __( 'Meddon', 'mmba-wp-arrow' ),
            'MedievalSharp' => __( 'MedievalSharp', 'mmba-wp-arrow' ),
            'Megrim' => __( 'Megrim', 'mmba-wp-arrow' ),
            'Merriweather' => __( 'Merriweather', 'mmba-wp-arrow' ),
            'Metrophobic' => __( 'Metrophobic', 'mmba-wp-arrow' ),
            'Michroma' => __( 'Michroma', 'mmba-wp-arrow' ),
            'Miltonian Tattoo' => __( 'Miltonian Tattoo', 'mmba-wp-arrow' ),
            'Miltonian' => __( 'Miltonian', 'mmba-wp-arrow' ),
            'Modern Antiqua' => __( 'Modern Antiqua', 'mmba-wp-arrow' ),
            'Monofett' => __( 'Monofett', 'mmba-wp-arrow' ),
            'Molengo' => __( 'Molengo', 'mmba-wp-arrow' ),
            'Mountains of Christmas' => __( 'Mountains of Christmas', 'mmba-wp-arrow' ),
            'Muli:300' => __( 'Muli:300', 'mmba-wp-arrow' ), 
            'Muli' => __( 'Muli', 'mmba-wp-arrow' ), 
            'Neucha' => __( 'Neucha', 'mmba-wp-arrow' ),
            'Neuton' => __( 'Neuton', 'mmba-wp-arrow' ),
            'News Cycle' => __( 'News Cycle', 'mmba-wp-arrow' ),
            'Nixie One' => __( 'Nixie One', 'mmba-wp-arrow' ),
            'Nobile' => __( 'Nobile', 'mmba-wp-arrow' ),
            'Nova Cut' => __( 'Nova Cut', 'mmba-wp-arrow' ),
            'Nova Flat' => __( 'Nova Flat', 'mmba-wp-arrow' ),
            'Nova Mono' => __( 'Nova Mono', 'mmba-wp-arrow' ),
            'Nova Oval' => __( 'Nova Oval', 'mmba-wp-arrow' ),
            'Nova Round' => __( 'Nova Round', 'mmba-wp-arrow' ),
            'Nova Script' => __( 'Nova Script', 'mmba-wp-arrow' ),
            'Nova Slim' => __( 'Nova Slim', 'mmba-wp-arrow' ),
            'Nova Square' => __( 'Nova Square', 'mmba-wp-arrow' ),
            'Nunito:light' => __( 'Nunito:light', 'mmba-wp-arrow' ),
            'Nunito' => __( 'Nunito', 'mmba-wp-arrow' ),
            'OFL Sorts Mill Goudy TT' => __( 'OFL Sorts Mill Goudy TT', 'mmba-wp-arrow' ),
            'Old Standard TT' => __( 'Old Standard TT', 'mmba-wp-arrow' ),
            'Open Sans:300' => __( 'Open Sans:300', 'mmba-wp-arrow' ),
            'Open Sans' => __( 'Open Sans', 'mmba-wp-arrow' ),
            'Open Sans:600' => __( 'Open Sans:600', 'mmba-wp-arrow' ),
            'Open Sans:800' => __( 'Open Sans:800', 'mmba-wp-arrow' ),
            'Open Sans Condensed:300' => __( 'Open Sans Condensed:300', 'mmba-wp-arrow' ),
            'Orbitron' => __( 'Orbitron', 'mmba-wp-arrow' ),
            'Orbitron:500' => __( 'Orbitron:500', 'mmba-wp-arrow' ),
            'Orbitron:700' => __( 'Orbitron:700', 'mmba-wp-arrow' ),
            'Orbitron:900' => __( 'Orbitron:900', 'mmba-wp-arrow' ),
            'Oswald' => __( 'Oswald', 'mmba-wp-arrow' ),
            'Over the Rainbow' => __( 'Over the Rainbow', 'mmba-wp-arrow' ),
            'Reenie Beanie' => __( 'Reenie Beanie', 'mmba-wp-arrow' ),
            'Pacifico' => __( 'Pacifico', 'mmba-wp-arrow' ),
            'Patrick Hand' => __( 'Patrick Hand', 'mmba-wp-arrow' ),
            'Paytone One' => __( 'Paytone One', 'mmba-wp-arrow' ), 
            'Permanent Marker' => __( 'Permanent Marker', 'mmba-wp-arrow' ),
            'Philosopher' => __( 'Philosopher', 'mmba-wp-arrow' ),
            'Play' => __( 'Play', 'mmba-wp-arrow' ),
            'Playfair Display' => __( 'Playfair Display', 'mmba-wp-arrow' ),
            'Podkova' => __( 'Podkova', 'mmba-wp-arrow' ),
            'PT Sans' => __( 'PT Sans', 'mmba-wp-arrow' ),
            'PT Sans Narrow' => __( 'PT Sans Narrow', 'mmba-wp-arrow' ),
            'PT Sans Narrow:regular,bold' => __( 'PT Sans Narrow:regular,bold', 'mmba-wp-arrow' ),
            'PT Serif' => __( 'PT Serif', 'mmba-wp-arrow' ),
            'PT Serif Caption' => __( 'PT Serif Caption', 'mmba-wp-arrow' ),
            'Puritan' => __( 'Puritan', 'mmba-wp-arrow' ),
            'Quattrocento' => __( 'Quattrocento', 'mmba-wp-arrow' ),
            'Quattrocento Sans' => __( 'Quattrocento Sans', 'mmba-wp-arrow' ),
            'Radley' => __( 'Radley', 'mmba-wp-arrow' ),
            'Raleway:100' => __( 'Raleway:100', 'mmba-wp-arrow' ),
            'Redressed' => __( 'Redressed', 'mmba-wp-arrow' ),
            'Rock Salt' => __( 'Rock Salt', 'mmba-wp-arrow' ),
            'Rokkitt' => __( 'Rokkitt', 'mmba-wp-arrow' ),
            'Ruslan Display' => __( 'Ruslan Display', 'mmba-wp-arrow' ),
            'Schoolbell' => __( 'Schoolbell', 'mmba-wp-arrow' ),
            'Shadows Into Light' => __( 'Shadows Into Light', 'mmba-wp-arrow' ),
            'Shanti' => __( 'Shanti', 'mmba-wp-arrow' ),
            'Sigmar One' => __( 'Sigmar One', 'mmba-wp-arrow' ),
            'Six Caps' => __( 'Six Caps', 'mmba-wp-arrow' ),
            'Slackey' => __( 'Slackey', 'mmba-wp-arrow' ),
            'Smythe' => __( 'Smythe', 'mmba-wp-arrow' ),
            'Sniglet:800' => __( 'Sniglet:800', 'mmba-wp-arrow' ),
            'Special Elite' => __( 'Special Elite', 'mmba-wp-arrow' ),
            'Stardos Stencil' => __( 'Stardos Stencil', 'mmba-wp-arrow' ),
            'Sue Ellen Francisco' => __( 'Sue Ellen Francisco', 'mmba-wp-arrow' ),
            'Sunshiney' => __( 'Sunshiney', 'mmba-wp-arrow' ),
            'Swanky and Moo Moo' => __( 'Swanky and Moo Moo', 'mmba-wp-arrow' ),
            'Syncopate' => __( 'Syncopate', 'mmba-wp-arrow' ),
            'Tangerine' => __( 'Tangerine', 'mmba-wp-arrow' ),
            'Tenor Sans' => __( 'Tenor Sans', 'mmba-wp-arrow' ),
            'Terminal Dosis Light' => __( 'Terminal Dosis Light', 'mmba-wp-arrow' ),
            'The Girl Next Door' => __( 'The Girl Next Door', 'mmba-wp-arrow' ),
            'Tinos' => __( 'Tinos', 'mmba-wp-arrow' ),
            'Ubuntu' => __( 'Ubuntu', 'mmba-wp-arrow' ),
            'Ultra' => __( 'Ultra', 'mmba-wp-arrow' ),
            'Unkempt' => __( 'Unkempt', 'mmba-wp-arrow' ),
            'UnifrakturCook:bold' => __( 'UnifrakturCook:bold', 'mmba-wp-arrow' ),
            'UnifrakturMaguntia' => __( 'UnifrakturMaguntia', 'mmba-wp-arrow' ),
            'Varela' => __( 'Varela', 'mmba-wp-arrow' ),
            'Varela Round' => __( 'Varela Round', 'mmba-wp-arrow' ),
            'Vibur' => __( 'Vibur', 'mmba-wp-arrow' ),
            'Vollkorn' => __( 'Vollkorn', 'mmba-wp-arrow' ),
            'VT323' => __( 'VT323', 'mmba-wp-arrow' ),
            'Waiting for the Sunrise' => __( 'Waiting for the Sunrise', 'mmba-wp-arrow' ),
            'Wallpoet' => __( 'Wallpoet', 'mmba-wp-arrow' ),
            'Walter Turncoat' => __( 'Walter Turncoat', 'mmba-wp-arrow' ),
            'Wire One' => __( 'Wire One', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:300' => __( 'Yanone Kaffeesatz:300', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:400' => __( 'Yanone Kaffeesatz:400', 'mmba-wp-arrow' ),
            'Yanone Kaffeesatz:700' => __( 'Yanone Kaffeesatz:700', 'mmba-wp-arrow' ),
            'Yeseva One' => __( 'Yeseva One', 'mmba-wp-arrow' ),
            'Zeyada' => __( 'Zeyada', 'mmba-wp-arrow' )
        )
    );

    // Template
/*    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_template",
        "label" => __( "Template", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textarea",
        "id" => MMBA_ARROW_ID_PREFIX."_custom_css",
        "class" => "adjust_textarea",
        "label" => __( "Custom CSS", 'mmba-wp-arrow' )
    );
*/
    // Notification Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_notification",
        "label" => __( "Notification", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_notification"
    );

    // Email
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_email",
        "label" => __( "Email", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_email_status",
        "label" => __( "Active", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( 'Disabled', 'mmba-wp-arrow' ),
            '1' => __( 'Enable', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_email_placeholder",
        "label" => __( "Placeholder", 'mmba-wp-arrow' ),
        "default_value" => "Enter email"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_email_width",
        "label" => __( "Width", 'mmba-wp-arrow' ),
        "append_text" => "px",
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_email_length",
        "label" => __( "Length", 'mmba-wp-arrow' ),
        "append_text" => "px",
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
    );

    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_notify",
        "label" => __( "Notify Button", 'mmba-wp-arrow' )
    );      

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_text",
        "label" => __( "Text", 'mmba-wp-arrow' ),
        "default_value" => "Notify me!"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "numeric",
        "id" => MMBA_ARROW_ID_PREFIX."_notify_button_border_radius",
        "label" => __( "Border radius", 'mmba-wp-arrow' ),
        "append_text" => "px",
        "class" => MMBA_ARROW_ID_PREFIX."_adjust_width",
    );

    // $mmba_arrow_options[ ] = array(
    //     "type" => "numeric",
    //     "id" => MMBA_ARROW_ID_PREFIX."_notify_button_text_border_radius",
    //     "label" => __( "Text border radius", 'mmba-wp-arrow' ),
    //     "default_value" => "5"
    // );

    //Social link Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link",
        "label" => __( "Social link", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_social_link",
    );

    // Social link
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_social_link",
        "label" => __( "Social link", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_status",
        "label" => __( "Enable", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( 'Off', 'mmba-wp-arrow' ),
            '1' => __( 'On', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_fb_active",
        "label" => __( "Show facebook icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "socialtextfield",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_fb_page_name",
        "label" => __( "Facebook Page URL", 'mmba-wp-arrow' ),
        "social_link" => "www.facebook.com/"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_twitter_active",
        "label" => __( "Show twitter icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "socialtextfield",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_twitter_page_name",
        "label" => __( "Twitter Page URL", 'mmba-wp-arrow' ),
        "social_link" => "www.twitter.com/"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_googleplus_active",
        "label" => __( "Show google+ icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "socialtextfield",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_googleplus_page_name",
        "label" => __( "Google+ Page URL", 'mmba-wp-arrow' ),
        "social_link" => "www.plus.google.com/"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_linkedin_active",
        "label" => __( "Show linkedin icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "socialtextfield",
        "id" => MMBA_ARROW_ID_PREFIX."_social_link_linkedin_page_name",
        "label" => __( "Linkedin Page URL", 'mmba-wp-arrow' ),
        "social_link" => "www.linkedin.com/in/"
    );

    //Social icon Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon",
        "label" => __( "Social icon", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_social_icon",
    );

    // Social Icon
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_social_icon",
        "label" => __( "Social icon", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_status",
        "label" => __( "Active", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( 'Off', 'mmba-wp-arrow' ),
            '1' => __( 'On', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_facebook_active",
        "label" => __( "Show facebook icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_twitter_active",
        "label" => __( "Show twitter icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_googleplus_active",
        "label" => __( "Show google+ icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "0"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "checkbox",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_linkedin_active",
        "label" => __( "Show linkedin icon", 'mmba-wp-arrow' ),
        "option_values" => array(
             '1' => __( 'Yes', 'mmba-wp-arrow' )
        ),
        "default_value" => "1"
    );

    // Social icon themes
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_social_icon_theme",
        "label" => __( "Social icon theme", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio_img",
        "id" => MMBA_ARROW_ID_PREFIX."_social_icon_theme",
        "label" => __( "Icons", 'mmba-wp-arrow' ),
        "option_values" => array(
            '1' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                ),
            '2' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                ),
            '3' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                ),
            '4' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                ),
            '5' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                ),
            '6' => array(
                    '1' => array(
                        'path' => 'socialicon',
                        'link' => 'facebook.png',
                        'alt' => 'Facebook',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '2' => array(
                        'path' => 'socialicon',
                        'link' => 'twitter.png',
                        'alt' => 'Twitter',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '3' => array(
                        'path' => 'socialicon',
                        'link' => 'linkedin.png',
                        'alt' => 'LinkedIn',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '0'
                    ),
                    '4' => array(
                        'path' => 'socialicon',
                        'link' => 'googleplus.png',
                        'alt' => 'Google+',
                        'width' => '20',
                        'height' => '20',
                        'breakline' => '1'
                    )
                )
        ),
        "default_value" => "1"
    );

    //Template icon Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_template",
        "label" => __( "Template", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_template",
    );

    // Social icon Template
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_template",
        "label" => __( "Templates", 'mmba-wp-arrow' )
    );

    //Template
    $mmba_arrow_options[ ] = array(
        "type" => "radio_img",
        "id" => MMBA_ARROW_ID_PREFIX."_templates",
        "label" => __( "Select template", 'mmba-wp-arrow' ),
        "option_values" => array(
    
            '0' => array(
                '1' => array(
                    'path' => 'templates',
                    'link' => 'images/background.jpg',
                    'alt' => 'Template0',
                    'width' => '150',
                    'height' => '150',
                    'breakline' => '0'
                )
            ),
            '1' => array(
                '1' => array(
                    'path' => 'templates',
                    'link' => 'images/background.jpg',
                    'alt' => 'Template1',
                    'width' => '150',
                    'height' => '150',
                    'breakline' => '1'
                )
            ),
            '2' => array(
                '1' => array(
                    'path' => 'templates',
                    'link' => 'images/background.jpg',
                    'alt' => 'Template2',
                    'width' => '150',
                    'height' => '150',
                    'breakline' => '0'
                )
            ),
            '3' => array(
                '1' => array(
                    'path' => 'templates',
                    'link' => 'images/background.jpg',
                    'alt' => 'Template3',
                    'width' => '150',
                    'height' => '150',
                    'breakline' => '1'
                )
            ), 
            '4' => array(
                '1' => array(
                    'path' => 'templates',
                    'link' => 'images/background.jpg',
                    'alt' => 'Template4',
                    'width' => '150',
                    'height' => '150',
                    'breakline' => '0'
                )
            ),
            '5' => array(
                    '1' => array(
                        'path' => 'templates',
                        'link' => 'images/background.jpg',
                        'alt' => 'Template5',
                        'width' => '150',
                        'height' => '150',
                        'breakline' => '1'
                    )
                ),
            '6' => array(
                    '1' => array(
                        'path' => 'templates',
                        'link' => 'images/background.jpg',
                        'alt' => 'Template6',
                        'width' => '150',
                        'height' => '150',
                        'breakline' => '0'
                    )
                ),
            '7' => array(
                    '1' => array(
                        'path' => 'templates',
                        'link' => 'images/background.jpg',
                        'alt' => 'Template7',
                        'width' => '150',
                        'height' => '150',
                        'breakline' => '1'
                    )
                ),
            '8' => array(
                    '1' => array(
                        'path' => 'templates',
                        'link' => 'images/background.jpg',
                        'alt' => 'Template8',
                        'width' => '150',
                        'height' => '150',
                        'breakline' => '0'
                    )
                ),
            '9' => array(
                    '1' => array(
                        'path' => 'templates',
                        'link' => 'images/background.jpg',
                        'alt' => 'Template9',
                        'width' => '150',
                        'height' => '150',
                        'breakline' => '1'
                    )
                )                           
            )
    );

    //Advance icon Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_advance",
        "label" => __( "Advance", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_advance",
    );

    //progress bar
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_advance_progress_bar",
        "label" => __( "Progress bar", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_status",
        "label" => __( "Active", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( 'Off', 'mmba-wp-arrow' ),
            '1' => __( 'On', 'mmba-wp-arrow' )
        ),
        "default_value" => "0"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_timezone",
        "label" => __( "Timezone", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( '---select---', 'mmba-wp-arrow' ),
            'Africa/Abidjan' => __( 'UTC/GMT +00:00 - Africa/Abidjan', 'mmba-wp-arrow' ),
            'Africa/Accra' => __( 'UTC/GMT +00:00 - Africa/Accra', 'mmba-wp-arrow' ),
            'Africa/Addis_Ababa' => __( 'UTC/GMT +03:00 - Africa/Addis_Ababa', 'mmba-wp-arrow' ),
            'Africa/Algiers' => __( 'UTC/GMT +01:00 - Africa/Algiers', 'mmba-wp-arrow' ),
            'Africa/Asmara' => __( 'UTC/GMT +03:00 - Africa/Asmara', 'mmba-wp-arrow' ),
            'Africa/Bamako' => __( 'UTC/GMT +00:00 - Africa/Bamako', 'mmba-wp-arrow' ),
            'Africa/Bangui' => __( 'UTC/GMT +01:00 - Africa/Bangui', 'mmba-wp-arrow' ),
            'Africa/Banjul' => __( 'UTC/GMT +00:00 - Africa/Banjul', 'mmba-wp-arrow' ),
            'Africa/Bissau' => __( 'UTC/GMT +00:00 - Africa/Bissau', 'mmba-wp-arrow' ),
            'Africa/Blantyre' => __( 'UTC/GMT +02:00 - Africa/Blantyre', 'mmba-wp-arrow' ),
            'Africa/Brazzaville' => __( 'UTC/GMT +01:00 - Africa/Brazzaville', 'mmba-wp-arrow' ),
            'Africa/Bujumbura' => __( 'UTC/GMT +02:00 - Africa/Bujumbura', 'mmba-wp-arrow' ),
            'Africa/Cairo' => __( 'UTC/GMT +02:00 - Africa/Cairo', 'mmba-wp-arrow' ),
            'Africa/Casablanca' => __( 'UTC/GMT +00:00 - Africa/Casablanca', 'mmba-wp-arrow' ),
            'Africa/Ceuta' => __( 'UTC/GMT +02:00 - Africa/Ceuta', 'mmba-wp-arrow' ),
            'Africa/Conakry' => __( 'UTC/GMT +00:00 - Africa/Conakry', 'mmba-wp-arrow' ),
            'Africa/Dakar' => __( 'UTC/GMT +00:00 - Africa/Dakar', 'mmba-wp-arrow' ),
            'Africa/Dar_es_Salaam' => __( 'UTC/GMT +03:00 - Africa/Dar_es_Salaam', 'mmba-wp-arrow' ),
            'Africa/Djibouti' => __( 'UTC/GMT +03:00 - Africa/Djibouti', 'mmba-wp-arrow' ),
            'Africa/Douala' => __( 'UTC/GMT +01:00 - Africa/Douala', 'mmba-wp-arrow' ),
            'Africa/El_Aaiun' => __( 'UTC/GMT +00:00 - Africa/El_Aaiun', 'mmba-wp-arrow' ),
            'Africa/Freetown' => __( 'UTC/GMT +00:00 - Africa/Freetown', 'mmba-wp-arrow' ),
            'Africa/Gaborone' => __( 'UTC/GMT +02:00 - Africa/Gaborone', 'mmba-wp-arrow' ),
            'Africa/Harare' => __( 'UTC/GMT +02:00 - Africa/Harare', 'mmba-wp-arrow' ),
            'Africa/Johannesburg' => __( 'UTC/GMT +02:00 - Africa/Johannesburg', 'mmba-wp-arrow' ),
            'Africa/Juba' => __( 'UTC/GMT +03:00 - Africa/Juba', 'mmba-wp-arrow' ),
            'Africa/Kampala' => __( 'UTC/GMT +03:00 - Africa/Kampala', 'mmba-wp-arrow' ),
            'Africa/Khartoum' => __( 'UTC/GMT +02:00 - Africa/Khartoum', 'mmba-wp-arrow' ),
            'Africa/Kigali' => __( 'UTC/GMT +02:00 - Africa/Kigali', 'mmba-wp-arrow' ),
            'Africa/Kinshasa' => __( 'UTC/GMT +01:00 - Africa/Kinshasa', 'mmba-wp-arrow' ),
            'Africa/Lagos' => __( 'UTC/GMT +01:00 - Africa/Lagos', 'mmba-wp-arrow' ),
            'Africa/Libreville' => __( 'UTC/GMT +01:00 - Africa/Libreville', 'mmba-wp-arrow' ),
            'Africa/Lome' => __( 'UTC/GMT +00:00 - Africa/Lome', 'mmba-wp-arrow' ),
            'Africa/Luanda' => __( 'UTC/GMT +01:00 - Africa/Luanda', 'mmba-wp-arrow' ),
            'Africa/Lubumbashi' => __( 'UTC/GMT +02:00 - Africa/Lubumbashi', 'mmba-wp-arrow' ),
            'Africa/Lusaka' => __( 'UTC/GMT +02:00 - Africa/Lusaka', 'mmba-wp-arrow' ),
            'Africa/Malabo' => __( 'UTC/GMT +01:00 - Africa/Malabo', 'mmba-wp-arrow' ),
            'Africa/Maputo' => __( 'UTC/GMT +02:00 - Africa/Maputo', 'mmba-wp-arrow' ),
            'Africa/Maseru' => __( 'UTC/GMT +02:00 - Africa/Maseru', 'mmba-wp-arrow' ),
            'Africa/Mbabane' => __( 'UTC/GMT +02:00 - Africa/Mbabane', 'mmba-wp-arrow' ),
            'Africa/Mogadishu' => __( 'UTC/GMT +03:00 - Africa/Mogadishu', 'mmba-wp-arrow' ),
            'Africa/Monrovia' => __( 'UTC/GMT +00:00 - Africa/Monrovia', 'mmba-wp-arrow' ),
            'Africa/Nairobi' => __( 'UTC/GMT +03:00 - Africa/Nairobi', 'mmba-wp-arrow' ),
            'Africa/Ndjamena' => __( 'UTC/GMT +01:00 - Africa/Ndjamena', 'mmba-wp-arrow' ),
            'Africa/Niamey' => __( 'UTC/GMT +01:00 - Africa/Niamey', 'mmba-wp-arrow' ),
            'Africa/Nouakchott' => __( 'UTC/GMT +00:00 - Africa/Nouakchott', 'mmba-wp-arrow' ),
            'Africa/Ouagadougou' => __( 'UTC/GMT +00:00 - Africa/Ouagadougou', 'mmba-wp-arrow' ),
            'Africa/Porto-Novo' => __( 'UTC/GMT +01:00 - Africa/Porto-Novo', 'mmba-wp-arrow' ),
            'Africa/Sao_Tome' => __( 'UTC/GMT +01:00 - Africa/Sao_Tome', 'mmba-wp-arrow' ),
            'Africa/Tripoli' => __( 'UTC/GMT +02:00 - Africa/Tripoli', 'mmba-wp-arrow' ),
            'Africa/Tunis' => __( 'UTC/GMT +01:00 - Africa/Tunis', 'mmba-wp-arrow' ),
            'Africa/Windhoek' => __( 'UTC/GMT +02:00 - Africa/Windhoek', 'mmba-wp-arrow' ),
            'America/Adak' => __( 'UTC/GMT -09:00 - America/Adak', 'mmba-wp-arrow' ),
            'America/Anchorage' => __( 'UTC/GMT -08:00 - America/Anchorage', 'mmba-wp-arrow' ),
            'America/Anguilla' => __( 'UTC/GMT -04:00 - America/Anguilla', 'mmba-wp-arrow' ),
            'America/Antigua' => __( 'UTC/GMT -04:00 - America/Antigua', 'mmba-wp-arrow' ),
            'America/Araguaina' => __( 'UTC/GMT -03:00 - America/Araguaina', 'mmba-wp-arrow' ),
            'America/Argentina/Buenos_Aires' => __( 'UTC/GMT -03:00 - America/Argentina/Buenos_Aires', 'mmba-wp-arrow' ),
            'America/Argentina/Catamarca' => __( 'UTC/GMT -03:00 - America/Argentina/Catamarca', 'mmba-wp-arrow' ),
            'America/Argentina/Cordoba' => __( 'UTC/GMT -03:00 - America/Argentina/Cordoba', 'mmba-wp-arrow' ),
            'America/Argentina/Jujuy' => __( 'UTC/GMT -03:00 - America/Argentina/Jujuy', 'mmba-wp-arrow' ),
            'America/Argentina/La_Rioja' => __( 'UTC/GMT -03:00 - America/Argentina/La_Rioja', 'mmba-wp-arrow' ),
            'America/Argentina/Mendoza' => __( 'UTC/GMT -03:00 - America/Argentina/Mendoza', 'mmba-wp-arrow' ),
            'America/Argentina/Rio_Gallegos' => __( 'UTC/GMT -03:00 - America/Argentina/Rio_Gallegos', 'mmba-wp-arrow' ),
            'America/Argentina/Salta' => __( 'UTC/GMT -03:00 - America/Argentina/Salta', 'mmba-wp-arrow' ),
            'America/Argentina/San_Juan' => __( 'UTC/GMT -03:00 - America/Argentina/San_Juan', 'mmba-wp-arrow' ),
            'America/Argentina/San_Luis' => __( 'UTC/GMT -03:00 - America/Argentina/San_Luis', 'mmba-wp-arrow' ),
            'America/Argentina/Tucuman' => __( 'UTC/GMT -03:00 - America/Argentina/Tucuman', 'mmba-wp-arrow' ),
            'America/Argentina/Ushuaia' => __( 'UTC/GMT -03:00 - America/Argentina/Ushuaia', 'mmba-wp-arrow' ),
            'America/Aruba' => __( 'UTC/GMT -04:00 - America/Aruba', 'mmba-wp-arrow' ),
            'America/Asuncion' => __( 'UTC/GMT -04:00 - America/Asuncion', 'mmba-wp-arrow' ),
            'America/Atikokan' => __( 'UTC/GMT -05:00 - America/Atikokan', 'mmba-wp-arrow' ),
            'America/Bahia' => __( 'UTC/GMT -03:00 - America/Bahia', 'mmba-wp-arrow' ),
            'America/Bahia_Banderas' => __( 'UTC/GMT -05:00 - America/Bahia_Banderas', 'mmba-wp-arrow' ),
            'America/Barbados' => __( 'UTC/GMT -04:00 - America/Barbados', 'mmba-wp-arrow' ),
            'America/Belem' => __( 'UTC/GMT -03:00 - America/Belem', 'mmba-wp-arrow' ),
            'America/Belize' => __( 'UTC/GMT -06:00 - America/Belize', 'mmba-wp-arrow' ),
            'America/Blanc-Sablon' => __( 'UTC/GMT -04:00 - America/Blanc-Sablon', 'mmba-wp-arrow' ),
            'America/Boa_Vista' => __( 'UTC/GMT -04:00 - America/Boa_Vista', 'mmba-wp-arrow' ),
            'America/Bogota' => __( 'UTC/GMT -05:00 - America/Bogota', 'mmba-wp-arrow' ),
            'America/Boise' => __( 'UTC/GMT -06:00 - America/Boise', 'mmba-wp-arrow' ),
            'America/Cambridge_Bay' => __( 'UTC/GMT -06:00 - America/Cambridge_Bay', 'mmba-wp-arrow' ),
            'America/Campo_Grande' => __( 'UTC/GMT -04:00 - America/Campo_Grande', 'mmba-wp-arrow' ),
            'America/Cancun' => __( 'UTC/GMT -05:00 - America/Cancun', 'mmba-wp-arrow' ),
            'America/Caracas' => __( 'UTC/GMT -04:00 - America/Caracas', 'mmba-wp-arrow' ),
            'America/Cayenne' => __( 'UTC/GMT -03:00 - America/Cayenne', 'mmba-wp-arrow' ),
            'America/Cayman' => __( 'UTC/GMT -05:00 - America/Cayman', 'mmba-wp-arrow' ),
            'America/Chicago' => __( 'UTC/GMT -05:00 - America/Chicago', 'mmba-wp-arrow' ),
            'America/Chihuahua' => __( 'UTC/GMT -06:00 - America/Chihuahua', 'mmba-wp-arrow' ),
            'America/Costa_Rica' => __( 'UTC/GMT -06:00 - America/Costa_Rica', 'mmba-wp-arrow' ),
            'America/Creston' => __( 'UTC/GMT -07:00 - America/Creston', 'mmba-wp-arrow' ),
            'America/Cuiaba' => __( 'UTC/GMT -04:00 - America/Cuiaba', 'mmba-wp-arrow' ),
            'America/Curacao' => __( 'UTC/GMT -04:00 - America/Curacao', 'mmba-wp-arrow' ),
            'America/Danmarkshavn' => __( 'UTC/GMT +00:00 - America/Danmarkshavn', 'mmba-wp-arrow' ),
            'America/Dawson' => __( 'UTC/GMT -07:00 - America/Dawson', 'mmba-wp-arrow' ),
            'America/Dawson_Creek' => __( 'UTC/GMT -07:00 - America/Dawson_Creek', 'mmba-wp-arrow' ),
            'America/Denver' => __( 'UTC/GMT -06:00 - America/Denver', 'mmba-wp-arrow' ),
            'America/Detroit' => __( 'UTC/GMT -04:00 - America/Detroit', 'mmba-wp-arrow' ),
            'America/Dominica' => __( 'UTC/GMT -04:00 - America/Dominica', 'mmba-wp-arrow' ),
            'America/Edmonton' => __( 'UTC/GMT -06:00 - America/Edmonton', 'mmba-wp-arrow' ),
            'America/Eirunepe' => __( 'UTC/GMT -05:00 - America/Eirunepe', 'mmba-wp-arrow' ),
            'America/El_Salvador' => __( 'UTC/GMT -06:00 - America/El_Salvador', 'mmba-wp-arrow' ),
            'America/Fort_Nelson' => __( 'UTC/GMT -07:00 - America/Fort_Nelson', 'mmba-wp-arrow' ),
            'America/Fortaleza' => __( 'UTC/GMT -03:00 - America/Fortaleza', 'mmba-wp-arrow' ),
            'America/Glace_Bay' => __( 'UTC/GMT -03:00 - America/Glace_Bay', 'mmba-wp-arrow' ),
            'America/Godthab' => __( 'UTC/GMT -02:00 - America/Godthab', 'mmba-wp-arrow' ),
            'America/Goose_Bay' => __( 'UTC/GMT -03:00 - America/Goose_Bay', 'mmba-wp-arrow' ),
            'America/Grand_Turk' => __( 'UTC/GMT -04:00 - America/Grand_Turk', 'mmba-wp-arrow' ),
            'America/Grenada' => __( 'UTC/GMT -04:00 - America/Grenada', 'mmba-wp-arrow' ),
            'America/Guadeloupe' => __( 'UTC/GMT -04:00 - America/Guadeloupe', 'mmba-wp-arrow' ),
            'America/Guatemala' => __( 'UTC/GMT -06:00 - America/Guatemala', 'mmba-wp-arrow' ),
            'America/Guayaquil' => __( 'UTC/GMT -05:00 - America/Guayaquil', 'mmba-wp-arrow' ),
            'America/Guyana' => __( 'UTC/GMT -04:00 - America/Guyana', 'mmba-wp-arrow' ),
            'America/Halifax' => __( 'UTC/GMT -03:00 - America/Halifax', 'mmba-wp-arrow' ),
            'America/Havana' => __( 'UTC/GMT -04:00 - America/Havana', 'mmba-wp-arrow' ),
            'America/Hermosillo' => __( 'UTC/GMT -07:00 - America/Hermosillo', 'mmba-wp-arrow' ),
            'America/Indiana/Indianapolis' => __( 'UTC/GMT -04:00 - America/Indiana/Indianapolis', 'mmba-wp-arrow' ),
            'America/Indiana/Knox' => __( 'UTC/GMT -05:00 - America/Indiana/Knox', 'mmba-wp-arrow' ),
            'America/Indiana/Marengo' => __( 'UTC/GMT -04:00 - America/Indiana/Marengo', 'mmba-wp-arrow' ),
            'America/Indiana/Petersburg' => __( 'UTC/GMT -04:00 - America/Indiana/Petersburg', 'mmba-wp-arrow' ),
            'America/Indiana/Tell_City' => __( 'UTC/GMT -05:00 - America/Indiana/Tell_City', 'mmba-wp-arrow' ),
            'America/Indiana/Vevay' => __( 'UTC/GMT -04:00 - America/Indiana/Vevay', 'mmba-wp-arrow' ),
            'America/Indiana/Vincennes' => __( 'UTC/GMT -04:00 - America/Indiana/Vincennes', 'mmba-wp-arrow' ),
            'America/Indiana/Winamac' => __( 'UTC/GMT -04:00 - America/Indiana/Winamac', 'mmba-wp-arrow' ),
            'America/Inuvik' => __( 'UTC/GMT -06:00 - America/Inuvik', 'mmba-wp-arrow' ),
            'America/Iqaluit' => __( 'UTC/GMT -04:00 - America/Iqaluit', 'mmba-wp-arrow' ),
            'America/Jamaica' => __( 'UTC/GMT -05:00 - America/Jamaica', 'mmba-wp-arrow' ),
            'America/Juneau' => __( 'UTC/GMT -08:00 - America/Juneau', 'mmba-wp-arrow' ),
            'America/Kentucky/Louisville' => __( 'UTC/GMT -04:00 - America/Kentucky/Louisville', 'mmba-wp-arrow' ),
            'America/Kentucky/Monticello' => __( 'UTC/GMT -04:00 - America/Kentucky/Monticello', 'mmba-wp-arrow' ),
            'America/Kralendijk' => __( 'UTC/GMT -04:00 - America/Kralendijk', 'mmba-wp-arrow' ),
            'America/La_Paz' => __( 'UTC/GMT -04:00 - America/La_Paz', 'mmba-wp-arrow' ),
            'America/Lima' => __( 'UTC/GMT -05:00 - America/Lima', 'mmba-wp-arrow' ),
            'America/Los_Angeles' => __( 'UTC/GMT -07:00 - America/Los_Angeles', 'mmba-wp-arrow' ),
            'America/Lower_Princes' => __( 'UTC/GMT -04:00 - America/Lower_Princes', 'mmba-wp-arrow' ),
            'America/Maceio' => __( 'UTC/GMT -03:00 - America/Maceio', 'mmba-wp-arrow' ),
            'America/Managua' => __( 'UTC/GMT -06:00 - America/Managua', 'mmba-wp-arrow' ),
            'America/Manaus' => __( 'UTC/GMT -04:00 - America/Manaus', 'mmba-wp-arrow' ),
            'America/Marigot' => __( 'UTC/GMT -04:00 - America/Marigot', 'mmba-wp-arrow' ),
            'America/Martinique' => __( 'UTC/GMT -04:00 - America/Martinique', 'mmba-wp-arrow' ),
            'America/Matamoros' => __( 'UTC/GMT -05:00 - America/Matamoros', 'mmba-wp-arrow' ),
            'America/Mazatlan' => __( 'UTC/GMT -06:00 - America/Mazatlan', 'mmba-wp-arrow' ),
            'America/Menominee' => __( 'UTC/GMT -05:00 - America/Menominee', 'mmba-wp-arrow' ),
            'America/Merida' => __( 'UTC/GMT -05:00 - America/Merida', 'mmba-wp-arrow' ),
            'America/Metlakatla' => __( 'UTC/GMT -08:00 - America/Metlakatla', 'mmba-wp-arrow' ),
            'America/Mexico_City' => __( 'UTC/GMT -05:00 - America/Mexico_City', 'mmba-wp-arrow' ),
            'America/Miquelon' => __( 'UTC/GMT -02:00 - America/Miquelon', 'mmba-wp-arrow' ),
            'America/Moncton' => __( 'UTC/GMT -03:00 - America/Moncton', 'mmba-wp-arrow' ),
            'America/Monterrey' => __( 'UTC/GMT -05:00 - America/Monterrey', 'mmba-wp-arrow' ),
            'America/Montevideo' => __( 'UTC/GMT -03:00 - America/Montevideo', 'mmba-wp-arrow' ),
            'America/Montserrat' => __( 'UTC/GMT -04:00 - America/Montserrat', 'mmba-wp-arrow' ),
            'America/Nassau' => __( 'UTC/GMT -04:00 - America/Nassau', 'mmba-wp-arrow' ),
            'America/New_York' => __( 'UTC/GMT -04:00 - America/New_York', 'mmba-wp-arrow' ),
            'America/Nipigon' => __( 'UTC/GMT -04:00 - America/Nipigon', 'mmba-wp-arrow' ),
            'America/Nome' => __( 'UTC/GMT -08:00 - America/Nome', 'mmba-wp-arrow' ),
            'America/Noronha' => __( 'UTC/GMT -02:00 - America/Noronha', 'mmba-wp-arrow' ),
            'America/North_Dakota/Beulah' => __( 'UTC/GMT -05:00 - America/North_Dakota/Beulah', 'mmba-wp-arrow' ),
            'America/North_Dakota/Center' => __( 'UTC/GMT -05:00 - America/North_Dakota/Center', 'mmba-wp-arrow' ),
            'America/North_Dakota/New_Salem' => __( 'UTC/GMT -05:00 - America/North_Dakota/New_Salem', 'mmba-wp-arrow' ),
            'America/Ojinaga' => __( 'UTC/GMT -06:00 - America/Ojinaga', 'mmba-wp-arrow' ),
            'America/Panama' => __( 'UTC/GMT -05:00 - America/Panama', 'mmba-wp-arrow' ),
            'America/Pangnirtung' => __( 'UTC/GMT -04:00 - America/Pangnirtung', 'mmba-wp-arrow' ),
            'America/Paramaribo' => __( 'UTC/GMT -03:00 - America/Paramaribo', 'mmba-wp-arrow' ),
            'America/Phoenix' => __( 'UTC/GMT -07:00 - America/Phoenix', 'mmba-wp-arrow' ),
            'America/Port-au-Prince' => __( 'UTC/GMT -04:00 - America/Port-au-Prince', 'mmba-wp-arrow' ),
            'America/Port_of_Spain' => __( 'UTC/GMT -04:00 - America/Port_of_Spain', 'mmba-wp-arrow' ),
            'America/Porto_Velho' => __( 'UTC/GMT -04:00 - America/Porto_Velho', 'mmba-wp-arrow' ),
            'America/Puerto_Rico' => __( 'UTC/GMT -04:00 - America/Puerto_Rico', 'mmba-wp-arrow' ),
            'America/Punta_Arenas' => __( 'UTC/GMT -03:00 - America/Punta_Arenas', 'mmba-wp-arrow' ),
            'America/Rainy_River' => __( 'UTC/GMT -05:00 - America/Rainy_River', 'mmba-wp-arrow' ),
            'America/Rankin_Inlet' => __( 'UTC/GMT -05:00 - America/Rankin_Inlet', 'mmba-wp-arrow' ),
            'America/Recife' => __( 'UTC/GMT -03:00 - America/Recife', 'mmba-wp-arrow' ),
            'America/Regina' => __( 'UTC/GMT -06:00 - America/Regina', 'mmba-wp-arrow' ),
            'America/Resolute' => __( 'UTC/GMT -05:00 - America/Resolute', 'mmba-wp-arrow' ),
            'America/Rio_Branco' => __( 'UTC/GMT -05:00 - America/Rio_Branco', 'mmba-wp-arrow' ),
            'America/Santarem' => __( 'UTC/GMT -03:00 - America/Santarem', 'mmba-wp-arrow' ),
            'America/Santiago' => __( 'UTC/GMT -04:00 - America/Santiago', 'mmba-wp-arrow' ),
            'America/Santo_Domingo' => __( 'UTC/GMT -04:00 - America/Santo_Domingo', 'mmba-wp-arrow' ),
            'America/Sao_Paulo' => __( 'UTC/GMT -03:00 - America/Sao_Paulo', 'mmba-wp-arrow' ),
            'America/Scoresbysund' => __( 'UTC/GMT +00:00 - America/Scoresbysund', 'mmba-wp-arrow' ),
            'America/Sitka' => __( 'UTC/GMT -08:00 - America/Sitka', 'mmba-wp-arrow' ),
            'America/St_Barthelemy' => __( 'UTC/GMT -04:00 - America/St_Barthelemy', 'mmba-wp-arrow' ),
            'America/St_Johns' => __( 'UTC/GMT -02:30 - America/St_Johns', 'mmba-wp-arrow' ),
            'America/St_Kitts' => __( 'UTC/GMT -04:00 - America/St_Kitts', 'mmba-wp-arrow' ),
            'America/St_Lucia' => __( 'UTC/GMT -04:00 - America/St_Lucia', 'mmba-wp-arrow' ),
            'America/St_Thomas' => __( 'UTC/GMT -04:00 - America/St_Thomas', 'mmba-wp-arrow' ),
            'America/St_Vincent' => __( 'UTC/GMT -04:00 - America/St_Vincent', 'mmba-wp-arrow' ),
            'America/Swift_Current' => __( 'UTC/GMT -06:00 - America/Swift_Current', 'mmba-wp-arrow' ),
            'America/Tegucigalpa' => __( 'UTC/GMT -06:00 - America/Tegucigalpa', 'mmba-wp-arrow' ),
            'America/Thule' => __( 'UTC/GMT -03:00 - America/Thule', 'mmba-wp-arrow' ),
            'America/Thunder_Bay' => __( 'UTC/GMT -04:00 - America/Thunder_Bay', 'mmba-wp-arrow' ),
            'America/Tijuana' => __( 'UTC/GMT -07:00 - America/Tijuana', 'mmba-wp-arrow' ),
            'America/Toronto' => __( 'UTC/GMT -04:00 - America/Toronto', 'mmba-wp-arrow' ),
            'America/Tortola' => __( 'UTC/GMT -04:00 - America/Tortola', 'mmba-wp-arrow' ),
            'America/Vancouver' => __( 'UTC/GMT -07:00 - America/Vancouver', 'mmba-wp-arrow' ),
            'America/Whitehorse' => __( 'UTC/GMT -07:00 - America/Whitehorse', 'mmba-wp-arrow' ),
            'America/Winnipeg' => __( 'UTC/GMT -05:00 - America/Winnipeg', 'mmba-wp-arrow' ),
            'America/Yakutat' => __( 'UTC/GMT -08:00 - America/Yakutat', 'mmba-wp-arrow' ),
            'America/Yellowknife' => __( 'UTC/GMT -06:00 - America/Yellowknife', 'mmba-wp-arrow' ),
            'Antarctica/Casey' => __( 'UTC/GMT +11:00 - Antarctica/Casey', 'mmba-wp-arrow' ),
            'Antarctica/Davis' => __( 'UTC/GMT +07:00 - Antarctica/Davis', 'mmba-wp-arrow' ),
            'Antarctica/DumontDUrville' => __( 'UTC/GMT +10:00 - Antarctica/DumontDUrville', 'mmba-wp-arrow' ),
            'Antarctica/Macquarie' => __( 'UTC/GMT +11:00 - Antarctica/Macquarie', 'mmba-wp-arrow' ),
            'Antarctica/Mawson' => __( 'UTC/GMT +05:00 - Antarctica/Mawson', 'mmba-wp-arrow' ),
            'Antarctica/McMurdo' => __( 'UTC/GMT +12:00 - Antarctica/McMurdo', 'mmba-wp-arrow' ),
            'Antarctica/Palmer' => __( 'UTC/GMT -03:00 - Antarctica/Palmer', 'mmba-wp-arrow' ),
            'Antarctica/Rothera' => __( 'UTC/GMT -03:00 - Antarctica/Rothera', 'mmba-wp-arrow' ),
            'Antarctica/Syowa' => __( 'UTC/GMT +03:00 - Antarctica/Syowa', 'mmba-wp-arrow' ),
            'Antarctica/Troll' => __( 'UTC/GMT +02:00 - Antarctica/Troll', 'mmba-wp-arrow' ),
            'Antarctica/Vostok' => __( 'UTC/GMT +06:00 - Antarctica/Vostok', 'mmba-wp-arrow' ),
            'Arctic/Longyearbyen' => __( 'UTC/GMT +02:00 - Arctic/Longyearbyen', 'mmba-wp-arrow' ),
            'Asia/Aden' => __( 'UTC/GMT +03:00 - Asia/Aden', 'mmba-wp-arrow' ),
            'Asia/Almaty' => __( 'UTC/GMT +06:00 - Asia/Almaty', 'mmba-wp-arrow' ),
            'Asia/Amman' => __( 'UTC/GMT +03:00 - Asia/Amman', 'mmba-wp-arrow' ),
            'Asia/Anadyr' => __( 'UTC/GMT +12:00 - Asia/Anadyr', 'mmba-wp-arrow' ),
            'Asia/Aqtau' => __( 'UTC/GMT +05:00 - Asia/Aqtau', 'mmba-wp-arrow' ),
            'Asia/Aqtobe' => __( 'UTC/GMT +05:00 - Asia/Aqtobe', 'mmba-wp-arrow' ),
            'Asia/Ashgabat' => __( 'UTC/GMT +05:00 - Asia/Ashgabat', 'mmba-wp-arrow' ),
            'Asia/Atyrau' => __( 'UTC/GMT +05:00 - Asia/Atyrau', 'mmba-wp-arrow' ),
            'Asia/Baghdad' => __( 'UTC/GMT +03:00 - Asia/Baghdad', 'mmba-wp-arrow' ),
            'Asia/Bahrain' => __( 'UTC/GMT +03:00 - Asia/Bahrain', 'mmba-wp-arrow' ),
            'Asia/Baku' => __( 'UTC/GMT +04:00 - Asia/Baku', 'mmba-wp-arrow' ),
            'Asia/Bangkok' => __( 'UTC/GMT +07:00 - Asia/Bangkok', 'mmba-wp-arrow' ),
            'Asia/Barnaul' => __( 'UTC/GMT +07:00 - Asia/Barnaul', 'mmba-wp-arrow' ),
            'Asia/Beirut' => __( 'UTC/GMT +03:00 - Asia/Beirut', 'mmba-wp-arrow' ),
            'Asia/Bishkek' => __( 'UTC/GMT +06:00 - Asia/Bishkek', 'mmba-wp-arrow' ),
            'Asia/Brunei' => __( 'UTC/GMT +08:00 - Asia/Brunei', 'mmba-wp-arrow' ),
            'Asia/Chita' => __( 'UTC/GMT +09:00 - Asia/Chita', 'mmba-wp-arrow' ),
            'Asia/Choibalsan' => __( 'UTC/GMT +08:00 - Asia/Choibalsan', 'mmba-wp-arrow' ),
            'Asia/Colombo' => __( 'UTC/GMT +05:30 - Asia/Colombo', 'mmba-wp-arrow' ),
            'Asia/Damascus' => __( 'UTC/GMT +03:00 - Asia/Damascus', 'mmba-wp-arrow' ),
            'Asia/Dhaka' => __( 'UTC/GMT +06:00 - Asia/Dhaka', 'mmba-wp-arrow' ),
            'Asia/Dili' => __( 'UTC/GMT +09:00 - Asia/Dili', 'mmba-wp-arrow' ),
            'Asia/Dubai' => __( 'UTC/GMT +04:00 - Asia/Dubai', 'mmba-wp-arrow' ),
            'Asia/Dushanbe' => __( 'UTC/GMT +05:00 - Asia/Dushanbe', 'mmba-wp-arrow' ),
            'Asia/Famagusta' => __( 'UTC/GMT +03:00 - Asia/Famagusta', 'mmba-wp-arrow' ),
            'Asia/Gaza' => __( 'UTC/GMT +03:00 - Asia/Gaza', 'mmba-wp-arrow' ),
            'Asia/Hebron' => __( 'UTC/GMT +03:00 - Asia/Hebron', 'mmba-wp-arrow' ),
            'Asia/Ho_Chi_Minh' => __( 'UTC/GMT +07:00 - Asia/Ho_Chi_Minh', 'mmba-wp-arrow' ),
            'Asia/Hong_Kong' => __( 'UTC/GMT +08:00 - Asia/Hong_Kong', 'mmba-wp-arrow' ),
            'Asia/Hovd' => __( 'UTC/GMT +07:00 - Asia/Hovd', 'mmba-wp-arrow' ),
            'Asia/Irkutsk' => __( 'UTC/GMT +08:00 - Asia/Irkutsk', 'mmba-wp-arrow' ),
            'Asia/Jakarta' => __( 'UTC/GMT +07:00 - Asia/Jakarta', 'mmba-wp-arrow' ),
            'Asia/Jayapura' => __( 'UTC/GMT +09:00 - Asia/Jayapura', 'mmba-wp-arrow' ),
            'Asia/Jerusalem' => __( 'UTC/GMT +03:00 - Asia/Jerusalem', 'mmba-wp-arrow' ),
            'Asia/Kabul' => __( 'UTC/GMT +04:30 - Asia/Kabul', 'mmba-wp-arrow' ),
            'Asia/Kamchatka' => __( 'UTC/GMT +12:00 - Asia/Kamchatka', 'mmba-wp-arrow' ),
            'Asia/Karachi' => __( 'UTC/GMT +05:00 - Asia/Karachi', 'mmba-wp-arrow' ),
            'Asia/Kathmandu' => __( 'UTC/GMT +05:45 - Asia/Kathmandu', 'mmba-wp-arrow' ),
            'Asia/Khandyga' => __( 'UTC/GMT +09:00 - Asia/Khandyga', 'mmba-wp-arrow' ),
            'Asia/Kolkata' => __( 'UTC/GMT +05:30 - Asia/Kolkata', 'mmba-wp-arrow' ),
            'Asia/Krasnoyarsk' => __( 'UTC/GMT +07:00 - Asia/Krasnoyarsk', 'mmba-wp-arrow' ),
            'Asia/Kuala_Lumpur' => __( 'UTC/GMT +08:00 - Asia/Kuala_Lumpur', 'mmba-wp-arrow' ),
            'Asia/Kuching' => __( 'UTC/GMT +08:00 - Asia/Kuching', 'mmba-wp-arrow' ),
            'Asia/Kuwait' => __( 'UTC/GMT +03:00 - Asia/Kuwait', 'mmba-wp-arrow' ),
            'Asia/Macau' => __( 'UTC/GMT +08:00 - Asia/Macau', 'mmba-wp-arrow' ),
            'Asia/Magadan' => __( 'UTC/GMT +11:00 - Asia/Magadan', 'mmba-wp-arrow' ),
            'Asia/Makassar' => __( 'UTC/GMT +08:00 - Asia/Makassar', 'mmba-wp-arrow' ),
            'Asia/Manila' => __( 'UTC/GMT +08:00 - Asia/Manila', 'mmba-wp-arrow' ),
            'Asia/Muscat' => __( 'UTC/GMT +04:00 - Asia/Muscat', 'mmba-wp-arrow' ),
            'Asia/Nicosia' => __( 'UTC/GMT +03:00 - Asia/Nicosia', 'mmba-wp-arrow' ),
            'Asia/Novokuznetsk' => __( 'UTC/GMT +07:00 - Asia/Novokuznetsk', 'mmba-wp-arrow' ),
            'Asia/Novosibirsk' => __( 'UTC/GMT +07:00 - Asia/Novosibirsk', 'mmba-wp-arrow' ),
            'Asia/Omsk' => __( 'UTC/GMT +06:00 - Asia/Omsk', 'mmba-wp-arrow' ),
            'Asia/Oral' => __( 'UTC/GMT +05:00 - Asia/Oral', 'mmba-wp-arrow' ),
            'Asia/Phnom_Penh' => __( 'UTC/GMT +07:00 - Asia/Phnom_Penh', 'mmba-wp-arrow' ),
            'Asia/Pontianak' => __( 'UTC/GMT +07:00 - Asia/Pontianak', 'mmba-wp-arrow' ),
            'Asia/Pyongyang' => __( 'UTC/GMT +08:30 - Asia/Pyongyang', 'mmba-wp-arrow' ),
            'Asia/Qatar' => __( 'UTC/GMT +03:00 - Asia/Qatar', 'mmba-wp-arrow' ),
            'Asia/Qyzylorda' => __( 'UTC/GMT +06:00 - Asia/Qyzylorda', 'mmba-wp-arrow' ),
            'Asia/Riyadh' => __( 'UTC/GMT +03:00 - Asia/Riyadh', 'mmba-wp-arrow' ),
            'Asia/Sakhalin' => __( 'UTC/GMT +11:00 - Asia/Sakhalin', 'mmba-wp-arrow' ),
            'Asia/Samarkand' => __( 'UTC/GMT +05:00 - Asia/Samarkand', 'mmba-wp-arrow' ),
            'Asia/Seoul' => __( 'UTC/GMT +09:00 - Asia/Seoul', 'mmba-wp-arrow' ),
            'Asia/Shanghai' => __( 'UTC/GMT +08:00 - Asia/Shanghai', 'mmba-wp-arrow' ),
            'Asia/Singapore' => __( 'UTC/GMT +08:00 - Asia/Singapore', 'mmba-wp-arrow' ),
            'Asia/Srednekolymsk' => __( 'UTC/GMT +11:00 - Asia/Srednekolymsk', 'mmba-wp-arrow' ),
            'Asia/Taipei' => __( 'UTC/GMT +08:00 - Asia/Taipei', 'mmba-wp-arrow' ),
            'Asia/Tashkent' => __( 'UTC/GMT +05:00 - Asia/Tashkent', 'mmba-wp-arrow' ),
            'Asia/Tbilisi' => __( 'UTC/GMT +04:00 - Asia/Tbilisi', 'mmba-wp-arrow' ),
            'Asia/Tehran' => __( 'UTC/GMT +04:30 - Asia/Tehran', 'mmba-wp-arrow' ),
            'Asia/Thimphu' => __( 'UTC/GMT +06:00 - Asia/Thimphu', 'mmba-wp-arrow' ),
            'Asia/Tokyo' => __( 'UTC/GMT +09:00 - Asia/Tokyo', 'mmba-wp-arrow' ),
            'Asia/Tomsk' => __( 'UTC/GMT +07:00 - Asia/Tomsk', 'mmba-wp-arrow' ),
            'Asia/Ulaanbaatar' => __( 'UTC/GMT +08:00 - Asia/Ulaanbaatar', 'mmba-wp-arrow' ),
            'Asia/Urumqi' => __( 'UTC/GMT +06:00 - Asia/Urumqi', 'mmba-wp-arrow' ),
            'Asia/Ust-Nera' => __( 'UTC/GMT +10:00 - Asia/Ust-Nera', 'mmba-wp-arrow' ),
            'Asia/Vientiane' => __( 'UTC/GMT +07:00 - Asia/Vientiane', 'mmba-wp-arrow' ),
            'Asia/Vladivostok' => __( 'UTC/GMT +10:00 - Asia/Vladivostok', 'mmba-wp-arrow' ),
            'Asia/Yakutsk' => __( 'UTC/GMT +09:00 - Asia/Yakutsk', 'mmba-wp-arrow' ),
            'Asia/Yangon' => __( 'UTC/GMT +06:30 - Asia/Yangon', 'mmba-wp-arrow' ),
            'Asia/Yekaterinburg' => __( 'UTC/GMT +05:00 - Asia/Yekaterinburg', 'mmba-wp-arrow' ),
            'Asia/Yerevan' => __( 'UTC/GMT +04:00 - Asia/Yerevan', 'mmba-wp-arrow' ),
            'Atlantic/Azores' => __( 'UTC/GMT +00:00 - Atlantic/Azores', 'mmba-wp-arrow' ),
            'Atlantic/Bermuda' => __( 'UTC/GMT -03:00 - Atlantic/Bermuda', 'mmba-wp-arrow' ),
            'Atlantic/Canary' => __( 'UTC/GMT +01:00 - Atlantic/Canary', 'mmba-wp-arrow' ),
            'Atlantic/Cape_Verde' => __( 'UTC/GMT -01:00 - Atlantic/Cape_Verde', 'mmba-wp-arrow' ),
            'Atlantic/Faroe' => __( 'UTC/GMT +01:00 - Atlantic/Faroe', 'mmba-wp-arrow' ),
            'Atlantic/Madeira' => __( 'UTC/GMT +01:00 - Atlantic/Madeira', 'mmba-wp-arrow' ),
            'Atlantic/Reykjavik' => __( 'UTC/GMT +00:00 - Atlantic/Reykjavik', 'mmba-wp-arrow' ),
            'Atlantic/South_Georgia' => __( 'UTC/GMT -02:00 - Atlantic/South_Georgia', 'mmba-wp-arrow' ),
            'Atlantic/St_Helena' => __( 'UTC/GMT +00:00 - Atlantic/St_Helena', 'mmba-wp-arrow' ),
            'Atlantic/Stanley' => __( 'UTC/GMT -03:00 - Atlantic/Stanley', 'mmba-wp-arrow' ),
            'Australia/Adelaide' => __( 'UTC/GMT +09:30 - Australia/Adelaide', 'mmba-wp-arrow' ),
            'Australia/Brisbane' => __( 'UTC/GMT +10:00 - Australia/Brisbane', 'mmba-wp-arrow' ),
            'Australia/Broken_Hill' => __( 'UTC/GMT +09:30 - Australia/Broken_Hill', 'mmba-wp-arrow' ),
            'Australia/Currie' => __( 'UTC/GMT +10:00 - Australia/Currie', 'mmba-wp-arrow' ),
            'Australia/Darwin' => __( 'UTC/GMT +09:30 - Australia/Darwin', 'mmba-wp-arrow' ),
            'Australia/Eucla' => __( 'UTC/GMT +08:45 - Australia/Eucla', 'mmba-wp-arrow' ),
            'Australia/Hobart' => __( 'UTC/GMT +10:00 - Australia/Hobart', 'mmba-wp-arrow' ),
            'Australia/Lindeman' => __( 'UTC/GMT +10:00 - Australia/Lindeman', 'mmba-wp-arrow' ),
            'Australia/Lord_Howe' => __( 'UTC/GMT +10:30 - Australia/Lord_Howe', 'mmba-wp-arrow' ),
            'Australia/Melbourne' => __( 'UTC/GMT +10:00 - Australia/Melbourne', 'mmba-wp-arrow' ),
            'Australia/Perth' => __( 'UTC/GMT +08:00 - Australia/Perth', 'mmba-wp-arrow' ),
            'Australia/Sydney' => __( 'UTC/GMT +10:00 - Australia/Sydney', 'mmba-wp-arrow' ),
            'Europe/Amsterdam' => __( 'UTC/GMT +02:00 - Europe/Amsterdam', 'mmba-wp-arrow' ),
            'Europe/Andorra' => __( 'UTC/GMT +02:00 - Europe/Andorra', 'mmba-wp-arrow' ),
            'Europe/Astrakhan' => __( 'UTC/GMT +04:00 - Europe/Astrakhan', 'mmba-wp-arrow' ),
            'Europe/Athens' => __( 'UTC/GMT +03:00 - Europe/Athens', 'mmba-wp-arrow' ),
            'Europe/Belgrade' => __( 'UTC/GMT +02:00 - Europe/Belgrade', 'mmba-wp-arrow' ),
            'Europe/Berlin' => __( 'UTC/GMT +02:00 - Europe/Berlin', 'mmba-wp-arrow' ),
            'Europe/Bratislava' => __( 'UTC/GMT +02:00 - Europe/Bratislava', 'mmba-wp-arrow' ),
            'Europe/Brussels' => __( 'UTC/GMT +02:00 - Europe/Brussels', 'mmba-wp-arrow' ),
            'Europe/Bucharest' => __( 'UTC/GMT +03:00 - Europe/Bucharest', 'mmba-wp-arrow' ),
            'Europe/Budapest' => __( 'UTC/GMT +02:00 - Europe/Budapest', 'mmba-wp-arrow' ),
            'Europe/Busingen' => __( 'UTC/GMT +02:00 - Europe/Busingen', 'mmba-wp-arrow' ),
            'Europe/Chisinau' => __( 'UTC/GMT +03:00 - Europe/Chisinau', 'mmba-wp-arrow' ),
            'Europe/Copenhagen' => __( 'UTC/GMT +02:00 - Europe/Copenhagen', 'mmba-wp-arrow' ),
            'Europe/Dublin' => __( 'UTC/GMT +01:00 - Europe/Dublin', 'mmba-wp-arrow' ),
            'Europe/Gibraltar' => __( 'UTC/GMT +02:00 - Europe/Gibraltar', 'mmba-wp-arrow' ),
            'Europe/Guernsey' => __( 'UTC/GMT +01:00 - Europe/Guernsey', 'mmba-wp-arrow' ),
            'Europe/Helsinki' => __( 'UTC/GMT +03:00 - Europe/Helsinki', 'mmba-wp-arrow' ),
            'Europe/Isle_of_Man' => __( 'UTC/GMT +01:00 - Europe/Isle_of_Man', 'mmba-wp-arrow' ),
            'Europe/Istanbul' => __( 'UTC/GMT +03:00 - Europe/Istanbul', 'mmba-wp-arrow' ),
            'Europe/Jersey' => __( 'UTC/GMT +01:00 - Europe/Jersey', 'mmba-wp-arrow' ),
            'Europe/Kaliningrad' => __( 'UTC/GMT +02:00 - Europe/Kaliningrad', 'mmba-wp-arrow' ),
            'Europe/Kiev' => __( 'UTC/GMT +03:00 - Europe/Kiev', 'mmba-wp-arrow' ),
            'Europe/Kirov' => __( 'UTC/GMT +03:00 - Europe/Kirov', 'mmba-wp-arrow' ),
            'Europe/Lisbon' => __( 'UTC/GMT +01:00 - Europe/Lisbon', 'mmba-wp-arrow' ),
            'Europe/Ljubljana' => __( 'UTC/GMT +02:00 - Europe/Ljubljana', 'mmba-wp-arrow' ),
            'Europe/London' => __( 'UTC/GMT +01:00 - Europe/London', 'mmba-wp-arrow' ),
            'Europe/Luxembourg' => __( 'UTC/GMT +02:00 - Europe/Luxembourg', 'mmba-wp-arrow' ),
            'Europe/Madrid' => __( 'UTC/GMT +02:00 - Europe/Madrid', 'mmba-wp-arrow' ),
            'Europe/Malta' => __( 'UTC/GMT +02:00 - Europe/Malta', 'mmba-wp-arrow' ),
            'Europe/Mariehamn' => __( 'UTC/GMT +03:00 - Europe/Mariehamn', 'mmba-wp-arrow' ),
            'Europe/Minsk' => __( 'UTC/GMT +03:00 - Europe/Minsk', 'mmba-wp-arrow' ),
            'Europe/Monaco' => __( 'UTC/GMT +02:00 - Europe/Monaco', 'mmba-wp-arrow' ),
            'Europe/Moscow' => __( 'UTC/GMT +03:00 - Europe/Moscow', 'mmba-wp-arrow' ),
            'Europe/Oslo' => __( 'UTC/GMT +02:00 - Europe/Oslo', 'mmba-wp-arrow' ),
            'Europe/Paris' => __( 'UTC/GMT +02:00 - Europe/Paris', 'mmba-wp-arrow' ),
            'Europe/Podgorica' => __( 'UTC/GMT +02:00 - Europe/Podgorica', 'mmba-wp-arrow' ),
            'Europe/Prague' => __( 'UTC/GMT +02:00 - Europe/Prague', 'mmba-wp-arrow' ),
            'Europe/Riga' => __( 'UTC/GMT +03:00 - Europe/Riga', 'mmba-wp-arrow' ),
            'Europe/Rome' => __( 'UTC/GMT +02:00 - Europe/Rome', 'mmba-wp-arrow' ),
            'Europe/Samara' => __( 'UTC/GMT +04:00 - Europe/Samara', 'mmba-wp-arrow' ),
            'Europe/San_Marino' => __( 'UTC/GMT +02:00 - Europe/San_Marino', 'mmba-wp-arrow' ),
            'Europe/Sarajevo' => __( 'UTC/GMT +02:00 - Europe/Sarajevo', 'mmba-wp-arrow' ),
            'Europe/Saratov' => __( 'UTC/GMT +04:00 - Europe/Saratov', 'mmba-wp-arrow' ),
            'Europe/Simferopol' => __( 'UTC/GMT +03:00 - Europe/Simferopol', 'mmba-wp-arrow' ),
            'Europe/Skopje' => __( 'UTC/GMT +02:00 - Europe/Skopje', 'mmba-wp-arrow' ),
            'Europe/Sofia' => __( 'UTC/GMT +03:00 - Europe/Sofia', 'mmba-wp-arrow' ),
            'Europe/Stockholm' => __( 'UTC/GMT +02:00 - Europe/Stockholm', 'mmba-wp-arrow' ),
            'Europe/Tallinn' => __( 'UTC/GMT +03:00 - Europe/Tallinn', 'mmba-wp-arrow' ),
            'Europe/Tirane' => __( 'UTC/GMT +02:00 - Europe/Tirane', 'mmba-wp-arrow' ),
            'Europe/Ulyanovsk' => __( 'UTC/GMT +04:00 - Europe/Ulyanovsk', 'mmba-wp-arrow' ),
            'Europe/Uzhgorod' => __( 'UTC/GMT +03:00 - Europe/Uzhgorod', 'mmba-wp-arrow' ),
            'Europe/Vaduz' => __( 'UTC/GMT +02:00 - Europe/Vaduz', 'mmba-wp-arrow' ),
            'Europe/Vatican' => __( 'UTC/GMT +02:00 - Europe/Vatican', 'mmba-wp-arrow' ),
            'Europe/Vienna' => __( 'UTC/GMT +02:00 - Europe/Vienna', 'mmba-wp-arrow' ),
            'Europe/Vilnius' => __( 'UTC/GMT +03:00 - Europe/Vilnius', 'mmba-wp-arrow' ),
            'Europe/Volgograd' => __( 'UTC/GMT +03:00 - Europe/Volgograd', 'mmba-wp-arrow' ),
            'Europe/Warsaw' => __( 'UTC/GMT +02:00 - Europe/Warsaw', 'mmba-wp-arrow' ),
            'Europe/Zagreb' => __( 'UTC/GMT +02:00 - Europe/Zagreb', 'mmba-wp-arrow' ),
            'Europe/Zaporozhye' => __( 'UTC/GMT +03:00 - Europe/Zaporozhye', 'mmba-wp-arrow' ),
            'Europe/Zurich' => __( 'UTC/GMT +02:00 - Europe/Zurich', 'mmba-wp-arrow' ),
            'Indian/Antananarivo' => __( 'UTC/GMT +03:00 - Indian/Antananarivo', 'mmba-wp-arrow' ),
            'Indian/Chagos' => __( 'UTC/GMT +06:00 - Indian/Chagos', 'mmba-wp-arrow' ),
            'Indian/Christmas' => __( 'UTC/GMT +07:00 - Indian/Christmas', 'mmba-wp-arrow' ),
            'Indian/Cocos' => __( 'UTC/GMT +06:30 - Indian/Cocos', 'mmba-wp-arrow' ),
            'Indian/Comoro' => __( 'UTC/GMT +03:00 - Indian/Comoro', 'mmba-wp-arrow' ),
            'Indian/Kerguelen' => __( 'UTC/GMT +05:00 - Indian/Kerguelen', 'mmba-wp-arrow' ),
            'Indian/Mahe' => __( 'UTC/GMT +04:00 - Indian/Mahe', 'mmba-wp-arrow' ),
            'Indian/Maldives' => __( 'UTC/GMT +05:00 - Indian/Maldives', 'mmba-wp-arrow' ),
            'Indian/Mauritius' => __( 'UTC/GMT +04:00 - Indian/Mauritius', 'mmba-wp-arrow' ),
            'Indian/Mayotte' => __( 'UTC/GMT +03:00 - Indian/Mayotte', 'mmba-wp-arrow' ),
            'Indian/Reunion' => __( 'UTC/GMT +04:00 - Indian/Reunion', 'mmba-wp-arrow' ),
            'Pacific/Apia' => __( 'UTC/GMT +13:00 - Pacific/Apia', 'mmba-wp-arrow' ),
            'Pacific/Auckland' => __( 'UTC/GMT +12:00 - Pacific/Auckland', 'mmba-wp-arrow' ),
            'Pacific/Bougainville' => __( 'UTC/GMT +11:00 - Pacific/Bougainville', 'mmba-wp-arrow' ),
            'Pacific/Chatham' => __( 'UTC/GMT +12:45 - Pacific/Chatham', 'mmba-wp-arrow' ),
            'Pacific/Chuuk' => __( 'UTC/GMT +10:00 - Pacific/Chuuk', 'mmba-wp-arrow' ),
            'Pacific/Easter' => __( 'UTC/GMT -06:00 - Pacific/Easter', 'mmba-wp-arrow' ),
            'Pacific/Efate' => __( 'UTC/GMT +11:00 - Pacific/Efate', 'mmba-wp-arrow' ),
            'Pacific/Enderbury' => __( 'UTC/GMT +13:00 - Pacific/Enderbury', 'mmba-wp-arrow' ),
            'Pacific/Fakaofo' => __( 'UTC/GMT +13:00 - Pacific/Fakaofo', 'mmba-wp-arrow' ),
            'Pacific/Fiji' => __( 'UTC/GMT +12:00 - Pacific/Fiji', 'mmba-wp-arrow' ),
            'Pacific/Funafuti' => __( 'UTC/GMT +12:00 - Pacific/Funafuti', 'mmba-wp-arrow' ),
            'Pacific/Galapagos' => __( 'UTC/GMT -06:00 - Pacific/Galapagos', 'mmba-wp-arrow' ),
            'Pacific/Gambier' => __( 'UTC/GMT -09:00 - Pacific/Gambier', 'mmba-wp-arrow' ),
            'Pacific/Guadalcanal' => __( 'UTC/GMT +11:00 - Pacific/Guadalcanal', 'mmba-wp-arrow' ),
            'Pacific/Guam' => __( 'UTC/GMT +10:00 - Pacific/Guam', 'mmba-wp-arrow' ),
            'Pacific/Honolulu' => __( 'UTC/GMT -10:00 - Pacific/Honolulu', 'mmba-wp-arrow' ),
            'Pacific/Kiritimati' => __( 'UTC/GMT +14:00 - Pacific/Kiritimati', 'mmba-wp-arrow' ),
            'Pacific/Kosrae' => __( 'UTC/GMT +11:00 - Pacific/Kosrae', 'mmba-wp-arrow' ),
            'Pacific/Kwajalein' => __( 'UTC/GMT +12:00 - Pacific/Kwajalein', 'mmba-wp-arrow' ),
            'Pacific/Majuro' => __( 'UTC/GMT +12:00 - Pacific/Majuro', 'mmba-wp-arrow' ),
            'Pacific/Marquesas' => __( 'UTC/GMT -09:30 - Pacific/Marquesas', 'mmba-wp-arrow' ),
            'Pacific/Midway' => __( 'UTC/GMT -11:00 - Pacific/Midway', 'mmba-wp-arrow' ),
            'Pacific/Nauru' => __( 'UTC/GMT +12:00 - Pacific/Nauru', 'mmba-wp-arrow' ),
            'Pacific/Niue' => __( 'UTC/GMT -11:00 - Pacific/Niue', 'mmba-wp-arrow' ),
            'Pacific/Norfolk' => __( 'UTC/GMT +11:00 - Pacific/Norfolk', 'mmba-wp-arrow' ),
            'Pacific/Noumea' => __( 'UTC/GMT +11:00 - Pacific/Noumea', 'mmba-wp-arrow' ),
            'Pacific/Pago_Pago' => __( 'UTC/GMT -11:00 - Pacific/Pago_Pago', 'mmba-wp-arrow' ),
            'Pacific/Palau' => __( 'UTC/GMT +09:00 - Pacific/Palau', 'mmba-wp-arrow' ),
            'Pacific/Pitcairn' => __( 'UTC/GMT -08:00 - Pacific/Pitcairn', 'mmba-wp-arrow' ),
            'Pacific/Pohnpei' => __( 'UTC/GMT +11:00 - Pacific/Pohnpei', 'mmba-wp-arrow' ),
            'Pacific/Port_Moresby' => __( 'UTC/GMT +10:00 - Pacific/Port_Moresby', 'mmba-wp-arrow' ),
            'Pacific/Rarotonga' => __( 'UTC/GMT -10:00 - Pacific/Rarotonga', 'mmba-wp-arrow' ),
            'Pacific/Saipan' => __( 'UTC/GMT +10:00 - Pacific/Saipan', 'mmba-wp-arrow' ),
            'Pacific/Tahiti' => __( 'UTC/GMT -10:00 - Pacific/Tahiti', 'mmba-wp-arrow' ),
            'Pacific/Tarawa' => __( 'UTC/GMT +12:00 - Pacific/Tarawa', 'mmba-wp-arrow' ),
            'Pacific/Tongatapu' => __( 'UTC/GMT +13:00 - Pacific/Tongatapu', 'mmba-wp-arrow' ),
            'Pacific/Wake' => __( 'UTC/GMT +12:00 - Pacific/Wake', 'mmba-wp-arrow' ),
            'Pacific/Wallis' => __( 'UTC/GMT +12:00 - Pacific/Wallis', 'mmba-wp-arrow' ),
            'UTC' => __( 'UTC/GMT +00:00 - UTC', 'mmba-wp-arrow' )
        )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_date_format",
        "label" => __( "Date format", 'mmba-wp-arrow' ),
        "default_value" => "mm/dd/yy",
        "option_values" => array(
            '0' => __('---select---','mmba-wp-arrow'),
            'yy/mm/dd' => __('yy/mm/dd','mmba-wp-arrow'),
            'yy-mm-dd' => __('yy-mm-dd','mmba-wp-arrow'),
            'yy:mm:dd' => __('yy:mm:dd','mmba-wp-arrow'),
            'yy.mm.dd' => __('yy.mm.dd','mmba-wp-arrow'),
            'dd/mm/yy' => __('dd/mm/yy','mmba-wp-arrow'),
            'dd-mm-yy' => __('dd-mm-yy','mmba-wp-arrow'),
            'dd:mm:yy' => __('dd:mm:yy','mmba-wp-arrow'),
            'dd.mm.yy' => __('dd.mm.yy','mmba-wp-arrow'),
            'mm/dd/yy' => __('mm/dd/yy','mmba-wp-arrow'),
            'mm-dd-yy' => __('mm-dd-yy','mmba-wp-arrow'),
            'mm:dd:yy' => __('mm:dd:yy','mmba-wp-arrow'),
            'mm.dd.yy' => __('mm.dd.yy','mmba-wp-arrow'),
            'yy/dd/mm' => __('yy/dd/mm','mmba-wp-arrow'),
            'yy-dd-mm' => __('yy-dd-mm','mmba-wp-arrow'),
            'yy:dd:mm' => __('yy:dd:mm','mmba-wp-arrow'),
            'yy.dd.mm' => __('yy.dd.mm','mmba-wp-arrow')
        )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_start_date",
        "label" => __( "Start date", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_end_date",
        "label" => __( "End date", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_start_time",
        "label" => __( "Start time", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_progress_bar_end_time",
        "label" => __( "End time", 'mmba-wp-arrow' )
    );

    //countdown
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_advance_count_down",
        "label" => __( "Countdown", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "radio",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_status",
        "label" => __( "Active", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( 'Off', 'mmba-wp-arrow' ),
            '1' => __( 'On', 'mmba-wp-arrow' )
        ),
        "default_value" => "0"
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_timezone",
        "label" => __( "Timezone", 'mmba-wp-arrow' ),
        "option_values" => array(
            '0' => __( '---select---', 'mmba-wp-arrow' ),
            'Africa/Abidjan' => __( 'UTC/GMT +00:00 - Africa/Abidjan', 'mmba-wp-arrow' ),
            'Africa/Accra' => __( 'UTC/GMT +00:00 - Africa/Accra', 'mmba-wp-arrow' ),
            'Africa/Addis_Ababa' => __( 'UTC/GMT +03:00 - Africa/Addis_Ababa', 'mmba-wp-arrow' ),
            'Africa/Algiers' => __( 'UTC/GMT +01:00 - Africa/Algiers', 'mmba-wp-arrow' ),
            'Africa/Asmara' => __( 'UTC/GMT +03:00 - Africa/Asmara', 'mmba-wp-arrow' ),
            'Africa/Bamako' => __( 'UTC/GMT +00:00 - Africa/Bamako', 'mmba-wp-arrow' ),
            'Africa/Bangui' => __( 'UTC/GMT +01:00 - Africa/Bangui', 'mmba-wp-arrow' ),
            'Africa/Banjul' => __( 'UTC/GMT +00:00 - Africa/Banjul', 'mmba-wp-arrow' ),
            'Africa/Bissau' => __( 'UTC/GMT +00:00 - Africa/Bissau', 'mmba-wp-arrow' ),
            'Africa/Blantyre' => __( 'UTC/GMT +02:00 - Africa/Blantyre', 'mmba-wp-arrow' ),
            'Africa/Brazzaville' => __( 'UTC/GMT +01:00 - Africa/Brazzaville', 'mmba-wp-arrow' ),
            'Africa/Bujumbura' => __( 'UTC/GMT +02:00 - Africa/Bujumbura', 'mmba-wp-arrow' ),
            'Africa/Cairo' => __( 'UTC/GMT +02:00 - Africa/Cairo', 'mmba-wp-arrow' ),
            'Africa/Casablanca' => __( 'UTC/GMT +00:00 - Africa/Casablanca', 'mmba-wp-arrow' ),
            'Africa/Ceuta' => __( 'UTC/GMT +02:00 - Africa/Ceuta', 'mmba-wp-arrow' ),
            'Africa/Conakry' => __( 'UTC/GMT +00:00 - Africa/Conakry', 'mmba-wp-arrow' ),
            'Africa/Dakar' => __( 'UTC/GMT +00:00 - Africa/Dakar', 'mmba-wp-arrow' ),
            'Africa/Dar_es_Salaam' => __( 'UTC/GMT +03:00 - Africa/Dar_es_Salaam', 'mmba-wp-arrow' ),
            'Africa/Djibouti' => __( 'UTC/GMT +03:00 - Africa/Djibouti', 'mmba-wp-arrow' ),
            'Africa/Douala' => __( 'UTC/GMT +01:00 - Africa/Douala', 'mmba-wp-arrow' ),
            'Africa/El_Aaiun' => __( 'UTC/GMT +00:00 - Africa/El_Aaiun', 'mmba-wp-arrow' ),
            'Africa/Freetown' => __( 'UTC/GMT +00:00 - Africa/Freetown', 'mmba-wp-arrow' ),
            'Africa/Gaborone' => __( 'UTC/GMT +02:00 - Africa/Gaborone', 'mmba-wp-arrow' ),
            'Africa/Harare' => __( 'UTC/GMT +02:00 - Africa/Harare', 'mmba-wp-arrow' ),
            'Africa/Johannesburg' => __( 'UTC/GMT +02:00 - Africa/Johannesburg', 'mmba-wp-arrow' ),
            'Africa/Juba' => __( 'UTC/GMT +03:00 - Africa/Juba', 'mmba-wp-arrow' ),
            'Africa/Kampala' => __( 'UTC/GMT +03:00 - Africa/Kampala', 'mmba-wp-arrow' ),
            'Africa/Khartoum' => __( 'UTC/GMT +02:00 - Africa/Khartoum', 'mmba-wp-arrow' ),
            'Africa/Kigali' => __( 'UTC/GMT +02:00 - Africa/Kigali', 'mmba-wp-arrow' ),
            'Africa/Kinshasa' => __( 'UTC/GMT +01:00 - Africa/Kinshasa', 'mmba-wp-arrow' ),
            'Africa/Lagos' => __( 'UTC/GMT +01:00 - Africa/Lagos', 'mmba-wp-arrow' ),
            'Africa/Libreville' => __( 'UTC/GMT +01:00 - Africa/Libreville', 'mmba-wp-arrow' ),
            'Africa/Lome' => __( 'UTC/GMT +00:00 - Africa/Lome', 'mmba-wp-arrow' ),
            'Africa/Luanda' => __( 'UTC/GMT +01:00 - Africa/Luanda', 'mmba-wp-arrow' ),
            'Africa/Lubumbashi' => __( 'UTC/GMT +02:00 - Africa/Lubumbashi', 'mmba-wp-arrow' ),
            'Africa/Lusaka' => __( 'UTC/GMT +02:00 - Africa/Lusaka', 'mmba-wp-arrow' ),
            'Africa/Malabo' => __( 'UTC/GMT +01:00 - Africa/Malabo', 'mmba-wp-arrow' ),
            'Africa/Maputo' => __( 'UTC/GMT +02:00 - Africa/Maputo', 'mmba-wp-arrow' ),
            'Africa/Maseru' => __( 'UTC/GMT +02:00 - Africa/Maseru', 'mmba-wp-arrow' ),
            'Africa/Mbabane' => __( 'UTC/GMT +02:00 - Africa/Mbabane', 'mmba-wp-arrow' ),
            'Africa/Mogadishu' => __( 'UTC/GMT +03:00 - Africa/Mogadishu', 'mmba-wp-arrow' ),
            'Africa/Monrovia' => __( 'UTC/GMT +00:00 - Africa/Monrovia', 'mmba-wp-arrow' ),
            'Africa/Nairobi' => __( 'UTC/GMT +03:00 - Africa/Nairobi', 'mmba-wp-arrow' ),
            'Africa/Ndjamena' => __( 'UTC/GMT +01:00 - Africa/Ndjamena', 'mmba-wp-arrow' ),
            'Africa/Niamey' => __( 'UTC/GMT +01:00 - Africa/Niamey', 'mmba-wp-arrow' ),
            'Africa/Nouakchott' => __( 'UTC/GMT +00:00 - Africa/Nouakchott', 'mmba-wp-arrow' ),
            'Africa/Ouagadougou' => __( 'UTC/GMT +00:00 - Africa/Ouagadougou', 'mmba-wp-arrow' ),
            'Africa/Porto-Novo' => __( 'UTC/GMT +01:00 - Africa/Porto-Novo', 'mmba-wp-arrow' ),
            'Africa/Sao_Tome' => __( 'UTC/GMT +01:00 - Africa/Sao_Tome', 'mmba-wp-arrow' ),
            'Africa/Tripoli' => __( 'UTC/GMT +02:00 - Africa/Tripoli', 'mmba-wp-arrow' ),
            'Africa/Tunis' => __( 'UTC/GMT +01:00 - Africa/Tunis', 'mmba-wp-arrow' ),
            'Africa/Windhoek' => __( 'UTC/GMT +02:00 - Africa/Windhoek', 'mmba-wp-arrow' ),
            'America/Adak' => __( 'UTC/GMT -09:00 - America/Adak', 'mmba-wp-arrow' ),
            'America/Anchorage' => __( 'UTC/GMT -08:00 - America/Anchorage', 'mmba-wp-arrow' ),
            'America/Anguilla' => __( 'UTC/GMT -04:00 - America/Anguilla', 'mmba-wp-arrow' ),
            'America/Antigua' => __( 'UTC/GMT -04:00 - America/Antigua', 'mmba-wp-arrow' ),
            'America/Araguaina' => __( 'UTC/GMT -03:00 - America/Araguaina', 'mmba-wp-arrow' ),
            'America/Argentina/Buenos_Aires' => __( 'UTC/GMT -03:00 - America/Argentina/Buenos_Aires', 'mmba-wp-arrow' ),
            'America/Argentina/Catamarca' => __( 'UTC/GMT -03:00 - America/Argentina/Catamarca', 'mmba-wp-arrow' ),
            'America/Argentina/Cordoba' => __( 'UTC/GMT -03:00 - America/Argentina/Cordoba', 'mmba-wp-arrow' ),
            'America/Argentina/Jujuy' => __( 'UTC/GMT -03:00 - America/Argentina/Jujuy', 'mmba-wp-arrow' ),
            'America/Argentina/La_Rioja' => __( 'UTC/GMT -03:00 - America/Argentina/La_Rioja', 'mmba-wp-arrow' ),
            'America/Argentina/Mendoza' => __( 'UTC/GMT -03:00 - America/Argentina/Mendoza', 'mmba-wp-arrow' ),
            'America/Argentina/Rio_Gallegos' => __( 'UTC/GMT -03:00 - America/Argentina/Rio_Gallegos', 'mmba-wp-arrow' ),
            'America/Argentina/Salta' => __( 'UTC/GMT -03:00 - America/Argentina/Salta', 'mmba-wp-arrow' ),
            'America/Argentina/San_Juan' => __( 'UTC/GMT -03:00 - America/Argentina/San_Juan', 'mmba-wp-arrow' ),
            'America/Argentina/San_Luis' => __( 'UTC/GMT -03:00 - America/Argentina/San_Luis', 'mmba-wp-arrow' ),
            'America/Argentina/Tucuman' => __( 'UTC/GMT -03:00 - America/Argentina/Tucuman', 'mmba-wp-arrow' ),
            'America/Argentina/Ushuaia' => __( 'UTC/GMT -03:00 - America/Argentina/Ushuaia', 'mmba-wp-arrow' ),
            'America/Aruba' => __( 'UTC/GMT -04:00 - America/Aruba', 'mmba-wp-arrow' ),
            'America/Asuncion' => __( 'UTC/GMT -04:00 - America/Asuncion', 'mmba-wp-arrow' ),
            'America/Atikokan' => __( 'UTC/GMT -05:00 - America/Atikokan', 'mmba-wp-arrow' ),
            'America/Bahia' => __( 'UTC/GMT -03:00 - America/Bahia', 'mmba-wp-arrow' ),
            'America/Bahia_Banderas' => __( 'UTC/GMT -05:00 - America/Bahia_Banderas', 'mmba-wp-arrow' ),
            'America/Barbados' => __( 'UTC/GMT -04:00 - America/Barbados', 'mmba-wp-arrow' ),
            'America/Belem' => __( 'UTC/GMT -03:00 - America/Belem', 'mmba-wp-arrow' ),
            'America/Belize' => __( 'UTC/GMT -06:00 - America/Belize', 'mmba-wp-arrow' ),
            'America/Blanc-Sablon' => __( 'UTC/GMT -04:00 - America/Blanc-Sablon', 'mmba-wp-arrow' ),
            'America/Boa_Vista' => __( 'UTC/GMT -04:00 - America/Boa_Vista', 'mmba-wp-arrow' ),
            'America/Bogota' => __( 'UTC/GMT -05:00 - America/Bogota', 'mmba-wp-arrow' ),
            'America/Boise' => __( 'UTC/GMT -06:00 - America/Boise', 'mmba-wp-arrow' ),
            'America/Cambridge_Bay' => __( 'UTC/GMT -06:00 - America/Cambridge_Bay', 'mmba-wp-arrow' ),
            'America/Campo_Grande' => __( 'UTC/GMT -04:00 - America/Campo_Grande', 'mmba-wp-arrow' ),
            'America/Cancun' => __( 'UTC/GMT -05:00 - America/Cancun', 'mmba-wp-arrow' ),
            'America/Caracas' => __( 'UTC/GMT -04:00 - America/Caracas', 'mmba-wp-arrow' ),
            'America/Cayenne' => __( 'UTC/GMT -03:00 - America/Cayenne', 'mmba-wp-arrow' ),
            'America/Cayman' => __( 'UTC/GMT -05:00 - America/Cayman', 'mmba-wp-arrow' ),
            'America/Chicago' => __( 'UTC/GMT -05:00 - America/Chicago', 'mmba-wp-arrow' ),
            'America/Chihuahua' => __( 'UTC/GMT -06:00 - America/Chihuahua', 'mmba-wp-arrow' ),
            'America/Costa_Rica' => __( 'UTC/GMT -06:00 - America/Costa_Rica', 'mmba-wp-arrow' ),
            'America/Creston' => __( 'UTC/GMT -07:00 - America/Creston', 'mmba-wp-arrow' ),
            'America/Cuiaba' => __( 'UTC/GMT -04:00 - America/Cuiaba', 'mmba-wp-arrow' ),
            'America/Curacao' => __( 'UTC/GMT -04:00 - America/Curacao', 'mmba-wp-arrow' ),
            'America/Danmarkshavn' => __( 'UTC/GMT +00:00 - America/Danmarkshavn', 'mmba-wp-arrow' ),
            'America/Dawson' => __( 'UTC/GMT -07:00 - America/Dawson', 'mmba-wp-arrow' ),
            'America/Dawson_Creek' => __( 'UTC/GMT -07:00 - America/Dawson_Creek', 'mmba-wp-arrow' ),
            'America/Denver' => __( 'UTC/GMT -06:00 - America/Denver', 'mmba-wp-arrow' ),
            'America/Detroit' => __( 'UTC/GMT -04:00 - America/Detroit', 'mmba-wp-arrow' ),
            'America/Dominica' => __( 'UTC/GMT -04:00 - America/Dominica', 'mmba-wp-arrow' ),
            'America/Edmonton' => __( 'UTC/GMT -06:00 - America/Edmonton', 'mmba-wp-arrow' ),
            'America/Eirunepe' => __( 'UTC/GMT -05:00 - America/Eirunepe', 'mmba-wp-arrow' ),
            'America/El_Salvador' => __( 'UTC/GMT -06:00 - America/El_Salvador', 'mmba-wp-arrow' ),
            'America/Fort_Nelson' => __( 'UTC/GMT -07:00 - America/Fort_Nelson', 'mmba-wp-arrow' ),
            'America/Fortaleza' => __( 'UTC/GMT -03:00 - America/Fortaleza', 'mmba-wp-arrow' ),
            'America/Glace_Bay' => __( 'UTC/GMT -03:00 - America/Glace_Bay', 'mmba-wp-arrow' ),
            'America/Godthab' => __( 'UTC/GMT -02:00 - America/Godthab', 'mmba-wp-arrow' ),
            'America/Goose_Bay' => __( 'UTC/GMT -03:00 - America/Goose_Bay', 'mmba-wp-arrow' ),
            'America/Grand_Turk' => __( 'UTC/GMT -04:00 - America/Grand_Turk', 'mmba-wp-arrow' ),
            'America/Grenada' => __( 'UTC/GMT -04:00 - America/Grenada', 'mmba-wp-arrow' ),
            'America/Guadeloupe' => __( 'UTC/GMT -04:00 - America/Guadeloupe', 'mmba-wp-arrow' ),
            'America/Guatemala' => __( 'UTC/GMT -06:00 - America/Guatemala', 'mmba-wp-arrow' ),
            'America/Guayaquil' => __( 'UTC/GMT -05:00 - America/Guayaquil', 'mmba-wp-arrow' ),
            'America/Guyana' => __( 'UTC/GMT -04:00 - America/Guyana', 'mmba-wp-arrow' ),
            'America/Halifax' => __( 'UTC/GMT -03:00 - America/Halifax', 'mmba-wp-arrow' ),
            'America/Havana' => __( 'UTC/GMT -04:00 - America/Havana', 'mmba-wp-arrow' ),
            'America/Hermosillo' => __( 'UTC/GMT -07:00 - America/Hermosillo', 'mmba-wp-arrow' ),
            'America/Indiana/Indianapolis' => __( 'UTC/GMT -04:00 - America/Indiana/Indianapolis', 'mmba-wp-arrow' ),
            'America/Indiana/Knox' => __( 'UTC/GMT -05:00 - America/Indiana/Knox', 'mmba-wp-arrow' ),
            'America/Indiana/Marengo' => __( 'UTC/GMT -04:00 - America/Indiana/Marengo', 'mmba-wp-arrow' ),
            'America/Indiana/Petersburg' => __( 'UTC/GMT -04:00 - America/Indiana/Petersburg', 'mmba-wp-arrow' ),
            'America/Indiana/Tell_City' => __( 'UTC/GMT -05:00 - America/Indiana/Tell_City', 'mmba-wp-arrow' ),
            'America/Indiana/Vevay' => __( 'UTC/GMT -04:00 - America/Indiana/Vevay', 'mmba-wp-arrow' ),
            'America/Indiana/Vincennes' => __( 'UTC/GMT -04:00 - America/Indiana/Vincennes', 'mmba-wp-arrow' ),
            'America/Indiana/Winamac' => __( 'UTC/GMT -04:00 - America/Indiana/Winamac', 'mmba-wp-arrow' ),
            'America/Inuvik' => __( 'UTC/GMT -06:00 - America/Inuvik', 'mmba-wp-arrow' ),
            'America/Iqaluit' => __( 'UTC/GMT -04:00 - America/Iqaluit', 'mmba-wp-arrow' ),
            'America/Jamaica' => __( 'UTC/GMT -05:00 - America/Jamaica', 'mmba-wp-arrow' ),
            'America/Juneau' => __( 'UTC/GMT -08:00 - America/Juneau', 'mmba-wp-arrow' ),
            'America/Kentucky/Louisville' => __( 'UTC/GMT -04:00 - America/Kentucky/Louisville', 'mmba-wp-arrow' ),
            'America/Kentucky/Monticello' => __( 'UTC/GMT -04:00 - America/Kentucky/Monticello', 'mmba-wp-arrow' ),
            'America/Kralendijk' => __( 'UTC/GMT -04:00 - America/Kralendijk', 'mmba-wp-arrow' ),
            'America/La_Paz' => __( 'UTC/GMT -04:00 - America/La_Paz', 'mmba-wp-arrow' ),
            'America/Lima' => __( 'UTC/GMT -05:00 - America/Lima', 'mmba-wp-arrow' ),
            'America/Los_Angeles' => __( 'UTC/GMT -07:00 - America/Los_Angeles', 'mmba-wp-arrow' ),
            'America/Lower_Princes' => __( 'UTC/GMT -04:00 - America/Lower_Princes', 'mmba-wp-arrow' ),
            'America/Maceio' => __( 'UTC/GMT -03:00 - America/Maceio', 'mmba-wp-arrow' ),
            'America/Managua' => __( 'UTC/GMT -06:00 - America/Managua', 'mmba-wp-arrow' ),
            'America/Manaus' => __( 'UTC/GMT -04:00 - America/Manaus', 'mmba-wp-arrow' ),
            'America/Marigot' => __( 'UTC/GMT -04:00 - America/Marigot', 'mmba-wp-arrow' ),
            'America/Martinique' => __( 'UTC/GMT -04:00 - America/Martinique', 'mmba-wp-arrow' ),
            'America/Matamoros' => __( 'UTC/GMT -05:00 - America/Matamoros', 'mmba-wp-arrow' ),
            'America/Mazatlan' => __( 'UTC/GMT -06:00 - America/Mazatlan', 'mmba-wp-arrow' ),
            'America/Menominee' => __( 'UTC/GMT -05:00 - America/Menominee', 'mmba-wp-arrow' ),
            'America/Merida' => __( 'UTC/GMT -05:00 - America/Merida', 'mmba-wp-arrow' ),
            'America/Metlakatla' => __( 'UTC/GMT -08:00 - America/Metlakatla', 'mmba-wp-arrow' ),
            'America/Mexico_City' => __( 'UTC/GMT -05:00 - America/Mexico_City', 'mmba-wp-arrow' ),
            'America/Miquelon' => __( 'UTC/GMT -02:00 - America/Miquelon', 'mmba-wp-arrow' ),
            'America/Moncton' => __( 'UTC/GMT -03:00 - America/Moncton', 'mmba-wp-arrow' ),
            'America/Monterrey' => __( 'UTC/GMT -05:00 - America/Monterrey', 'mmba-wp-arrow' ),
            'America/Montevideo' => __( 'UTC/GMT -03:00 - America/Montevideo', 'mmba-wp-arrow' ),
            'America/Montserrat' => __( 'UTC/GMT -04:00 - America/Montserrat', 'mmba-wp-arrow' ),
            'America/Nassau' => __( 'UTC/GMT -04:00 - America/Nassau', 'mmba-wp-arrow' ),
            'America/New_York' => __( 'UTC/GMT -04:00 - America/New_York', 'mmba-wp-arrow' ),
            'America/Nipigon' => __( 'UTC/GMT -04:00 - America/Nipigon', 'mmba-wp-arrow' ),
            'America/Nome' => __( 'UTC/GMT -08:00 - America/Nome', 'mmba-wp-arrow' ),
            'America/Noronha' => __( 'UTC/GMT -02:00 - America/Noronha', 'mmba-wp-arrow' ),
            'America/North_Dakota/Beulah' => __( 'UTC/GMT -05:00 - America/North_Dakota/Beulah', 'mmba-wp-arrow' ),
            'America/North_Dakota/Center' => __( 'UTC/GMT -05:00 - America/North_Dakota/Center', 'mmba-wp-arrow' ),
            'America/North_Dakota/New_Salem' => __( 'UTC/GMT -05:00 - America/North_Dakota/New_Salem', 'mmba-wp-arrow' ),
            'America/Ojinaga' => __( 'UTC/GMT -06:00 - America/Ojinaga', 'mmba-wp-arrow' ),
            'America/Panama' => __( 'UTC/GMT -05:00 - America/Panama', 'mmba-wp-arrow' ),
            'America/Pangnirtung' => __( 'UTC/GMT -04:00 - America/Pangnirtung', 'mmba-wp-arrow' ),
            'America/Paramaribo' => __( 'UTC/GMT -03:00 - America/Paramaribo', 'mmba-wp-arrow' ),
            'America/Phoenix' => __( 'UTC/GMT -07:00 - America/Phoenix', 'mmba-wp-arrow' ),
            'America/Port-au-Prince' => __( 'UTC/GMT -04:00 - America/Port-au-Prince', 'mmba-wp-arrow' ),
            'America/Port_of_Spain' => __( 'UTC/GMT -04:00 - America/Port_of_Spain', 'mmba-wp-arrow' ),
            'America/Porto_Velho' => __( 'UTC/GMT -04:00 - America/Porto_Velho', 'mmba-wp-arrow' ),
            'America/Puerto_Rico' => __( 'UTC/GMT -04:00 - America/Puerto_Rico', 'mmba-wp-arrow' ),
            'America/Punta_Arenas' => __( 'UTC/GMT -03:00 - America/Punta_Arenas', 'mmba-wp-arrow' ),
            'America/Rainy_River' => __( 'UTC/GMT -05:00 - America/Rainy_River', 'mmba-wp-arrow' ),
            'America/Rankin_Inlet' => __( 'UTC/GMT -05:00 - America/Rankin_Inlet', 'mmba-wp-arrow' ),
            'America/Recife' => __( 'UTC/GMT -03:00 - America/Recife', 'mmba-wp-arrow' ),
            'America/Regina' => __( 'UTC/GMT -06:00 - America/Regina', 'mmba-wp-arrow' ),
            'America/Resolute' => __( 'UTC/GMT -05:00 - America/Resolute', 'mmba-wp-arrow' ),
            'America/Rio_Branco' => __( 'UTC/GMT -05:00 - America/Rio_Branco', 'mmba-wp-arrow' ),
            'America/Santarem' => __( 'UTC/GMT -03:00 - America/Santarem', 'mmba-wp-arrow' ),
            'America/Santiago' => __( 'UTC/GMT -04:00 - America/Santiago', 'mmba-wp-arrow' ),
            'America/Santo_Domingo' => __( 'UTC/GMT -04:00 - America/Santo_Domingo', 'mmba-wp-arrow' ),
            'America/Sao_Paulo' => __( 'UTC/GMT -03:00 - America/Sao_Paulo', 'mmba-wp-arrow' ),
            'America/Scoresbysund' => __( 'UTC/GMT +00:00 - America/Scoresbysund', 'mmba-wp-arrow' ),
            'America/Sitka' => __( 'UTC/GMT -08:00 - America/Sitka', 'mmba-wp-arrow' ),
            'America/St_Barthelemy' => __( 'UTC/GMT -04:00 - America/St_Barthelemy', 'mmba-wp-arrow' ),
            'America/St_Johns' => __( 'UTC/GMT -02:30 - America/St_Johns', 'mmba-wp-arrow' ),
            'America/St_Kitts' => __( 'UTC/GMT -04:00 - America/St_Kitts', 'mmba-wp-arrow' ),
            'America/St_Lucia' => __( 'UTC/GMT -04:00 - America/St_Lucia', 'mmba-wp-arrow' ),
            'America/St_Thomas' => __( 'UTC/GMT -04:00 - America/St_Thomas', 'mmba-wp-arrow' ),
            'America/St_Vincent' => __( 'UTC/GMT -04:00 - America/St_Vincent', 'mmba-wp-arrow' ),
            'America/Swift_Current' => __( 'UTC/GMT -06:00 - America/Swift_Current', 'mmba-wp-arrow' ),
            'America/Tegucigalpa' => __( 'UTC/GMT -06:00 - America/Tegucigalpa', 'mmba-wp-arrow' ),
            'America/Thule' => __( 'UTC/GMT -03:00 - America/Thule', 'mmba-wp-arrow' ),
            'America/Thunder_Bay' => __( 'UTC/GMT -04:00 - America/Thunder_Bay', 'mmba-wp-arrow' ),
            'America/Tijuana' => __( 'UTC/GMT -07:00 - America/Tijuana', 'mmba-wp-arrow' ),
            'America/Toronto' => __( 'UTC/GMT -04:00 - America/Toronto', 'mmba-wp-arrow' ),
            'America/Tortola' => __( 'UTC/GMT -04:00 - America/Tortola', 'mmba-wp-arrow' ),
            'America/Vancouver' => __( 'UTC/GMT -07:00 - America/Vancouver', 'mmba-wp-arrow' ),
            'America/Whitehorse' => __( 'UTC/GMT -07:00 - America/Whitehorse', 'mmba-wp-arrow' ),
            'America/Winnipeg' => __( 'UTC/GMT -05:00 - America/Winnipeg', 'mmba-wp-arrow' ),
            'America/Yakutat' => __( 'UTC/GMT -08:00 - America/Yakutat', 'mmba-wp-arrow' ),
            'America/Yellowknife' => __( 'UTC/GMT -06:00 - America/Yellowknife', 'mmba-wp-arrow' ),
            'Antarctica/Casey' => __( 'UTC/GMT +11:00 - Antarctica/Casey', 'mmba-wp-arrow' ),
            'Antarctica/Davis' => __( 'UTC/GMT +07:00 - Antarctica/Davis', 'mmba-wp-arrow' ),
            'Antarctica/DumontDUrville' => __( 'UTC/GMT +10:00 - Antarctica/DumontDUrville', 'mmba-wp-arrow' ),
            'Antarctica/Macquarie' => __( 'UTC/GMT +11:00 - Antarctica/Macquarie', 'mmba-wp-arrow' ),
            'Antarctica/Mawson' => __( 'UTC/GMT +05:00 - Antarctica/Mawson', 'mmba-wp-arrow' ),
            'Antarctica/McMurdo' => __( 'UTC/GMT +12:00 - Antarctica/McMurdo', 'mmba-wp-arrow' ),
            'Antarctica/Palmer' => __( 'UTC/GMT -03:00 - Antarctica/Palmer', 'mmba-wp-arrow' ),
            'Antarctica/Rothera' => __( 'UTC/GMT -03:00 - Antarctica/Rothera', 'mmba-wp-arrow' ),
            'Antarctica/Syowa' => __( 'UTC/GMT +03:00 - Antarctica/Syowa', 'mmba-wp-arrow' ),
            'Antarctica/Troll' => __( 'UTC/GMT +02:00 - Antarctica/Troll', 'mmba-wp-arrow' ),
            'Antarctica/Vostok' => __( 'UTC/GMT +06:00 - Antarctica/Vostok', 'mmba-wp-arrow' ),
            'Arctic/Longyearbyen' => __( 'UTC/GMT +02:00 - Arctic/Longyearbyen', 'mmba-wp-arrow' ),
            'Asia/Aden' => __( 'UTC/GMT +03:00 - Asia/Aden', 'mmba-wp-arrow' ),
            'Asia/Almaty' => __( 'UTC/GMT +06:00 - Asia/Almaty', 'mmba-wp-arrow' ),
            'Asia/Amman' => __( 'UTC/GMT +03:00 - Asia/Amman', 'mmba-wp-arrow' ),
            'Asia/Anadyr' => __( 'UTC/GMT +12:00 - Asia/Anadyr', 'mmba-wp-arrow' ),
            'Asia/Aqtau' => __( 'UTC/GMT +05:00 - Asia/Aqtau', 'mmba-wp-arrow' ),
            'Asia/Aqtobe' => __( 'UTC/GMT +05:00 - Asia/Aqtobe', 'mmba-wp-arrow' ),
            'Asia/Ashgabat' => __( 'UTC/GMT +05:00 - Asia/Ashgabat', 'mmba-wp-arrow' ),
            'Asia/Atyrau' => __( 'UTC/GMT +05:00 - Asia/Atyrau', 'mmba-wp-arrow' ),
            'Asia/Baghdad' => __( 'UTC/GMT +03:00 - Asia/Baghdad', 'mmba-wp-arrow' ),
            'Asia/Bahrain' => __( 'UTC/GMT +03:00 - Asia/Bahrain', 'mmba-wp-arrow' ),
            'Asia/Baku' => __( 'UTC/GMT +04:00 - Asia/Baku', 'mmba-wp-arrow' ),
            'Asia/Bangkok' => __( 'UTC/GMT +07:00 - Asia/Bangkok', 'mmba-wp-arrow' ),
            'Asia/Barnaul' => __( 'UTC/GMT +07:00 - Asia/Barnaul', 'mmba-wp-arrow' ),
            'Asia/Beirut' => __( 'UTC/GMT +03:00 - Asia/Beirut', 'mmba-wp-arrow' ),
            'Asia/Bishkek' => __( 'UTC/GMT +06:00 - Asia/Bishkek', 'mmba-wp-arrow' ),
            'Asia/Brunei' => __( 'UTC/GMT +08:00 - Asia/Brunei', 'mmba-wp-arrow' ),
            'Asia/Chita' => __( 'UTC/GMT +09:00 - Asia/Chita', 'mmba-wp-arrow' ),
            'Asia/Choibalsan' => __( 'UTC/GMT +08:00 - Asia/Choibalsan', 'mmba-wp-arrow' ),
            'Asia/Colombo' => __( 'UTC/GMT +05:30 - Asia/Colombo', 'mmba-wp-arrow' ),
            'Asia/Damascus' => __( 'UTC/GMT +03:00 - Asia/Damascus', 'mmba-wp-arrow' ),
            'Asia/Dhaka' => __( 'UTC/GMT +06:00 - Asia/Dhaka', 'mmba-wp-arrow' ),
            'Asia/Dili' => __( 'UTC/GMT +09:00 - Asia/Dili', 'mmba-wp-arrow' ),
            'Asia/Dubai' => __( 'UTC/GMT +04:00 - Asia/Dubai', 'mmba-wp-arrow' ),
            'Asia/Dushanbe' => __( 'UTC/GMT +05:00 - Asia/Dushanbe', 'mmba-wp-arrow' ),
            'Asia/Famagusta' => __( 'UTC/GMT +03:00 - Asia/Famagusta', 'mmba-wp-arrow' ),
            'Asia/Gaza' => __( 'UTC/GMT +03:00 - Asia/Gaza', 'mmba-wp-arrow' ),
            'Asia/Hebron' => __( 'UTC/GMT +03:00 - Asia/Hebron', 'mmba-wp-arrow' ),
            'Asia/Ho_Chi_Minh' => __( 'UTC/GMT +07:00 - Asia/Ho_Chi_Minh', 'mmba-wp-arrow' ),
            'Asia/Hong_Kong' => __( 'UTC/GMT +08:00 - Asia/Hong_Kong', 'mmba-wp-arrow' ),
            'Asia/Hovd' => __( 'UTC/GMT +07:00 - Asia/Hovd', 'mmba-wp-arrow' ),
            'Asia/Irkutsk' => __( 'UTC/GMT +08:00 - Asia/Irkutsk', 'mmba-wp-arrow' ),
            'Asia/Jakarta' => __( 'UTC/GMT +07:00 - Asia/Jakarta', 'mmba-wp-arrow' ),
            'Asia/Jayapura' => __( 'UTC/GMT +09:00 - Asia/Jayapura', 'mmba-wp-arrow' ),
            'Asia/Jerusalem' => __( 'UTC/GMT +03:00 - Asia/Jerusalem', 'mmba-wp-arrow' ),
            'Asia/Kabul' => __( 'UTC/GMT +04:30 - Asia/Kabul', 'mmba-wp-arrow' ),
            'Asia/Kamchatka' => __( 'UTC/GMT +12:00 - Asia/Kamchatka', 'mmba-wp-arrow' ),
            'Asia/Karachi' => __( 'UTC/GMT +05:00 - Asia/Karachi', 'mmba-wp-arrow' ),
            'Asia/Kathmandu' => __( 'UTC/GMT +05:45 - Asia/Kathmandu', 'mmba-wp-arrow' ),
            'Asia/Khandyga' => __( 'UTC/GMT +09:00 - Asia/Khandyga', 'mmba-wp-arrow' ),
            'Asia/Kolkata' => __( 'UTC/GMT +05:30 - Asia/Kolkata', 'mmba-wp-arrow' ),
            'Asia/Krasnoyarsk' => __( 'UTC/GMT +07:00 - Asia/Krasnoyarsk', 'mmba-wp-arrow' ),
            'Asia/Kuala_Lumpur' => __( 'UTC/GMT +08:00 - Asia/Kuala_Lumpur', 'mmba-wp-arrow' ),
            'Asia/Kuching' => __( 'UTC/GMT +08:00 - Asia/Kuching', 'mmba-wp-arrow' ),
            'Asia/Kuwait' => __( 'UTC/GMT +03:00 - Asia/Kuwait', 'mmba-wp-arrow' ),
            'Asia/Macau' => __( 'UTC/GMT +08:00 - Asia/Macau', 'mmba-wp-arrow' ),
            'Asia/Magadan' => __( 'UTC/GMT +11:00 - Asia/Magadan', 'mmba-wp-arrow' ),
            'Asia/Makassar' => __( 'UTC/GMT +08:00 - Asia/Makassar', 'mmba-wp-arrow' ),
            'Asia/Manila' => __( 'UTC/GMT +08:00 - Asia/Manila', 'mmba-wp-arrow' ),
            'Asia/Muscat' => __( 'UTC/GMT +04:00 - Asia/Muscat', 'mmba-wp-arrow' ),
            'Asia/Nicosia' => __( 'UTC/GMT +03:00 - Asia/Nicosia', 'mmba-wp-arrow' ),
            'Asia/Novokuznetsk' => __( 'UTC/GMT +07:00 - Asia/Novokuznetsk', 'mmba-wp-arrow' ),
            'Asia/Novosibirsk' => __( 'UTC/GMT +07:00 - Asia/Novosibirsk', 'mmba-wp-arrow' ),
            'Asia/Omsk' => __( 'UTC/GMT +06:00 - Asia/Omsk', 'mmba-wp-arrow' ),
            'Asia/Oral' => __( 'UTC/GMT +05:00 - Asia/Oral', 'mmba-wp-arrow' ),
            'Asia/Phnom_Penh' => __( 'UTC/GMT +07:00 - Asia/Phnom_Penh', 'mmba-wp-arrow' ),
            'Asia/Pontianak' => __( 'UTC/GMT +07:00 - Asia/Pontianak', 'mmba-wp-arrow' ),
            'Asia/Pyongyang' => __( 'UTC/GMT +08:30 - Asia/Pyongyang', 'mmba-wp-arrow' ),
            'Asia/Qatar' => __( 'UTC/GMT +03:00 - Asia/Qatar', 'mmba-wp-arrow' ),
            'Asia/Qyzylorda' => __( 'UTC/GMT +06:00 - Asia/Qyzylorda', 'mmba-wp-arrow' ),
            'Asia/Riyadh' => __( 'UTC/GMT +03:00 - Asia/Riyadh', 'mmba-wp-arrow' ),
            'Asia/Sakhalin' => __( 'UTC/GMT +11:00 - Asia/Sakhalin', 'mmba-wp-arrow' ),
            'Asia/Samarkand' => __( 'UTC/GMT +05:00 - Asia/Samarkand', 'mmba-wp-arrow' ),
            'Asia/Seoul' => __( 'UTC/GMT +09:00 - Asia/Seoul', 'mmba-wp-arrow' ),
            'Asia/Shanghai' => __( 'UTC/GMT +08:00 - Asia/Shanghai', 'mmba-wp-arrow' ),
            'Asia/Singapore' => __( 'UTC/GMT +08:00 - Asia/Singapore', 'mmba-wp-arrow' ),
            'Asia/Srednekolymsk' => __( 'UTC/GMT +11:00 - Asia/Srednekolymsk', 'mmba-wp-arrow' ),
            'Asia/Taipei' => __( 'UTC/GMT +08:00 - Asia/Taipei', 'mmba-wp-arrow' ),
            'Asia/Tashkent' => __( 'UTC/GMT +05:00 - Asia/Tashkent', 'mmba-wp-arrow' ),
            'Asia/Tbilisi' => __( 'UTC/GMT +04:00 - Asia/Tbilisi', 'mmba-wp-arrow' ),
            'Asia/Tehran' => __( 'UTC/GMT +04:30 - Asia/Tehran', 'mmba-wp-arrow' ),
            'Asia/Thimphu' => __( 'UTC/GMT +06:00 - Asia/Thimphu', 'mmba-wp-arrow' ),
            'Asia/Tokyo' => __( 'UTC/GMT +09:00 - Asia/Tokyo', 'mmba-wp-arrow' ),
            'Asia/Tomsk' => __( 'UTC/GMT +07:00 - Asia/Tomsk', 'mmba-wp-arrow' ),
            'Asia/Ulaanbaatar' => __( 'UTC/GMT +08:00 - Asia/Ulaanbaatar', 'mmba-wp-arrow' ),
            'Asia/Urumqi' => __( 'UTC/GMT +06:00 - Asia/Urumqi', 'mmba-wp-arrow' ),
            'Asia/Ust-Nera' => __( 'UTC/GMT +10:00 - Asia/Ust-Nera', 'mmba-wp-arrow' ),
            'Asia/Vientiane' => __( 'UTC/GMT +07:00 - Asia/Vientiane', 'mmba-wp-arrow' ),
            'Asia/Vladivostok' => __( 'UTC/GMT +10:00 - Asia/Vladivostok', 'mmba-wp-arrow' ),
            'Asia/Yakutsk' => __( 'UTC/GMT +09:00 - Asia/Yakutsk', 'mmba-wp-arrow' ),
            'Asia/Yangon' => __( 'UTC/GMT +06:30 - Asia/Yangon', 'mmba-wp-arrow' ),
            'Asia/Yekaterinburg' => __( 'UTC/GMT +05:00 - Asia/Yekaterinburg', 'mmba-wp-arrow' ),
            'Asia/Yerevan' => __( 'UTC/GMT +04:00 - Asia/Yerevan', 'mmba-wp-arrow' ),
            'Atlantic/Azores' => __( 'UTC/GMT +00:00 - Atlantic/Azores', 'mmba-wp-arrow' ),
            'Atlantic/Bermuda' => __( 'UTC/GMT -03:00 - Atlantic/Bermuda', 'mmba-wp-arrow' ),
            'Atlantic/Canary' => __( 'UTC/GMT +01:00 - Atlantic/Canary', 'mmba-wp-arrow' ),
            'Atlantic/Cape_Verde' => __( 'UTC/GMT -01:00 - Atlantic/Cape_Verde', 'mmba-wp-arrow' ),
            'Atlantic/Faroe' => __( 'UTC/GMT +01:00 - Atlantic/Faroe', 'mmba-wp-arrow' ),
            'Atlantic/Madeira' => __( 'UTC/GMT +01:00 - Atlantic/Madeira', 'mmba-wp-arrow' ),
            'Atlantic/Reykjavik' => __( 'UTC/GMT +00:00 - Atlantic/Reykjavik', 'mmba-wp-arrow' ),
            'Atlantic/South_Georgia' => __( 'UTC/GMT -02:00 - Atlantic/South_Georgia', 'mmba-wp-arrow' ),
            'Atlantic/St_Helena' => __( 'UTC/GMT +00:00 - Atlantic/St_Helena', 'mmba-wp-arrow' ),
            'Atlantic/Stanley' => __( 'UTC/GMT -03:00 - Atlantic/Stanley', 'mmba-wp-arrow' ),
            'Australia/Adelaide' => __( 'UTC/GMT +09:30 - Australia/Adelaide', 'mmba-wp-arrow' ),
            'Australia/Brisbane' => __( 'UTC/GMT +10:00 - Australia/Brisbane', 'mmba-wp-arrow' ),
            'Australia/Broken_Hill' => __( 'UTC/GMT +09:30 - Australia/Broken_Hill', 'mmba-wp-arrow' ),
            'Australia/Currie' => __( 'UTC/GMT +10:00 - Australia/Currie', 'mmba-wp-arrow' ),
            'Australia/Darwin' => __( 'UTC/GMT +09:30 - Australia/Darwin', 'mmba-wp-arrow' ),
            'Australia/Eucla' => __( 'UTC/GMT +08:45 - Australia/Eucla', 'mmba-wp-arrow' ),
            'Australia/Hobart' => __( 'UTC/GMT +10:00 - Australia/Hobart', 'mmba-wp-arrow' ),
            'Australia/Lindeman' => __( 'UTC/GMT +10:00 - Australia/Lindeman', 'mmba-wp-arrow' ),
            'Australia/Lord_Howe' => __( 'UTC/GMT +10:30 - Australia/Lord_Howe', 'mmba-wp-arrow' ),
            'Australia/Melbourne' => __( 'UTC/GMT +10:00 - Australia/Melbourne', 'mmba-wp-arrow' ),
            'Australia/Perth' => __( 'UTC/GMT +08:00 - Australia/Perth', 'mmba-wp-arrow' ),
            'Australia/Sydney' => __( 'UTC/GMT +10:00 - Australia/Sydney', 'mmba-wp-arrow' ),
            'Europe/Amsterdam' => __( 'UTC/GMT +02:00 - Europe/Amsterdam', 'mmba-wp-arrow' ),
            'Europe/Andorra' => __( 'UTC/GMT +02:00 - Europe/Andorra', 'mmba-wp-arrow' ),
            'Europe/Astrakhan' => __( 'UTC/GMT +04:00 - Europe/Astrakhan', 'mmba-wp-arrow' ),
            'Europe/Athens' => __( 'UTC/GMT +03:00 - Europe/Athens', 'mmba-wp-arrow' ),
            'Europe/Belgrade' => __( 'UTC/GMT +02:00 - Europe/Belgrade', 'mmba-wp-arrow' ),
            'Europe/Berlin' => __( 'UTC/GMT +02:00 - Europe/Berlin', 'mmba-wp-arrow' ),
            'Europe/Bratislava' => __( 'UTC/GMT +02:00 - Europe/Bratislava', 'mmba-wp-arrow' ),
            'Europe/Brussels' => __( 'UTC/GMT +02:00 - Europe/Brussels', 'mmba-wp-arrow' ),
            'Europe/Bucharest' => __( 'UTC/GMT +03:00 - Europe/Bucharest', 'mmba-wp-arrow' ),
            'Europe/Budapest' => __( 'UTC/GMT +02:00 - Europe/Budapest', 'mmba-wp-arrow' ),
            'Europe/Busingen' => __( 'UTC/GMT +02:00 - Europe/Busingen', 'mmba-wp-arrow' ),
            'Europe/Chisinau' => __( 'UTC/GMT +03:00 - Europe/Chisinau', 'mmba-wp-arrow' ),
            'Europe/Copenhagen' => __( 'UTC/GMT +02:00 - Europe/Copenhagen', 'mmba-wp-arrow' ),
            'Europe/Dublin' => __( 'UTC/GMT +01:00 - Europe/Dublin', 'mmba-wp-arrow' ),
            'Europe/Gibraltar' => __( 'UTC/GMT +02:00 - Europe/Gibraltar', 'mmba-wp-arrow' ),
            'Europe/Guernsey' => __( 'UTC/GMT +01:00 - Europe/Guernsey', 'mmba-wp-arrow' ),
            'Europe/Helsinki' => __( 'UTC/GMT +03:00 - Europe/Helsinki', 'mmba-wp-arrow' ),
            'Europe/Isle_of_Man' => __( 'UTC/GMT +01:00 - Europe/Isle_of_Man', 'mmba-wp-arrow' ),
            'Europe/Istanbul' => __( 'UTC/GMT +03:00 - Europe/Istanbul', 'mmba-wp-arrow' ),
            'Europe/Jersey' => __( 'UTC/GMT +01:00 - Europe/Jersey', 'mmba-wp-arrow' ),
            'Europe/Kaliningrad' => __( 'UTC/GMT +02:00 - Europe/Kaliningrad', 'mmba-wp-arrow' ),
            'Europe/Kiev' => __( 'UTC/GMT +03:00 - Europe/Kiev', 'mmba-wp-arrow' ),
            'Europe/Kirov' => __( 'UTC/GMT +03:00 - Europe/Kirov', 'mmba-wp-arrow' ),
            'Europe/Lisbon' => __( 'UTC/GMT +01:00 - Europe/Lisbon', 'mmba-wp-arrow' ),
            'Europe/Ljubljana' => __( 'UTC/GMT +02:00 - Europe/Ljubljana', 'mmba-wp-arrow' ),
            'Europe/London' => __( 'UTC/GMT +01:00 - Europe/London', 'mmba-wp-arrow' ),
            'Europe/Luxembourg' => __( 'UTC/GMT +02:00 - Europe/Luxembourg', 'mmba-wp-arrow' ),
            'Europe/Madrid' => __( 'UTC/GMT +02:00 - Europe/Madrid', 'mmba-wp-arrow' ),
            'Europe/Malta' => __( 'UTC/GMT +02:00 - Europe/Malta', 'mmba-wp-arrow' ),
            'Europe/Mariehamn' => __( 'UTC/GMT +03:00 - Europe/Mariehamn', 'mmba-wp-arrow' ),
            'Europe/Minsk' => __( 'UTC/GMT +03:00 - Europe/Minsk', 'mmba-wp-arrow' ),
            'Europe/Monaco' => __( 'UTC/GMT +02:00 - Europe/Monaco', 'mmba-wp-arrow' ),
            'Europe/Moscow' => __( 'UTC/GMT +03:00 - Europe/Moscow', 'mmba-wp-arrow' ),
            'Europe/Oslo' => __( 'UTC/GMT +02:00 - Europe/Oslo', 'mmba-wp-arrow' ),
            'Europe/Paris' => __( 'UTC/GMT +02:00 - Europe/Paris', 'mmba-wp-arrow' ),
            'Europe/Podgorica' => __( 'UTC/GMT +02:00 - Europe/Podgorica', 'mmba-wp-arrow' ),
            'Europe/Prague' => __( 'UTC/GMT +02:00 - Europe/Prague', 'mmba-wp-arrow' ),
            'Europe/Riga' => __( 'UTC/GMT +03:00 - Europe/Riga', 'mmba-wp-arrow' ),
            'Europe/Rome' => __( 'UTC/GMT +02:00 - Europe/Rome', 'mmba-wp-arrow' ),
            'Europe/Samara' => __( 'UTC/GMT +04:00 - Europe/Samara', 'mmba-wp-arrow' ),
            'Europe/San_Marino' => __( 'UTC/GMT +02:00 - Europe/San_Marino', 'mmba-wp-arrow' ),
            'Europe/Sarajevo' => __( 'UTC/GMT +02:00 - Europe/Sarajevo', 'mmba-wp-arrow' ),
            'Europe/Saratov' => __( 'UTC/GMT +04:00 - Europe/Saratov', 'mmba-wp-arrow' ),
            'Europe/Simferopol' => __( 'UTC/GMT +03:00 - Europe/Simferopol', 'mmba-wp-arrow' ),
            'Europe/Skopje' => __( 'UTC/GMT +02:00 - Europe/Skopje', 'mmba-wp-arrow' ),
            'Europe/Sofia' => __( 'UTC/GMT +03:00 - Europe/Sofia', 'mmba-wp-arrow' ),
            'Europe/Stockholm' => __( 'UTC/GMT +02:00 - Europe/Stockholm', 'mmba-wp-arrow' ),
            'Europe/Tallinn' => __( 'UTC/GMT +03:00 - Europe/Tallinn', 'mmba-wp-arrow' ),
            'Europe/Tirane' => __( 'UTC/GMT +02:00 - Europe/Tirane', 'mmba-wp-arrow' ),
            'Europe/Ulyanovsk' => __( 'UTC/GMT +04:00 - Europe/Ulyanovsk', 'mmba-wp-arrow' ),
            'Europe/Uzhgorod' => __( 'UTC/GMT +03:00 - Europe/Uzhgorod', 'mmba-wp-arrow' ),
            'Europe/Vaduz' => __( 'UTC/GMT +02:00 - Europe/Vaduz', 'mmba-wp-arrow' ),
            'Europe/Vatican' => __( 'UTC/GMT +02:00 - Europe/Vatican', 'mmba-wp-arrow' ),
            'Europe/Vienna' => __( 'UTC/GMT +02:00 - Europe/Vienna', 'mmba-wp-arrow' ),
            'Europe/Vilnius' => __( 'UTC/GMT +03:00 - Europe/Vilnius', 'mmba-wp-arrow' ),
            'Europe/Volgograd' => __( 'UTC/GMT +03:00 - Europe/Volgograd', 'mmba-wp-arrow' ),
            'Europe/Warsaw' => __( 'UTC/GMT +02:00 - Europe/Warsaw', 'mmba-wp-arrow' ),
            'Europe/Zagreb' => __( 'UTC/GMT +02:00 - Europe/Zagreb', 'mmba-wp-arrow' ),
            'Europe/Zaporozhye' => __( 'UTC/GMT +03:00 - Europe/Zaporozhye', 'mmba-wp-arrow' ),
            'Europe/Zurich' => __( 'UTC/GMT +02:00 - Europe/Zurich', 'mmba-wp-arrow' ),
            'Indian/Antananarivo' => __( 'UTC/GMT +03:00 - Indian/Antananarivo', 'mmba-wp-arrow' ),
            'Indian/Chagos' => __( 'UTC/GMT +06:00 - Indian/Chagos', 'mmba-wp-arrow' ),
            'Indian/Christmas' => __( 'UTC/GMT +07:00 - Indian/Christmas', 'mmba-wp-arrow' ),
            'Indian/Cocos' => __( 'UTC/GMT +06:30 - Indian/Cocos', 'mmba-wp-arrow' ),
            'Indian/Comoro' => __( 'UTC/GMT +03:00 - Indian/Comoro', 'mmba-wp-arrow' ),
            'Indian/Kerguelen' => __( 'UTC/GMT +05:00 - Indian/Kerguelen', 'mmba-wp-arrow' ),
            'Indian/Mahe' => __( 'UTC/GMT +04:00 - Indian/Mahe', 'mmba-wp-arrow' ),
            'Indian/Maldives' => __( 'UTC/GMT +05:00 - Indian/Maldives', 'mmba-wp-arrow' ),
            'Indian/Mauritius' => __( 'UTC/GMT +04:00 - Indian/Mauritius', 'mmba-wp-arrow' ),
            'Indian/Mayotte' => __( 'UTC/GMT +03:00 - Indian/Mayotte', 'mmba-wp-arrow' ),
            'Indian/Reunion' => __( 'UTC/GMT +04:00 - Indian/Reunion', 'mmba-wp-arrow' ),
            'Pacific/Apia' => __( 'UTC/GMT +13:00 - Pacific/Apia', 'mmba-wp-arrow' ),
            'Pacific/Auckland' => __( 'UTC/GMT +12:00 - Pacific/Auckland', 'mmba-wp-arrow' ),
            'Pacific/Bougainville' => __( 'UTC/GMT +11:00 - Pacific/Bougainville', 'mmba-wp-arrow' ),
            'Pacific/Chatham' => __( 'UTC/GMT +12:45 - Pacific/Chatham', 'mmba-wp-arrow' ),
            'Pacific/Chuuk' => __( 'UTC/GMT +10:00 - Pacific/Chuuk', 'mmba-wp-arrow' ),
            'Pacific/Easter' => __( 'UTC/GMT -06:00 - Pacific/Easter', 'mmba-wp-arrow' ),
            'Pacific/Efate' => __( 'UTC/GMT +11:00 - Pacific/Efate', 'mmba-wp-arrow' ),
            'Pacific/Enderbury' => __( 'UTC/GMT +13:00 - Pacific/Enderbury', 'mmba-wp-arrow' ),
            'Pacific/Fakaofo' => __( 'UTC/GMT +13:00 - Pacific/Fakaofo', 'mmba-wp-arrow' ),
            'Pacific/Fiji' => __( 'UTC/GMT +12:00 - Pacific/Fiji', 'mmba-wp-arrow' ),
            'Pacific/Funafuti' => __( 'UTC/GMT +12:00 - Pacific/Funafuti', 'mmba-wp-arrow' ),
            'Pacific/Galapagos' => __( 'UTC/GMT -06:00 - Pacific/Galapagos', 'mmba-wp-arrow' ),
            'Pacific/Gambier' => __( 'UTC/GMT -09:00 - Pacific/Gambier', 'mmba-wp-arrow' ),
            'Pacific/Guadalcanal' => __( 'UTC/GMT +11:00 - Pacific/Guadalcanal', 'mmba-wp-arrow' ),
            'Pacific/Guam' => __( 'UTC/GMT +10:00 - Pacific/Guam', 'mmba-wp-arrow' ),
            'Pacific/Honolulu' => __( 'UTC/GMT -10:00 - Pacific/Honolulu', 'mmba-wp-arrow' ),
            'Pacific/Kiritimati' => __( 'UTC/GMT +14:00 - Pacific/Kiritimati', 'mmba-wp-arrow' ),
            'Pacific/Kosrae' => __( 'UTC/GMT +11:00 - Pacific/Kosrae', 'mmba-wp-arrow' ),
            'Pacific/Kwajalein' => __( 'UTC/GMT +12:00 - Pacific/Kwajalein', 'mmba-wp-arrow' ),
            'Pacific/Majuro' => __( 'UTC/GMT +12:00 - Pacific/Majuro', 'mmba-wp-arrow' ),
            'Pacific/Marquesas' => __( 'UTC/GMT -09:30 - Pacific/Marquesas', 'mmba-wp-arrow' ),
            'Pacific/Midway' => __( 'UTC/GMT -11:00 - Pacific/Midway', 'mmba-wp-arrow' ),
            'Pacific/Nauru' => __( 'UTC/GMT +12:00 - Pacific/Nauru', 'mmba-wp-arrow' ),
            'Pacific/Niue' => __( 'UTC/GMT -11:00 - Pacific/Niue', 'mmba-wp-arrow' ),
            'Pacific/Norfolk' => __( 'UTC/GMT +11:00 - Pacific/Norfolk', 'mmba-wp-arrow' ),
            'Pacific/Noumea' => __( 'UTC/GMT +11:00 - Pacific/Noumea', 'mmba-wp-arrow' ),
            'Pacific/Pago_Pago' => __( 'UTC/GMT -11:00 - Pacific/Pago_Pago', 'mmba-wp-arrow' ),
            'Pacific/Palau' => __( 'UTC/GMT +09:00 - Pacific/Palau', 'mmba-wp-arrow' ),
            'Pacific/Pitcairn' => __( 'UTC/GMT -08:00 - Pacific/Pitcairn', 'mmba-wp-arrow' ),
            'Pacific/Pohnpei' => __( 'UTC/GMT +11:00 - Pacific/Pohnpei', 'mmba-wp-arrow' ),
            'Pacific/Port_Moresby' => __( 'UTC/GMT +10:00 - Pacific/Port_Moresby', 'mmba-wp-arrow' ),
            'Pacific/Rarotonga' => __( 'UTC/GMT -10:00 - Pacific/Rarotonga', 'mmba-wp-arrow' ),
            'Pacific/Saipan' => __( 'UTC/GMT +10:00 - Pacific/Saipan', 'mmba-wp-arrow' ),
            'Pacific/Tahiti' => __( 'UTC/GMT -10:00 - Pacific/Tahiti', 'mmba-wp-arrow' ),
            'Pacific/Tarawa' => __( 'UTC/GMT +12:00 - Pacific/Tarawa', 'mmba-wp-arrow' ),
            'Pacific/Tongatapu' => __( 'UTC/GMT +13:00 - Pacific/Tongatapu', 'mmba-wp-arrow' ),
            'Pacific/Wake' => __( 'UTC/GMT +12:00 - Pacific/Wake', 'mmba-wp-arrow' ),
            'Pacific/Wallis' => __( 'UTC/GMT +12:00 - Pacific/Wallis', 'mmba-wp-arrow' ),
            'UTC' => __( 'UTC/GMT +00:00 - UTC', 'mmba-wp-arrow' )
        )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "select",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_date_format",
        "label" => __( "Date format", 'mmba-wp-arrow' ),
        "default_value" => "mm/dd/yy",
        "option_values" => array(
            '0' => __('---select---','mmba-wp-arrow'),
            'yy/mm/dd' => __('yy/mm/dd','mmba-wp-arrow'),
            'yy-mm-dd' => __('yy-mm-dd','mmba-wp-arrow'),
            'yy:mm:dd' => __('yy:mm:dd','mmba-wp-arrow'),
            'yy.mm.dd' => __('yy.mm.dd','mmba-wp-arrow'),
            'dd/mm/yy' => __('dd/mm/yy','mmba-wp-arrow'),
            'dd-mm-yy' => __('dd-mm-yy','mmba-wp-arrow'),
            'dd:mm:yy' => __('dd:mm:yy','mmba-wp-arrow'),
            'dd.mm.yy' => __('dd.mm.yy','mmba-wp-arrow'),
            'mm/dd/yy' => __('mm/dd/yy','mmba-wp-arrow'),
            'mm-dd-yy' => __('mm-dd-yy','mmba-wp-arrow'),
            'mm:dd:yy' => __('mm:dd:yy','mmba-wp-arrow'),
            'mm.dd.yy' => __('mm.dd.yy','mmba-wp-arrow'),
            'yy/dd/mm' => __('yy/dd/mm','mmba-wp-arrow'),
            'yy-dd-mm' => __('yy-dd-mm','mmba-wp-arrow'),
            'yy:dd:mm' => __('yy:dd:mm','mmba-wp-arrow'),
            'yy.dd.mm' => __('yy.dd.mm','mmba-wp-arrow')
        )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_start_date",
        "label" => __( "Start date", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_end_date",
        "label" => __( "End date", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_start_time",
        "label" => __( "Start time", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "textfield",
        "id" => MMBA_ARROW_ID_PREFIX."_advance_count_down_end_time",
        "label" => __( "End time", 'mmba-wp-arrow' )
    );

    //Notification alert icon Tab
    $mmba_arrow_options[ ] = array(
        "type" => "tab",
        "id" => MMBA_ARROW_ID_PREFIX."_notifiction_alert_list",
        "label" => __( "Alert list", 'mmba-wp-arrow' )
    );

    $mmba_arrow_options[ ] = array(
        "type" => "settings",
        "id" => MMBA_ARROW_ID_PREFIX."_settings_notification_alert",
    );

    //Notification alert section
    $mmba_arrow_options[ ] = array(
        "type" => "section",
        "id" => MMBA_ARROW_ID_PREFIX."_section_notification_alert",
        "label" => __( "Alert list", 'mmba-wp-arrow' )
    );

    return $mmba_arrow_options;
}
?>