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


/*WorkPlace Listing*/
add_shortcode( 'workplace_listing', 'display_workplace_listing' );

function display_workplace_listing($atts){  
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $post_per_page = $_GET['post_per_page'] ? $_GET['post_per_page'] :10;
        
        $args = array(
            'post_type' => 'workplace-pledge',
            'post_status' => 'publish',
            'posts_per_page' => $post_per_page,
            'orderby'   => 'date', 
            'order'    => 'DESC',
            'paged' => $paged, 
           
        );
        
      
         if (!empty($_GET['search']) && !empty($_GET['filter_type'])) {
             
             if($_GET['filter_type']== "meta") {

                $args['meta_query'] = array(
                    'relation' => 'OR', array(
                    'key' => $_GET['filter_value'],
                    'value' => $_GET['search'],
                    'compare' => 'LIKE'
                    )
                );
             }
            if($_GET['filter_type']== "taxonomy") {
            
                $args['tax_query'] = array(
                     'relation' => 'OR', array(
                                    'taxonomy' => $_GET['filter_value'],
                                     'terms' => $_GET['search'],
                                     'field' => 'slug',
                                     'operator'  => 'IN',
                                  ));
            }
        }
        //echo "<pre>";print_r($args);echo "</pre>";
        add_filter('posts_where','custom_and_or');
        $query = new WP_Query( $args );      
        /* echo "<pre>";
        var_dump($query);
        echo "</pre>";*/
        $output = '<div class="home-personal-details-form">';
        if( $query->have_posts() ){
            $output .= '
               <table class="workplace-listing tablesorter" id="myTable">
                  <thead>
                  <tr class="workplace-title">  
                    <th class="c-name header">Company Name</th>  
                    <th class="type header">Company Type</th>  
                    <th class="c-city header">City</th>  
                    <th class="c-state header">State</th>  
                  </tr> </thead><tbody>';
            while( $query->have_posts() ){
                $query->the_post();
                $company_meta = get_post_meta($post->ID);
              
                /*company Type*/
              $company_type = get_the_terms($post->ID, 'designations'); 
              if(!empty($company_type)) {
              foreach($company_type as $company_term){
                 $companytype = $company_term->name;                 
              } }
              
              $workplace_state = get_the_terms($post->ID, 'workplace-state'); 
              if(!empty($workplace_state)) {
              foreach($workplace_state as $workplacestate_term){
                 $workplacestate = $workplacestate_term->name;    
              } }
              

               foreach ($company_meta as $k => $v) {
                    $company_meta[$k] = array_shift($v);
                  }
                $output .= 
                '<tr class="listing-data">  
                <td data-label="Company Name">'.$company_meta['wpcf-company-name'].'</td>
                <td data-label="Company Type">'.$companytype.'</td>
                <td data-label="City">'.$company_meta['wpcf-city'].'</td>
                <td class="work-state" data-label="State">'.$workplacestate.'</td>
                
              </tr>';
            }
            $output .= '</tbody></table>';
            
            if (function_exists("pagination")) {
                 $output .= pagination($query->max_num_pages);
             }
            
            if(get_query_var( 'search')){
               $search = get_query_var( 'search');
               $filter_value = $_GET['filter_value'];
               $filter_type = $_GET['filter_type'];
               //echo $search;
               $search_query = str_replace(" ","+",$search);
            
               $test = '&search='.$search_query.'&filter_value='.$filter_value.'&filter_type='.$filter_type.'';
              
            }
           

            $output .='<div class="set-limit"><div class="limit-title">Set Limit Per Page :</div>';
            $output .= '<div class="limit-data">'
                    .'<a href='.get_site_url().'/why-partner/?post_per_page=10'.$test.'>10</a> '
                    .'<a href='.get_site_url().'/why-partner/?post_per_page=30'.$test.'>30</a> '
                    .'<a href='.get_site_url().'/why-partner/?post_per_page=50'.$test.'>50</a> '
                    .'<a href='.get_site_url().'/why-partner/?post_per_page=70'.$test.'>70</a> ';
            $output .='</div></div>';
          
    } else {
        
        $output .='<div class="no-result">No result Found</div>';
    }
      $output .='</div>';
        wp_reset_postdata();
        return $output;
    
}

function simple_search_shortcode()
{
    If(get_query_var('search') != null ){ $search_value = get_query_var('search');}
    $search_param = '
    <form role="search" method="get" id="searchform" action="" >         
       <div class="row">        
           <div class="col-md-12 data-search">
			<label>Data Search:</label>
                        <input type="text" name="search" value="'.$search_value.'">
			</div>
			 <div class="col-md-12">
				<div class="filter-wrap">
					<label>Filter By:</label>
					<select name="filter_value" id="filter_val">
					<option value="wpcf-company-name" data-info="meta">Company Name</option>
					<option value="designations" data-info="taxonomy">Company Type</option>
					<option value="wpcf-city" data-info="meta">City</option>
					<option value="workplace-state" data-info="taxonomy">State</option>              
					</select>
				</div>
                                 <input type="hidden" name="filter_type" value="meta" id="hidden">
				   <div class="yellow-button button-box">
                   <input type="submit" name="submit" value="Submit">
                </div>
			 </div>
       </div>
    </form>
    ';
    return $search_param;
}
add_shortcode('listing_search', 'simple_search_shortcode');

/*function for remove and and add or*/
function custom_and_or($where){
	// change some OR/AND to our needs	
        $where = str_replace(") AND ( ",") OR ( ",$where);
	return $where;
}
add_action('wp_head', 'create_directory_func'); 

function create_directory_func(){ 
?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#filter_val").change(function() {
                
                var start = this.value;
                //var att =jQuery(start).find(':selected').data('info');
                var att = jQuery(this).find(':selected').attr('data-info')
            //    alert(att);
                jQuery("#hidden").val(att);
            });          
        });
    </script>
<?php }

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
        <label for="my_meta_box_text">Text Label</label>
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