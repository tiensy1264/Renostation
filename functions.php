<?php
require('typerocket/init.php');
require('inc/init.php');

add_theme_support('woocommerce');

add_action('wp_enqueue_scripts', 'our_enqueue_styles', 99999);

function our_enqueue_styles()
{
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), rand(), 'all');
    wp_enqueue_style('aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), rand(), 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), rand(), 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), rand(), 'all');
}

add_action('wp_enqueue_scripts', 'our_enqueue_scripts', 99999);

function our_enqueue_scripts()
{
    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), rand(), true);
    wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), rand(), true);
    wp_enqueue_script('aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), rand(), true);
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), rand(), true);
}

// ------- MENU ---------
if (!function_exists('recursive_mitems_to_array')) {
    function recursive_mitems_to_array($items, $parent = 0): array
    {
        $bundle = [];
        if (is_array($items) || is_object($items)) {
            foreach ($items as $item) {
                if ($item->menu_item_parent == $parent) {
                    $child = recursive_mitems_to_array($items, $item->ID);
                    $bundle[$item->ID] = [
                        'item' => $item,
                        'children' => $child
                    ];
                }
            }
        }

        return $bundle;
    }
}

/**
 * Get Menu By Location
 * @param string $theme_location Theme location
 * @return  mixed  Menu Object or false if not found
 */
if (!function_exists('get_menu_by_location')) :
    function get_menu_by_location($theme_location)
    {
        $theme_locations = get_nav_menu_locations();
        $menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
        if ($menu_obj) {
            return wp_get_nav_menu_items($menu_obj->term_id);
        }

        return $menu_obj;
    }
endif;

function renostation_menus_array()
{
    $locations = array(
        'main-menu' => 'Main Menu',
        'quick-links' => 'Quick Links'
    );
    register_nav_menus($locations);
}

add_action('init', 'renostation_menus_array');
// add_action( 'init', 'mvandemar_remove_post_type_support' );
function pagination_tdc() {
	if ( is_singular() ) {
		return;
	}
	global $wp_query;
	/** Ngừng thực thi nếu có ít hơn hoặc chỉ có 1 bài viết */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/** Thêm page đang được lựa chọn vào mảng*/
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}
	/** Thêm những trang khác xung quanh page được chọn vào mảng */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	/** Hiển thị thẻ đầu tiên \n để xuống dòng code */
	echo '<ul class="pagi">' . "\n";

	/** Hiển thị link về trang trước */
	if ( get_previous_posts_link() ) {
		printf( '<li  class="prev">%s</li>' . "\n", get_previous_posts_link( '<i class="fa-sharp fa-solid fa-chevron-left"></i>' ) );
	}

	/** Nếu đang ở trang 1 thì nó sẽ hiển thị đoạn này */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="pagi-li current is-active "' : '';
		printf( '<li %s class="pagi-li"><a rel="nofollow" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) ) {
			echo '<li >…</li>';
		}
	}

	/** Hiển thị khi đang ở một trang nào đó đang được lựa chọn */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="pagi-li current is-active"' : '';
		printf( '<li%s class="pagi-li"><a rel="nofollow" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/** Hiển thị khi đang ở trang cuối cùng */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li >…</li>' . "\n";
		}
		$class = $paged == $max ? ' class="pagi-li current is-active"' : '';
		printf( '<li%s class="pagi-li"><a rel="nofollow" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Hiển thị link về trang sau */
	if ( get_next_posts_link() ) {
		printf( '<li class="next">%s</li>' . "\n", get_next_posts_link( '<i class="fa-sharp fa-solid fa-chevron-right"></i>' ) );
	}
	echo '</ul>' . "\n";
}
///remove editor post
add_action( 'init', function() {
    remove_post_type_support( 'post', 'editor' );
}, 99);
// Update cart content count
add_filter('woocommerce_add_to_cart_fragments', 'cart_count_fragments', 10, 1);

function cart_count_fragments($fragments)
{
    $fragments['div.cart-added'] = '<div class="cart-added">' . WC()->cart->get_cart_contents_count() . '</div>';
    return $fragments;
}
// ------- WOOCOMMERCE ---------
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


// Custom product img
if (!function_exists('woocommerce_get_product_thumbnail')) {
    function woocommerce_get_product_thumbnail($size = 'shop_catalog')
    {
        global $post, $woocommerce;
        $output = '<div class="img-wrapper--cover radius--10 overflow-hidden aspect--4-3">';

        if (has_post_thumbnail()) {
            $output .= get_the_post_thumbnail($post->ID, $size);
        } else {
            $output .= wc_placeholder_img($size);
        }
        $output .= '</div>';
        return $output;
    }
}
