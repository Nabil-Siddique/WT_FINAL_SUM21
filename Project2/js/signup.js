var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			    refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Required";
				}
				else if(!isNaN(get("name").value)){
					hasError = true;
					get("err_name").innerHTML = "*Only characters are allowed";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required";
				}
				else if(!isNaN(get("name").value)){
					hasError = true;
					get("err_uname").innerHTML = "*Only characters are allowed";
				}
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
					get("err_pass").innerHTML = "*Password Required";
				}
				else if(get("password").value.length <=5){
					hasError = true;
					get("err_pass").innerHTML = "*Password Must be greater or equal to 6 digit";
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
				else if(isNaN(get("phone").value)){
					hasError = true;
					get("err_phone").innerHTML = "*Only Digit Allowed";
				}
				else if(get("phone").value.length<11){
					hasError = true;
					get("err_phone").innerHTML = "*Minimum 11 digit allowed";
				}
				if(get("address").value == ""){
					hasError = true;
					get("err_address").innerHTML = "*Address Required";
				}
				else if(!isNaN(get("address").value)){
					hasError = true;
					get("err_address").innerHTML = "*Address Only characters are allowed";
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