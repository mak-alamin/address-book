<div class="wrap">
    <h1><?php _e( 'New Address', 'wedevs-academy' ); ?></h1>
    
    <?php

        $name_err = ( isset($this->errors['name']) ) ? $this->errors['name'] : '';
      
        $phone_err = ( isset($this->errors['phone']) ) ? $this->errors['phone'] : '';
    ?>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'wedevs-academy' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value=""> <span style="color:#ca4a1f"><?php echo $name_err; ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'wedevs-academy' ); ?></label>
                    </th>
                    <td>
                        <textarea class="regular-text" name="address" id="address"></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="phone"><?php _e( 'Phone', 'wedevs-academy' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value=""> <span style="color:#ca4a1f"> <?php echo $phone_err; ?> </span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php wp_nonce_field( 'new-address' ); ?>
        
        <?php submit_button( __( 'Add Address', 'wedevs-academy' ), 'primary', 'submit_address' ); ?>
    </form>
</div>