<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>A.A.C.S.</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<link rel="apple-touch-icon" href="../iui/iui-logo-touch-icon.png" />
<meta name="apple-touch-fullscreen" content="YES" />
<style type="text/css" media="screen">@import "../iui/iui.css";</style>
<script type="application/x-javascript" src="../iui/iui.js"></script>
</head>

<body>
    <div class="toolbar">
        <h1 id="pageTitle"></h1>
        <a id="backButton" class="button" href="#"></a>
    </div>

    <ul id="home" title="A.A.C.S." selected="true">
        <li><a href=control.php?command=1>Toggle Garage Door</a></li>
        <li><a href="javascript:location.reload(true)"><div align="center"><?php include("garage.txt");?>&nbsp;&nbsp;&nbsp;</div></a></li>
	<br>
	<li></li>
        <li><a href=control.php?command=4>Toggle Security System</a></li>
        <li><a href="javascript:location.reload(true)"><div align="center"><?php include("security.txt");?>&nbsp;&nbsp;&nbsp;&nbsp;</div></a></li>
    </ul>
    </div>
</body>
</html>
