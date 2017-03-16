nginx-rtmp-win32
================

Nginx: 1.11.10  
Nginx-Rtmp-Module: 1.1.11  
openssl-1.1.0e  
pcre-8.40  
zlib-1.2.10

#configure arguments
```



双击nginx.exe
# 简要说明
conf/nginx.conf 为配置文件实例  
RTMP监听 1935 端口，启用live 和hls 两个application  
HTTP监听 8080 端口，
* :8080/stat 查看stream状态  
* :8080/index.html 为一个直播播放与直播发布测试器
* :8080/vod.html 为一个支持RTMP和HLS点播的测试器

ReadMe:http://www.slowshiki.cn/2017/03/16/simplelive/
