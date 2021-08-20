var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
	
			    refresh();
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Required";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Old Password Required";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_email").innerHTML="";
				get("err_pass").innerHTML="";
				}