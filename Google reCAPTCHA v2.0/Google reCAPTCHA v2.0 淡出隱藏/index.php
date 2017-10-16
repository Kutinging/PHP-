<!--這是前端網頁，供使用者觀看使用的網頁 -->
<html>
  <head>
    <title>Google reCAPTCHA 範例</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
	 <script language="javascript" type="text/javascript">
function VerifyReCaptcha(GResponse)
{
	$.ajax(
	{
		url:"VerifyReCaptcha.php",//傳送到後端的網頁名稱
		type : "POST",
		dataType: 'html',
		async: true,
		data:
		{
        	reCaptchaResponse: GResponse
		},
		success:function(msg)
		{
			switch(msg)
			{
				case 'OK':
					//在這裡輸入驗證成功後要呼叫的函數
					//在本範例中預設是讓 reCaptcha 驗證碼淡出
					$('.g-recaptcha').fadeOut();
					window.location.href = 'http://www.google.com';//成功跳轉網頁
					document.write('<font size=6em>It\'s working now.</font>');//成功顯示文字
				break;
				case 'ERROR':
					alert('驗證失敗！請再試一次！');
				break;
			}
		},
		error:function(xhr){
			alert('發生未預期的錯誤！請再試一次！');
		},
    }
	);
}
</script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){	
	var IntervalID = setInterval(function(){
		if($("#g-recaptcha-response").val()!='')
		{
			VerifyReCaptcha($("#g-recaptcha-response").val());
			clearInterval(IntervalID);
		}
	},500);
});
</script>
  </head>
  <body>
    <form name="recaptcha" action="index.php" method="POST" onsubmit="return(get_action())">
      <div class="g-recaptcha" data-sitekey="<enter your sitekey at here>" data-theme="light" data-size="normal"></div>
      <!--關於reCAPTCHA詳細設定請看Google文檔 https://developers.google.com/recaptcha/docs/display#render_param -->
      <br/>
    </form>
  </body>
</html>