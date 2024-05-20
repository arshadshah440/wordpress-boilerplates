<?php 

// shortcode

function private_products_carousel_shortcode($atts)
{
    ob_start();

    // Shortcode attributes

    $atts = shortcode_atts(array(
        'numbers' => 0,
    ), $atts, 'private_products_carousel');
    // Query arguments to retrieve products from the "private" category
    $terms = get_terms(array(
        'taxonomy' => 'vendor', // set your taxonomy here
        'hide_empty' => false, // default: true
        'number' => $atts['numbers'],
    ));



    // Output carousel HTML

?>
    <div class="ar_grid_three" id="ar_grid_three">
        <?php foreach ($terms as $term) { ?>
            <div class="item_ar vendor_loop_item">
                <?php include get_stylesheet_directory() . '/inc/categories_display.php'; ?>
            </div>
        <?php }; ?>
    </div>

<?php


    wp_reset_postdata();


    return ob_get_clean();
}
add_shortcode('private_products_carousel', 'private_products_carousel_shortcode');