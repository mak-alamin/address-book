<div class="wrap">
    <h1 class="wp-heading-inline">Address Book List</h1>
    <a href="<?php echo admin_url('admin.php?page=wedevs-academy&action=new'); ?>" class="page-title-action">Add new</a>

    <?php 
        $table = new Wedevs\Academy\Admin\Address_List();
        $table->prepare_items();
        $table->display();
    ?>
</div>