<?php
/*
Plugin Name: Devang
Description: Extend theme with custom shortcodes.
Version: 0.1.0
Author: Devang
 * 
 * 
 */
//function digital_lumens_get_resource_types() {
//    $resource_types = array();
//
//    $resource_types[] = array(
//        'singular'  => 'Case Study',
//        'plural'    => 'Case Studies',
//        'slug'      => 'case-study',
//        'dashicon'  => 'dashicons-media-text'
//    );
//
//    $resource_types[] = array(
//        'singular'  => 'White Paper',
//        'plural'    => 'White Papers',
//        'slug'      => 'white-paper',
//        'dashicon'  => 'dashicons-media-default'
//    );
//
//    $resource_types[] = array(
//        'singular'  => 'Webinar',
//        'plural'    => 'Webinars',
//        'slug'      => 'webinar',
//        'dashicon'  => 'dashicons-media-video'
//    );
//
//    $resource_types[] = array(
//        'singular'  => 'Video',
//        'plural'    => 'Videos',
//        'slug'      => 'video',
//        'dashicon'  => 'dashicons-video-alt3'
//    );
//    return $resource_types;
//}

//***************************************************************************
// Return an array or resoure type slugs
//***************************************************************************
//function digital_lumens_get_resource_type_slugs() {
//    $slugs = array();
//    $resource_types = digital_lumens_get_resource_types();
//    if( $resource_types ) {
//        foreach( $resource_types as $resource_type ) {
//            $slugs[] = $resource_type['slug'];
//         }
//    }
//    return $slugs;
//}

