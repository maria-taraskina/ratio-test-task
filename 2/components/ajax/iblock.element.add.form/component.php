<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock")){
	ShowError(GetMessage("CC_BIEAF_IBLOCK_MODULE_NOT_INSTALLED"));
	return;
}

$ELEMENT_ID = $_REQUEST["id"]; 
$USER_ID = $_REQUEST["user_id"];
$LIKE = $_REQUEST["like"];
						
						// обращаемся к инфоблоку по его ID
 						$arSelect = Array("ID", "PROPERTY_USER_LIKES");
						$arFilter = Array("IBLOCK_ID"=>7, "ID" => $ELEMENT_ID, "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
						
						// получаем значения из массива USER_LIKES
							while($ob = $res->GetNextElement()){
							  $arFields = $ob->GetFields();							 		
							  $arResult["USER_LIKES"][] = $arFields["PROPERTY_USER_LIKES_VALUE"];							  
							 	}
 					
						if($LIKE == 1)	{
						// если статья нравится, проверяем наличие уже такого пользователя в массиве, в случае отсутствия - добавляем его
						if(!in_array($USER_ID,$arResult["USER_LIKES"])){
								$arResult["USER_LIKES"][] = $USER_ID;
						}
						}		
				
						if($LIKE == 0)	{ 
						// если статья не нравится - ищем индекс пользователя, которого нужно удалить
						$i = array_search($USER_ID,$arResult["USER_LIKES"]);
						if($i !== false)  {					
						unset($arResult["USER_LIKES"][$i]);	 // удаляем пользователя
						}
						}
						
//обновление множественного поля USER_LIKES в инфоблоке
CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, 7, array("25" => $arResult["USER_LIKES"]));

$this->IncludeComponentTemplate(); //подключаем шаблон компонента