<?php
/*
Template Name: my Advanced Custom Fields
*/
get_header();
?>


<div style="height: 100px;"></div>
<div class="book-meta">
	<ul>
		<li><strong>Name:</strong> <?php the_field('name'); ?></li>
		<li><strong>Email:</strong> <?php the_field('email'); ?></li>
		<li><strong>Book Rating:</strong> <?php the_field('book_rating'); ?>/10</li>
	</ul>
</div>

<?php
get_footer();