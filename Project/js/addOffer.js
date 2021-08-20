var hasError=false;
	        function get(id){
				return document.getElementById(id);
		                	}
							
							
			function validate(){
					var n = get("percentage").value;
			    refresh();
				if(get("offername").value == ""){
					hasError = true;
					get("err_OffName").innerHTML = "*Offer Name Required";
				}
				if(get("percentage").value == ""){
					hasError = true;
					get("err_OffPercen").innerHTML = "*Percentage Required";
				}
				
				if(get("coupon").value == ""){
					hasError = true;
					get("err_CoCode").innerHTML = "*Coupon Required";
				}
				if(get("sdate").value == ""){
					hasError = true;
					get("err_SDate").innerHTML = "*Starting Date Required";
				}
				if(get("edate").value == ""){
					hasError = true;
					get("err_EDate").innerHTML = "*Ending Date Required";
				}
				
				return !hasError;
			}
				function refresh(){
				hasError=false;
				get("err_OffName").innerHTML="";
				get("err_OffPercen").innerHTML="";
				
				get("err_CoCode").innerHTML="";
				get("err_SDate").innerHTML="";
				get("err_EDate").innerHTML="";
				}