<?php

//function to disply post as per category filte
add_action( 'wp_ajax_nopriv_wp_blog_by_category', 'wp_blog_by_category_func' );
add_action( 'wp_ajax_wp_blog_by_category', 'wp_blog_by_category_func' );

function wp_blog_by_category_func(){    
    $cat_value = $_POST['category'];
    $cat_checked_val = explode(',', rtrim($cat_value,','));
    //$topic_value = $_POST['topic'];
    //$topic_checked_val = explode(',', rtrim($topic_value,','));
    //print_r($topic_checked_val);
   //exit();
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9 ,// all posts
        'paged'          => (int)$paged,                      
        'post__not_in' => $featured_id,
        'category__in' => $cat_checked_val,
      //  'tag__in' =>  $topic_checked_val,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status' => 'publish'
        );
    $wp_resources_post = new WP_Query($args);
 
//    echo '<pre>';
//    var_dump($wp_resources_post);
    if( $wp_resources_post->have_posts() ) {
    ?>
    <?php
    $postcounter = 0; 
    while( $wp_resources_post->have_posts() ) {
        $wp_resources_post->the_post();
        $wp_feature_blog_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
        //$latest_id_arr[] = get_the_ID();
         $wp_categories = get_the_category();
        if($postcounter == 0){
    ?>
    <div class="row">
    <?php } ?>
        <div class="col-md-4">
            <div class="resource-post-item">
                <div class="resource-post-img">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php if(!$wp_feature_blog_src[0] == ''){ ?>
                            <img src="<?php echo $wp_feature_blog_src[0]; ?>" />
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri().'/images/placeholder.jpg'; ?>" />
                        <?php } ?>
                    </a>
                </div>
                <div class="resource-post-content">
                    <div class="customer_inner_blocks">
                        <a href="<?php echo get_the_permalink();?>"><h3 class="customer_blocks vc_custom_heading"><?php echo get_the_title();?></h3></a>
                        <?php foreach ($wp_categories as $wp_category) { 
                            $wp_category_name = $wp_category->name;
                            if($wp_category_name == 'Blog Post'){
                                $wp_category_name = 'Blog';
                            }else{
                                $wp_category_name;
                            }
                            ?>
                        <p class="r-date-author"><?php echo  get_the_date('M d'); echo ' | '; echo $wp_category_name;?></p>
                        <?php } ?>
                        <p class="r-post-content"><?= kc_excerpt(); ?></p>
                    </div>    
                </div>    
            </div>
        </div>
        <?php  $postcounter++;
                if ( 3 == $postcounter ) { $postcounter = 0;  ?>
    </div>
<? } }  ?>
<?php } ?>
<input class="max-page" numberpage="<?php echo $wp_resources_post->max_num_pages;?>" type="hidden" name="number-of-page"/>
<?php 
exit();
} 

function wp_ajax_jquery_func(){ ?>
<script>
    //for load mopre jquery ajax
jQuery(".cat-type-filter input[type=checkbox]").on("change", function(e){
    
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    jQuery.ajax({ 
        data: {
            action: 'wp_blog_by_category', 
            category: cat_checkbox_value
            //topic: topic_checkbox_value
        },
        type: 'POST',
        url: ajaxurl,
        success: function(data) { 
            jQuery( ".blog-post-list" ).html( data );
            var max_page = jQuery('.max-page').attr('numberpage');
            if (max_page == 0){
                max_page = 1;   
            }
            var update_val = jQuery('.view-more a').attr('data-page');
            if(update_val == max_page){
                jQuery('.view-more').hide();
            }else{
                jQuery('.view-more').show();
            }
        }
    });
});
// for form submit ajax
jQuery(document).ready(function(){
     var $radios = jQuery('.radio input[type="radio"]');
    if($radios.is(':checked') === false) {
        $radios.filter('[value=single-imei]').prop('checked', true);
        jQuery(".bulk-imei").hide();
    }
    jQuery('.radio input[type="radio"]').click(function(){
        var inputValue = jQuery(this).attr("value");
        var targetBox = jQuery("." + inputValue);
        jQuery(".input-field").not(targetBox).hide();
        jQuery(targetBox).show();
    });
    
    jQuery("#imei_form").submit(function(e){
        e.preventDefault();
        var input_data = jQuery(this).serialize();
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        jQuery.ajax({ 
            data: {
                action: 'imei_form_post_data', 
                data: input_data,
            },
            type: 'POST',
            url: ajaxurl,
            success: function(data) { 
                //alert(data);
            }
        });
    });
   
});

</script>
<?php }
add_action( 'wp_footer', 'wp_ajax_jquery_func' );

//form post data function
add_action( 'wp_ajax_nopriv_imei_form_post_data', 'imei_form_post_data_func' );
add_action( 'wp_ajax_imei_form_post_data', 'imei_form_post_data_func' );
function imei_form_post_data_func(){
//    var_dump($_POST['data']);
//    exit();
    $IMEI = "" ; 
    $USERNAME = "" ;
    $APIKEY = "" ;

    $url = '';
    $data = '&IMEI=' . $IMEI . '&USER=' . $USERNAME . '&APIKEY=' . $APIKEY;

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );

    var_dump($response);
    exit();
}
