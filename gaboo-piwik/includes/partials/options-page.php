<div class="wrap">

    <h2><?php echo __( 'Web Analytics Settings', 'gaboo-piwik' ); ?></h2>

    <form action="options.php" method="post">
        <?php settings_fields( Gaboo_Piwik_Options::GROUP ); ?>
        <?php do_settings_sections( Gaboo_Piwik_Options::PAGE ); ?>
        <?php submit_button(); ?>
    </form>

</div>