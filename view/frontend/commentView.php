<?php $title = 'Mon blog - Edition d\'un commentaire'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>
<p><a href="index.php?action=post&id=<?= $comment['post_id'] ?>">Retour à la news</a></p>

<h2>Edition d'un commentaire</h2>

<form action="index.php?action=updateComment&amp;id=<?= $comment['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" value="<?= $comment['author'] ?>" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"><?= $comment['comment'] ?></textarea>
    </div>
    <div>
        <input type="submit" value="Modifier" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
