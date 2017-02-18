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
	 	var $friends = $('#friendsList');
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
 		
 		$('#addFriend').on('click', function () {
		   	var friend = 
		   	{
		   		name: $name.val(), 
		   		email: $email.val()
		   	};
		   	
		   	JSON.parse(friend);
		   	console.log("onclick fun");
		   	// var ajax = new XMLHttpRequest();
			// ajax.open('post', 'json.php');
			// ajax.setRequestHeader("Content-type", "application/json;charset=UTF-8");
			// ajax.send(JSON.stringify(friend));
		   	
			 $.ajax({
			 	url: "json.php",
			 	type: "POST",
			 	dataType: "json",
			 	contentType: "application/json",
			 	data: {json: json},
			 	success: function (newFriend) {
				   $friends.append('<li>' + newFriend.name + ' - ' + newFriend.email + '</li>');
				   console.log("debug");
				 }
			 });
		});		 
});


function renderHTML (data) {
	
	var htmlString = "";
	for(i = 0 ; i < data.length; i++){
		htmlString += "<p>" + data[i].name + "</p> <br>";
	}
	friendsList.insertAdjacentHTML('beforeend', htmlString);
		  
}
