<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TruthTalk Single Page Theme
 */

get_header(); 

// define how pages will display
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
//start loop
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>
<div class='<?php echo "$slug" ?>'>
        <h2><?php echo "$title" ?></h2>
			<?php echo "$content" ?>
</div>

<?php
}
get_footer();
?>