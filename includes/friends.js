var friendsList = document.getElementById("friendsList");
var request = new XMLHttpRequest();
request.open('GET', 'includes/kaktus.json');
request.onload = function () {
  var myData = JSON.parse(request.responseText);
  renderHTML(myData);
};
request.send();

function renderHTML (data) {
	
	var htmlString = "test string";
	friendsList.insertAdjacentHTML('beforeend', htmlString);
	  
}