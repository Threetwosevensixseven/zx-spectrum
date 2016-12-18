<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
	#cursor { position:absolute; color:#7b73de;background:#7b73de;width:24px;height:24px; font-size:1px;display:block}
</style>
<script language="JavaScript">
	// c64 404 page not found by Klaus Hessellund / 200709
	// Feel free to copy this script to you own page. Some credits would be nice, but not mandatory :p
	// c64 charset found here : http://www.dwarffortresswiki.net/index.php/List_of_user_tilesets
	function flipcursor(nosettime) {
		var cursor=document.getElementById("cursor");
		if (cursor.style.visibility == 'hidden') {
			cursor.style.visibility = '';
		} else {
			cursor.style.visibility = 'hidden';
		}
		if (!nosettime) {
			setTimeout('flipcursor()',300);
		}
	}
</script>
</head>
<body id="body" onload="flipcursor(0);initWrite();">
	<div id="cursor">&nbsp;</div>
</body>
</html>