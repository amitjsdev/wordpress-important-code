
None selected

Skip to content
Using Gmail with screen readers
important.php 

Conversations
0.33 GB (2%) of 15 GB used
Manage
Terms · Privacy · Program Policies
Last account activity: 40 minutes ago
Details

echo"<script> window.location.href='welcome.php';</script>";
<!-----if header location not in working condition after use ajax we can use code this code in php code-->


<!------call ck edditor---->
<script type="text/javascript">
    CKEDITOR.replace( 'text' );
</script> </div>
   <?php include("footer.php"); ?>
   
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="somedirectory/ckeditor/ckeditor.js"></script>

<!---- end call ck editor--------> 


	<div class="logo">
   <?php
       $siteLogo = get_field('website_logo',1476); // 1476 is post id                               
       $size = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
   ?>
</div>


<?php ///////////////// ?>
<?php
//$siteLogo = variable name (any name can do);
//website_logo = field name (from the custom field);
//1476 = post ID
?>

<?php ///////// ?>
<hgroup>
   <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
   <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup>



<hgroup>
   <h1 class="site-title">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	    <div class="logo">
		<?php
		    $siteLogo = get_field('website_logo',1476); // 1476 is post id                               
		    $size = 'full'; // (thumbnail, medium, large, full or custom size)
		    if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
		?>
	    </div> 
	</a>
    </h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>			
</hgroup>

<?php /////////we use Advanced Custom Fields plugin for add any custom logo and other images for site logo ?>




 <?php
$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category' => 3 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
 


      
          <div class="row-col-3 rt-lt-padding">
            <div class="section advantage-colum">
              <div class="advantage-icon"> 
              <?php
  // $id="27";
   //if(has_post_thumbnail($id)):
//$image= wp_get_attachment_image_src(get_post_thumbnail_id($id),'single-post-thumbnail');
    //endif;
   // $image_uri= $image[0];
  ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" /> </div>
              
              
              <h3><?php the_title(); ?></h3>
              <?php echo the_content(); ?>
           <a href="<?php the_permalink();  ?>" >Learn More</a>            </div>
          </div>
          
<?php endforeach; 
wp_reset_postdata();?>



<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<!--------iframe start-->
<?php
// Get the video URL and put it in the $video variable
$videoID = get_post_meta($post->ID, 'video_url', true);
// Echo the embed code via oEmbed
?>
<div class="video-url-frame">
<iframe src="<?php echo $videoID ; ?>" frameborder="0" id="player_1" style="height:330px; width:588px;"></iframe>
</div>







<!--------iframe end-->


<!-----end  function.php code for custom post post code---> 

<?php
/////////////////////////////////////////////////////////
function custom_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(

        'name'                => _x( 'testimonial', 'Post Type General Name', 'twentythirteen' ),

        'singular_name'       => _x( 'testimonial', 'Post Type Singular Name', 'twentythirteen' ),

        'menu_name'           => __( 'testimonial', 'twentythirteen' ),

        'parent_item_colon'   => __( 'Parent testimonial', 'twentythirteen' ),

        'all_items'           => __( 'All testimonial', 'twentythirteen' ),

        'view_item'           => __( 'View testimonial', 'twentythirteen' ),

        'add_new_item'        => __( 'Add New testimonial', 'twentythirteen' ),

        'add_new'             => __( 'Add New', 'twentythirteen' ),

        'edit_item'           => __( 'Edit testimonial', 'twentythirteen' ),

        'update_item'         => __( 'Update testimonial', 'twentythirteen' ),

        'search_items'        => __( 'Search testimonial', 'twentythirteen' ),

        'not_found'           => __( 'Not Found', 'twentythirteen' ),

        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),

    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'testimonial', 'twentythirteen' ),
        'description'         => __( 'testimonial news and reviews', 'twentythirteen' ),

        'labels'              => $labels,

        // Features this CPT supports in Post Editor

        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        'taxonomies'          => array( 'genres' ),

        /* A hierarchical CPT is like Pages and can have
35
        * Parent and child items. A non-hierarchical CPT
36
        * is like Posts.
37
        */ 

        'hierarchical'        => false,

        'public'              => true,

        'show_ui'             => true,

        'show_in_menu'        => true,

        'show_in_nav_menus'   => true,

        'show_in_admin_bar'   => true,

        'menu_position'       => 5,

        'can_export'          => true,

        'has_archive'         => true,

        'exclude_from_search' => false,

        'publicly_queryable'  => true,

        'capability_type'     => 'page',

    );

    // Registering your Custom Post Type

    register_post_type( 'testimonial', $args );

 

}

/* Hook into the 'init' action so that the function
58
* Containing our post type registration is not
59
* unnecessarily executed.
60
*/

add_action( 'init', 'custom_post_type', 0 );


///////////
?>

<!-----end  function.php code for custom post post code---> 

<!-----start  get custom post code---> 
 <?php
$args = array( 'post_type' => 'testimonial', 'order' => 'ASC');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
  
 
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" /><?php
  the_content();
  
  
endwhile;

?>

<!-----end  get custom post code---> 
<?php
		// $id="27";
		 //if(has_post_thumbnail($id)):
//$image= wp_get_attachment_image_src(get_post_thumbnail_id($id),'single-post-thumbnail');
		  //endif;
		 // $image_uri= $image[0];
		?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" /> </div>


<!-------Easy Social Icons plugin used for show socil icon in wordpress---->


<!-----------WP Responsive header image slider----------------------------------------->
<!----Responsive WordPress Image Slider & Video Slider---->




<!-------------------for page scroll js -----> 

<script>

jQuery(document).on('click', 'a', function(event){
    event.preventDefault();
   jQuery('html, body').animate({
        scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top
    }, 800);
});

</script> 
<!-------------------for page scroll js -----> 

//////
dynamic_sidebar() user for get widget in wordpress
///////// 
do_shortcode() for call shorcode>>
 
 
 
 for call tow diffrent header in wordperss 
 
<!--?php /* */ if(is_page(23)) { get_header('about'); } else { get_header(); } wp_head(); ?-->





<?php
// for header setting
if(!is_front_page()){
	
   echo"<style>.top-header-main {
    background: none; padding:0px;}</style>";
	
}

?>
for voice call
twilo easy call plugin
https://www.twilio.com/console/voice/dashboard>>>>


mailchimp-for-wp used for subscribe>>>>


////////////

for set default image in wordpress
 
 
 
 <?php 
 $id="8";
 if ( has_post_thumbnail($id) ) {
$image= wp_get_attachment_image_src(get_post_thumbnail_id($id),'single-post-thumbnail');?>
 <img src="<?php echo get_the_post_thumbnail_url(); ?>" /> 
<?php
} else { ?>
<img src="http://funfitandfabulous.net/wp-content/uploads/2017/02/banner-background-1.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

/////////////////////////////////////////////////////////////////////////

a[href="http://www.wonderplugin.com/wordpress-slider/"] {
    display: none;
}


menu
<?php wp_nav_menu(array('menu'=>'sports','menu_class'=>'nav navbar-nav navbar-right'));?>
				
        <?php
$orderby = 'name';
$order = 'asc';
$hide_empty = false ;
$cat_args = array(
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
);
 
$product_categories = get_terms( 'product_cat', $cat_args );

if( !empty($product_categories) ){
  
 

    foreach ($product_categories as $key => $category) {

        echo '<a href="'.get_term_link($category).'" >';
        echo $category->name;
        
    }

}
		
		?>