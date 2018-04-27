
<h2>List of Users</h2>
<a href="?r=home">Go Back</a><br>
<a href="?r=user/new">New user</a>
<?php foreach ($users as $user): ?>
	<p><?= $user->getId() ?></p>
	<p><?= $user->getName() ?> - <?= $user->getEmail() ?> - <a href="?r=user/edit/<?= $user->getId() ?>">Editar</a></p>
<?php endforeach ?>