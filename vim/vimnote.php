<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Kinglon yang's homepage,vim,我的vim笔记,超多,详细记录了我学vim的过程,值得大家一看." />
		<meta name="keywords" content="Kinglon yang's homepage,vim,vim 笔记, vim学习过程,vim技巧,vim编辑器" />
		<meta name="author" content="Kinglon Yang" />
		<meta name="generator" content="VIM7.0" />
		<title>VIM note | VIM 笔记 | VIM 学习过程</title>
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
					<li>以匹配一个括号为目的的移动，使用命令 <span class="red">% </span>就太方便了. 这对方括号[]和花括号{}同样适用，具体可以处理哪些括号可以由<span class="red">'matchpairs'</span>选项来定义.</li>
					<li>在命令<span class="red">%</span>之前指定一个命令计数，比如“90%”将会把光标定位到近文件尾的地方.</li>
					<li><span class="red">H</span> 移动到当前屏幕的上面. H 意为Home.</li>
					<li><span class="red">M</span> 移动到当前屏幕的中面. M 意为Middle.</li>
					<li><span class="red">L</span> 移动到当前屏幕的下面. L 意为Last.</li>
					<li><span class="red">CTRL-U</span> 命令会使窗口向上滚动半屏. <span class="red">CTRL-D</span> 命令会使窗口向下滚动半屏. <span class="red">CTRL-E</span> 窗口向下滚动一行. <span class="red">CTRL-Y</span> 窗口向上滚动一行(在win系统下的gVim中这个命令不可以用). <span class="red">CTRL-F</span> 向前一屏. <span class="red">CTRL-B</span> 向后一屏.</li>
					<li><span class="red">zz</span> 命令会把当前行置为屏幕中央. <span class="red">zt</span> 命令会把当前行置于屏幕顶端. <span class="red">zb</span> 命令会把当前行置于屏幕底端.</li>
					<li><span class="red">/string</span> 命令用于搜索一个字符串. 比如要找到单词 "include" 使用命令: <span class="red">/include</span>. <span class="red">n</span> 命令会查找下一个,n 前面可用一个命令计数. <span class="red">?</span> 命令与 <span class="red">/</span> 的工作相同,只是搜索方向相向. <span class="red">N</span> 命令是查找下一个,不过方向与 <span class="red">n</span> 相反.</li>
					<li>如果并不关心目标字符中字母的大小写,可以通过设置 <span class="red">'ignorecase'</span> 选项: <span class="red">:set ignorecase</span>. 要回到大小写的精确匹配可以重设: <span class="red">:set noignorecase</span>.</li>
					<li>
假设你在当前文件中有一个word是"TheLongFunctionName", 你想查
找它的下一次出现在哪. 当然可以用"/TheLongFunctionName", 但这要
敲太多次键盘. 万一哪个字符敲错了Vim就找不到你真正想要的东西.
有一个便捷的方法: 把光标定位于这个word上, 然后按下"<span class="red">*</span>"键.
Vim将会取当前光标所在的word并将它作用目标字符串进行搜索.<br />
"<span class="red">#</span>"命令是"<span class="red">*</span>"的反向版. 还可以在这两个命令前加一个命令计数:"<span class="red">3*</span>"查
找当前光标下的word的第三次出现.
					</li>

					<li><span class="red">:set hlsearch</span> 高亮显示所有的匹配. 看得眼花时可这样关闭此功能: <span class="red">:set nohlsearch</span> ,不过这样下次搜索时再次使用这一功能就又得打开它, 去掉当前的高亮显示用这个命令: <span class="red">:nohlsearch</span> 这不会重置 <span class="red">hlsearch</span> 选项的值, 只是暂时关闭该语法高亮显示.</li>

					<li><span class="red">:set incsearch</span> 这使得你在键入目标字符串的过程中Vim就同时开始了搜索工作. 使用这
种方法可以让你在尚未完全键入字串时就能找到目标. 你可以选择按回车
跳转到当前匹配到的位置或者键入字串的其它部分继续搜索.</li>
					<li><span class="red">:set nowrapscan</span> 
该设置会使搜索过程在文件结束时就停止. 或者, 在你反向搜索时在到达
文件开头时停止. wrapscan选项的默认值是开, 这样搜索在达到文件的
头尾时都会绕向另一个方向继续进行.
					
					</li>
					<li><span class="red">^</span>字符匹配一行的开头. <span class="red">$</span> 字符匹配一行的未尾. <span class="red">.</span> 匹配任何字符.</li>
					<li><span class="red">/the$</span> 匹配的结果是一行中末尾是the的word. <span class="red">/^the</span> 匹配的结果是一行中开始是the的word. <span class="red">/^the$</span> 只能匹配到一行中仅有the的word. <span class="red">/c.m</span> 匹配如:com cam cum等等word.</li>
					<li><span class="red">``</span> 命令跳回到刚才的出发点. 再次使用这个命令就又跳回来了,这是因为<span class="red">`</span> 本身也是一个跳转命令.  <span class="red">`0</span> 跳转到上次离开该 file 的位置.
