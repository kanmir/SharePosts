<h1><?= $data['post']->title ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Written by <?= $data['user']->name ?> on <?= $data['post']->created_at ?>
</div>
<p><?= $data['post']->body ?></p>

<?php
if ($data['post']->user_id == $_SESSION['user_id']): ?>

    <hr>
    <a href="/posts/edit/<?= $data['post']->id ?>" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i>
        Edit</a>

    <form class="pull-right" action="/posts/delete/<?= $data['post']->id ?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
<?php endif; ?>
