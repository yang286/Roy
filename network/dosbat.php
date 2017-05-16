<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="DOS命令的用法及bat批处理的建立,DOS网络管理、操作与测试,DOS的妙用磁盘管理" />
		<meta name="keywords" content="DOS,DOS命令,bat,批处理,bat批处理,dos系统管理命令,dos网络管理,bat教程,dos教程" />
		<meta name="author" content="Kinglon Yang" />
		<meta name="generator" content="VIM7.0" />
		<title>DOS命令 | bat批处理 | DOS命令妙用</title>
		<link rel="stylesheet" rev="stylesheet" href="../css/main.css" type="text/css" media="all" />
		<link rel="stylesheet" rev="stylesheet" href="../css/public.css" type="text/css" media="all" />
		<link rel="stylesheet" rev="stylesheet" href="../css/info.css" type="text/css" media="all" />
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
				<li><a href="../javascript" title="JavaScript">JavaScript </a></li>
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
						<span class="tit">mkdir [drive:]Path or md [drive:]Path <span class="textright">Creates a directory.</span></span>
						Example: mkdir E:\backup\office\files
					</li>
					<li>
						<span class="tit">rmdir [drive:]Path [/s][/q] or rd [drive:]Path [/s][/q] <span class="textright">remove dirctory</span></span>
						/s 删除指定目录和所有子目录以及包含的所有file， 用于删除目录树，等于deltree. <br />
						/q 安静模式(自动将是否确认删的应答设为"是"), 不用确认即删除,使用 /s 参数删除目录树时,系统会要求确认是否真删除. 如: rmdir Path /s /q <br />
						Example: rmdir e:\backup\office /s or rmdir e:\backup\office /s /q <br />
						注意:<br /> 在"恢复控制台"使用rmdir命令不能使用/s和/q<br />
						不能删除包含隐藏或系统file的目录
					</li>
					<li>
						<span class="tit">tree [drive:][Path] [/f][/a] <span class="textright">显示目录结构</span></span>
						/f 显示每个目录中的file name<br />
						/a 指定 tree 使用text字符而不是图形字符显示链接子目录的行.<br />
						Example: tree c: /f 显示 C 盘根目录结构, 包括普通file.<br />
						tree c:\ /f |more 显示 C 盘中的file, 且一次显示一屏. more 的作用是一屏一屏显示输出内容.<br />
						注意: tree 对隐藏file或folder不起作用.
					</li> 
					<li>
						<span class="tit">dir [drive:][Path][filename] [...] [/p] [/q] [/w] [/d] [/a[[:]attributes]][/o[[:]SortOrder]] [/t[[:]TimeField]] [/s] [/b] [/l] [/n] [/x] [/c] [/4] <span class="textright">显示file和目录</span></span>
						/w 以宽格式显示列表, 不显示修改时间, file大小等信息.<br />
						/p 分页显示, 当屏幕无法将信息完全显示时,可使其进行分页显示.<br />
						/a 显示具有特殊属性的file; 或只显示那些指定属性的目录和file. 省略/a, dir 将显示除隐藏和系统file之外的所有file. 如果没有指定 attributes 的情况下使用 /a, dir 显示包含隐藏和系统的所有file. attributes 的值: <br />
						h 隐藏file s 系统file a 准备好存档的file r 只读file d 目录 -h -s -a -r 与前者相反, /d 只是file 而非目录.<br />
						/s 显示当前目录及子目录下所有的file.<br />
						/q 显示file 和目录的用户属性.<br />
						/d 与 /w 相同, 但是按列排序.<br />
						/b 列出每个目录名或file名,每行一个,不显示其他信息.<br />
						/o [[:]SortOrder] 控制 dir 排序和显示目录名和file名的顺序. 如果省略 /o, dir 将按它们在目录中出现的顺序显示名称. 如果没有指定 SortOrder 的情况下使用 /o, dir 显示按字母顺序排列的目录名,然后按字母顺序排列file名. 冒号 : 是可选的, 可用于 SortOrder 的值.<br />
						n 按名称的字母顺序 e 按扩展名的字母顺序 s 按大小,小的优先 g 在file之前分组的目录 d 按日期和时间,最早的优先 -n -e -s -g /d 与前者相反.<br />
						/t[[:]TimeField]指定显示或用于排序的时间字段. dir /t:c dir /t:a dir /t:w 分别显示file or 目录的创建时间,上次访问时间和上次修改时间.<br />
						/l 按小写字母显示未排序的目录名和file名.<br />
						/n 显示长列表格式,file名在屏幕最右边<br />
						/x dir/x 会对长file名同时显示"8.3"格式的file名.<br />
						/c 按file大小显示多个分隔符. /-c 不显示分隔符.<br />
						Example: dir /w/s/p 分页显示当前目录下的所有子目录及file.<br />
						dir c: /a/-d /b 只显示 C 盘下的file名, 不包括其他额外信息.<br />
						dir c: /a/d 只显示 C 盘下的子目录.<br />
						dir /as 查看系统file<br />
						dir c: /s > c:\ziliao.txt 创建一个存储情况的file.<br />
						dir /a:r-h or dir /ar-h 只显示非隐藏的只读file.<br />
						dir /o:e-s or dir /oe-s 按扩展名排序,再按从大到小排.<br />
						还可当搜索用:<br />
						dir c:\windows\*.txt /s<br />
						dir c:\windows\t*.* /s<br />
						dir /a:-dr 搜索所有只读file.
					</li>
					<li>
						<span class="tit">cd [[/d] [drive:][Path] [..]] [[/d] [drive:][Path] [..]]<span class="textright">改变当前目录</span></span>
						/d 作用是快速改变当前目录.<br />
						Example: cd e:\backup\msdos\users e: 就到了e盘的这个目录,需要两步才OK, 我们可以直接这样做: cd /d e:\backup\msdos\users<br />
						cmd e:off 关闭命令扩展
					</li>
					<li>
						<span class="tit">deltree [/y] [drive:]Path [[dirve:]Path[...]]<span class="textright">删除目录树</span></span>
						/y 确定想要删除的该目录的所有子目录.<br />
						Example: deltree c:\moto
					</li>
					<li>
						<span class="tit">Path [[%Path%] [drive:]Path[;...]]<span class="textright">设置搜索路径</span></span>
						; 分隔命令路径中的目录.<br />
						%Path% 指定系统将命令路径添加到Path环境变量中列出的现有目录集中.<br />
						Path c:\user\taxes;b:\user\invest;b:\bin 这个命令指定系统可以搜索这3个目录以查找外部命令.
					</li>
					<li>
						<span class="tit">ren [drive:][Path] filename1 filename2<span class="textright">重命名</span></span>
						filename1 指定要重命名的file or folder.<br />
					Example: ren d:\program files\ttplayer ttplayer2 为ttplayer folder重命名.<br />
					ren "my documents" "my documents1"<br />
					新file名前不能加盘符和路径!<br />
					ren c:\work\r*.* document.* 不明白什么意思...
					</li>
					<li>
						<span class="tit">copy [/d][/v][/n][{y|/-y}][{a|/b}] Source [{/a|/b}] [+Source [{{/a|/b}] [+..]] [Destination [{/a|/b}]] 简单格式: copy [源目录或file] [目的目录或file]<span class="textright">copy 复制file</span></span>
						/d 允许将复制的加密file在目标处作为解密file保存.<br />
						/v 验证是否正确写入新file.<br />
						/n 使用短file名.<br />
						/y 禁止提示确认要覆盖.<br />
						/-y 提示覆盖.<br />
						/z 在重启模式copy 网络file.<br />
						/a 表明ASCII file.<br />
						/b 表明二时制file.<br />
						Example: copy folder1 folder2<br />
						copy c:\down e:\soft<br />
						在c:\windows\driver cache\i386 (windows 2000: c:\winnt\driver cache\i386) folder 下会自动建立一个driver.cab file. 它里面打包了windows下所有的通用驱动程序. 因此在重装系统之前备份driver.cab 至关重要.<br />
						copy c:\windows\driver cache\i386\driver.cab f:\backup<br />
						copy a:\*.com c:\system<br />
						copy one.txt+two.txt report 把当前目录中的one.txt 与 two.txt合并将结果保存在report中.<br />
						copy *.txt+*.ref files.doc 将所有.txt的合并,再将所有.ref的合并,最后将结果存在files.doc中.<br />
						copy /b 1.mpg+2.mpg+3.mpg 4.mpg 将下载的几个小电影合成大电影.<br />
						copy a.jpg/b+1.txt/a b.jpg 还可以这样玩,哈哈.
						解除CMOS密码:<br />
						系统自检完毕按F8,选择"Safe mode command prompt only"(命令安全模式) 后在dos提示符下输入:<br />
						copy con yk.com 回车后在编辑环境里输入:<br />
						alt+179 alt+55 alt+136 alt+216 alt+230 alt+112 alt+176 alt+32 alt+230 alt+113 alt+254 alt+195 alt+128 alt+251 alt+64 alt+117 alt+241 alt+195后按F6保存. 保存退出后,直接运行yk.com , 屏幕上应该没有任何提示信息,然后重新启动即可清除CMOS里的密码, 当然 CMOS 里的其他设置也同时被清除,要重新设置一次. 这一招在2003系统下实验不成功,不知道是不是只能在win2000与winxp下使用,实验了公布结果.<br />
					</li>
					<li>
						<span class="tit">move [{/y|/-y}] [Source] [target]<span class="textright">move 移动</span></span>
						/y 禁止提示确认信息 /-y相反.<br />
						move A:\*.sys c:\system 把A盘所有扩展名为.sys的file移动到c:\system目录下.<br />
						move c:\work\mulu.doc e:\report.doc 将mulu.doc移动e盘并重命名为report.doc
					</li>
					<li>
						<span class="tit">del [drive:][Path] filename [..][/p][/f][/s][/q][/a[:attributes]] <span class="textright">delete 删除</span></span>
						filename 可用空格分号分开以删除多个file.<br />
						/p 提示确认是否删除指定file, del最常用的一个参数.<br />
						/f 强制删除只读file.<br />
						/s 相当于 rmdir /s 可删除目录及子目录下的所有目录和file.<br />
						/q 静音,取消系统确认.<br />
						/a 根据指定的属性删除file.<br />
						如:/a-r /a-h /a-s /a-a or /ar /ah /as /aa<br />
						Example: del "my music"\*.mp3 删除my music中扩展名为mp3的file.
					</li>
					<li>
						<span class="tit">type [drive:][Path] filename<span class="textright">显示text内容</span></span>
						[drive:][path] filename 指定一个或多个file name, 用空格分开.<br />
						type c:\work\mulu.txt | more
					</li>
					<li>查看簇大小chkdsk
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

11:45 AM 09/20/2008 Sat 
-->
	</body>
</html>
