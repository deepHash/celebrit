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


// flyMenu
function toggleCP(){
	var cp = document.getElementById("cp");
	if(cp.style.opacity == 1){
		cp.style.opacity = 0;
		cp.style.right = "-260px"; // remove it from active screen space
	} else {
		cp.style.right = "0px"; // return it to active screen space
		cp.style.opacity = 1;
	}
}