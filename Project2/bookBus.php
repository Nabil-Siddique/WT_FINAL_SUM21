<?php require 'controllers/bookingController.php';?>
<html>
	<head>
		<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			
			function validateSeat(){
				var hb = document.getElementsByName("seats[]"); 
				var checked = false;
				for(var i=0;i<hb.length;i++){
					if(hb[i].checked){
						checked= true;
						break;
					}
				}
				
				return checked;
			}
			
			function validateseats(){
				var hb = document.querySelector('input[name="seats[]"]:checked');
				if(hb == null){
					return false;
				}
				return true;
			}
			function validate(){
				
				refresh();
				
				if(!validateSeat()){
					hasError = true;
					get("err_seats").innerHTML = "**Choose Your Seat**";
					get("err_seats").style.color="red";

				}
				
				
			return !hasError;
			}
			function refresh(){
				hasError=false;
				
				get("err_seats").innerHTML ="";
				
				
			}
		</script>
	</head>
	<body>
		<fieldset>
			<form action="" onsubmit="return validate()" method="post">
				<table align="center" >
					
					<tr>
						<th>CHOOSE YOUR SEAT  </th>
						<th>
							<span><input type="checkbox" id="a1" value="A1" <?php if(seatExist("A1")) echo "checked";?>  name="seats[]"> A1
							<input type="checkbox" id="a2" value="A2" <?php if(seatExist("A2")) echo "checked";?> name="seats[]"> A2
							</span>
							<input type="checkbox" id="a3" value="A3" <?php if(seatExist("A3")) echo "checked";?> name="seats[]"> A3
							<input type="checkbox" id="a4" value="A4" <?php if(seatExist("A4")) echo "checked";?> name="seats[]"> A4</br>
						
							<span><input type="checkbox" id="b1" value="B1" <?php if(seatExist("B1")) echo "checked";?>  name="seats[]"> B1
							<input type="checkbox" id="b2" value="B2" <?php if(seatExist("B2")) echo "checked";?> name="seats[]"> B2
							</span>
							<input type="checkbox" id="b3" value="B3" <?php if(seatExist("B3")) echo "checked";?> name="seats[]"> B3
							<input type="checkbox" id="b4" value="B4" <?php if(seatExist("B4")) echo "checked";?> name="seats[]"> B4</br>

							<span><input type="checkbox" id="c1" value="C1" <?php if(seatExist("C1")) echo "checked";?>  name="seats[]"> C1
							<input type="checkbox" id="C2" value="C2" <?php if(seatExist("C2")) echo "checked";?> name="seats[]"> C2
							</span>
							<input type="checkbox" id="C3" value="C3" <?php if(seatExist("C3")) echo "checked";?> name="seats[]"> C3
							<input type="checkbox" id="C4" value="C4" <?php if(seatExist("C4")) echo "checked";?> name="seats[]"> C4</br>

							<span><input type="checkbox" id="d1" value="D1" <?php if(seatExist("D1")) echo "checked";?>  name="seats[]"> D1
							<input type="checkbox" id="D2" value="D2" <?php if(seatExist("D2")) echo "checked";?> name="seats[]"> D2
							</span>
							<input type="checkbox" id="D3" value="D3" <?php if(seatExist("D3")) echo "checked";?> name="seats[]"> D3
							<input type="checkbox" id="D4" value="D4" <?php if(seatExist("D4")) echo "checked";?> name="seats[]"> D4</br>

							<span><input type="checkbox" id="e1" value="E1" <?php if(seatExist("E1")) echo "checked";?>  name="seats[]"> E1
							<input type="checkbox" id="E2" value="E2" <?php if(seatExist("E2")) echo "checked";?> name="seats[]"> E2</span>
							<input type="checkbox" id="E3" value="E3" <?php if(seatExist("E3")) echo "checked";?> name="seats[]"> E3
							<input type="checkbox" id="E4" value="E4" <?php if(seatExist("E4")) echo "checked";?> name="seats[]"> E4</br>

							<span>
								<input type="checkbox" id="f1" value="F1" <?php if(seatExist("F1")) echo "checked";?>  name="seats[]"> F1
							<input type="checkbox" id="F2" value="F2" <?php if(seatExist("F2")) echo "checked";?> name="seats[]"> F2
							</span>
							<input type="checkbox" id="F3" value="F3" <?php if(seatExist("F3")) echo "checked";?> name="seats[]"> F3
							<input type="checkbox" id="F4" value="F4" <?php if(seatExist("F4")) echo "checked";?> name="seats[]"> F4</br>

							<span><input type="checkbox" id="g1" value="G4" <?php if(seatExist("G4")) echo "checked";?>  name="seats[]"> G4
							<input type="checkbox" id="G2" value="G2" <?php if(seatExist("G2")) echo "checked";?> name="seats[]"> G2
							</span>
							<input type="checkbox" id="G3" value="G3" <?php if(seatExist("G3")) echo "checked";?> name="seats[]"> G3
							<input type="checkbox" id="G4" value="G4" <?php if(seatExist("G4")) echo "checked";?> name="seats[]"> G4</br>

						</th>


						<td><span id="err_seats"><?php echo $err_seats;?></span></td>
					</tr>
					
					<tr>
						<td  colspan="2"><input type="submit" value="Book Bus"></td>
						<td><a  style="text-decoration:none" href="paymentway.php" target="_self" >PAYMENT &nbsp</a></td>

					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>