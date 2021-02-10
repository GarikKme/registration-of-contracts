<?php
header("Content-Type: text/html; charset=utf-8");

$refferer = getenv('HTTP_REFERER');
$name = htmlspecialchars($_POST["name"]); 
$phone = htmlspecialchars($_POST["phone"]);   
$subject = htmlspecialchars($_POST["subject"]);
$email = htmlspecialchars($_POST["email"]); 
$tema = "Заказ с сайта";


$message_to_myemail = "<b>Здравствуйте, Вам заявка с сайта!</b> <br>
	Заявка из формы: \"$subject\" <br>
	<table style='width: 100%;'>
	<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя отправителя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td>
	</tr>
	<tr>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
			<b>Телефон:</b>
		</td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>
	</tr>
	<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Email отправителя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$email</td>
	</tr>
	</table><br>
	";

$message_to_myemail .= "Источник (ссылка): $refferer";
echo $message_to_myemail;

$myemail = "trademarkreg@ya.ru"; // e-mail администратора

// Отправка письма администратору сайта

mail($myemail, $tema, $message_to_myemail, "From: Sitename <mukhgalin@gmail.com> \r\n Reply-To: Sitename \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );

