$(document).ready(function()
		{
			$('#only-date-demo').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});


			$.material.init();
		});		

$(document).ready(function()
		{
			$('#only-date-demo').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});


			$.material.init();
		});
		
$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});

var Menu=	
	'<ul id=MMenu>' +
			'<li> <a href="index.html"> דף הבית </a>	' +
			'<ul class=submenu>' +
					'<li>	<a href="index.html">דף הבית</a>' +
			'</ul>'	+
					'<li> <a href="information.html"> 	מידע	</a>	' +				
			'<ul class=submenu>' +
				'<li>	<a href="information.html">מידע</a>' +
			'</ul>'+
					'<li> <a href="mycollection.html">האוסף שלי</a>' +	
			'<ul id=subsub class=submenu>' +
				'<li> <a href="mycollection.html">האוסף שלי</a>' +
					'<li>	<a href="figures.html">פסלונים</a>' +
			'</ul>'+
					'<li> <a href="tips&tricks.html">טיפים</a>' +
			'<ul class=submenu>' +
				'<li> <a href="tips.html">טיפים</a>	' +
			'</ul>'+
		 '<li> <a href="sources.html">מקורות</a>	' +
			'<ul class=submenu>' +
				'<li>	<a href="sources.html">מקורות</a>' +
			'</ul>'+ 
	'</ul>'
	
//set mark in navigator
function mark()
{	
var page=window.location.href ;// page url
var obj=document.getElementById("MMenu");
var elements = obj.getElementsByTagName("a");// links Array

for (i=0; i < elements.length ; i++) {//search from top to bottom
if (page==elements[i].href) break ; }
elements[i].style.color="#ffffff";
elements[i].style.fontWeight = "700";
elements[i].style.backgroundColor="#5e5555 ";

for (i=elements.length-1;  i> 0 ; i--) { //search from bottom to top
var kuku=page.indexOf(elements[i].href) ;
if (kuku >= 0 ) break ; }  //
elements[i].style.color="#ffffff";
elements[i].style.fontWeight = "700"; 
elements[i].style.backgroundColor="#5e5555 ";

var objli=elements[i].parentNode.parentNode; // goes to UL
if  (objli.id=="MMenu"){elements[i].parentNode.className='current_white';return }  // page has no children
document.getElementById("side").innerHTML=objli.innerHTML;
objli.parentNode.className = 'current_white';  //colour the parent link


//scroll
$(document).ready(function()
{
		$('#topbutt').bind("click", jump);
       return false;
});

//Smooth Scroll JS:
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});