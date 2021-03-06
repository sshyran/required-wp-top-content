<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   required-wp-top-content
 * @author    Stefan Pasch <stefan@required.ch>
 * @license   GPL-2.0+
 * @link      http://required.ch
 * @copyright 2014 required gmbh
 */
?>

<div class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <form method="post" action="options.php">
        <?php

        settings_fields( 'rpluswptopcontent-options' );

        do_settings_sections( 'rpluswptopcontent' );

        ?>
        <?php submit_button(); ?>

    </form>

</div>
