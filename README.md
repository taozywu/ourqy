<h2>
                    寝印有什么用？
                </h2>
                <p>
                    可以让非WIFI打印机在局域网中进行共享，实现跨平台无线打印
                </p>
                <h2>
                    寝印的安装条件？
                </h2>
                <p>
                    一台路由器+一台电脑
                </p>
                <h2>
                    寝印安装步骤
                </h2>
                <p>
                    1.LAMP环境搭建
                    2.寝印安装+配置
                </p>
                <h2>
                    LAMP环境搭建(关键)
                </h2>
                <p>
                    <br />
                    <strong>
                        Windows平台
                    </strong>
                    <br />
                    1.安装虚拟机
                    <br />
                    2.在虚拟机中安装Linux系统，以Ubuntu系统为例
                    <br />
                    3.在Linux系统中安装Apache2、PHP、MySQL
                    <br />
                    sudo apt-get install apache2 php5 mysql-server php5-mysql
                    <br />
                    <strong>
                        Linux平台
                    </strong>
                    <br />
                    1.在Linux系统中安装Apache2、PHP、MySQL
                    <br />
                    sudo apt-get install apache2 php5 mysql-server php5-mysql
                    <br />
                    <br />
                </p>
                <h2>
                    寝印安装+配置(关键)
                </h2>
                <p>
                    <br />
                    <strong>
                        安装
                    </strong>
                    <br />
                    将下载的文件解压缩到/var/www/html目录即可
                    <br />
                    <strong>
                        配置
                    </strong>
                    <br />
                    系统设置中设置你需要使用的默认打印机，将会以它打印文件
                    <br />
                    <strong>
                        测试
                    </strong>
                    <br />
                    Linux主机访问127.0.0.1，出现寝印的打印页面则成功
                    <br />
                    <strong>
                        分享
                    </strong>
                    <br />
                    通过ifconfig命令，获取本机局域网IP。他人在浏览器中输入该IP即可使用!
                    <br />
                    <br />
                </p>
                <h2>
                    疑难解答
                </h2>
                <p>
                    <br />
                    <em>配置好后，本机可以访问，其它主机无法访问？</em>
                    <br />
                    虚拟机网络适配置器设置为网桥模式，勾选"复制复制物理网络连接状态"
                    <br />
                    <em>Lamp安装过程出错？</em>
                    <br />
                    上网搜索解决(推荐)或发送E-mail给我们
                    <br />
                </p>
                <h2>
                    相关说明
                </h2>
                <p>
                    <br />
                    &nbsp;&nbsp;目前寝印依赖于LAMP环境，环境搭建可能较为麻烦。搭建此环境需要对Linux操作有一定的熟练度。如果安装过程中你遇到什么问题，可以尝试上网搜索答案或者将问题反馈给我们。
                    <br />
                    <br />
                    &nbsp;&nbsp;我们也感受对于部分用户来说，环境搭建较为麻烦，不过寝印的部分功能行依赖于Linux相关命令，而这些命令Windows平台可能不具备，因而需要安装虚拟机搭建LAMP环境。平台兼容性问题正在解决当中，请保持持续的关注。
                </p>
