<!--這個是前端網頁，給使用者觀看的頁面-->
<html>
  <head>
    <title>Google reCAPTCHA 範例</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="recaptcha.php" method="POST" onsubmit="return(get_action())">
      <div class="g-recaptcha" data-sitekey="sitekey"></div>
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
