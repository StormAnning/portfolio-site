<?php
/*
Template Name: Articles Page
*/

get_header();
?>


<div>
	<div class="container pt-3 pb-3" >
		<div class="col-xs-12 padding-sm-xl">
		<h1 class="text-sm-left text-center">Articles</h1>
			<p class="hidden text-justify">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at dapibus sapien, vitae lobortis nunc. Cras sed ligula eget lectus imperdiet eleifend vel in turpis. Donec a rutrum turpis. Nullam tempus purus ac lorem porta, quis sagittis purus fermentum. Praesent faucibus metus ac tempor laoreet. Aenean id elementum ante. Cras egestas a justo non hendrerit. Cras bibendum consectetur facilisis. Proin interdum nibh a odio auctor, in luctus felis ullamcorper.</p>
			</div>
	</div>
</div>


<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
$colors = array("#FE5F55", "#4F6367", "#7A9E9F", "#FFFFFF");
$count = 0; ?>


<?php if ( $wpb_all_query->have_posts() ) : ?>
 


 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <?php $color = $colors[($count % count($colors))]; ?>
    	 <div style="background: <?php echo $color ?>;">
	<div class="container pt-3 pb-3" >
		<div class="col-xs-12 padding-sm-xl">
			<h1 class="text-sm-left text-center"><a style="color: <?php if(strcmp($color,"#FFFFFF")){ echo "#FFFFFF";}else{ echo "#000";} ?>;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
	</div>
</div>
	<?php $count++;?>
    <?php endwhile; ?>
    <!-- end of the loop -->

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php
get_footer();
