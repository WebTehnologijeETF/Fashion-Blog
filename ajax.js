function otvori(stranica) {
	var xhr = new XMLHttpRequest();
	xhr.onload = function () {
		var html = this.responseText;
		var glavni = document.getElementById("glavni");
		glavni.innerHTML = html;
	};
	xhr.open("get", stranica + ".html", true);
	xhr.send();
}