<?php
    session_start();
    if(!isset($_SESSION['shome'])){
    	echo "<p align=center>";
        echo "<font color=#ff0000 size=5><strong><big>";
        echo "Log in please:<a href='index.html'>Click Here</a>!";
        echo "</big></strong></font></p>";
        exit();
     }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="COntent-Type" content="text/html; charset=utf-8" />
<title>SHome System</title>
<link href="css.css" rel="stylesheet" type="text/css" media="all" />
<script src="/jquery-1.8.3.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$.post("/getPic.php",function(data){
			$("img").attr("src",data);
		});
	});
});
</script>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="menu">
		  <ul>
		    <li><a href="#">首页</a></li>
			<li class="menuDiv"></li>
			<li><a href="#">拍照</a></li>
			<li class="menuDiv"></li>
			<li><a href="#">录像</a></li>
			<li class="menuDiv"></li>
			<li><a href="#">设备</a></li>
			<li class="menuDiv"></li>
			<li><a href="#">资料</a></li>
			<li class="menuDiv"></li>
			<li><a href="#">关于</a></li>
		  </ul>
		</div>
		<div id="banner">
		</div>
	</div>
<?php
    function getIP(){

    	static $realip;
        if(isset($_SERVER)){
        	if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            	$realip=$_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if(isset($_SERVER["HTTP_CLIENT_IP"])){
            	$realip=$_SERVER["HTTP_CLIENT_IP"];
            } else {
            	$realip=$_SERVER["REMOTE_ADDR"];
            }
        } else {
        	if(getenv("HTTP_X_FORWARDED_FOR")){
            	$realip=getenv("HTTP_X_FORWARDED_FOR");
            } else if(getenv("HTTP_CLIENT_IP")){
            	$realip=getenv("HTTP_CLIENT_IP");
            } else {
            	$realip=getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }
    
?>
	<div id="pagebody">
		<div id="sidebar">
	  		<button>GET!</button>
		</div>
		<div id="mainbody">
        	  <img id="img" src="" /> 
		</div>
	</div>
</div>
</body>
</html>
