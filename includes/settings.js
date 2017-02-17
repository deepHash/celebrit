window.onload = function(){
	var friendsList = document.getElementById("friendsList");
	var request = new XMLHttpRequest();
		request.open('GET', 'data/json/kaktus.json');
		request.onload = function () {
	  		var myData = JSON.parse(request.responseText);
	  		renderHTML(myData);
		};
	request.send();
};


function renderHTML (data) {
	
	var htmlString = "";
	for(i = 0 ; i < data.length; i++){
		htmlString += "<p>" + data[i].name + "</p> <br>";
	}
	friendsList.insertAdjacentHTML('beforeend', htmlString);
		  
}