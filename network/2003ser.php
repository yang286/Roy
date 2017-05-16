<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Kinglon yang's homepage,windows 2003 server,windows 技巧,window 2003设置方法与记录" />
		<meta name="keywords" content="Kinglon yang's homepage,windows 2003 server, windows server 设置,windows 技巧." />
		<meta name="author" content="Kinglon Yang" />
		<meta name="generator" content="VIM7.0" />
		<title>2003Server</title>
		<link rel="stylesheet" rev="stylesheet" href="../css/main.css" type="text/css" media="all" />
		<link rel="stylesheet" rev="stylesheet" href="../css/public.css" type="text/css" media="all" />
	</head>
	<body>
		<div id="headbg">
		</div>
		<div id="header">
			<div id="google">
				<!-- sitesearch google -->
				<form method="get" action="http://www.google.com/search">
				<input type="hidden" name="ie" value="utf-8">
				<input type="hidden" name="oe" value="utf-8">
				<table>
					<tr>
					<td>
					<a href="http://www.google.com/">
					<img src="/image/google.gif" 
					border="0" title="google" /></a>
					</td>
					<td>
					<input type="text" name="q" size="20" maxlength="255" value="">
					<input type="submit" name="btng" value="google 搜索">
					<font size="-1">
					<input type="hidden" name="domains" value="http://worldinone.cn"><br><input type="radio" name="sitesearch" value=""> www <input type="radio" name="sitesearch" value="http://worldinone.cn" checked> worldinone.cn <br>
					</font>
					</td>
					</tr>
					</table>
				</form>
				<!-- sitesearch google -->
				
			</div>
			<ul>
				<li><a href="../" title="Homepage" >主页 Home </a></li>
				<li><a href="../english" title="English">English </a></li>
				<li><a href="../c" title="C Language">C Language </a></li>
				<li><a href="../linux" title="Linux OS">Linux OS </a></li>
				<li><a href="../network" title="Network" id="current">Network </a></li>
				<li><a href="../php" title="PHP">PHP </a></li>
				<li><a href="../javascript" title="JavaScript">JavaScript 
				</a></li>
				<li><a href="../vim" title="VIM">VIM </a></li>
				<li><a href="../iphone" title="iPhone">iPhone </a></li>
				<li><a href="../aboutme.php" title="About me">About me 关于我 </a></li>
			</ul>
		</div>

		<div id="layout">
			<div id="leftmain">
				<ul>
					<li id="firstname">快速通道</li>
					<li><a href="netnote.php" title="Network note">笔记</a></li>
					<li><a href="netlan.php" title="LAN">局域网</a></li>
					<li><a href="ccnanp.php" title="CCNA/CCNP">CCNA/CCNP</a></li>
					<li><a href="router.php" title="Router/commute">路由器/交换机</a></li>
					<li><a href="protocol.php" title="protocol">协议</a></li>
					<li><a href="2003ser.php" title="2003Server">2003Server</a></li>
					<li><a href="dosbat.php" title="dos命令bat写法">DOS命令 bat批处理</a></li>
					<li><a href="myfirefox.php" title="Firefox 扩展">My firefox</a></li>
				</ul>
			</div>

			<div id="rightmain">
			<ol>
				<li>
				    系统提示说 “此域的推荐安全级别是“安全级-高”。 您选择的级别较低。请选择“安全级-高”安全级别或更高级别。” <br />
				    
				    打开HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Internet Settings\Zones\3 <br />
				    
				    将MinLevel改为10000（十六进制） <br />
				    
				    要不然每打开一个网站都要点信任，甚至连支付宝都用不了。<br />
				</li>
				<li>改变打开cmd的默认位置: Computer Management-->Local Users and Groups-->User Properties-->Profile--Home folder-->Local path.
				</li>
				<li>setup 2003 server提示录：
					<ol>
						<li>restart computer, 选择进入ghost,进入C盘格式化,防止在安装过程中没有格式化选项或安装过程的格式化比较慢. 然后进入2003目录,先运行smartdrv.exe, 这个file可以让安装过程的copy速度大大加快, 否则你就慢慢等着吧. 下一步运行2003\i386\winnt.exe进行安装. 运行之后即可启动安装程序. 半小时左右的安装时间, 安装过程中有几个选项需要自己选一下或是填一下, 自己搞定就OK.  </li>
						<li>安装好2003server之后第一步设置gpedit.msc, 在里面设置desktop上的东西, 取消autoplay, 取消关机事件. 在Local Security Settings-Local Policies-Security Options下找shutdown:allow system to be shut down without having to log on, enabled此选项,这样可以在不用进入系统就可以重启或关机. 如果开启了Guest用户，还需要设置不让Guest用户本地登录. 设置注册表一项,让ie可以流畅打开网页:HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Internet Settings\Zones\3下MinLevel的值12000改为10000就OK. 然后装驱动程序,设置分辨率与背景色, 添加支持asia输入法, localtion与advanced都选china与chinese(singapore). OK重启.  </li>
						<li>在Control Panel(控制面板)找声音图标,enable声音. 在管理电脑处重设各个盘符. 安装office, 设置输入法, 开启GUEST用户并改密码. 设置CMD打开位置: Computer Management-Local Users and Groups-User Properties-Profile-Home folder-Local path, 安装gvim, 在path下加c:\program files\vim\vim70. 安装firofox, 加快捷方式到快速启动栏. ttplayer不用装. 安装daemons并restart.  </li>
						<li>注册ACDSee注设置关联, 安装aliwangwang,注册FTP并拉到快速启动栏, 安装editplus, 安装emule并设置目录, 安装gtalk, 安装msn, 安装winrareng, 安装讯雷, 安装stormcodec7并且把此目录下升级的file改为只读,防止暴力升级.先打开mplayerc.exe,然后会在ringz studio\storm codec\下生成一个升级的目录:btext, 打开它,里面有一个extern.ini,打开这个file,把里面的内容清空,然后设置为只读,让它无法升级. 再装一个金山. 再装一个PDF查看器. 要装的基本上就这么多了..  </li>
						<li>配置一个固定ip, 先给firefox装一个备份的febe.xpi组件, 然后设置fabe选项,接着先还原所有组件,再还原属性. 先给firefox加几个搜索引. 重启一次看看,看看事件里面有没有什么错误,重启看了,没错误,爽.  </li>
						<li>还要配置vimrc,最好是做个备份, 直接覆盖掉老的vimrc就OK. 在vimrc中加入：set autoindent, set nobackup, set nohlsearch, set fileencoding=utf-8, set fileencodings=utf-8,ucs-bom,gbk,cp936,gb28030,gb2312,utf-16,big5几句就OK.  </li>再选
						<li>装itunessetup7.4, 再装net framework2.0.exe 要不然用不了ziphone.  </li>
						<li>安装apache, 安装好之后把备份的httpd.conf覆盖掉老的配置file. 安装mysql5.0.51a.选最下面的自定义安装,改变安装目录. 配置时选上面的详细配置(Datailed configuration)-再选第二个server machine-再选最下面的non-transactional dat abase only-再选最下面的manual setting 设置为200-下面不变直接next-选最下面的manual selected default character set/ collation,character set 选utf8-这一步不变直接next-输入root password-一切OK. 把php下以前备份的php.ini.bak copy到windows目录下, 再把php下的libmysql.dll copy到system32下就可以正常访问mysql. 再安装zendoptimizer-3.3.3 OK重启看看有什么问题，只有一个apache的错误，但是不影响，apache跑php一切OK。 </li>
						<li>接下来就是装一个ghost, 把备份的boot.ini覆盖到c盘， 然后copy一个grup用的grldr file到c盘。
						</li>
					</ol>
				</li>
				<li>
				设置firefox风格的css file位于:<br />
				%userprofile%\Application Data\Mozilla\Firefox\Profiles\9bv...\chrome\userChrome.css<br />
				重装系统之前最好备份userChrome.css. 如果想装vimperator，那最好也把%userprofile%目录下的_vimperatorrc也备份一下.
				</li>
				<li>
