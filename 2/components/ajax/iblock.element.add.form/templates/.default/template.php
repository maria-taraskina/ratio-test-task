<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// если у статьи есть пользователи, которым она нравится - выводим их
if(count($arResult["USER_LIKES"])){
				foreach($arResult["USER_LIKES"] as $user){	
							$rsUser = CUser::GetByID($user);
							$arUser = $rsUser->Fetch();						
							echo $arUser['NAME']."<br>";
						}
	}
	?>