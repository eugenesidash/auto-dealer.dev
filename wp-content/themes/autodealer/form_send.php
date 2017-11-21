<?php
$from = 'Source name <some@mail.tld>';
$to = 'Destination name <work.page22@gmail.com>';
$title = 'Заявка с сайта Auto Dealer';
$body = <<<TPL
Данные от клиента:
Город: {$_POST['city_form']}
Марка авто: {$_POST['mark']}
Модель авто: {$_POST['model']}
Год выпуска авто: {$_POST['year']}
Модификация авто: {$_POST['modif']}
Имя клиента: {$_POST['name']}
Телефон клиента: {$_POST['phone']}
TPL;

@date_default_timezone_set('Europe/Kiev');

$headers = implode("\r\n",array(
	'From: auto-dealer@com.ua',
	'MIME-Version: 1.0',
	'Content-type: text/plain; charset=UTF-8',
	'Content-Transfer-Encoding: 8bit',
	'Date: '.gmdate('D, d M Y H:i:s').' UT',
	'X-Priority: 3',
	'X-MSMail-Priority: Normal',
	'X-Mailer: PHP'
));

if(@mail($to,$title,$body,$headers))
	echo '<p>Заявка успешно отправлена!</p><br><a href="/">Вернуться на главную страницу</a>';
else
	echo '<p>Заявка НЕ отправлена, попробуйте ещё раз позже. </p>';
exit;