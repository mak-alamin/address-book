<?php

    $name_err = ( isset($this->errors['name']) ) ? $this->errors['name'] : '';
    
    $phone_err = ( isset($this->errors['phone']) ) ? $this->errors['phone'] : '';
?>

<div class="wrap">
    <h1><?php _e( 'Edit Address', 'wedevs-academy' ); ?></h1>
 
    <?php  if ( isset( $_GET['address-updated'] ) ) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e( 'Address has been updated successfully!', 'wedevs-academy' ); ?></p>
        </div>
    <?php } ?>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr class="row<?php echo (! empty($name_err)) ? ' form-invalid' : 0 ; ?>">
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'wedevs-academy' ); ?></label>
                    </th>

                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="<?php echo esc_attr($address->name); ?>">

                        <span class="description error"><?php echo $name_err; ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'wedevs-academy' ); ?></label>
                    </th>
                    <td>
                        <textarea class="regular-text" name="address" id="address"><?php echo esc_textarea($address->address); ?></textarea>
                    </td>
                </tr>

                <tr class="row<?php echo (! empty($phone_err)) ? ' form-invalid' : 0 ; ?>">
                    <th scope="row">
                        <label for="phone"><?php _e( 'Phone', 'wedevs-academy' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="<?php echo esc_attr($address->phone); ?>">

                        <span class="description error"> <?php echo $phone_err; ?> </span>
                    </td>
                </tr>
            </tbody>
        </table>
      
        <input type="hidden" name="id" value="<?php echo esc_attr( $address->id ); ?>">

        <?php wp_nonce_field( 'new-address' ); ?>
        
        <?php submit_button( __( 'Update Address', 'wedevs-academy' ), 'primary', 'submit_address' ); ?>
    </form>
</div>