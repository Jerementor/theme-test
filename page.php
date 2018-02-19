<?php 

/**
 * The template for displaying all pages
 *
 *
 * @package JerementorEighteen
 * @since 1.0
 */

get_header(); 

?>
<!-- Page.php -->
<div class="jer_60_padding">
   <div class="jer_container">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_content();

		//
	} // end while
} // end if
?>


   </div>
</div>

<?php get_footer();