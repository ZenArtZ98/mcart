<?php
use Bitrix\Main\Application;

function clearHlblockCache(\Bitrix\Main\ORM\Event $event) {
    $entity = $event->getParameter("entity");
    $tableName = $entity->getDBTableName();

    $taggedCache = Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