Windows 2003操作系统在其性能和资源管理方面都比Windows 2000、Windows XP强大得多，但是装好Windows 2003和显卡驱动程序之后，在播放电影、MTV等时，分辨率较低，画面较粗糙，字体带锯齿，其效果还不如Windows 2000和Windows XP，检查显卡和驱动程序也是完好的。那么是不是就断言Windows 2003在播放电影、MTV等时就不如Windows 2000和Windows XP呢？其实不然，如果理解分辨率的含义，搞清楚Windows 2003中DirectX的“DirectDraw”和“Direct3D”功能，那么通过正确的设置就可以得到清晰的播放画面和绚丽的色彩。

分辨率是用于度量位图图像内数据量多少的一个参数。通常表示成PPI(每英寸像素)。包含的数据越多，图形文件的体积就越大，也能表现更丰富的细节。因而分辨率越高图像的清晰度就越高，看起来就越逼真。但更大的文件也需要耗用更多的计算机资源，更多的RAM，更大的硬盘空间等。不要紧，DirectX会辅助显卡来帮助解决这些问题。

“Direct”一词，中文意思是“指挥、导演”，DirectX是微软公司开发的对硬件编程的一个接口，包括DirectDraw、 Direct3D、DirectSound等多个方面。DirectX技术直接对HAL(Hardware Abstraction Layer，硬件提取)的操作，实现视频、声音的输出、网络通信及对游戏杆的控制。在DirectX中还有一个HEL(Hareware Emulation Layer，硬件模拟)功能，实现3D加速，使我们可以看到更加绚丽更加真实的3D场面和惟妙惟肖的3D听觉效果。

