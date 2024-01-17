<?php
class UserGroupHandler {
    public static function OnAfterUserRegisterHandler(&$arFields) {
        if ($arFields['USER_ID'] > 0) {

            if ($arFields["UF_USER_TYPE"] == 6) {
                CUser::SetUserGroup($arFields["USER_ID"], [7]);
            } elseif ($arFields["UF_USER_TYPE"] == 5) {
                CUser::SetUserGroup($arFields["USER_ID"], [6]);
            }

            return $arFields;
        }
    }
}
?>