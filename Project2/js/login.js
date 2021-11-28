var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
	
			    refresh();
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Required";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_pass").innerHTML="";
				}