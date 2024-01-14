<?php
if(! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
              <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                      "AREA_FILE_SHOW" => "page",
                      "AREA_FILE_SUFFIX" => "about",
                      "EDIT_TEMPLATE" => ""
                  )
              );?>
          </div>



        </div>

          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"template2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "604800",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "template2"
	),
	false
);?>

        <div class="col-lg-4 mb-5 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "follow",
                    "EDIT_TEMPLATE" => ""
                )
            );?>




        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "copyright",
                    "EDIT_TEMPLATE" => ""
                )
            );?>

        </div>

      </div>
    </div>
  </footer>
</body>

</html>