<?php 

	$result = mail("work.page22@gmail.com", "Заявка с сайта Auto Dealer", 
		"Данные от клиента:
		Марка авто: $_POST[mark]
		Модель авто: $_POST[model]
		Год выпуска авто: $_POST[year]
		Модификация авто: $_POST[modif]
		Имя клиента: $_POST[name]
		Телефон клиента: $_POST[phone]");

	if ($result) {
		echo "<p>Заявка успешно отправлена!</p>";
	}
	else {
		echo "<p>Заявка НЕ отправлена, попробуйте ещё раз позже. </p>";
	}
?>