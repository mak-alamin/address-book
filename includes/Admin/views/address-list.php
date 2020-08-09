<div class="wrap">
    <h1 class="wp-heading-inline">Address Book List</h1>
    <a href="<?php echo admin_url('admin.php?page=wedevs-academy&action=new'); ?>" class="page-title-action">Add new</a>
   
    <?php  if ( isset( $_GET['inserted'] ) ) { ?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e( 'Address has been added successfully!', 'wedevs-academy' ); ?></p>
            </div>
    <?php } 
    
        if (isset($_GET['address-deleted']) && $_GET['address-deleted'] == 'true'){ ?>
      
            <div class="notice notice-success is-dismissible">
                <p><?php _e( 'Address has been deleted successfully!', 'wedevs-academy' ); ?></p>
            </div>

    <?php }

        $table = new Wedevs\Academy\Admin\Address_List();
        $table->prepare_items();
        $table->display();
    ?>
</div>