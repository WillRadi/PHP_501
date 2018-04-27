<h2>Alter user</h2>
<form>
	<p>Nome:</p>
	<input type="text" name="name" value="<?= $user->getName()?>">
	<p>E-mail:</p>
	<input type="text" name="name" value="<?= $user->getEmail()?>">
	<br>
	<a href="?r=user">Voltar</a>
</form>