function get(id){
	return document.getElementById(id);
}
function search(e){
	if(e.value == "") {
		get("offers").innerHTML ="";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","OfferSearch.php?key="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			get("offers").innerHTML = this.responseText;
		}
	};
	xhr.send();
}