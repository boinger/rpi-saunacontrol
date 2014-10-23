<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content="user-scalable=no, width=device-width" />
<link rel="apple-touch-icon" href="./icon.png" />
<script>
 function BlockMove(event) {
  // Tell Safari not to move the window.
  event.preventDefault() ;
 }
</script>
 
<body ontouchmove="BlockMove(event);" >

<?php
echo "it works";
?>

<div>Icon made by Freepik from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
</body>
</html>

