<?php
use Bitrix\Main\EventManager;

require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/handlers.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/clear_cache_handler.php');
AddEventHandler("main", "OnAfterUserRegister", Array("UserGroupHandler","OnAfterUserRegisterHandler"));

$eventManager = EventManager::getInstance();

// Обработчик для события добавления элемента
$eventManager->addEventHandler('', 'HLBLOCK_1ОnAfterAdd', 'clearHlblockCache');
// Обработчик для события обновления элемента
$eventManager->addEventHandler('', 'HLBLOCK_1ОnAfterUpdate', 'clearHlblockCache');
// Обработчик для события удаления элемента
$eventManager->addEventHandler('', 'HLBLOCK_1ОnAfterDelete', 'clearHlblockCache');
?>