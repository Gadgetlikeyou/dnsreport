<html>
<head><title>Hello World</title></head>
<body><h1>Hello World!</h1>
<p>Текущая дата:
<?
echo date("d.m.Y");
?>

<br>
<hr>
<br>

<?
$i = 0;
while (++$i < 10) {
echo $i . "<br>\n";
if ($i == 5) break;
}
?>

<hr>

<?
$i = 1024;
$a = array( 1=>'abc', 2=>100, 'test'=>$i-100 );
print_r($a);
?>

<hr>

<?
$languages = array(
1 => 'Assembler',
'C++',
'Pascal',
'scripting' => 'bash'
);
$languages['php'] = 'PHP';
$languages[100] = 'Java';
$languages[] = 'Perl';
?>
<table>
<tr>
<th>Индекс</th>
<th>Значение</th>
</tr>
<?
foreach ($languages as $key => $value) {
echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
}
?>
</table>

<hr>

<?
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : '';
$year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : '';

 
if (isset($_POST['name'], $_POST['year'])) {
if ($_POST['name'] == '') {
echo 'Укажите имя!<br>';
} else if ($_POST['year'] < 1900 || $_POST['year'] > 2004) {
echo 'Укажите год рождения! Допустимый диапазон значений: 1900..2004<br>';
} else {
echo 'Здравствуйте, ' . $_POST['name'] . '!<br>';
$age = 2004 - $_POST['year'];
echo 'Вам ' . $age . ' лет<br>';
}
echo '<hr>';
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
Введите Ваше имя: <input type="text" name="name" value="<?=$name?>">
<br>
Введите Ваш год рождения: <input type="text" name="year" value="<?=$year?>">
<input type="submit" value="OK">
</form>

<hr>


<form method="post" action=/<span class="st0">"<?=$_SERVER['PHP_SELF']?>">
Введите Ваше имя: <input type="text" name="name">
<input type="submit" value="OK">
</form>
<?
phpinfo(32);
?>


</body>
</html>