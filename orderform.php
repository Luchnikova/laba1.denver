<?php
require ('header.inc');
?>
<html>
<head>
	<title> Продажа курсовых работ </title>
</head>
<body>

<h1> Лабораторная №1 </h1>

<h2> Продажа курсовых работ </h2>
<h3> Форма заказа </h3>

<form action = "processorder.php" method = post>
<table border = 0>
<tr bgcolor = #cccccc>
	<td width = 150> Курсовая работа </td>
	<td width = 15> Количество </td>
</tr>


<tr>
	<td> Отличная курсовая работа </td>
	<td align = "center"><input type = "text" name = "Cool" size = "3" maxlength = "3"></td>
</tr>
<tr>
	<td> Хорошая курсовая работа </td>
	<td align = "center"><input type = "text" name = "Good" size = "3" maxlength = "3"></td>
</tr>
<tr>
	<td> Средняя курсовая работа </td>
	<td align = "center"><input type = "text" name = "Normal" size = "3" maxlength = "3"></td>
</tr>
<tr>
	<td> Почему вы решили заказать курсовую работу у нас? </td>
	<td><select name = "find">
		<option value = "Мне лень писать самому">Мне лень писать самому </option>
		<option value = "Эта работа слишком сложна для меня">Эта работа слишком сложна для меня </option>
		<option value = "У меня не хватает времени">У меня не хватает времени </option>
	</select>
<tr>
	<td colspan = "2" align = "center"><input type = "submit" value = "Отправить заказ"></td>
</tr>
