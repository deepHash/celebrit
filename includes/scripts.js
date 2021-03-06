window.onload = function(){ 
    // your code 

// flyMenu toggle
var myBtn = document.getElementById("cpBtn");
 
myBtn.onclick = function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.display = cp.style.display === 'block' ? 'none' : 'block';
};


// modal:
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks the button, open the modal 
var i;
for (i = 0; i < btn.length; i++) {
	if (btn[i] !== null){
    btn[i].onclick = function() {
    modal.style.display = "block";
};};
};


// When the user clicks on <span> (x), close the modal
if (span !== null){
span.onclick = function() {
    modal.style.display = "none";
};};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    };
};};

//json guest function
$(document).ready(function(){
	 	var $guests = $('#newEventGuests');
	 	var $name = $('#name');
	 	var $email = $('#email');
	 	$.ajax({
	 		type: 'GET',
 			url: "data/json/"+username+".json",
 			success: function (guests) {
			   $.each(guests, function (i, item) {
				 $guests.append('<li>' + item.name + ' - ' + item.email + '</li>');
			   });
			 }
 		}); 
});