更一般地说, 只要你执行一个命令使光标定位于当前行之外的某行上
去, 这都叫一个跳转. 包括"/"和"n"这些搜索命令(不管被找到的东西离
当前位置有多远). 但是字符搜索命令"fx"和"tx", 或者是以word为单位
的移动光标位置的命令"w"和"e"不叫跳转.
同时, "j"和"k"命令并不被视为一个跳转, 即使你在它们之前加了命
令计数让当前光标跳到老远的地方也是如此.
					</li>
					<li><span class="red">CTRL-O</span> 命令是跳转到你更早些时间停置光标的位置. <span class="red">CTRL-I</span> (与Tab键一样) 则是跳回到光标前面停放的位置(与<span class="red">CTRL-O</span> 相反). <span class="red">:jumps</span> 命令会列出关于你曾经跳转过的位置的列表.</li>
					<li><span class="red">ma</span> 命令将当前光标下的位置定为标记 "a". 要跳转到一个你定义过的标记,使用命令 <span class="red">`{mark}</span> ,{mark} 就是你定义的标记的名字,如: <span class="red">`a</span> . <span class="red">'mark</span> 会跳转到mark所在行的行首.</li>
					<li><span class="red">:marks</span> 查看关于标记的列表. <span class="red">`</span> 进行此次跳转之前的起跳点, <span class="red">"</span> 上次编辑该文件时光标最后停留的位置, <span class="red">[</span> 最后一次修改的起始位置, <span class="red">]</span> 最后一次修改的结束位置.</li>
					<li><span class="red">D</span> 与 <span class="red">d$</span> 相等, 删除当前光标到行尾的内容. <span class="red">C</span> 与 <span class="red">c$</span> 相等, 修改到行尾的内容. <span class="red">S</span> 与 <span class="red">cc</span> 相等, 修改一整行. </li>
					<li><span class="red">.</span> 重复上一次的命令.</li>
					<li><span class="red">y</span> 复制命令, 后面可以加一个位移命令,如: <span class="red">yw</span> 来复制一个word. 或是 <span class="red">y2w</span> 来复制两个word. 当然也可用寄存器复制,如: <span class="red">"ayw</span> 复制一个word到寄存器 a .</li>
					<li><span class="red">"*y+位移命令</span> 复制内容到剪切板, 在其他地方可用 ctrl-v 粘贴. <span class="red">"*p</span> 粘贴剪切板里的内容. 这些功能只有当Vim支持剪贴操作时才可用.</li>
					<li><span class="red">aw</span> 为一个文本对象, 可用 <span class="red">daw</span> 删除一个word. <span class="red">as</span> 与 <span class="red">is</span> 都表示为一个句子,区别是 <span class="red">as</span> 包含后面的空格,而 <span class="red">is</span> 不包含后面的空格.</li>
					<li><span class="red">~</span> 改变当前光标下字符的大小写,不是操作符命令,不可与位移命令一块使用.但可在Visual模式下改变所有被选中的文本的大小写.</li>
					<li>关闭 <span class="red">compatible</span> 选项, 使Vim在增强模式下(<span class="red">:set nocompatible</span> ).</li>
					<li><span class="red">:set backspace=indent,eol,start</span> 这条命令告诉Vim在Insert模式下退格键何进可以删除光标之前的字符. 选项中分别告诉Vim可以删除位于行首的空格,断行,以及开始进入Insert模式之前的位置.</li>
					<li><span class="red">:set autoindent</span> 开始新行时施以上一行的缩进方式.</li>
					<li><span class="red">:set history=50</span> 设置冒号命令和搜索命令的历史列表长度.</li>
					<li>一个 <span class="red">映射</span> 可以把一连串的命令以一个按键来表示. 如我们想把很多词加上一个花括号{},可以使用 <span class="red">:map</span> 命令,<br /><span class="red">:map \c i{&lt;Esc&gt;ea}&lt;Esc&gt;</span>       <span class="red">:map</span>  命令(不带参数)会列出当前已定义的映射.</li>
					<li><span class="red">:options</span> 命令会打开一个新窗口,在窗口开头的注释下面是一个选项列表,每个选项有一个对应的简短说明,这些选项根据主题分组,把光标移动到你想了解的主题词上<span class="red">按下回车</span> 键就可以跳转到对该主题的详细解释,再按下 <span class="red">CTRL-O</span> 就又会回到该选项列表.<br />
					还可以在此改变每个选项的设置,移动光标到 <span class="red">set wrap   nowrap</span> 这一行,然后按下<span class="red">回车</span>  键,该行的内容会变为: <span class="red">set nowrap  wrap</span> , 对于一个以数字或字符串为目标值的选项,直接改数字或字串就OK.
					</li>
					<li>控制光标离窗口上下边界的最小行距为几行的命令选项是: <span class="red">:set scrolloff=2</span> 意思是光标离上下边界2行时窗口滚动.</li>
					<li>控制长行是否折到下一行显示的命令是: <span class="red">:set nowrap</span> </li>
					<li>屏幕左右滚动时,要想查看左右10个字符的上下文用这个命令: <span class="red">:set sidescroll=10</span> </li>
					<li>光标移动到行首或是行尾时会停止不动, <span class="red">whichwrap</span> 选项用来控制移动光标的行为规则. <span class="red">:set whichwrap=b,s</span> 表示光标在行首时按退格键(backspace)会往回移动到上一行的行尾,同时在行尾按空格键也会移动到下一行的行首. 让左右键头在遇到边界时也能智能地上上下下,使用命令: <span class="red">:set whichwrap=b,s,<,></span> ,让左右键头在Insert模式下也能如此:  <span class="red">:set whichwrap=b,s,<,>,[,]</span> , 还有几个标志可用于该选项,可查看 <span class="red">whichwrap</span> 选项,这样查看: <span class="red">help 'whichwrap'</span> </li>
					<li>查看制表符命令(查看当前行的制表符): <span class="red">:list</span> 
					要让这些制表符成为可见的字符: <span class="red">:set list</span> 但是这样看起来会很累,如果终端支持彩色显示,Vim可把制表符和空白字符高亮起来显示,这要配合 <span class="red">listchars</span> 选项: <span class="red">:set listchars=tab:>-,trail:-</span>  现在每个制表符会以 ">---"显示,行尾空格以 "-"显示,这样看起来会好点.
					</li>
					<li><span class="red">iskeyword</span> 
					选项定义了一个word中可以包含哪些字符,<span class="red">iskeyword=@,48-57,_,192-255 ></span> "@"代指所有的字母,"48-57"指ASCII码从48到57的那些字符,即0到9. "192-255"是可打印拉丁字母. 如果想把连字符也视为word的一部分,像这样w命令就会把"upper-case"看作是一个word了: <span class="red">:set iskeyword+=-</span> 要把一个字符清理出去用: <span class="red">:set iskeyword-+_</span> ,这样逗号就被移走了.
					</li>
					<li>
					<span class="red">:syntax enable</span> 打开彩色功能.如果没有彩色,有可能是Vim不能识别此文件的文件类型,可以用: <span class="red">:set filety;e=fortran</span> 手工指定该文件的文件类型. 有哪些文件类型可用,可查看 <span class="red">$VIMRUNTIME/syntax</span> 目录. 自己写一个语法高亮文件请参考 <span class="red">mysyntaxfile</span> 
					</li>
					<li>设置 <span class="red">background</span> 
						选项来改变对比度. 使用暗色: <span class="red">:set background=dark</span> 或者使用亮色背景: <span class="red">:set background=light</span> ,可在重新设置了 <span class="red">background</span> 选项后用 <span class="red">:syntax reset</span> 来让Vim重新设置默认颜色.
					</li>
					<li>使用另一种颜色方案: <span class="red">:colorscheme evening </span> "evening"是颜色方案的名字,除此之外还有其它几种颜色方案,可查看 <span class="red">$VIMRUNTIME/colors</span> 目录.</li>
					<li>
					自己写一个颜色方案可这样做,先找一个相近的颜色方案,然后copy到自己的Vim目录下,接下来编辑该文件就OK了. 关于该文件的一些简单说明: 
					<span class="red">term</span> 黑白终端的显示属性
					<span class="red">cterm</span> 彩色终端的显示属性
					<span class="red">ctermfg</span> 彩色终端的前景色
					<span class="red">ctermbg</span> 彩色终端的背景色
					<span class="red">gui</span> GUI的显示属性
					<span class="red">guifg</span> GUI的前景色
					<span class="red">guibg</span> GUI的背景色.<br />
					比如让注释变为绿色可以这样写: <span class="red">:highlight Comment ctermfg=green guifg=green</span> 
					</li>
					<li>
					 <span class="red">:syntax clear</span> 暂时关闭语法高亮. <span class="red"> :syntax off </span>彻底停用语法高亮,并立即对各个缓冲区生效. <span class="red">:syntax manual </span> 只对某个文件施以语法高亮. 设置 <span class="red">syntax </span> 选项,为所有缓冲区打开语法高亮功能: <span class="red">:set syntax=on</span> 
					</li>
					<li>
					在windows版本的Vim中可用 <span class="red">:hardcopy </span> 命令打印当前的文件. 要打印部分行可以使用Visual模式选择被打印行,然后使用: <span class="red">:hardcopy</span> 
					</li>
					<li>
					<span class="red">:wnext</span> 保存并编辑下一个文件.
					移动到下一个文件: <span class="red">:next</span> ,回到前一个文件: <span class="red">:previous</span> .
					到最后一个文件: <span class="red">:last</span> ,到第一个文件: <span class="red">:first</span> 
					</li>
					<li>
					查看整个列表中有哪些文件: <span class="red">:args</span> .
					不用重新启动Vim,重新定义一个新的文件列表: <span class="red">:args five.c six.c seven.h</span> 
					</li>
					<li>
					<span class="red">`"</span> 这个标记带你回到上次你离开该文件时光标所在的位置.   <span class="red">`.</span> 会带你回到最后一次修改该文件的位置.
					</li>
					<li>
					想让Vim在需要时自动存盘,不必过问你时可用这个命令: <span class="red">:set autowrite</span> , 这样关闭此功能: <span class="red">:set noautowrite</span> 
					</li>
					<li>使用大写的标记可以在不同的文件中跳来跳去,如: <span class="red">mF</span> 然后到另一个文件里用命令: <span class="red">`F</span> 就可以回到刚才定义的 <span class="red">F</span> 标记处. 如果使用小写的标记只能在当前文件下有效. 如果想知道某个标记所代表的位置是什么,可以这样查: <span class="red">:marks M</span> , 也可以连续跟上几个参数: <span class="red">:marks MCP</span> </li>
					<li>
					<span class="red">:set backup</span> 便可以生成备份. <span class="red">:set backupext=.bak</span> 可重新指定后辍名.
					</li>
					<li>
					让Vim保存原始文件,可以给设置: <span class="red">:set patchmode=.orig</span> 选项, 这样就会生存一个file.orig file, 如果 <span class="red">patchmode </span> 选项是空的话就不会生成原始file.
					</li>
					<li><span class="red">:write >> logfile </span> 把当前 file 的内容追加到 file "logfile" 中. 可先在 Visual 模式下选定要写入的内容,然后再使用此命令.</li>
					<li><span class="red">vim -R file</span> 以只读方式运行Vim. 此时还是可以用 <span class="red">!</span> 强制保存的. 如果想强制性的避免对 file 进行修改,可以用命令: <span class="red">vim -M file</span> ,这时就不可以修改了, 不过我们还是有办法用命令去掉这层保护: <span class="red">:set modifiable , :set write </span> </li>
					<li>
					<span class="red">:saveas</span> 可以另存一个 file , 然后再使用: <span class="red">:write</span> 就可以保存为 saveas 的内容.
					</li>
					<li>
					<span class="red">:split</span> 打开一个新窗口. <span class="red">CTRL-W w</span> 命令可切换窗口. <span class="red">:close = CTRL-W CTRL-C</span> 关闭当前窗口. <span class="red">:only</span> 关闭除当前窗口外的所有窗口.<br />
<span class="red">CTRL-W S or CTRL-W v or CTRL-W n</span> 都是新建窗口的命令. <br />
<span class="red">:split two.c</span> 可以为 two.c file 打一个新窗口. 打开一个新窗口并开始编辑一个空的缓冲区,命令是: <span class="red">:new</span> <br />
					<span class="red">:split</span> 命令前可接受一个参数,前面的参数将会指定新窗口的高度,如打开一个高度为8行的新窗口并编辑 alpha.c file: <span class="red">:8split alpha.c</span> , 增加窗口高度: <span class="red">CTRL-W +</span> , 减小高度: <span class="red">CTRL-W -</span> , 让窗口最大高度: <span class="red">CTRL-W _</span> . <span class="red">zNO.</span> 让窗口的高度为NO. <span class="red">CTRL-W < </span> 使窗口的宽度减N. <span class="red">CTRL-W < </span> 使窗口的高度加N.
					</li>
					<li>
					<span class="red">winheight</span> 选项设置一个期望的最小窗口高度. <span class="red">winminheight</span> 选项设置一个强制的最小高度. <span class="red">winwidth</span> 和 <span class="red">winminwidth</span> 分别用于期望的最小宽度和强制的最小窗口宽度.
					</li>
					<li>
					<span class="red">:split</span> 命令创建的新窗口位于当前窗口之上,要让新窗口出现在当前窗口的左边可以用命令: <span class="red">:vsplit</span> 或: <span class="red">:vsplit two.c</span> 
					同样有一个 <span class="red">:vnew</span> 命令. <span class="red">:vertical</span> 可以出现在任何分隔窗口的命令前面.
					</li>
					<li>
					<span class="red">CTRL-W h</span> 到左边的窗口
					<span class="red">CTRL-W j</span> 到下面的窗口
					<span class="red">CTRL-W k</span> 到上面的窗口
					<span class="red">CTRL-W l</span> 到右边的窗口
					<span class="red">CTRL-W t</span> 到顶部窗口
					<span class="red">CTRL-W b</span> 到底部窗口
					</li>
					<li>
					<span class="red">CTRL-W H</span> 到左移动窗口
					<span class="red">CTRL-W J</span> 到下移动窗口
					<span class="red">CTRL-W K</span> 到上移动窗口
					<span class="red">CTRL-W L</span> 到右移动窗口
					</li>
					<li><span class="red">:qall</span> 退出所有的窗口.如果没有保存将不会被退出,可使用 <span class="red">:write</span> 来保存修改,或是用 <span class="red">:quit!</span> 来放弃改动. 或是自己知道有改动,并且想保存,可以使用命令 <span class="red">:wall</span> ,还有它们两个命令的组合 <span class="red">:wqall</span> 
					</li>
					<li> <span class="red">-o</span> 选项可以让 Vim 为每一个file 打开一个窗口. 如:  <span class="red">vim -o one.txt two.txt three.txt</span> . <span class="red">-O</span> 选项使每个窗口都垂直排列.
					</li>
					<li> 如果已经进入 Vim , <span class="red">:all</span> 命令会为行上指定的所有 file 各开一个窗口, <span class="red">:vertical all</span> 则让所有的窗口都垂直分隔.
					</li>
					<li>
					在shell中输入: <span class="red">vimdiff main.c~ main.c</span> Vim 将会打开左右两个垂直分隔的窗口, 可在这里面查看不同. 在 Vim 中这样查看不同 <span class="red">:vertical diffsplit file</span>  可用 <span class="red">zo</span> 来展开折叠, <span class="red">zc</span> 再把它折起. <span class="red">:set noscrollbind</span> 查看不同时 Vim 会保证两个file总是同行, 这个命令会让Vim不要同行移动. <span class="red">]c</span> 直接向前定位到下一个不同之处, <span class="red">[c</span> 定位到后面的一个不同行. 在对比中你可以修改 file , 这样做之后不同之处会增多或是减少, Vim 并不时时更新对应高亮显示, 命令: <span class="red">:diffupdate</span> 可在需要时重新比较两个 file. 把光标放在左边比右边多出一行的窗口上,命令: <span class="red">dp</span> , 两个 file 的不同被消除了, 当前窗口中引起不同的内容被放到另一个窗口中去了. 或是在右边把光标放到 changed 插入位置,命令: <span class="red">do</span> , 现在 file 也相同了, Vim 从对应位置取来了差异的内容.
					</li>
					<li> <span class="red">laststatus</span> 选项用于指定状态行,0 1 2.
					</li>
					<li><span class="red">CTRL-W CTRL-^</span> 分隔出一个新窗口来编辑前一个file.
					</li>
					<li><span class="red">splitbelow</span> 选项控制新开的窗口出现在当前窗口的下面. <span class="red">splitright</span> 相应的使垂直窗口出现在当前窗口的右边.
					</li>
					a, 使用 <span class="red">q{register}</span> 命令开始,后续的动作将被记录进名为 <span class="red">{register}</span> 的寄存器中. b, 执行你要执行的操作. c, 按下 <span class="red">q</span> 以结束对命令的记录. OK, 现在可以通过 <span class="red">@{recording}</span> 命令来执行刚刚记录下来的记录宏了. 如果已经执行过 <span class="red">@a</span> 命令,下次重复执行只需要按下 <span class="red">@@</span> 即可.
					<li>
					用于命令记录的寄存器与用于 yank 和删除命令的寄存器是同一个东西. 如果有命令记录错了,可以先这样 <span class="red">"ap</span> 把命令置于该行,然后修改错误的部分, 在行首 <span class="red">"ay$</span> 把正确的结果存回在寄存器中. 然后 <span class="red">dd</span> 删除这行. <span class="red">qC</span> 命令开始,可以追加命令进寄存器中. 这种方式对一般的 yank 和删除操作一样有效.
					</li>
					<li>
					<span class="red">:[range]substitute/from/to/[flags]</span> 替换. <span class="red">%</span> 可以作用于所有的行上. 默认情况下 <span class="red">:substitute</span> 只会替换一行中第一次被发现的目标字符串. 要匹配一行中所有的字符串可以命令后加 <span class="red">g</span> 标志. <span class="red">p</span> 列印标志,会列出每个被它改变的行. <span class="red">c</span> 确认标志,要求用户在每个替换前确认. <span class="red">e</span> 标志,告诉 Vim 就算没有找到一个匹配也不要报错. <span class="red">:s/^the/these/</span> 可以像这样使用正则表达式来匹配一行行首的 the. <span class="red">:s+one/two+one or two+</span> 也可以这样替换含有/的字符.
					</li>
					<li>很多使用 <span class="red">:</span> 的命令都可以指定一个作用范围. 可以这样以两个数字表示行号: <span class="red">:1,5s/this/that/g</span> 该命令将对第1行到第5行的text执行替换操作. <span class="red">:23s/good/better/</span> 将只作用在指定的23行上. <span class="red">:write</span> 命令在不指定作用范围时将对整个 file 生效, 下面的命令可以把当前行写入指定 file: <span class="red">:.write otherfile</span> . 第1行行号是1, <span class="red">$</span> 代表最后一行. <span class="red">:.,$s/yes/no/</span> 替换当前行到最后一行中所有的 yes 为 no. 当然还可以使用搜索来指定作用范围,如 <span class="red">?^abcde?,/edcba$/s=grey=gray=g</span> . 也可以这样往上移一行,或是往下移两行 <span class="red">/^abcde/-1</span> , <span class="red">/edcba$/+2</span> ,或是这样 <span class="red">.+3,$-5</span> . 当然也可以使用标记  <span class="red">:'a,'b</span> . 当然也可在 Visual 模式下选定text. 然后再执行 <span class="red">:</span> 命令. <span class="red">`< </span> 与 <span class="red">`> </span> 其实是两个标记,分别代表一个 Visual 选择区域的开始和结束. 还可以这样 <span class="red">:'>,$ </span> . 如果已经知道要使命令作用于几行之上,可以直接按下这个数字, 然后按 <span class="red">:</span> , 比如按下 <span class="red">5:</span> , 你会看到 <span class="red">:.,.+4</span> ,这个作用范围是 <span class="red">.</span> (当前行), 到 <span class="red">.+4</span> (自当前行到向下4行) 所以一共是5行.
					</li>
					<li> <span class="red">:[range]global/{pattern}/{command}</span> 全局命令, <span class="red">:global</span> 命令是 Vim 最强大的功能之一.
					</li>
					<li><span class="red">:g+//+s/foobar/barfoo/g</span> 把所有注释中的 foobar 替换为 barfoo . 注释将以 // 开始. 默认作用范围是整个 file.
					</li>
					<li> <span class="red"> ></span> 命令会使 text 向右移动一个 shift 单位.可以这样用 <span class="red"> >> </span> . <span class="red">4>> </span> 将增加4行的缩进量.  <span class="red"> < </span> 命令使 text 向左移动一个 shift 单位. shift长短由 <span class="red">shiftwidth</span> 选项指定.<span class="red"> :set shiftwidth=4</span> 
					<li><span class="red">CTRL-D</span> 在Insert模式下这个命令可以删除一个shift单位. <span class="red">CTRL-T</span> 在Insert模式下增加一个shift单位.
					</li>
					</li>
					<li><span class="red"> :read {filename}</span> 读入 filename 的内容并放到当前行的后面. <span class="red">:$r filename</span> 将会把 filename 的内容追加到当前 file 的最后. <span class="red">:0r filename</span> 会把 filename 的内容追加到当前 file 的第一行上面.
					</li>
					<li>写入 text 到指定 file, 使用命令 <span class="red">:write</span> , 默认作用于整个 file. <span class="red">:.,$write temp</span> 把当前行到 file 尾的内容写入 file temp中, 如果 temp 存在的话就会报错,以免被意外覆盖,如果确实要覆盖它,可在 <span class="red">:write</span> 后加一个 <span class="red">!</span> , 像这样 <span class="red">:.,$write! temp</span> . 也可以这样把当前行的内容追加到 file temp 中, <span class="red">:.write >> temp</span> 
					</li>
					<li><span class="red"> :set textwidth=72</span> 键入text的时候每行的内容自动调节到适应当前窗口的大小. <span class="red">gqap</span> 格式化一个 ap . ap 的分隔标志是一个空行. 也可以在第一行执行 <span class="red">gqG</span> 对整个 file 格式化.
					</li>
					<li> <span class="red">gU+位移令</span> 将字母全变变大写, <span class="red">gu</span> 变小写, <span class="red">g~</span> 大小写反过来. 要把一行全变大写可以像 dd 一样重复两次 <span class="red">gUgU</span> . 这时可以简写为: <span class="red">gUU</span> , <span class="red">guu</span> , 和 <span class="red">g~~</span> 
					</li>
					<li> 命令<span class="red"> !{motion}{program}</span> 以一块text 为对象将它们通过管道送至一个外部程序. 由{program}指定的程序接受由{motion}命令指定的text作为输入. 如: <span class="red">!5Gsort</span> 将1-5行的内容排序.
					</li>
					<li><span class="red">!!</span> 命令过滤当前行的内容, <span class="red">!!date</span> 会以 date 命令的输出来替换当行行的内容.
					</li>
					<li><span class="red">shell</span> 选项指定 Vim 用于运行过滤程序的shell. 
					</li>
					<li><span class="red">:read !ls</span> 这样来读取命令的输出, 读取当前目录下的内容.<span class="red">:0read !date -u</span> 可以指定一个范围来告诉 Vim 把命令输出放到哪里.
					</li>
					<li><span class="red">:write !wc</span> 统计字数命令.
					</li>
					<li><span class="red">vim -r help.txt</span> 恢复 help.txt file, 这时 Vim 会读取交换 file. 可以通过设置 <span class="red">updatetime</span> 和 <span class="red">updatecount</span> 来控制几秒不键入内容或是连续键入多少个字符之后自动同步一次. 如果正在编辑一个没有指定file名的file时死机了,可以通过一个空字符串来恢复: <span class="red">vim -r ""</span> . <span class="red">vim -r</span> 会列出所有找到的交换file.
					</li>
					<li> <span class="red">S-Left or C-Left</span> 向左一个word, <span class="red">S-Right or C-Right</span> 向右一个word, <span class="red">CTRL-B or Home</span> 到行首, <span class="red">CTRL-E or End</span> 到行尾. <span class="red">CTRL-W</span> 删除光标前的一个word. <span class="red">CTRL-U</span> 删除光标前的所有内容. 插入键Insert可以切换是插入字符还是改写两种编辑模式.
					</li>
					<li>在键入冒号命令或是搜索一个字串时,可按<span class="red"> CTRL-C or Esc</span> 放弃所有已键入的命令. <span class="red">CTRL-C = Esc</span> 
					</li>
					<li>可在<span class="red"> option-list</span> 查看选项名的完整缩写列表. <span class="red">CTRL-P = UP</span> 查看上一个命令或是上翻.
					</li>
					<li>有众多补全候选项时,可用<span class="red"> CTRL-D</span> 查看全部候选项.
					</li>
					<li><span class="red">:history</span> 查看所有的冒号历史记录.<span class="red"> :history /</span> 查看所有的搜索历史记录. <span class="red">CTRL-P = UP</span> p=previous, <span class="red">cTRL-N = Down</span> N=Next. 这个命令 <span class="red">q:</span> 打开命令行窗口,现在可以像编辑text一样编辑这些命令,编辑好之后按回车该命令就会被执行,并且关闭命令窗口.
					</li>
					<li>
					我们可以这样共享一个viminfo,<span class="red"> :wviminfo! ~/tmp/viminfo</span> , 然后在下一个 file 中读取 <span class="red">:rviminfo! ~/tmp/viminfo</span> 
					</li>
					<li>我们可以把目前的状态保存为一个会话,第二天可以据此恢复原样. 这样创建一个会话 file : <span class="red">:mksession vimbook.vim</span> . 恢复到此前的会话状态: <span class="red">:source vimbook.vim</span>. 如果想启动 Vim 时恢复某个会话, 命令: <span class="red">vim -S vimbook.vim</span>. 具体会话可恢复哪些东西要看 <span class="red">sessionoptions</span> 选项的设置.
					</li>
					<li>比如要恢复 Vim 窗口的大小可以这样 <span class="red">:set sessionoptions+=resize</span> 
					</li>
					<li>会话最显见的用途是工作于不同的项目中,假如把会话 file 都保存在 "~/.vim" 目录下, <span class="red">:wall</span> , <span class="red">:mksession! ~/.vim/secret.vim</span> 保存覆盖上一次的会话, <span class="red">:source ~/.vim/boring.vim</span> 切换到 boring 会话.
					</li>
					<li>在同时使用win与unix系统时,可以把 <span class="red">slash</span> 和 <span class="red">unix</span> 加到 <span class="red">sessionoptions</span> 选项中. <span class="red">:set sessionoptions+=unix,slash</span> 
					</li>
					<li>会话包括很多信息,但是不包括标记,寄存器和命令历史记录.要用这些东西还是得靠 <span class="red">viminfo</span> . 我们这样来使用会话和viminof. <span class="red">mksession! ~/.vim/secret.vim</span> , <span class="red">:wviminfo! ~/.vim/secret.viminfo</span>  <br />
					恢复时这样, <span class="red">:source ~/.vim/socret.vim </span> , <span class="red">:rviminfo! ~/.vim/secret.viminfo</span> 
					</li>
					<li>保存当前的视图 <span class="red">:mkview</span> , 下次再编辑该 file 时可用 <span class="red">:loadview</span>  命令载入上次保存的视图. 还可以这样保存视图 <span class="red">mkview 1</span> , 这样来恢复<span class="red"> :loadview 1</span> . 用这种办法可以保存10个视图. 可以保存视图时指定一个 filename , 在编辑其他 file 时载入这个视图,会自动切换到该视图中指定的 file 里去, <span class="red"> :mkview ~/.vim/main.vim</span> , 这样恢复<span class="red"> :source ~/.vim/main.vim</span> .
					</li>
					<li>模式行可以方便我们编辑某个特殊file时不必每次都输入一些特别的选项,在file的前5行或是最后5行中加入这行就OK:<span class="red"> /* vim:set shifwidth=4: */</span>  .  这个选项 <span class="red">modelines</span> 用来控制 Vim 前后检查多少行来找出模式行. 可这样关闭这项功能 <span class="red">:set nomodeline</span> . 格式 <span class="red">any-text vim:set {option}={value} ...: any-text</span> 
					</li>
					<li>
					file 浏览器, <span class="red">:edit .</span> 在自动命令和 Vim 脚本的魔力下,显示的窗口中将是当前目录下的内容. <span class="red">o</span> 打开新窗口. <span class="red">O</span> 使用最近使用过的其他窗口. <span class="red">p</span> 同O,但光标定位于当前窗口中. <span class="red">i</span> 切换显示 file 的大小和日期/时间信息. <span class="red">s</span> 光标所在条目作为排序键进行排序.<span class="red"> r</span> 反向排序. <span class="red">R</span> 修改 file name. <span class="red">D</span> delete file.
					</li>
					<li>正在编辑一个 C 源程序, 其中有这样一行: #include "inits.h" 想知道 file "inits.h" 中的内容, 将光标置于该 file 上然后键入: <span class="red">gf</span> , Vim 就会查找并编辑该 file. 要在新窗口中打开file时,可以使用: <span class="red">CTRL-W f</span> 代替 <span class="red">gf</span> 命令.  Vim 会使用 <span class="red">path </span> 选项中定义的目录去查找它. 这个命令将目录加入搜索路径中去: <span class="red">:set path+=c:/prog/include</span> . <span class="red">isfname</span> 选项告诉 Vim 哪些字符可以作为 file name 的一部分. 如果已经知道 file name, 可以这样查找: <span class="red">:find inits.h</span> , 在新窗口中打开file时可用<span class="red"> :sfind</span> 命令替代 <span class="red">:find</span> 命令.
					</li>
					<li> 这个命令可以编辑一个位于是<span class="red"> path</span> 中的 file. <span class="red">vim "+find stdio.h"</span> 
					</li>
					<li>编辑另一个file,但是不希望保存现在的file, Vim对此的解决方案是: <span class="red">:hide edit two.txt</span> 这样隐藏当前的缓冲区. <span class="red">:buffers</span> 列出整个缓冲区列表. 编辑一个缓冲区 <span class="red">buffer 2</span> 2代表缓冲编号. <span class="red">sbuffer 3</span> 在新窗口中打开一个缓冲区.
					</li>
					<li><span class="red">:bnext</span> 跳转到下一个缓冲区, <span class="red">:bprevious</span> 跳转到前一个缓冲区, <span class="red">:bfirst</span> 跳转到第一个缓冲区, <span class="red">:blast</span> 跳转到最后一个缓冲区. 要把一个缓冲区从列表中去除, <span class="red">:bdelete 3</span> , 要彻底删除缓冲区使用<span class="red">:bwipe</span> <span class="red">:bw[ipeout][!] N1 N2 ...</span> 
					</li>
					<li><span class="red">fileformats</span> 可以告诉Vim自动识别格式的集合. 检测到的file 格式存在<span class="red">fileformat</span> 选项里. 强制指定file格式 <span class="red">:edit ++fileformat=unix file.txt</span> ,<span class="red"> ++</span> 字符串告诉 Vim 后面紧接着的是一个选项名. 并不是每个选项都有这种用法,目前只有 <span class="red">++ff</span> , <span class="red">++encoding</span> 可用. 可用 <span class="red">fileformat</span> 选项来转换file 格式.
					</li>
					<li><span class="red">vim -x exam.txt</span> 启动 Vim 时使用 <span class="red">-x</span> 参数, 为新编辑的 file 加密. Vim 会向你要一个密码加密/解密该file. 这样停止对一个file加密, 把 <span class="red">key</span> 选项设置为一个空字串: <span class="red">:set key=</span> 下次存盘此 file, 就不会进行加密了. 我们可以通过设置 <span class="red">key</span> 的值为file进行加密,不过这不是个好方法. <span class="red">:X</span> 它与 <span class="red">-x</span> 一样问你要一个密码.
					</li>
					<li><span class="red">-n</span> 启动 Vim 时使用这个参数可不使用交换file, 要不然我们为file加了密,可是交换file别人还是可以看到的.<br /><span class="red"> vim -x -n file.txt</span> 编辑加密file file.txt 时不使用交换file. 如果正在编辑过程中 <span class="red">:setlocal noswapfile</span> 这个命令禁用交换file.
					</li>
					<li>一个word有误,使用 <span class="red">CTRL-w</span> 删除一个word. 前面所有的word有误,使用 <span class="red">CTRL-U</span> 删除一行中前面所有的word.
					</li>
					<li><span class="red">:set showmatch</span> 在输入 ) 时可以看出来它与前面的哪个 ( 字符匹配. 当键入 ) 之后, Vim 会把光标移到前面的  ( 字符上,停留半秒钟,然后回到 ) 字符上. 具体等待时间的长短由 <span class="red">matchtime</span> 选项来控制.
					</li>
					<li>键入一个词的前面部分, <span class="red">CTRL-P</span> Vim 会据此补全整个词.<span class="red"> CTRL-N</span> 是 <span class="red">CTRL-P</span> 反向查找匹配的命令. 查找时设置了 <span class="red">ignorecase</span> 选项时,会在搜索匹配的word时忽略大小写. <span class="red">infercase</span> 使搜索匹配的word时忽略剩余部分的大小写.
					</li>
					<li><span class="red">CTRL-X CTRL-F</span> 补齐file name. <span class="red">CTRL-X CTRL-L</span> 补齐整行内容. <span class="red">CTRL-X CTRL-D</span> 宏定义. <span class="red">CTRL-X CTRL-I</span> 当前file和被当前file include的file. <span class="red">CTRL-X CTRL-K</span> 来自一个字典file的word. <span class="red">CTRL-X CTRL-T</span> 来自一个thesaurus的word. <span class="red">CTRL-X CTRL-]</span> tags. <span class="red">CTRL-X CTRL-V</span> Vim的命令行.
					</li>
					<li>这样重复录入, <span class="red">CTRL-A</span> 编辑器会插入上一次在Insert模式下录入的内容. <span class="red">i CTRL-A</span> 就可以了.<span class="red"> CTRL-@</span> 命令与<span class="red"> CTRL-A</span> 是一样的,不同的是插入之后会退出 Insert 模式.
					</li>
					<li><span class="red">CTRL-Y</span> 插入当前光标之上的一行中相同位置字符. <span class="red">CTRL-E</span> 与 <span class="red">CTRL-Y</span> 相似,不过它是插入当前行之下的那一行中同列字符.
					</li>
					<li><span class="red">CTRL-R {register}</span> 在当前位置插入指定寄存器的内容.
					</li>
					<li>缩写功能 <span class="red">:iabbrev  ad advertisement</span> 每次键入 <span class="red">ad</span> 时都自动扩展为 <span class="red">advertisement</span> . 可以定义这样的缩写: <span class="red">:iabbrev JB Jack Benny</span> 
					</li>
					<li>更正打字错误<span class="red">:abbreviate the the</span> 列出定义的缩写<span class="red">:abbreviate</span> . <span class="red">i</span> 表明是用于 Insert 模式下的缩写. <span class="red">c</span> 命令行模式<span class="red"> :cabbrev</span> . <span class="red">!</span> 时同适用于Insert模式和命令行模式<span class="red">:abbreviate</span> 
					</li>
					<li>删除缩写<span class="red">:unabbreviate</span> , 假设定义了<span class="red">:abb @f fresh</span> , 就可以这样删除<span class="red">:unabb @f</span> . 这个命令可以删除所有的缩写<span class="red"> :abclear</span> 
					</li>
					<li><span class="red">:noreabbrev</span> 命令可以避免在定义缩写时再被其他的缩写所扩展. <span class="red">:noreabbrev @a adder</span>
					</li>
					<li>有一些字符在键盘上没有对应键，要在 Vim 中输入这些字符可以使用 <span class="red">digraphs</span> . <span class="red">CTRL-K Co</span> 来输入. <span class="red">:digraphs</span> 可以查看都有哪些 <span class="red">digraphs</span> 可用. <span class="red">CTRL-K name</span> 就可以插入这些键盘上找不到的东本.
					</li>
					<li>使用<span class="red"> CTRL-O {command}</span> 你可以在 Insert 模式下执行任何一个 Normal 模式下的命令. 比如要删除从当前光标到行尾的字符: <span class="red">CTRL-O D</span> . 这种快捷办法只允许一次执行一个 Normal 模式命令. <span class="red">CTRL-O "g3dw</span> 这个命令会删除3个单词,并在寄存器 <span class="red">g</span> 中记下它们.
					</li>
					<li><span class="red">textwidth</span> 选项可以设置一个数值, Vim就会自动换行. <span class="red">wrap</span> 选项使 Vim 能显示需要折行的过长的行,但这是另一回事,它只是为了显示需要,并不会在 file 中实际插入一个换行符.
					</li>
					<li>有空研究研究这个帮助<span class="red">help auto-format</span> 这可以帮助我们下载别人的源码然后按我们自己的布局重新格式化,有可能别人的布局你不喜欢或是下载下来的时根本没有布局. 查看<span class="red"> fo-table</span> 了解如何处理非常规的file. 也可以用一个外部程序来进行格式化,在 Vim 内置命令很好地格式化时非常有用, 查看 <span class="red">formatprg</span> 选项.
					</li>
					<li><span class="red">{</span> 移到到一段的开头,以空格区分段落. <span class="red">}</span> 移到一段的末尾. text 段对象 <span class="red">ap</span> . <span class="red">joinspaces</span> 选项用来控制句子之间的空白间距.
					</li>
					<li>让一个范围的行居中 <span class="red">:{range}center [width]</span> . <span class="red">:{range}right [width]</span> 命令使text右对齐. <span class="red">:{range}left [width]</span> 左对齐.
					</li>
					<li><span class="red">autoindent</span> 自动插入缩进. 每次缩进量增减的单位由选项 <span class="red">shiftwidth</span> 指定. 设置<span class="red"> tabstop</span> 的值来调整缩进的外观.
					</li>
					<li><span class="red">zh</span> 屏幕向右滚动. <span class="red">4zh</span> 向右滚动4个字符. <span class="red">zH</span> 向右滚动半个窗口. <span class="red">ze</span> 向右移动使当前光标成为最右端的可见字符. <span class="red">zl</span> 向左滚动. <span class="red">8zl</span> 向左滚动8个字符. <span class="red">zL</span> 向左滚动半个窗口. <span class="red">zs</span> 向左移动使当前光标成为最左边的可见字符.
					</li>
					<li><span class="red">g0</span> 到窗口内的第一个字符. <span class="red">g^</span> 到当前窗口内的第一个非空白字符. <span class="red">gm</span> 到当前窗口中间的字符上. <span class="red">g$</span> 到当前窗口的最后一个字符上.
					</li>
					<li>精确地每次只移动一个屏幕显示行使用 <span class="red">gj</span> , <span class="red">gk</span> 命令.
					</li>
					<li>打开 <span class="red">wrap</span> 选项的同时打开 <span class="red">linebreak</span> 选项, 可以让 Vim 在适当的地方折叠显示长的text行.<span class="red"> breakat</span> 指定了可以断行的字符. <span class="red">showbreak</span> 指定一个字符显示在接续显示的行的开头.
					</li>
					<li><span class="red">:g/./,/^$/join</span> 这个命令可以把每个段放到同一行上.
					</li>
					<li><span class="red">set virtualedit=all</span> 编辑表格的一个特殊选项. 现在可以把光标移到空无一物的虎位置上去了. 通过搜索最后一样的标题,然后将光标移下去,输入text就OK了.
					</li>
					<li><span class="red">gv</span> 命令可以再次选定上次选择的区域.
					</li>
					<li><span class="red">CTRL-A</span> 给数字加 1.<span class="red">CTRL-A</span> 前面可以加一个数字,指定要加的数. <span class="red">CTRL-X</span>给数字减 1.
					</li>
					<li>对所有的file, 都进行同一个操作. <span class="red">:argdo %s/\&lt;x_cnt\>/x_counter/ge | pdate</span> . <span class="red">:argdo</span> 命令以另一个命令为参数, 对所有编辑的 file 都招待一次. 可以先 <span class="red">:args *.c</span> 把所有的C file 放在一个标签下,并开始编辑第一个. 后面的 <span class="red"> | </span> 用来分隔两个命令, <span class="red">update</span> 命令在file有改变时进行保存. <span class="red">:windo</span> 与 <span class="red">:argdo</span> 命令类似, 它会对所有的窗口都执行同样的操作. <span class="red">:bufdo</span> 对所有的缓冲区执行操作.
					</li>
					<li>在一个 shell 脚本中使用 Vim. 如果要将很多 file 中的 -person- 都改为 Jones 然后打印出来, Vim Normal 模式命令十分出色,但对批处理任务来说, 就不怎么样了. 这里最好使用 Ex 模式的命令. 该模式下的命令很适于放入一个批处理 file 中. 要执行的 Ex 模式命令是这样: <span class="red">%s/-person-/Jones/g</span> <br />
					<span class="red">write tempfile</span> <br />
					<span class="red">quit</span><br />
					将这几行命令放入 <span class="red">change.vim</span> 中. 现在以批处理模式运行 Vim.<br />
					<span class="red">for file in *.txt; do</span>
					<div class="indent">
					    <span class="red">vim -e -s $file < change.vim</span><br />
					    <span class="red">lpr -r tempfile</span>
					</div>
					<span class="red">done</span><br />
					每次shell循环将$file变旺赋值为一个不同的file name. 第二行的命令以 Ex 模式(-e)运行 Vim 来编辑 file $file. 从 change.vim 中读取要执行的命令. <span class="red">-s</span> 参数告诉 Vim 安静地运行, 不要给出不必要的提示. <span class="red">lpr -r tempfile</span> 命令将打印 tempfile 的内容,然后删除 <span class="red">-r</span> 的用处.
					</li>
					<li><span class="red">ls | vim -</span> 这样从标准输入读取要编辑的内容.
					</li>
					<li>在脚本中执行<span class="red">vim -s script file.txt ...</span> 这时的 -s 与 -e 连用时的意义不一样. 此处它的意思是将 script 中的脚本作为 Normal 模式的命令执行.
					</li>
					<li>创建上面那样的脚本可以自己一个个字符键入,但很麻烦, 另一个办法是执行这些命令的同时记录下来, 这样: <span class="red">vim -w script file.txt ...</span> . <span class="red">-W</span> 会覆盖该脚本 file 的内容.
					</li>
					<li>查看关于模式搜索详细的话题可以参考 <span class="red">help pattern</span> 
					</li>
					<li><span class="red">ignorecase</span> 这个选项控制大小写敏感.<span class="red"> :set ignorecase smartcase</span> 打开此选项, 进行大小写敏感的搜索时准备键入就OK了.
					</li>
					<li>想对搜索模式的一部分应用大小写不敏感,可以在它前面加一个 <span class="red">\c</span> , 使用 <span class="red">\C</span> 会使大小写敏感. 这两个前辍的优先级高于 <span class="red">ignorecase</span> 和 <span class="red">smartcase</span> . 这样用它们 <span class="red">\CWord</span> , <span class="red">\cword</span> .
					</li>
					<li>如果搜索的执行花了太长时间还没返回, 可以中途打断它. 在Unix上用<span class="red">CTRL-C</span> , 在MS-Win上用 <span class="red">CTRL-Break</span> .
					</li>
					<li>关闭越过file头尾的循环搜索 <span class="red">:set nowrapscan</span> .
					</li>
					<li>搜索偏移, <span class="red">/default/2</span> 找到后将光标停留在目标行下的第2行. 这里也可以是个负数, 负数值就会向上移N行. <span class="red">/const/e</span> e 指示光标在找到目标串之后以它的结尾作为移动的起始处. <span class="red">/const/e+1</span> 将光标置于目标字符串的结尾处的下一个字符. <span class="red">/const/e-1</span> 结尾处向左移一个字符. <span class="red">/const/b+2</span> b 代表目标字符串的开头, 此时光标向目标字符串右移2个字符.
					</li>
					<li>要重复前一个搜索但应用不同的偏移,可以空出模式部分,如: <span class="red">/that</span> , 然后这样 <span class="red">//e</span> . 如果用的偏移也一样可用<span class="red"> /</span> . 要继续查找但移除前面的使用偏移效果,用 <span class="red">//</span> .
					</li>
					<li><span class="red">/a*</span> 只能匹配 a , 因为 <span class="red">*</span> 只对紧靠在它前面的项起作用. 所以 <span class="red">ab*</span> 匹配的是 abbbbb . <span class="red">/\(ab\)*</span> 这样就可以匹配到 ab, abab, ababab 等等. <span class="red">/ab\*</span> 不匹配空的字符串,让前面的项重复1次或多次. <span class="red">/ab\+</span> 这样也可以搜索. <span class="red">/folders\=</span> 匹配一个可有可无的项.
					</li>
					<li>要指定要重复的次数,可以使用 <span class="red">\{n,n}</span> 这样的形式.
					</li>
					<li>在一个模式中的 <span class="red">or</span> 操作符是 <span class="red">\|</span> , 如: <span class="red">/foo\|bar</span> 会匹配 foo 或者 bar . <span class="red">/end\(if\|while\|for\)</span> 匹配的是 endif, endwhile, endfor.
					</li>
					<li><span class="red">\& </span>最终的匹配结果是最后一个并列项. <span class="red">/forever\&</span> 匹配的是 forever 中的 for.
					</li>
					<li>匹配 a or b or c 可用 <span class="red">/a\|b\|c</span> . 要匹配的是从 a 到 z 的所有26个字母这个模式就会很长很长, 用这个方法 <span class="red">/[a-z]</span> . <span class="red">[]</span> 这种结构只匹配到一个单个字符. <span class="red">/[0123456789abcdef]</span> 将会匹配包括在内的单个字符. or <span class="red">/[0-9a-f]</span> .
					</li>
					<li><span class="red">e</span> 代表 &lt;Esc&gt; , <span class="red">\t</span> 代表 &lt;Tab&gt; , <span class="red">\r</span> 代表 &lt;CR&gt; , <span class="red">\b</span> 代表 &lt;BS&gt; .
					</li>
					<li><span class="red">^</span> 在 <span class="red">[]</span> 中使用这个符号可以匹配到除 <span class="red">[]</span> 指定的所有字符. <span class="red"> /"[^"]*"</span> 匹配任何双引号中间的东西.
					</li>
					<li>预定义字符集: <span class="red">/\a</span> = <span class="red">/[a-zA-Z]</span> ; <span class="red">\d</span> = <span class="red">[0-9]</span> ; <span class="red">\D</span> = <span class="red">[^0-9]</span> ; <span class="red">\x</span> = <span class="red">[0-9a-fA-F]</span> ; <span class="red">\X</span> = <span class="red">[^0-9a-fA-F]</span> ; <span class="red">\s</span> = <span class="red">[	 ](这里面是 tab 和 space)</span> ; <span class="red">\l</span> = <span class="red">[a-z]</span> ; <span class="red">\L</span> = <span class="red">[^a-z]</span> ; <span class="red">\u</span> = <span class="red">[A-Z]</span> ; <span class="red">\U</span> = <span class="red">[^A-Z]</span> ; <span class="red">\h</span> = <span class="red">[A-Za-z]</span> ; <span class="red">\w</span> = <span class="red">.[0-9A-Za-z]</span> ;
					</li>
					<li><span class="red">[\d\l]</span> 并不会像想象的那样去匹配数字或小写字母, 用 <span class="red">\(\d\|\l\)</span> 就OK了. <span class="red">/"\_[^"]*"</span> 这个命令可以查找双引号引起来的字符串,即使跨过了行边界. <span class="red">\n</span> 匹配换行. <span class="red">\_</span> 同时包括断行. <span class="red">\s</span> 匹配空白. <span class="red">\a</span> 匹配一个字母字符.
					</li>
					<li>查找一个这样的牌照 <span class="red">1MGU103</span> 可以这样写: <span class="red">/\d\u\u\u\d\d\d</span> , or <span class="red">/\d\i\{3}\d\{3}</span> , or <span class="red">/[0-9][A-Z]\{3}[0-9]\{3}</span> . <span class="red">/\&lt;\h\w*\&gt;</span> 这样匹配标识符.
					</li>
					<li><span class="red">zf</span> 是一个折行操作符命令.  <span class="red">zo</span> 打开折行. <span class="red">zc</span> 关闭折行. <span class="red">zr</span> 更快的打开折行. <span class="red">zm</span> 折叠的更多. <span class="red">zR</span> 打开所有折行. <span class="red">zM</span> 关闭所有的嵌套折行. <span class="red">zn</span> 命令来禁用一个折行, <span class="red">zN</span> 可以恢复它, <span class="red">zi</span> 可以在两者之间切换.
					</li>
					<li><span class="red">foldcolumn</span> 设置可以方便查看折行. <span class="red">+</span> 标识一个折叠起来的折行, <span class="red">-</span> 标识打开的折行, <span class="red">|</span> 代表折叠区中的每行. <span class="red">zO</span> 打开所有的折叠, <span class="red">zC</span> 关闭所有的折叠, <span class="red">zd</span> 删除当前行的折叠, <span class="red">zD</span> 删除当前行的所有折叠.
					</li>
					<li><span class="red">foldopen</span> 选项定义什么命令会打开折行. <span class="red">:set foldopen=all</span> 可以让当前行下的折叠总是打开的. 一般不会这么做,只是临时的,然后回到默认设置 <span class="red">set foldopen&</span> . <span class="red">:set foldclose=all</span> 这样设置让光标离开折行时自动关闭.
					</li>
					<li>转而编辑另一个file时,折行的状态会丢失,这个命令可以保存折行的定义, <span class="red">:mkview</span> 这将会所有折行的定义以及其他一些影响该file外观显示的选项. 可以通过设置 <span class="red">viewoptions</span> 来控制将哪些信息保存在视图中, <span class="red">:loadview</span> 这样找回刚才的视图. 最多可以为一个file保存10个视图. <span class="red">:mkview 3</span> 保存为第3个视图, <span class="red">:loadview 2</span> 载入第2个视图.
					</li>
					<li>根据缩进折行,这对很多程序语言都适用. <span class="red">:set foldmethod=indent</span> . <span class="red">:set foldlevel=3</span> 折叠的层级设得越低, 就有越多的折行被关闭. <span class="red">foldlevel</span> 为 0 时, 所有的折行都会关闭. <span class="red">zM</span> 命令将 <span class="red">foldlevel</span> 选项设置为0, <span class="red">zR</span> 命令将 <span class="red">foldlevel</span> 选项设为当前file的最大有效值.
					</li>
					<li>
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
-->
	</body>
</html>
