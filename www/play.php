<span style="font-size:18px;"><!DOCTYPE html>    
<html>    
<head>    
 <title>jwplayer播放器测试</title>  
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
 <script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>    
 <script type="text/javascript" src="scripts/jwplayer.js"></script>    
<!-- jwplayer播放器的key是在官方网站注册之后才会给的，没有这个key就不能使用播放器，下面是我申请的key -->    
  <script type="text/javascript">jwplayer.key="W+FSSIJICMeqqi4MQCwmdLePq9iq8HQqiVT5dQ==";</script>    
</head>    
<body>    
    
<div id="container"></div>       
    
</body>    
<script type="text/javascript">      
    var temp = 1;    
    $(function() {      
    
    
  var playerInstance = jwplayer('container');    
  //初始化视频    
  playerInstance.setup({    
    //视频文件来源    
       file: 'rtmp://10.206.43.169/live/',  //这里的IP别忘记改成自己的  
       //显示的背景图片    
       image: 'scripts/bg.jpg',    
         
   });       
});    
</script>      
</html>  </span> 