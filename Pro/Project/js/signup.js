var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
				
			    refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Required";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Required";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*Password Required";
				}
				else if(get("password").value != get("cpassword").value){
					hasError = true;
					get("err_pass").innerHTML = "*Password and Confirm Password not matched";
				}
				if(get("cpassword").value == ""){
					hasError = true;
					get("err_cpass").innerHTML = "*Password Required";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "*Phone Number Required";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Required";
				}
				if(get("DOB").value == ""){
					hasError = true;
					get("err_DOB").innerHTML = "*Date Of Birth Required";
				}
				if(!get("male").checked && !get("female").checked){
					hasError = true;
					get("err_gender").innerHTML = "*Gender Required";
					
				}
				
				
				
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_pass").innerHTML="";
				get("err_email").innerHTML="";
				get("err_name").innerHTML = "";
				get("err_cpass").innerHTML="";
				get("err_phone").innerHTML = "";
				get("err_address").innerHTML = "";
				get("err_DOB").innerHTML = "";
				get("err_gender").innerHTML = "";
				}