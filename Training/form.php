<!DOCTYPE html>
<html>
<body>
<form action="form.php" method="post">
<input name="pseudo" type="text">
</form>
</body>
</html>

<?php
if (isset($_POST['pseudo']))
{
	echo $_POST['pseudo'].'<br>';
}
else {
	echo 'pas de post<br>';
}

if (isset($_GET['pseudo_get']))
{
	echo $_POST['pseudo_get'].'<br>';
}
else {
	echo 'pas de get';
}
?>