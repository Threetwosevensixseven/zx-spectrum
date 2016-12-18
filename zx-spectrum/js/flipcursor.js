// c64 404 page not found by Klaus Hessellund / 200709 / Optimized for cursor only by United Networks 7-15-12
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