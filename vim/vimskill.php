<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Kinglon yang's homepage,vim,vim技巧,超强技巧,值得一看,可发邮件与我交流vim相关问题." />
		<meta name="keywords" content="Kinglon yang's homepage,vim,vim技巧,vim bug" />
		<meta name="author" content="Kinglon Yang" />
		<meta name="generator" content="VIM7.0" />
		<title>VIM skill | VIM 技巧</title>
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
				<li><a href="../network" title="Network">Network </a></li>
				<li><a href="../php" title="PHP">PHP </a></li>
				<li><a href="../javascript" title="JavaScript">JavaScript </a></li>
				<li><a href="../vim" title="VIM" id="current">VIM </a></li>
				<li><a href="../iphone" title="iPhone">iPhone </a></li>
				<li><a href="../aboutme.php" title="About me">About me 关于我 </a></li>
			</ul>
		</div>

		<div id="layout">
			<div id="leftmain">
				<ul>
					<li id="firstname">快速通道</li>
					<li><a href="vimnote.php" title="VIM note">VIM 笔记</a></li>
					<li><a href="vimskill.php" title="VIM skill">VIM 技巧</a></li>
					<li><a href="vimques.php" title="VIM questiones">VIM 问题</a></li>
					<li><a href="vimscript.php" title="VIM Script">VIM 脚本</a></li>
					<li><a href="vimres.php" title="VIM resource">VIM 资源链接</a></li>
				</ul>
			</div>

			<div id="rightmain">
				<ol>
					<li>把当前文本转换为HTML格式的一个命令,比较有用的.<br />
					:source $VIMRUNTIME/syntax/2html.vim</li>
					<li>如果要从一个文件中复制出好几个独立的文本到另一个文件中，这时使用寄存器就是最好的选择.寄存器是Vim用来存放文本的地方，只有从a到z这26个字母可用作寄存器的名字。来把一个句子复制到名为f的寄存器上<span class="red">"fyas</span> yas 命令象前面一样复制一个句子，告诉Vim把复制的内容放在寄存器 f 中的部分是<span class="red">"f</span>. 如：<br />
					<span class="red">"n3y</span> 表示复制3行到寄存器 n 中.<br />
					<span class="red">vww"by</span> 复制一个文本块到 b 中，注意指定寄存器的部分 "b 必须紧挨在 y 命令的前面.<br />
					删除内容时也可以指定一个寄存器名,这种办法可以用来移动多处的text. 如删一个 word 并把它保存到名为 w 的寄存器中: <span class="red">"wdaw</span> </li>
					<li><span class="red">/\&lt;the\&gt;</span> 这个命令会匹配the的开始处与结束处. <span class="red">g*</span> <span class="red">g#</span> 命令用来同进匹配那些包含在其它word中的字串.</li>
					<li>如果想要查找ctr.这个词可以这样输入查找命令<span class="red">/ctr\.</span> .</li>
					<li>vimrc 的示例文件位置: <span class="red">$VIMRUNTIME/vimrc_example.vim</span> </li>
					<li>vim全局plugin文件位置: <span class="red">$VIMRUNTIME/macros</span> 以及它的了目录.</li>
					<li>vim文件类型的plugin文件位置: <span class="red">$VIMRUNTIME/ftplugin</span> 目录下则是专用于特定文件类型的plugin.</li>
					<li>使用这个命令开始对文件类型的应用 <span class="red">:filetype plugin on</span> </li>
					<li><span class="red">:set autocmd FileType text setlocal textwidth=78</span> 这让Vim可以自动断行,触发点是当前行已超过78个字符. 但只对普通文本的文件生效. <span class="red">autocmd FileType text</span> 是一个自动命令. 它所定义的是每当文件类型被设置为 text 时就自动执行它后面的命令.</li>
					<li>万一把一个选项值改到不可收拾的境地,可在选项后放一个 <span class="red">&</span> 符号使它恢复其默认值,如: <span class="red">:set iskeyword&</span> </li>
					<li><span class="red">:help</span> 命令会带你到帮助文件的起点. 这里面用两个小栅栏围了起来的的如|help|,表明此外是一个超链接,把光标置于两个小栅栏之间的任何位置然后按下 <span class="red">CTRL-]</span> 便可跳转到这个标签中. 几次跳转之后可能想回到原来的某个地方, <span class="red">CTRL-T</span> (弹出标签)可以回到前一个位置, <span class="red">CTRL-O</span> 也可以.</li>
					<li><span class="red">:help {subject}</span> 查看关于某个特殊主题的帮助. <span class="red">:help x</span> 查看关于 <span class="red">x</span> 命令的帮助. <span class="red">:help deleting</span> 查找关于如何删除内容的帮助. <span class="red">:help index</span> 得到所有Vim命令的索引. <span class="red">:help CTRL-A</span> 查看某个控制字符的帮助(比如:CTRL-A) 前辍"CTRL-"来代表控制键. 默认情况下显示的是Normal模式下的某个命令的帮助,要查找其他模式下的帮助,可使用一个前辍. 如果想要查看的是Insert模式下的某个命令的帮助,使用"<span class="red">i_</span>" 前辍,对于CTRL-H来说是这样: <span class="red">:help i_CTRL-h </span> 
					<br /><span class="red">:help -t</span> 查看Vim启动时 <span class="red">-t</span> 参数的功能. <span class="red">:help 'number'</span> 查看'number'选项的帮助命令. <span class="red">:help help-context</span> 可查看各种模式使用哪些前辍. <span class="red">:help i_&lt;up&gt;</span> 查看特殊键上箭头在Insert模式下的功能帮助. 可把一个错误ID号作为一个帮助主题来得到进一步的信息: <span class="red">:help E37</span> 
					</li>
					<li>gVim 中, 选择块的命令不是 <span class="red">CTRL-V</span> 可以用 <span class="red">CTRL-Q</span> 代替此命令. </li>
					<li>在win下这样来编辑vimrc file:<span class="red"> vim $vim\_vimrc</span></li>
					<li>
					这样设置 vimrc 的编码<br /><span class="red">
					set fileencoding=utf-8 <br />
					set fileencodings=utf-8,ucs-bom,gbk,cp936,gb18030,gb2312,utf-16,big5
					</span>
					</li>
					<li></li>
					<li></li>
					<li></li>
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
-->
	</body>
</html>
