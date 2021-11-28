var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
	
			    refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				else if(get("name").value.length <= 2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 characters";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Req";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(!get("male").checked && !get("female").checked){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Req";
					
				}
				if(get("salary").value == ""){
					hasError = true;
					get("err_salary").innerHTML = "*Salary Req";
				}
				if(get("DOB").value == ""){
					hasError = true;
					get("err_DOB").innerHTML = "*Date Of Birth Req";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Req";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Req";
				}

				
				return !hasError;
			}
			
			
			
			
			function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				get("err_email").innerHTML = "";
				get("err_gender").innerHTML = "";
				get("err_salary").innerHTML = "";
				get("err_DOB").innerHTML = "";
				get("err_pass").innerHTML = "";
				get("err_address").innerHTML = "";
				
				}
				
				function validate2(){
	
			    refresh2();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
			
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Req";
				}
				
				return !hasError;
			}
			
			
			
			function refresh2(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_uname").innerHTML = "";
				
			
			}
			
			function validate3(){
	
			    refresh3();
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "Username Required.";
				}
				
				if(get("message").value == ""){
					hasError = true;
					get("err_message").innerHTML = "PLEASE WRITE YOUR MESSAGE TO SEND";
				}
				
				return !hasError;
			}
			
			
			
			function refresh3(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_message").innerHTML = "";
			}