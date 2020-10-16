<form role="search" method="post" id="searchform" action="<?php echo admin_url('admin-post.php') ?>">
    <input type="hidden" name="action" value="werk_add_post">
    <?php echo wp_nonce_field('form-submit', '_nonce'); ?>
    <label for="courriel">Créer un contact:</label>
    <input type="text" name="suivi[courriel]" id="courriel">
    <textarea name="suivi[commentaires]" id="suivi" cols="30" rows="10"></textarea>
    <input type="submit" id="searchsubmit" value="Search" />
</form>