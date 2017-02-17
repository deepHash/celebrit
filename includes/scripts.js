window.onload = function(){ 
    // your code 

// flyMenu toggle
function toggleCP(){
	var cp = document.getElementById("cp");
	cp.style.display = cp.style.display === 'block' ? 'none' : 'block';
}


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
span.onclick = function() {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    };
};
};