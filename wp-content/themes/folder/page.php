<?php 
/*
* Displays the page
*
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
	<?php $page_id = in_array($id, array(7, 9)) ? 'posts-list' : 'page-content'; ?>
	<!-- page content-->
	<div id="<?php echo $page_id ?>" class="cf">        	
    		
    	<!-- entry-content -->	
    	<div class="entry-content cf">
			<h2 class="heading"><?php the_title() ?></h2>
			<?php the_content() ?>
		</div>
	</div>
	<!-- ENDS page-content -->	
	<?php if (in_array($id, array(7, 9))) : ?>
		<!-- Sidebar for Who We Are and What We Do pages -->
		<?php  get_sidebar() ?>	
	<?php endif; ?>
	
<?php get_footer() ?>