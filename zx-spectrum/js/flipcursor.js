function flipcursor(nosettime) {
    var cursor = document.getElementById("cursor");
    if (cursor.className.indexOf('no-flash') > 0) {
        return;
    }
    var cursor2 = document.getElementById("cursor2");
    if (cursor == 'hide') {
        if (cursor.className == 'hide') {
            cursor.className = 'show';
            cursor2.className = 'hide';
        } else {
            cursor.className = 'hide';
            cursor2.className = 'show';
        }
        if (!nosettime) {
            setTimeout('flipcursor()', 300);
        }
    }
}