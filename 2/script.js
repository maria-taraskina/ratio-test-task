$(document).ready(function() {
var likes='.news-list a.like';
			$(likes).each(function(){
					$(this).click( function() {
					 var iblock_id = $(this).attr("data-id");
					 var user_id = $(this).attr("data-user-id");
					 var like = 1;
					$aobj=$(this);
					$likeStr="Like this article";
					$unlikeStr="Unlike this article";	

					if($aobj.hasClass("unlike")) like = 0;						
					
					 $.ajax({
							url: "/ajax.handler.php",
							type: "POST",
							dataType: "html",
							data: "id="+iblock_id+"&user_id="+user_id+"&like="+like,
							success: function(data){								
								$aobj.toggleClass("unlike");
								if($aobj.hasClass("unlike")) $aobj.html($unlikeStr);
								else $aobj.html($likeStr);
								$aobj.next('.user_list').html(data);
								}
							});

							return false;
						});
			});	
			
			});