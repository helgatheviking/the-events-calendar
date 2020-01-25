<?php
/**
 * View: List View Nav Today Button
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/nav/today.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @var string $today_url The URL to the today page.
 *
 * @version TBD
 *
 */
?>
<li class="tribe-events-c-nav__list-item tribe-events-c-nav__list-item--today">
	<a
		href="<?php echo esc_url( $today_url ); ?>"
		class="tribe-events-c-nav__today tribe-common-b2"
		data-js="tribe-events-view-link"
		aria-label="<?php esc_attr_e( 'Click to see today\'s events', 'the-events-calendar' ); ?>"
		title="<?php esc_attr_e( 'Click to see today\'s events', 'the-events-calendar' ); ?>"
	>
		<?php esc_html_e( 'Today', 'the-events-calendar' ); ?>
	</a>
</li>
