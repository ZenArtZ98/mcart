<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="site-section border-bottom">
        <div class="container">
             <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
                array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "contacts",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/index_contacts.php",
                    "COMPONENT_TEMPLATE" => ".default"
                ),
            false
            );?>
             <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view", 
	".default", 
	array(
		"CONTROLS" => array(
			0 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "ROADMAP",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"API_KEY" => ""
	),
	false
);?>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>