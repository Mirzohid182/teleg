<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5128892562:AAHh9R9Ide0p9ok_yg2qlucFENmmfXjcpTE";

//Сюда вставляем chat_id
$chat_id = "-1001725940106";

$arr=Array(
	"Imya kliebta: " => $_POST['name'],
	"Imya kliebta: " => $_POST['phone'],
	"Imya kliebta: " => $_POST['user_email'],
);
foreach ($arr as $key=>$value){
	$txt.="<b>" . $key . "</b>" . $value . "%0A";
}

$url="https://api.telegram.org/bot{$token}/sendMessage?chat_id={$token_id}}&parse_mode=html&text={$txt}";
$proxy="67.154.111.452:3128";
?>