//***************************************************************************
// Initialize custom post types
//***************************************************************************
function custom_post_types() {
    //***************************************************************************
    // Setup the resources custom post types
    //***************************************************************************
//    $resource_types = digital_lumens_get_resource_types();
//
//    foreach( $resource_types as $resource_type ) {
//        register_post_type( $resource_type['slug'], array(
//                'labels' => array(
//                    'name'          => $resource_type['plural'],
//                    'singular_name' => $resource_type['singular'],
//                    'add_new_item'  => 'Add New ' . $resource_type['singular'],
//                    'edit_item'     => 'Edit ' . $resource_type['singular'],
//                    'new_item'      => 'New ' . $resource_type['singular'],
//                    'view_item'     => 'View ' . $resource_type['singular']
//                ),
//                'public'            => true,
//                'has_archive'       => false,
//                'show_in_nav_menus' => true,
//                'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
//                'menu_icon'         => $resource_type['dashicon'],
//                'rewrite'           => array( 'slug' => 'resources/' . $resource_type['slug'], 'with_front' => false )
//        ));
//    }

    //***************************************************************************
    // Resource category a taxonomy shared across the resource post types
    //***************************************************************************
//    register_taxonomy( 'resource-category', array('case-study','white-paper','webinar','video'), array(
//        'hierarchical'          => true,
//        'labels'                => array(
//            'name'                       => 'Resource Categories',
//            'singular_name'              => 'Resource Category',
//            'search_items'               => 'Search Resource Categories',
//            'popular_items'              => 'Popular Resource Categories',
//            'all_items'                  => 'All Resource Categories',
//            'parent_item'                => null,
//            'parent_item_colon'          => null,
//            'edit_item'                  => 'Edit Resource Category',
//            'update_item'                => 'Update Resource Category',
//            'add_new_item'               => 'Add New Resource Category',
//            'new_item_name'              => 'New Resource Category',
//            'add_or_remove_items'        => 'Add or remove resource category',
//            'choose_from_most_used'      => 'Choose from the most used resource categories',
//            'not_found'                  => 'No resource categories found.',
//            'menu_name'                  => 'Resource Categories',
//        ),
//        'show_ui'               => true,
//        'show_in_nav_menus'     => false,
//        'show_admin_column'     => true,
//        'query_var'             => true,
//        'rewrite'               => array( 'slug' => 'resource-category' )
//    ));

    //***************************************************************************
    // Press
    //***************************************************************************
//    $press_plural    = 'Press';
//    $press_singular  = 'Press Post';
//    register_post_type( 'press', array(
//            'labels' => array(
//                'name'          => $press_plural,
//                'singular_name' => $press_singular,
//                'add_new_item'  => 'Add New ' . $press_singular,
//                'edit_item'     => 'Edit ' . $press_singular,
//                'new_item'      => 'New ' . $press_singular,
//                'view_item'     => 'View ' . $press_singular
//            ),
//            'public'            => true,
//            'has_archive'       => true,
//            'show_in_nav_menus' => true,
//            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
//            'menu_icon'         => 'dashicons-megaphone',
//            'rewrite'           => array('slug' => 'press-room')
//    ));

    //***************************************************************************
    // News
    //***************************************************************************
//    $news_plural    = 'News';
//    $news_singular  = 'News Post';
//    register_post_type( 'news', array(
//            'labels' => array(
//                'name'          => $news_plural,
//                'singular_name' => $news_singular,
//                'add_new_item'  => 'Add New ' . $news_singular,
//                'edit_item'     => 'Edit ' . $news_singular,
//                'new_item'      => 'New ' . $news_singular,
//                'view_item'     => 'View ' . $news_singular
//            ),
//            'public'            => true,
//            'has_archive'       => true,
//            'show_in_nav_menus' => true,
//            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
//            'menu_icon'         => 'dashicons-clipboard',
//            'rewrite'           => array('slug' => 'news-room')
//    ));

    //***************************************************************************
    // Applications
    //***************************************************************************
    $applications_plural    = 'Books';
    $applications_singular  = 'Book';
    register_post_type( 'books', array(
            'labels' => array(
                'name'          => $applications_plural,
                'singular_name' => $applications_singular,
                'add_new_item'  => 'Add New ' . $applications_singular,
                'edit_item'     => 'Edit ' . $applications_singular,
                'new_item'      => 'New ' . $applications_singular,
                'view_item'     => 'View ' . $applications_singular
            ),
            'public'            => true,
            'has_archive'       => true,
            'show_in_nav_menus' => true,
            'supports'          => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'menu_icon'         => 'dashicons-clipboard',
            'rewrite'           => array('slug' => 'book')
    ));

    //***************************************************************************
    // Applications category
    //***************************************************************************
    register_taxonomy( 'books-category', array('books'), array(
        'hierarchical'          => true,
        'labels'                => array(
            'name'                       => 'Books Categories',
            'singular_name'              => 'Books Category',
            'search_items'               => 'Search Books Categories',
            'popular_items'              => 'Popular Books Categories',
            'all_items'                  => 'All Books Categories',
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => 'Edit Books Category',
            'update_item'                => 'Update Books Category',
            'add_new_item'               => 'Add New Books Category',
            'new_item_name'              => 'New Books Category',
            'add_or_remove_items'        => 'Add or remove books category',
            'choose_from_most_used'      => 'Choose from the most used books categories',
            'not_found'                  => 'No books categories found.',
            'menu_name'                  => 'Books Categories',
        ),
        'show_ui'               => true,
        'show_in_nav_menus'     => false,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'books-category' )
    ));
}
add_action( 'init', 'custom_post_types' );
// add metabox
add_action( 'add_meta_boxes', 'books_meta_box_add' );
function books_meta_box_add()
{
    add_meta_box( 'book-id', 'Book Price', 'books_meta_box_cb', 'books', 'normal', 'high' );
}
function books_meta_box_cb( $post )
{
$values = get_post_custom( $post->ID );
$text = get_post_meta( $post->ID, 'my_meta_box_text', TRUE );

$selected = isset( $values['my_meta_box_select'] ) ? esc_attr( $values['my_meta_box_select'][0] ) : "";

    ?>
    <p>
        <label for="my_meta_box_text">Book Price</label>
        <input type="text" name="my_meta_box_text" id="my_meta_box_text" value="<?php echo get_post_meta($post->ID, "my_meta_box_text", true); ?>" />
    </p>
     
    <p>
        <label for="my_meta_box_select">Rating</label>
        <select name="my_meta_box_select" id="my_meta_box_select">
            <option value="one" <?php selected( $selected, 'one' ); ?>>one</option>
            <option value="two" <?php selected( $selected, 'two' ); ?>>two</option>
            <option value="three" <?php selected( $selected, 'three' ); ?>>three</option>
            <option value="four" <?php selected( $selected, 'four' ); ?>>four</option>
            <option value="five" <?php selected( $selected, 'blue' ); ?>>five</option>
        </select>
    </p>
<?php  }
// save meta box values
function save_custom_meta_box($post_id, $post, $update)
{
    global $post;

    $meta_box_text_value = "";
    $meta_box_dropdown_value = "";
    $meta_box_checkbox_value = "";

    if(isset($_POST["my_meta_box_text"]))
    {
        $meta_box_text_value = $_POST["my_meta_box_text"];
    }   
    update_post_meta($post->ID, "my_meta_box_text", $meta_box_text_value);

    if(isset($_POST["my_meta_box_select"]))
    {
        $meta_box_dropdown_value = $_POST["my_meta_box_select"];
    }   
    update_post_meta($post->ID, "my_meta_box_select", $meta_box_dropdown_value);
    
}

add_action("save_post", "save_custom_meta_box", 10, 3);

// Book search form
function books_search_shortcode()
{
    if(isset($_POST['submit'])){
        $book_price = $_POST['book-price'];
        $book_rating = $_POST['book-rating'];
        $book_category = $_POST['book-category'];
    }

    $tax_terms = get_terms('books-category', array('hide_empty' => '0'));
    $search_param = '
    <form role="search" method="post" id="searchform" action="" >         
       <div class="row">
            <div class="col-md-12 data-search">
			<label>Book Price:</label>
                        <input type="text" name="book-price" value="'.$book_price.'">
            </div>
            <div class="col-md-12 data-search">
			<label>Book Rating:</label>
                       <select name="book-rating" id="book-rating">
                       <option value="" >Select Book Rating</option>
                        <option value="one">one</option>
                        <option value="two">two</option>
                        <option value="three">three</option>
                        <option value="four">four</option>
                        <option value="five">five</option>
                    </select>
            </div>
            <div class="col-md-12 data-search">
                            <label>Book Category:</label>
                           <select name="book-category" id="book-category">
                           <option value="" >Select Book Category</option>';
                           foreach ( $tax_terms as $tax_term ):  
                               $search_param .='<option value="'.$tax_term->name.'">'.$tax_term->name.'</option>';  
                           endforeach;
                        $search_param .= '</select>
                </div>	 
                <div class="yellow-button button-box">
                   <input type="submit" name="submit" value="Submit">
                </div>
			 </div>
       </div>
    </form>
    ';
    return $search_param;
}
add_shortcode('listing_search', 'books_search_shortcode');
/*Book as per form search Listing*/
add_shortcode( 'books_listing', 'display_books_listing' );

function display_books_listing($atts){  
    
    if(isset($_POST['submit'])){
        $book_price = $_POST['book-price'];
        $book_rating = $_POST['book-rating'];
        $book_category = $_POST['book-category'];
    
     $args = array(
            'post_type' => 'books',
            'post_status' => 'publish',
            'orderby'   => 'date', 
            'order'    => 'DESC',
        );
    if($book_price){
        $args['meta_query'] = array(
                    'relation' => 'OR', array(
                    'key' => 'my_meta_box_text',
                    'value' => $book_title,
                    'compare' => 'LIKE'
                    )
        );
    }
    if($book_rating){
       $args['meta_query'] = array(
                    'relation' => 'OR', array(
                    'key' => 'my_meta_box_select',
                    'value' => $book_rating,
                    'compare' => 'LIKE'
                    )
        );
    }
    if($book_category){
        $args['tax_query'] = array(
                     'relation' => 'OR', array(
                                    'taxonomy' => 'books-category',
                                     'terms' => $book_category,
                                     'field' => 'slug',
                                     'operator'  => 'IN',
                                  ));
    }
    
    $query = new WP_Query( $args );      
//    echo "<pre>";
//    var_dump($query);
//    echo "</pre>";
     $output = '<div class="home-personal-details-form">';
        if( $query->have_posts() ){
            $output .= '
               <table class="workplace-listing tablesorter" id="myTable">
                  <thead>
                  <tr class="workplace-title">  
                    <th class="c-name header">Book Name</th>  
                    <th class="type header">Book Price</th>  
                    <th class="c-city header">Book Rating</th>  
                    <th class="c-state header">Book Category</th>  
                  </tr> </thead><tbody>';
            while( $query->have_posts() ){
                $query->the_post();
                $search_book_price = get_post_meta(get_the_ID(), 'my_meta_box_text', TRUE);
                $search_book_rating = get_post_meta(get_the_ID(), 'my_meta_box_select', TRUE);
                $search_book_category = get_the_terms(get_the_ID(), 'books-category'); 
                    if(!empty($search_book_category)) {
                    foreach($search_book_category as $book_term){
                       $book_category_list = $book_term->name;   
                       
                    } }
 
                $output .= 
                '<tr class="listing-data">  
                <td data-label="Company Name">'.get_the_title().'</td>
                <td data-label="Company Type">'.$search_book_price.'</td>
                <td data-label="City">'.$search_book_rating.'</td>
                <td class="work-state" data-label="State">'.$book_category_list.'</td>
                
              </tr>';
            }
        }
            $output .= '</tbody></table>';
            
            return $output;
}
}
