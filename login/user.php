<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Просмотр  и  редактирование  профиля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>