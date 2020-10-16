<form role="search" method="post" id="searchform" action="<?php echo admin_url('admin-post.php') ?>">
    <input type="hidden" name="action" value="soluby_handle_form">
    <?php echo wp_nonce_field('form-submit', '_nonce'); ?>
    <label for="s">Recherche pour:</label>
    <input type="text" name="s" id="s" />
    <input type="hidden" value="1" name="sentence" />
    <input type="hidden" value="soluby_ticket" name="post_type" />
    <input type="submit" id="searchsubmit" value="Search" />
</form>

<!-- <form role="search" method="get" id="searchform" action="/">
    <label for="s">Search for:</label>
    <input type="text" name="s" id="s" />
    <input type="hidden" value="1" name="sentence" />
    <input type="hidden" value="soluby_ticket" name="post_type" />
    <input type="submit" id="searchsubmit" value="Search" />
</form> -->