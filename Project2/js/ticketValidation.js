
var haserror=false;
function get(id){
	return document.getElementById(id);
}
function validate(){
				
				refresh();
				if(get("name").value ==""){
					haserror = true;
					get("err_name").innerHTML = "**Enter Your Name**";
				}

				if(get("from").value ==""){
					haserror = true;
					get("err_from").innerHTML = "**Enter Your Departure Location**";
				}

				if(get("to").value ==""){
					haserror = true;
					get("err_to").innerHTML = "**Enter Your Arrival Location**";
				}

				if(get("sn").value ==""){
					haserror = true;
					get("err_sn").innerHTML = "**Enter Your Seat Number**";
				}
				
				
	return !haserror;
}
function refresh(){
				haserror=false;
				get("err_name").innerHTML="";
				get("err_from").innerHTML="";
				get("err_to").innerHTML="";
				get("err_sn").innerHTML="";
				
}
