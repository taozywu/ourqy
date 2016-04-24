
寝印有什么用？

可以让非WIFI打印机在局域网中进行共享，实现跨平台无线打印
寝印的安装条件？

一台路由器+一台电脑
寝印安装步骤

1.LAMP环境搭建 2.寝印安装+配置

LAMP环境搭建(关键)

Windows平台 
1.安装虚拟机 
2.在虚拟机中安装Linux系统，以Ubuntu系统为例 
3.在Linux系统中安装Apache2、PHP、MySQL 
sudo apt-get install apache2 php5 mysql-server php5-mysql 
Linux平台 
1.在Linux系统中安装Apache2、PHP、MySQL 
sudo apt-get install apache2 php5 mysql-server php5-mysql 

寝印安装+配置(关键)

安装 
将下载的文件解压缩到/var/www/html目录即可 
配置 
系统设置中设置你需要使用的默认打印机，将会以它打印文件 
测试 
Linux主机访问127.0.0.1，出现寝印的打印页面则成功 
分享 
通过ifconfig命令，获取本机局域网IP。他人在浏览器中输入该IP即可使用! 

疑难解答

配置好后，本机可以访问，其它主机无法访问？ 
虚拟机网络适配置器设置为网桥模式，勾选"复制复制物理网络连接状态" 
Lamp安装过程出错？ 
上网搜索解决(推荐)或发送E-mail给我们 
相关说明

  目前寝印依赖于LAMP环境，环境搭建可能较为麻烦。搭建此环境需要对Linux操作有一定的熟练度。如果安装过程中你遇到什么问题，可以尝试上网搜索答案或者将问题反馈给我们。 

  我们也感受对于部分用户来说，环境搭建较为麻烦，不过寝印的部分功能行依赖于Linux相关命令，而这些命令Windows平台可能不具备，因而需要安装虚拟机搭建LAMP环境。平台兼容性问题正在解决当中，请保持持续的关注。
