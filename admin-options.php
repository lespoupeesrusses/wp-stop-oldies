<div class="wrap">
<h2><?php _e('Stop Oldies Options', 'stop_oldies'); ?></h2>

<br />

<form method="post" action="options.php"> 
    
    <?php 
        settings_fields('so_options'); 
        $options = get_option('so_options');
    ?>
    
    <table class="widefat">
        <thead>
            <tr>
                <th><?php _e('Internet Explorer', 'stop_oldies'); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><?php _e('Block version 6?', 'stop_oldies'); ?></th>
                            <td><input name="so_options[ie6]" type="checkbox" value="1" <?php checked('1', $options['ie6']); ?> /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><?php _e('Block version 7?', 'stop_oldies'); ?></th>
                            <td><input name="so_options[ie7]" type="checkbox" value="1" <?php checked('1', $options['ie7']); ?> /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><?php _e('Block version 8?', 'stop_oldies'); ?></th>
                            <td><input name="so_options[ie8]" type="checkbox" value="1" <?php checked('1', $options['ie8']); ?> /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
         
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'stop_oldies') ?>" />
    </p>

    

</form>


</div>
