var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate2(){
	
			    refresh();
				if(get("service1").value == ""){
					hasError = true;
					get("err_s1").innerHTML = "*Service Required";
				}
				if(get("service2").value == ""){
					hasError = true;
					get("err_s2").innerHTML = "*Service Required";
				}
				if(get("service3").value == ""){
					hasError = true;
					get("err_s3").innerHTML = "*Service Required";
				}
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("service1").innerHTML="";
				get("service2").innerHTML="";
				get("service3").innerHTML="";
				}