<span style="font-size:18px;"><!DOCTYPE html>    
<html>    
<head>    
 <title>jwplayer����������</title>  
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
 <script type="text/javascript" src="scripts/jquery-1.8.3.min.js"></script>    
 <script type="text/javascript" src="scripts/jwplayer.js"></script>    
<!-- jwplayer��������key���ڹٷ���վע��֮��Ż���ģ�û�����key�Ͳ���ʹ�ò��������������������key -->    
  <script type="text/javascript">jwplayer.key="W+FSSIJICMeqqi4MQCwmdLePq9iq8HQqiVT5dQ==";</script>    
</head>    
<body>    
    
<div id="container"></div>       
    
</body>    
<script type="text/javascript">      
    var temp = 1;    
    $(function() {      
    
    
  var playerInstance = jwplayer('container');    
  //��ʼ����Ƶ    
  playerInstance.setup({    
    //��Ƶ�ļ���Դ    
       file: 'rtmp://10.206.43.169/live/',  //�����IP�����Ǹĳ��Լ���  
       //��ʾ�ı���ͼƬ    
       image: 'scripts/bg.jpg',    
         
   });       
});    
</script>      
</html>  </span> 