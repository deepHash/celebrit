// window.onload = function(){
	// var friendsList = document.getElementById("friendsList");
	// var request = new XMLHttpRequest();
		// request.open('GET', "data/json/"+username+".json");
		// request.onload = function () {
	  		// var myData = JSON.parse(request.responseText);
	  		// renderHTML(myData);
		// };
	// request.send();
// };

$(document).ready(function(){
	 	var $friends = $('#newEventGuests');
	 	var $name = $('#name');
	 	var $email = $('#email');
	 	$.ajax({
	 		type: 'GET',
 			url: "data/json/"+username+".json",
 			success: function (friends) {
			   $.each(friends, function (i, item) {
				 $friends.append('<li>' + item.name + ' - ' + item.email + '</li>');
			   });
			 }
 		}); 
});


function renderHTML (data) {
	
	var htmlString = "";
	for(i = 0 ; i < data.length; i++){
		htmlString += "<p>" + data[i].name + "</p> <br>";
	}
	friendsList.insertAdjacentHTML('beforeend', htmlString);
		  
}
