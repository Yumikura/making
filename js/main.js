//ロードきっかけ世界
$(function(){

	//ページスクロール＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
	for(var i=1; i<=5; i++){
		pageScroll(eval("'.b"+i+"'"),eval("'#c"+i+"'"),500);
	}
	function pageScroll(btn,cont,speed){
		$(btn).click(function(){
			var getcnt = $(cont).offset().top;
			$('body,html').animate({scrollTop: getcnt},speed,'swing');
		});
	}//end ページスクロール*＊＊＊＊＊＊＊＊＊＊＊＊
	//position部品現隠＊＊＊＊＊＊＊＊＊＊＊＊＊＊
	$('.posi_area').hide();
		$(window).scroll(function(){
			var currentPos = $(this).scrollTop();
			var showPos = $('#c1').offset().top;
			if(currentPos >= showPos){
				$('.posi_area').fadeIn();
			}else{
				$('.posi_area').fadeOut();
			}
		});//end position部品現隠＊＊＊＊＊＊＊＊＊＊＊＊＊＊
	//end トップへ戻るボタン＊＊＊＊＊＊＊＊＊＊＊
	$('#gotop').click(function(){
		$('body,html').animate({scrollTop: 0},1000,'swing');
	});
});//end JQUERY