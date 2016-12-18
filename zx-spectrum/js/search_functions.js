//search form scripts
function formfocus() { document.getElementById("s").focus();  }
window.onload = formfocus;
flipcursor(0);
var $a=jQuery.noConflict();
$a("document").ready(function() {
    setTimeout(function() {
        $a("#terminal").trigger('click');
    },1);
});
