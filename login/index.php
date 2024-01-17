<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"REGISTER_URL" => "/login/registration.php",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>