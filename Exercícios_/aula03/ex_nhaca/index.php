
<?php require_once 'actions/editUser.php'; ?>
<form method="POST" action="actions/createUser.php">
	<p>Nome: <input type="text" name="name"></p>
	<p>E-mail: <input type="text" name="email"></p>
	<?php if(empty($user['senha'])) : ?>
		<p>Senha: <input type="password" name="senha"></p>
	<?php endif; ?>
	<p>
		<input type="radio" name="dbchoice" value="mysql">MySQL
		<input type="radio" name="dbchoice" value="pgsql">Postgres
	</p>
	<input type="submit" value="Criar">
</form>

<?php include_once 'DB/conexao.php'; ?>
<form method="POST" action="">
	<select name="dbchoice">
		<option value="mysql">MySQL</option>
		<option value="pgsql">Postgres</option>
	</select>
	<input type="submit" value="Selecionar">
</form>

<table border="1">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<?php require_once 'actions/listUser.php' ?>
	<?php foreach ($users as $user) :?>
		<tr>
			<td><?= $user['id']?></td>
			<td><?= $user['name']?></td>
			<td><?= $user['email']?></td>
			<td>
				<a href="actions/editUser.php?id=<?= $user['id']?>&dbchoice=<?= $db ?>">Editar</a> || <a href="actions/deleteUser.php?id=<?= $user['id']?>&dbchoice=<?= $db ?>">Excluir</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>