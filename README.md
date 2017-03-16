nginx-rtmp-win32
================

Nginx: 1.11.10  
Nginx-Rtmp-Module: 1.1.11  
openssl-1.1.0e  
pcre-8.40  
zlib-1.2.10

#configure arguments
```
nginx version: nginx/1.11.10
built by cl
built with OpenSSL 1.1.0e  16 Feb 2017
TLS SNI support enabled
configure arguments: --with-cc=cl --builddir=objs --with-debug --prefix= --conf-
path=conf/nginx.conf --pid-path=logs/nginx.pid --http-log-path=logs/access.log -
-error-log-path=logs/error.log --sbin-path=nginx.exe --http-client-body-temp-pat
h=temp/client_body_temp --http-proxy-temp-path=temp/proxy_temp --http-fastcgi-te
mp-path=temp/fastcgi_temp --http-scgi-temp-path=temp/scgi_temp --http-uwsgi-temp
-path=temp/uwsgi_temp --with-cc-opt=-DFD_SETSIZE=1024 --with-pcre=objs/lib/pcre-
8.40 --with-zlib=objs/lib/zlib-1.2.11 --with-select_module --with-http_realip_mo
dule --with-http_addition_module --with-http_sub_module --with-http_dav_module -
-with-http_stub_status_module --with-http_flv_module --with-http_mp4_module --wi
th-http_gunzip_module --with-http_gzip_static_module --with-http_auth_request_mo
dule --with-http_random_index_module --with-http_secure_link_module --with-http_
slice_module --with-mail --with-stream --with-openssl=objs/lib/openssl-1.1.0e --
with-openssl-opt=no-asm --with-http_ssl_module --with-mail_ssl_module --with-str
eam_ssl_module --with-ipv6 --add-module=../nginx-rtmp-module
```

# 使用方法
双击nginx.exe
# 简要说明
conf/nginx.conf 为配置文件实例  
RTMP监听 1935 端口，启用live 和hls 两个application  
HTTP监听 8080 端口，
* :8080/stat 查看stream状态  
* :8080/index.html 为一个直播播放与直播发布测试器
* :8080/vod.html 为一个支持RTMP和HLS点播的测试器

# 注意
不支持exec

# 直播测试工具 
内置了一个方便测试的pc端推流于播放的工具
![img]
[img]:https://github.com/NodeMedia/NodeMediaDevClient/raw/master/QQ20160310-0.png
源码在此:https://github.com/NodeMedia/NodeMediaDevClient

# 另一个选择，支持HTTP-FLV
Simple-Rtmp-Server-win32 https://github.com/illuspas/srs-win32
