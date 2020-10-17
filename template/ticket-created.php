<section>
    <form class="searchform" role="search" method="post" id="searchform" action="<?php echo admin_url('admin-post.php') ?>">
        <input type="hidden" name="action" value="soluby_add_ticket">
        <input type="text" name="suivi[courriel]" id="courriel" placeholder="Votre courriel">
        <textarea name="suivi[commentaires]" id="suivi" cols="30" rows="10" placeholder="Votre commentaire..."></textarea>
        <input type="submit" id="searchsubmit" value="Envoyer" />
        <input type="button" value="Fermer ce ticket" />
    </form>
</section>