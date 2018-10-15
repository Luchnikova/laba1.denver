<?php
require('header.inc');
?>
<html>
<head>
	<title>Курсовые от НАС =)</title>
</head>
<body>
<h1>Лабораторная работа №1</h1>
<h2>Курсовые</h2>
<h3>Результаты заказа</h3>
<?php
	echo '<p>Заказ обработан в ';
	echo date('H:i, jS F');
	echo '</p>';

	$Cool = $_POST['Cool'];
	$Good = $_POST['Good'];
	$Normal = $_POST['Normal'];
	$find = $_POST['find'];

	echo '<p>Список вашего заказа: </p>';
	echo $Cool . 'отличная(-ых) курсовая(-ых) работ(-а)</br>';
	echo $Good . 'хорошая(-их) курсовая(-ых) работ(-а)</br>';
	echo $Normal . 'нормальная(-ых) курсовая(-ых) работ(-а)</br>';

	$totalqty = 0;
	$totalqty = $Cool + $Good + $Normal;
	echo 'Заказано работ: ' .$totalqty. '</br>';

	$totalamount = 0.00;

	define('OTLICHNAYA', 5000);
	define('HOROSHAYA', 3000);
	define('NORMALNAYA', 1500);
	
	$totalamount = $Cool * OTLICHNAYA
		+ $Good * HOROSHAYA
		+ $Normal * NORMALNAYA;
	echo 'Итого: $'.number_format($totalamount,3).'</br>';

	$texrate = 0.10;
	$totalamount = $totalamount * (1+ $texrate);
	echo 'Всего, включая налог с продаж: $'. number_format($totalamount,2). '</br>';

?>
На вопрос как Вы нашли наш сайт был получен ответ: <? echo $find; ?>
</body>
</html>
<?php
require('footer.inc');
?>