“DirectDraw”即二维图形接口，实际上是一个DDL函数，是DirectX中最基础的部分，它的任务优化管理基于视窗界面的图像处理，主要是2D桌面及一切基于之上的平面图像处理。它主要同计算机的显卡打交道，它会利用Windows的多重数据环流来调用显示卡上的显存。有了 DirectDraw ，显示平面的速度会非常快，而且对于基于平面之上的图形、游戏会产生很大的变化。在启用了DirectDraw 之后，图形图像的播放速度明显加快，那么单位时间内每英寸的像素就越多，分辨率就越高，图像就越清晰，文字会更平滑。可见DirectDraw 的重要性所在。“Direct3D”即三维图形接口，也是一个DDL函数，负责3D场景运算。启用Direct3D之后，三维效果就比较明显，使我们看到的图形图像立体感强，那么，更加真实绚丽的场面效果就出现了。装好Windows2003之后，DirectX的DirectDraw、Direct3D 默认状态是禁用的，没有发挥其功效，因此播放画面比较较粗糙，字体带锯齿等问题就出现了。要解决这个问题，必须通过对硬件属性和DirectX的正确设置。

现在就硬件和DirectX属性的正确设置作详细介绍，方法如下：

1. 在桌面上单击鼠标右键进入“显示属性”窗口；

2. 单击“设置”选项，再单击“高级”按钮；

3. 击“疑难解答”选项；

4. 将“硬件加速”游标向右拖至“完全”，点“确定”退出；

5. 依次进入“开始→程序→附件→系统工具→系统信息”；

6. 在信息系统窗口单击“工具”菜单中的“DirectX诊断工具”菜单项；

7. 选择“显示”选项卡，依次启用“DirectDrw ”和“Direct3D”项。

好，现在所要做的工作已经完成，硬件加速达到最大，DirectX的DirectDraw、Direct3D功能已经启用，注销一次你的计算机，然后播放试试看，图像文字是否粗糙。
				</li>
				<li>Start-Run-dxdiag-More Help-System Information Tool:MSInfo里可以查看操作系统位数.
				</li>
			</ol>
    
			</div>
			<div class="clear">
			</div>
		</div>
		<div id="footer">
			<ul>
				<li><a href="http://shop34482406.taobao.com/" target="_blank" title="My shop in taobao.com">我的淘宝店铺</a></li>
				<li><a href="http://www.dshcc.com/" target="_blank" title="">我公司网站</a></li>
				<li><a href="../contact.php" title="Contact me">联系我</a></li>
				<li><a href="../history" title="Hostory edition">历史版本</a></li>
			</ul>
		</div>


<!--
04/14/2008 Mon 
10:05 PM

05:14 PM 09/01/2008 Mon 

04:38 PM 12/12/2008 Fri 
-->
	</body>
</html>
