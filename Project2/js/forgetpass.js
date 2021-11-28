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
				if(get("email").value.match(mailformat)){
					hasError = false;
				}
				else
				{
					hasError = true;
					get("err_email").innerHTML = "*Invalid email address";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*New Password Required";
				}
				else if(get("password").value.length <=5){
					hasError = true;
					get("err_pass").innerHTML = "*Password Must be greater or equal to 6 digit";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_email").innerHTML="";
				get("err_pass").innerHTML="";
				}