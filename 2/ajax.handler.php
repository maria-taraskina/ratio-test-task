<?require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent("ajax:iblock.element.add.form","",Array(
		"SEF_MODE" => "N",
		"IBLOCK_TYPE" => "company",
		"IBLOCK_ID" => "7",
		"PROPERTY_CODES" => array("NAME","25"),
		"PROPERTY_CODES_REQUIRED" => array(),
		"GROUPS" => array("2"),
		"STATUS_NEW" => "N",
		"STATUS" => array("2"),
		"LIST_URL" => "",
		"ELEMENT_ASSOC" => "PROPERTY_ID",
		"ELEMENT_ASSOC_PROPERTY" => "",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "Y",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "Готово",
		"USER_MESSAGE_ADD" => "Сохранено",
		"DEFAULT_INPUT_SIZE" => "10",
		"RESIZE_IMAGES" => "Y",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"SEF_FOLDER" => "/",
		"VARIABLE_ALIASES" => Array(
		)
	)
);?>	