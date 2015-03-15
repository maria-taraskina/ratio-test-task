<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="news-list">
<? $user_id=$USER->GetID();?>
<?foreach($arResult["ITEMS"] as $arItem):?>	
	<li>			
		<?if($arItem["DISPLAY_ACTIVE_FROM"]):?>
			<? $arr = ParseDateTime($arItem["DISPLAY_ACTIVE_FROM"], FORMAT_DATETIME);?>	
			<span class="date"><?=$arr["DD"];?>	<?=ToLower(GetMessage("MONTH_".intval($arr["MM"])."_S"))?> <?=$arr["YYYY"];?></span>
			<br/>
		<?endif?>
	
		<?if($arItem["NAME"]):?>
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="title"><?echo $arItem["NAME"]?></a>
		<?endif;?>	
		
		<?if($user_id):?>
			<?if(in_array($user_id, $arItem["PROPERTIES"]["USER_LIKES"]["VALUE"])):?>
				<a class="like unlike" data-user-id="<?=$user_id;?>" data-id="<?=$arItem["ID"]?>" href="article-<?echo $arItem["ID"]?>">Unlike this article</a>
			<?else:?>
				<a class="like" data-user-id="<?=$user_id;?>" data-id="<?=$arItem["ID"]?>" href="article-<?echo $arItem["ID"]?>">Like this article</a>
			<?endif;?>	
			
			<div class="user_list">
			<?if($arItem["PROPERTIES"]["USER_LIKES"]["VALUE"]):?>
				<?foreach($arItem["PROPERTIES"]["USER_LIKES"]["VALUE"] as $user):?>	
						<?	$rsUser = CUser::GetByID($user);
							$arUser = $rsUser->Fetch();	?>
						<?=$arUser['NAME'];?><br>
						<?endforeach;?>
						<?endif;?>
			</div>	
		<?endif;?>
		
		<?if($arItem["DETAIL_TEXT"]):?>
		<div class="clear"></div>
		<div><?echo $arItem["DETAIL_TEXT"]?></div>
		<?endif;?>	
		
	</li>
<?endforeach;?>
</ul>	