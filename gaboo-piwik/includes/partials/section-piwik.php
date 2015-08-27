<?php /** @var int $location */ ?>
<?php /** @var int $site_id */ ?>

<p>Get to know more about your users and their behaviour on your website – where they came from (referrers),
    which pages are most popular, how often they visit and which marketing campaigns have been successful.</p>

<table class="form-table">
    <tbody>
    <tr>
        <th scope="row">Location</th>
        <td>
            <input type="text" class="regular-text" name="gaboo_piwik[location]" value="<?php echo $location; ?>">

            <span class="description">
                Example: <code>//piwik.yourdomain.com.br/</code>
            </span>

            <p class="description">
                Enter here your Piwik Domain.
            </p>
        </td>
    </tr>
    <tr>
        <th scope="row">Site ID</th>
        <td>
            <input type="number" class="small-text" name="gaboo_piwik[site_id]" value="<?php echo $site_id; ?>">

            <span class="description">
                Example: <code>27</code>
            </span>

            <p class="description">
                Enter here your Piwik Site ID.
            </p>
        </td>
    </tr>
    </tbody>
</table>