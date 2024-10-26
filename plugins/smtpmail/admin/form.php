<div class="wrap">
    <h1 class="wp-heading-inline"><?php echo get_admin_page_title();?></h1>
    <form action="#" method="POST">
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="host">SMTP host:</label></th>
                <td>
                    <input type="text" 
                            name="host" 
                            value="<?php echo get_option('smtpmail_host');?>">
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="host">SMTP user:</label></th>
                <td>
                    <input type="text" 
                            name="user" 
                            value="<?php echo get_option('smtpmail_user');?>">
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="host">SMTP password:</label></th>
                <td>
                    <input type="password" 
                            name="user" 
                            value="">
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="host">SMTP Encryption:</label></th>
                <td>
                    <input type="text" 
                            name="user" 
                            value="<?php echo get_option('smtpmail_secure');?>">
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="host">SMTP Port:</label></th>
                <td>
                    <input type="text" 
                            name="user" 
                            value="<?php echo get_option('smtpmail_port');?>">
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="host">SMTP Format:</label></th>
                <td>
                    <input type="text" 
                            name="user" 
                            value="<?php echo get_option('smtpmail_format');?>">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <button type="submit" class="button button-hero">
                        Guardar
                    </button>
                </td>
            </tr>
            
        </tbody>
    </table>
    </form>
</div>