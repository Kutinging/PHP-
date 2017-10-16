<!--這是前端網頁，供使用者觀看使用的網頁 -->
<html>
  <head>
    <title>Google reCAPTCHA 範例</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="recaptcha.php" method="POST" onsubmit="return(get_action())">
      <div class="g-recaptcha" data-sitekey="sitekey貼這" data-theme="light" data-size="normal"></div>
      <!--關於reCAPTCHA詳細設定請看Google文檔 https://developers.google.com/recaptcha/docs/display#render_param -->
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
        <script>
        function get_action() 
        {
                var v = grecaptcha.getResponse();
                if(v=='')
                {
                        alert('請勾選我不是機器人');
                        return false;
                }
                else

                        return true; 
        }
		</script>
  
</html>
