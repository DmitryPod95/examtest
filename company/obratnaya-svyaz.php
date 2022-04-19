<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback_ex1", 
	array(
		"EMAIL_TO" => "Poddim95@yandex.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "32",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "feedback_ex1"
	),
	false
);?><br>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>