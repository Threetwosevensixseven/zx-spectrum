/*(function($){



$.fn.autoGrowInput = function(o) {



    o = $.extend({

        maxWidth: 870,

        minWidth: 0,

        comfortZone: 0

    }, o);



    this.filter('input:text').each(function(){



        var minWidth = o.minWidth || $(this).width(),

            val = '',

            input = $(this),

            testSubject = $('<tester/>').css({

                position: 'absolute',

                top: -9999,

                left: -9999,

                width: 'auto',

                fontSize: input.css('fontSize'),

                fontFamily: input.css('fontFamily'),

                fontWeight: input.css('fontWeight'),

                letterSpacing: input.css('letterSpacing'),

                whiteSpace: 'nowrap'

            }),

            check = function() {



                if (val === (val = input.val())) {return;}



                // Enter new content into testSubject

                var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,' ').replace(/</g, '&lt;').replace(/>/g, '&gt;');

                testSubject.html(escaped);



                // Calculate new width + whether to change

                var testerWidth = testSubject.width(),

                    newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,

                    currentWidth = input.width(),

                    isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)

                                         || (newWidth > minWidth && newWidth < o.maxWidth);



                // Animate width

                if (isValidWidthChange) {

                    input.width(newWidth);

                }



            };



        testSubject.insertAfter(input);



        $(this).bind('keyup keydown blur update', check);



    });



    return this;



};



})(jQuery);

var $aju=jQuery.noConflict();

$aju('input#s').autoGrowInput();*/


function $(elid){ /* shortcut for d.gEBI */

				return document.getElementById(elid);

			}



			var cursor; /* global variable */

			window.onload = init;

			

			function init(){

				cursor = $("cursor"); /* defining the global var */

				cursor.style.left = "0px"; /* setting it's position for future use */

			}

			

			function nl2br(txt){ /* helper, textarea return \n not <br /> */

				return txt.replace(/\n/g, "<br />");

			}

			

			function writeit(from, e){ /* the magic starts here, this function requires the element from which the value is extracted and an event object */

				e = e || window.event; /* window.event fix for browser compatibility */

				var w = $("writer"); /* get the place to write */

				var tw = from.value; /* get the value of the textarea */

				w.innerHTML = nl2br(tw); /* convert newlines to breaks and append the returned value to the content area */

			}

			

			function moveIt(count, e){ /* function to move the "fake caret" according to the keypress movement */

				e = e || window.event; /* window.event fix again */

				var keycode = e.keyCode || e.which; /* keycode fix */

//				alert(count); /* for debugging purposes */

				if(keycode == 37 && parseInt(cursor.style.left) >= (0-((count-1)*10))){ // if the key pressed by the user is left and the position of the cursor is greater than or equal to 0 - the number of words in the textarea - 1 * 10 then ...

					cursor.style.left = parseInt(cursor.style.left) - 10 + "px"; // move the cursor to the left

				} else if(keycode == 39 && (parseInt(cursor.style.left) + 10) <= 0){ // otherwise, if the key pressed by the user if right then check if the position of the cursor + 10 is smaller than or equal to zero if it is then ...

					cursor.style.left = parseInt(cursor.style.left) + 10 + "px"; // move the "fake caret" to the right

				}



			}

			

			function alert(txt){ // for debugging

			console.log(txt); // works only with firebug

			}