<?php session_start(); ?>
<?php include "../../profile_query.php"; ?>

<!DOCTYPE html>
<html>
<head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.alert {
	margin-top:-10px;
	padding-bottom:10px;
	background-color: white;
	color: red;
	font-size:13px;
	}
.closebtn {
	margin-left: 15px;
	color: red;
	font-weight: bold;
	float: right;
	font-size: 18px;
	line-height: 20px;
	cursor: pointer;
	transition: 0.3s;
	}

.closebtn:hover {
	color: black;
	}
	
table {
	margin-left: -15px;
    border-collapse: collapse;
    width: 100%;
}

th, td {
	font-size: 14px;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th{
	font-weight: bold;
}
td {
	text-align: center;
}
tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
	<div class="main" style="background-image: url('../../img/w1.jpg');">
		
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>Saved Cards</span></li> 
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3 class="pay-title">Credit Card Info</h3>
											<form name="myform" method="post" onsubmit=" return validateform()" action="addcard.php">
												<input type="text" name="id" value="<?php echo $id ?>" hidden>
												<div class="tab-for">												
													<h5>NAME ON CARD</h5>
														<input type="text" name="cardname" value="" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="cardnumber" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="alert" id="ale1" style="display:none;">
													<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
													Give Proper format of cardnumber
												</div>
												<div class="alert" id="ale2" style="display:none;">
													<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
													cardnumber should only contain 12 digits.
												</div>
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" name="month" value="6" min="1" required />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" name="year" value="1988" min="1" required />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxx" name="cvv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
														<div class="alert" id="ale3" style="display:none;">
															<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
															Give Proper format of cvv
														</div>
														<div class="alert" id="ale4" style="display:none;">
															<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
															cvv should only contain 3 digits
														</div>
													</div>
													<div class="clear"></div>
													<div class="tab-form-left user-form" style="width:100%;">
													<h5>Amount</h5><ul>
														<li>
															<input type="number" class="text_box" name="bal" value="0" min="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000';}" />	
														</li></ul>
												</div>
												</div>
												
												<div class="tab-for">
													<h5>SAVE CARD</h5>	
													<label class="switch">
														<input type="checkbox" name="check" value="check">
														<span class="slider round"></span>
													</label>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<!--<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>-->
										</div>
									</div>
									
									
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Debit Card Info</h3>
											<form name="myform1" method="post" onsubmit="return validateform1()" action="addcard.php">
											<input type="text" name="id" value="<?php echo $id ?>" hidden>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="cardname" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="cardnumber" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="alert" id="ale11" style="display:none;">
													<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
													Give Proper format of cardnumber
												</div>
												<div class="alert" id="ale21" style="display:none;">
													<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
													cardnumber should only contain 12 digits.
												</div>
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" name="month" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" name="year" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" name="cvv" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
														<div class="alert" id="ale31" style="display:none;">
															<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
															Give Proper format of cvv
														</div>
														<div class="alert" id="ale41" style="display:none;">
															<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
															cvv should only contain 3 digits
														</div>
													</div>
													<div class="clear"></div>
													<div class="tab-form-left user-form" style="width:100%;">
													<h5>Amount</h5><ul>
														<li>
															<input type="number" class="text_box" type="text" name="bal" min="0" value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000';}" />	
														</li></ul>
													</div>
												</div>
												<div class="tab-for">
													<h5>SAVE CARD</h5>	
													<label class="switch">
														<input type="checkbox" name="check" value="check">
														<span class="slider round"></span>
													</label>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<!--<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>-->
										</div>	
									</div>
									
									
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="tab-form-left user-form" style="width:100%;">
												<h5>Amount</h5><ul>
												<li><form method="post" action="netbank.php">
												<input type="number" class="text_box" type="text" name="amount" value="1" min="1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000';}" />	
												</li></ul>
											</div>
											<div class="radio-btns">
												<div class="swit">	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Andhra Bank" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Allahabad Bank" name="radio"><i></i>Allahabad Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Bank of Baroda" name="radio"><i></i>Bank of Baroda</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Canara Bank" name="radio"><i></i>Canara Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="IDBI Bank" name="radio"><i></i>IDBI Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Icici Bank" name="radio"><i></i>Icici Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Indian Overseas Bank" name="radio"><i></i>Indian Overseas Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Punjab National Bank" name="radio"><i></i>Punjab National Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="South Indian Bank" name="radio"><i></i>South Indian Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="State Bank Of India" name="radio"><i></i>State Bank Of India</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="City Union Bank" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="HDFC Bank" name="radio"><i></i>HDFC Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="IndusInd Bank" name="radio"><i></i>IndusInd Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Syndicate Bank" name="radio"><i></i>Syndicate Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Deutsche Bank" name="radio"><i></i>Deutsche Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Corporation Bank" name="radio"><i></i>Corporation Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="UCO Bank" name="radio"><i></i>UCO Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Indian Bank" name="radio"><i></i>Indian Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="Federal Bank" name="radio"><i></i>Federal Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" value="ING Vysya Bank" name="radio"><i></i>ING Vysya Bank</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
												<input type="submit" style="cursor:pointer; background-color: #B3E03F;border: none; color: white; padding: 7px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" value="CONTINUE">
											</form>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<!--<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>-->											
											
											
											<div>
												<?php
													$sql = "SELECT * FROM card where id=".$id;
													$result = mysqli_query($connection, $sql);
													if (mysqli_num_rows($result) > 0)
														{
															//table  table-hover
														echo "
															<table>
															<thead>
															<tr>
															<th><b>CardNumber</b></th>
															<th><b>CVV</b></th>
															<th><b>Amount</b></th>
															<th><b>Add</b></th>
															<th><b>Delete</b></th>
															<tr>
														</thead>";
														while($row = $result->fetch_assoc()) {
															$rest = substr($row["cardnumber"], -12,2);
															$rest1 = substr($row["cardnumber"], -4);
															$rest2 = $rest.'******'.$rest1;
														echo"
														<tbody>
															<tr><form method='post' action='addbal.php'>
															<td>".$rest2."</td>
															<td><input type='number' name='cvv' value=' ' style='width: 60px;padding:3px;border-radius:5px;'></td>
															<td><input type='number' name='amount' value=' ' style='width: 100px;padding:3px;border-radius:5px;'></td>
															<td><button style='color: #fff;background-color: #337ab7;border:none;padding:5px 10px;border-radius:10px;'><i class='fa fa-plus'></button></td>
															<input type='hidden' name='id' value='".$row["id"]."'>
															<input type='hidden' name='cardnumber' value='".$row["cardnumber"]."'>
															</form>
															<form method='post' action='delcard.php'>
															<td><button style='color: #fff;background-color: #d9534f;border:none;padding:5px 10px;border-radius:10px;'><i class='fa fa-times'></button></td>
															<input type='hidden' name='id' value='".$row["id"]."'>
															<input type='hidden' name='cardnumber' value='".$row["cardnumber"]."'>
															</form>
															</tr>
														</tbody> ";
														}	
														echo "</table>";
														}
												else{
													echo "No saved cards";}
															?>
											</div>
												
												
										</div>
									</div>
									
								</div>	
							</div>
						</div>	

		</div>
		
	</div>
</body>
<script>
   
		function validateform(){
			var cardnumber = document.myform.cardnumber.value;
			if(!/^([0-9])*$/.test(cardnumber)){
				//alert("Give Proper format of cardnumber");
				$("#ale1").show();
				$("#ale2").hide();
				$("#ale3").hide();
				$("#ale4").hide();
				return false;}
			if(cardnumber.length!=12){
				//alert("card number should contain 12 digits");
				$("#ale2").show();
				$("#ale1").hide();
				$("#ale3").hide();
				$("#ale4").hide();
				return false;}
			var cvv = document.myform.cvv.value;
			if(!/^[0-9]*$/.test(cvv)){
				//alert("Give Proper format of cvv");
				$("#ale3").show();
				$("#ale2").hide();
				$("#ale1").hide();
				$("#ale4").hide();
				return false;}
			if(cvv.length!=3){
				//alert("cvv should contain 3 digits");
				$("#ale4").show();
				$("#ale2").hide();
				$("#ale3").hide();
				$("#ale1").hide();
				return false;}
		}
		
		
		function validateform1(){
			var cardnumber1 = document.myform1.cardnumber.value;
			if(!/^([0-9])*$/.test(cardnumber1)){
				//alert("Give Proper format of cardnumber");
				$("#ale11").show();
				$("#ale21").hide();
				$("#ale31").hide();
				$("#ale41").hide();
				return false;}
			if(cardnumber1.length!=12){
				//alert("card number should contain 12 digits");
				$("#ale21").show();
				$("#ale11").hide();
				$("#ale31").hide();
				$("#ale41").hide();
				return false;}
			var cvv1 = document.myform1.cvv.value;
			if(!/^[0-9]*$/.test(cvv1)){
				//alert("Give Proper format of cvv");
				$("#ale31").show();
				$("#ale21").hide();
				$("#ale11").hide();
				$("#ale41").hide();
				return false;}
			if(cvv1.length!=3){
				//alert("cvv should contain 3 digits");
				$("#ale41").show();
				$("#ale21").hide();
				$("#ale31").hide();
				$("#ale11").hide();
				return false;}
		}
   </script>
</html>