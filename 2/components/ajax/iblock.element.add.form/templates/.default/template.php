<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// ���� � ������ ���� ������������, ������� ��� �������� - ������� ��
if(count($arResult["USER_LIKES"])){
				foreach($arResult["USER_LIKES"] as $user){	
							$rsUser = CUser::GetByID($user);
							$arUser = $rsUser->Fetch();						
							echo $arUser['NAME']."<br>";
						}
	}
	?>