<meta http-equiv='refresh' content='3; url=https://you-hands.ru'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['name']) && $_POST['name'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = $_POST['name'];
	else die ("Не заполнено поле \"Имя\"");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['phone']) && $_POST['phone'] != "") //тут все точно так же как и в предыдущем случае
		$email = $_POST['phone'];
	else die ("Не заполнено поле \"Phone\"");



	if (isset($_POST['message']) && $_POST['message'] != "")
		$body = $_POST['message'];
	else die ("Не заполнено поле \"Сообщение\"");



	$address = "krzkrz@rambler.ru";//адрес куда будет отсылаться сообщение для администратора
	$mes  = "Имя: $name \n";	//в этих строчках мы заполняем текст сообщения. С помощью оператора .= мы просто дополняем текст в переменную
	$mes .= "E-mail: $phone \n";
 	$mes .= "Текст: $body";
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Сообщение отправлено успешно! Перейти на <a href='https://You-hands.ru/'>you-hands.ru</a>, если вас не перенаправило вручную.";
	else
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";

?>




























