<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/handlers.php");
AddEventHandler("main", "OnAfterUserRegister", Array("UserGroupHandler","OnAfterUserRegisterHandler"));
?>