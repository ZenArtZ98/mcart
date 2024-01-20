<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	"template1", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"ELEMENTS_COUNT" => "1",
		"HLBLOCK_TNAME" => "Agents",
		"TABLE_NAME" => "Agents",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>