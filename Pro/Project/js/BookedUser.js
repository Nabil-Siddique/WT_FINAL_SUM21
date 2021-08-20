function get(id){
	return document.getElementById(id);
}
function search(e){
	if(e.value == "") {
		get("bookuser").innerHTML ="";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","BookedUserInfoSearch.php?key="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			get("bookuser").innerHTML = this.responseText;
		}
	};
	xhr.send();
}