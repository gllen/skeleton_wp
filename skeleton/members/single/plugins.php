<?php
/**
 * BuddyPress - Users Plugins
 *
 * This is a fallback file that external plugins can use if the template they
 * need is not installed in the current theme. Use the actions in this template
 * to output everything your plugin needs.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */
// You can override via functions.php conditionals or define:
// $columns = 'four';

get_header();
st_before_content($columns);
// Pause Skeleton Layout
?>
	<?php do_action( 'bp_before_member_plugin_template' ); ?>

	<div id="item-header">

		<?php locate_template( array( 'members/single/member-header.php' ), true ); ?>

	</div><!-- #item-header -->

	<div id="item-nav">
		<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
			<ul>

				<?php bp_get_displayed_user_nav(); ?>

				<?php do_action( 'bp_member_options_nav' ); ?>

			</ul>
		</div>
	</div><!-- #item-nav -->

	<div id="item-body" role="main">

		<?php do_action( 'bp_before_member_body' ); ?>

		<div class="item-list-tabs no-ajax" id="subnav">
			<ul>

				<?php bp_get_options_nav(); ?>

				<?php do_action( 'bp_member_plugin_options_nav' ); ?>

			</ul>
		</div><!-- .item-list-tabs -->

		<h3><?php do_action( 'bp_template_title' ); ?></h3>

		<?php do_action( 'bp_template_content' ); ?>

		<?php do_action( 'bp_after_member_body' ); ?>

	</div><!-- #item-body -->

	<?php do_action( 'bp_after_member_plugin_template' ); ?>

<?php
// Resume Skeleton Layout
st_after_content();
get_sidebar();
get_footer();
?>
