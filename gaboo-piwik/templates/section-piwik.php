<?php /** @var int $location */ ?>
<?php /** @var int $site_id */ ?>

<p><?php echo __( 'Get to know more about your users and their behaviour on your website – where they came from (referrers),
    which pages are most popular, how often they visit and which marketing campaigns have been successful.', 'gaboo-piwik' ); ?></p>

<table class="form-table">
    <tbody>
    <tr>
        <th scope="row"><?php echo __( 'Location', 'gaboo-piwik' ); ?></th>
        <td>
            <input type="text" class="regular-text" name="gaboo_piwik[location]" value="<?php echo $location; ?>">

            <span class="description">
                <?php echo __( 'Example:', 'gaboo-piwik' ); ?> <code>//piwik.yourdomain.com.br/</code>
            </span>

            <p class="description">
                <?php echo __( 'Enter here your Piwik Domain.', 'gaboo-piwik' ); ?>
            </p>
        </td>
    </tr>
    <tr>
        <th scope="row"><?php echo __( 'Site ID', 'gaboo-piwik' ); ?></th>
        <td>
            <input type="number" class="small-text" name="gaboo_piwik[site_id]" value="<?php echo $site_id; ?>">

            <span class="description">
                <?php echo __( 'Example:', 'gaboo-piwik' ); ?> <code>27</code>
            </span>

            <p class="description">
                <?php echo __( 'Enter here your Piwik Site ID.', 'gaboo-piwik' ); ?>
            </p>
        </td>
    </tr>
    </tbody>
</table>