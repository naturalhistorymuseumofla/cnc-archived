<?php
/**
* Template Name: Press
 */

get_header(); ?>
<div class="content news_page">

<div class="container">
  <div class="row" style="margin-top:100px;">
    <h2 class="weight-400">Press and Publications</h2>
  </div>
</div> 

<?php 

$posts = get_posts(array(
	'post_type' => 'post' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => 100,
    'category'         => 'press',
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
));

?>
<div class="container">
<?php 
if( $posts ): ?>

	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );

		// Format Date or set to empty
		$unformattedDate = get_field("press_date", get_the_ID());
		if ($unformattedDate != "") {
			$postDate = date("m/d/Y", strtotime($unformattedDate));
		} else {
			$postDate = '';
		}
	?>
		
	<a href="<?php echo get_field("press_url", get_the_ID()); ?>" target="_blank">
		<div class="row press-and-publicaton-block medium-transition">

		   	 <!-- COLUMN 1 -->
		     <div class="col-lg-2 col-md-12 col-sm-12 press-adjust-left-column-large">

		     	<!-- DATE -->
		        <p class="press-adjust-date"><?php echo $postDate; ?><br/><?php echo get_field("press_medium", get_the_ID()); ?></p>
		     </div>
		     
		     <!-- COLUMN 2 -->
		     <div class="col-lg-10 col-md-12 col-ms-12 press-adjust-right-column-large">

		     	<!-- PUBLISHER -->
		        <h2 class="display-10 mb-3">
		        	<?php echo get_field("press_publisher", get_the_ID()); ?>
		        </h2>

		        <!-- TITLE -->
		        <h3 class="display-press-title">
		        	<?php echo get_field("press_title", get_the_ID()); ?>	
		        </h3>

		        <!-- CITY -->
		        <p>
		        	<?php echo get_field("press_city", get_the_ID()); ?>
		        </p>
	     	</div>
	    </div>

	</a><!-- //a -->

	<?php endforeach; ?>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
<div style="width:100%; height:150px; display:block;"></div>

</div><!-- //container -->


<?php
get_footer();


