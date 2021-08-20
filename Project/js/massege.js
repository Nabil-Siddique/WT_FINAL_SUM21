var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate3(){
	
			    refresh();
				
				if(get("message").value == ""){
					hasError = true;
					get("err_messages").innerHTML = "*Invalid Massege";
				}
				return !hasError;
			}
				function refresh(){
				hasError=false;
				
				get("err_messages").innerHTML="";
				}