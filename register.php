<?php include("processunsecure.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <title>REGISTER</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>
    <script src="js/processinsecure.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
		<body style = "padding-top: 50px; padding-bottom: 150px;">
			<div class = "container">
				<div class = "row">
				
					<div class="panel panel-default col-md-6 col-md-offset-3">
			 		 <div class="panel-body">
					<h1 class = "text-center">Register</h1>
					<a href="index.html"><img src="images/registerlogo.png" style="margin-left:25%;" title="AFC logo" alt="afc logo"></a>
				
					<form method="post" action="register_insert.php" onsubmit="return validateForm()" name="register">
						<span style = "color:red"><?php echo $register_notice; ?></span>
						<div class="row">
							<!-- Field for first name -->
							<div class="form-group col-md-6">
						    <label for="fname">First Name<span style = "color:red">
									<?php echo $firstname_err; ?></span></label>
						    <input type="text" class="form-control" name="fname" id="fname"
								placeholder="First Name" value="<?php echo $firstname; ?>" autofocus>
								<span style = "color:red"><?php echo $firstname_error; ?></span>
						  </div>
							<!-- Field for last name -->
							<div class="form-group col-md-6">
								<label for="lname">Last Name<span style = "color:red">
									<?php echo $lastname_err; ?></span></label>
								<input type="text" class="form-control" name="lname" id="lname"
								placeholder="Last Name" value="<?php echo $lastname; ?>" autofocus>
								<span style = "color:red"><?php echo $lastname_error; ?></span>
							</div>
						</div>

						<div class="row">
							<!-- Field for country-->
							<div class="form-group col-md-6">
							    <label for="country">Country<span style = "color:red">
							           <?php echo $country_err; ?></span></label></label>
							    <select class="form-control" name="country" id="country" 
							    placeholder="Country" autofocus>
							    <span style = "color:red"><?php echo $country_error; ?></span>
							      <option value="select">Select</option>
							      <option <?php if ($country == 'Algeria' ) echo 'selected' ; ?> value="Algeria"  value="<?php echo $country; ?>">Algeria</option>
							      <option <?php if ($country == 'Angola' ) echo 'selected' ; ?> value="Angola">Angola</option>
							      <option <?php if ($country == 'Benin' ) echo 'selected' ; ?> value="Benin">Benin</option>
							      <option <?php if ($country == 'Botswana' ) echo 'selected' ; ?> value="Botswana">Botswana</option>
							      <option <?php if ($country == 'Burkina' ) echo 'selected' ; ?> value="Burkina">Burkina Faso</option>
							      <option <?php if ($country == 'Burundi' ) echo 'selected' ; ?> value="Burundi">Burundi</option>
							      <option <?php if ($country == 'Cameroon' ) echo 'selected' ; ?> value="Cameroon">Cameroon</option>
							      <option <?php if ($country == 'Canary' ) echo 'selected' ; ?> value="Canary">Canary Islands</option>
							      <option <?php if ($country == 'Cape' ) echo 'selected' ; ?> value="Cape">Cape Verde</option>
							      <option <?php if ($country == 'Central' ) echo 'selected' ; ?> value="Central">Central African Republic of Congo</option>
							      <option <?php if ($country == 'Djibouti' ) echo 'selected' ; ?> value="Djibouti">Djibouti</option>
							      <option <?php if ($country == 'Egypt' ) echo 'selected' ; ?> value="Egypt">Egypt</option>
							      <option <?php if ($country == 'Equatorial' ) echo 'selected' ; ?> value="Equatorial">Equatorial Guinea</option>
							      <option <?php if ($country == 'Eritrea' ) echo 'selected' ; ?> value="Eritrea">Eritrea</option>
							      <option <?php if ($country == 'Ethiopia' ) echo 'selected' ; ?> value="Ethiopia">Ethiopia</option>
							      <option <?php if ($country == 'Gabon' ) echo 'selected' ; ?> value="Gabon">Gabon</option>
							      <option <?php if ($country == 'Gambia' ) echo 'selected' ; ?> value="Gambia">Gambia</option>
							      <option <?php if ($country == 'Ghana' ) echo 'selected' ; ?> value="Ghana">Ghana</option>
							      <option <?php if ($country == 'Guinea-Bissau' ) echo 'selected' ; ?> value="Guinea-Bissau">Guinea-Bissau</option>
							      <option <?php if ($country == 'Kenya' ) echo 'selected' ; ?> value="Kenya">Kenya</option>
							      <option <?php if ($country == 'Lesotho' ) echo 'selected' ; ?> value="Lesotho" >Lesotho</option>
							      <option <?php if ($country == 'Liberia' ) echo 'selected' ; ?> value="Liberia">Liberia</option>
							      <option <?php if ($country == 'Libya' ) echo 'selected' ; ?> value="Libya">Libya</option>
							      <option <?php if ($country == 'Magadascar' ) echo 'selected' ; ?> value="Magadascar">Magadascar</option>
							      <option <?php if ($country == 'Malawi' ) echo 'selected' ; ?> value="Malawi">Malawi</option>
							      <option <?php if ($country == 'Mali' ) echo 'selected' ; ?> value="Mali">Mali</option>
							      <option <?php if ($country == 'Mauritania' ) echo 'selected' ; ?> value="Mauritania">Mauritania</option>
							      <option <?php if ($country == 'Mauritius' ) echo 'selected' ; ?> value="Mauritius">Mauritius</option>
							      <option <?php if ($country == 'Morocco' ) echo 'selected' ; ?> value="Morocco">Morocco</option>
							      <option <?php if ($country == 'Mozambique' ) echo 'selected' ; ?> value="Mozambique">Mozambique</option>
							      <option <?php if ($country == 'Namibia' ) echo 'selected' ; ?> value="Namibia">Namibia</option>
							      <option <?php if ($country == 'Niger' ) echo 'selected' ; ?> value="Niger">Niger</option>
							      <option <?php if ($country == 'Nigeria' ) echo 'selected' ; ?> value="Nigeria">Nigeria</option>
							      <option <?php if ($country == 'Republic' ) echo 'selected' ; ?> value="Republic">Republic of Congo</option>
							      <option <?php if ($country == 'Rwanda' ) echo 'selected' ; ?> value="Rwanda">Rwanda</option>
							      <option <?php if ($country == 'Sao' ) echo 'selected' ; ?> value="Sao">Sao Tome and Principe</option>
							      <option <?php if ($country == 'Senegal' ) echo 'selected' ; ?> value="Senegal">Senegal</option>
							      <option <?php if ($country == 'Seychelles' ) echo 'selected' ; ?> value="Seychelles">Seychelles</option>
							      <option <?php if ($country == 'Sierra' ) echo 'selected' ; ?> value="Sierra">Sierra Leone</option>
							      <option <?php if ($country == 'Somalia' ) echo 'selected' ; ?> value="Somalia">Somalia</option>
							      <option <?php if ($country == 'South' ) echo 'selected' ; ?> value="South">South Africa</option>
							      <option <?php if ($country == 'Sudan' ) echo 'selected' ; ?> value="Sudan">Sudan</option>
							      <option <?php if ($country == 'Swaziland' ) echo 'selected' ; ?> value="Swaziland">Swaziland</option>
							      <option <?php if ($country == 'Tanzania' ) echo 'selected' ; ?> value="Tanzania">Tanzania</option>
							      <option <?php if ($country == 'Togo' ) echo 'selected' ; ?> value="Togo">Togo</option>
							      <option <?php if ($country == 'Tunisia' ) echo 'selected' ; ?> value="Tunisia">Tunisia</option>
							      <option <?php if ($country == 'Uganda' ) echo 'selected' ; ?> value="Uganda">Uganda</option>
							      <option <?php if ($country == 'Western' ) echo 'selected' ; ?> value="Western">Western Sahara</option>
							      <option <?php if ($country == 'Zambia' ) echo 'selected' ; ?> value="Zambia">Zambia</option>
							      <option <?php if ($country == 'Zimbabwe' ) echo 'selected' ; ?> value="Zimbabwe">Zimbabwe</option>
							      <option <?php if ($country == 'Other' ) echo 'selected' ; ?> value="Other">Other</option>

							    </select>
							  </div>
							<!-- Field for city -->
							<div class="form-group col-md-6">
								<label for="city">City<span style = "color:red">
								<?php echo $city_err; ?></span></label>
								<select class="form-control" name="city" id="city" 
							    placeholder="City">" autofocus>
							    <span style = "color:red"><?php echo $city_error; ?></span>
							      <option value="select">Select</option>
							      <option <?php if ($city == 'Nairobi') echo 'selected' ; ?> value="Nairobi">Nairobi</option>
							      <option <?php if ($city == 'Kisumu' ) echo 'selected' ; ?> value="Kisumu">Kisumu</option>
							      <option <?php if ($city == 'Mombasa' ) echo 'selected' ; ?> value="Mombasa">Mombasa</option>
							      <option <?php if ($city == 'Other' ) echo 'selected' ; ?> value="Other">Other</option>
							    </select>
							</div>
						</div>

						<div class="row">
							<!-- Field for farmLocation-->
							<div class="form-group col-md-6">
								<label for="farm">Farm Location<span style = "color:red">
								<?php echo $farm_err; ?></span></label>
								<select class="form-control" name="farm" id="farm" 
							    placeholder="Farm Location" autofocus>
							    <span style = "color:red"><?php echo $farm_error; ?></span>
							      <option value="select">Select</option>
							      <option <?php if ($farm == 'Baringo' ) echo 'selected' ; ?> value="Baringo">Baringo</option>
							      <option <?php if ($farm == 'Bomet' ) echo 'selected' ; ?> value="Bomet">Bomet</option>
							      <option <?php if ($farm == 'Bungoma' ) echo 'selected' ; ?>  value="Bungoma">Bungoma</option>
							      <option <?php if ($farm == 'Busia' ) echo 'selected' ; ?> value="Busia">Busia</option>
							      <option <?php if ($farm == 'Elgeyo' ) echo 'selected' ; ?> value="Elgeyo">Elgeyo Marakwet</option>
							      <option <?php if ($farm == 'Embu' ) echo 'selected' ; ?> value="Embu">Embu</option>
							      <option <?php if ($farm == 'Garissa' ) echo 'selected' ; ?> value="Garissa">Garissa</option>
							      <option <?php if ($farm == 'Homa' ) echo 'selected' ; ?> value="Homa">Homa Bay</option>
							      <option <?php if ($farm == 'Isiolo' ) echo 'selected' ; ?> value="Isiolo">Isiolo</option>
							      <option <?php if ($farm == 'Kajiado' ) echo 'selected' ; ?> value="Kajiado">Kajiado</option>
							      <option <?php if ($farm == 'Kakamega' ) echo 'selected' ; ?> value="Kakamega">Kakamega</option>
							      <option <?php if ($farm == 'Kericho' ) echo 'selected' ; ?> value="Kericho">Kericho</option>
							      <option <?php if ($farm == 'Kiambu' ) echo 'selected' ; ?> value="Kiambu">Kiambu</option>
							      <option <?php if ($farm == 'Kilifi' ) echo 'selected' ; ?> value="Kilifi">Kilifi</option>
							      <option <?php if ($farm == 'Kirinyaga' ) echo 'selected' ; ?> value="Kirinyaga">Kirinyaga</option>
							      <option <?php if ($farm == 'Kisii' ) echo 'selected' ; ?> value="Kisii">Kisii</option>
							      <option <?php if ($farm == 'Kisumu' ) echo 'selected' ; ?> value="Kisumu">Kisumu</option>
							      <option <?php if ($farm == 'Kitui' ) echo 'selected' ; ?> value="Kitui">Kitui</option>
							      <option <?php if ($farm == 'Kwale' ) echo 'selected' ; ?> value="Kwale">Kwale</option>
							      <option <?php if ($farm == 'Laikipia' ) echo 'selected' ; ?> value="Laikipia">Laikipia</option>
							      <option <?php if ($farm == 'Lamu' ) echo 'selected' ; ?> value="Lamu">Lamu</option>
							      <option <?php if ($farm == 'Machakos' ) echo 'selected' ; ?> value="Machakos">Machakos</option>
							      <option <?php if ($farm == 'Makueni' ) echo 'selected' ; ?> value="Makueni">Makueni</option>
							      <option <?php if ($farm == 'Mandera' ) echo 'selected' ; ?> value="Mandera">Mandera</option>
							      <option <?php if ($farm == 'Meru' ) echo 'selected' ; ?> value="Meru">Meru</option>
							      <option <?php if ($farm == 'Migori' ) echo 'selected' ; ?> value="Migori">Migori</option>
							      <option <?php if ($farm == 'Marsabit' ) echo 'selected' ; ?> value="Marsabit">Marsabit</option>
							      <option <?php if ($farm == 'Mombasa' ) echo 'selected' ; ?> value="Mombasa">Mombasa</option>
							      <option <?php if ($farm == "Murang'a" ) echo 'selected' ; ?> value="Murang'a">Murang'a</option>
							      <option <?php if ($farm == 'Nairobi' ) echo 'selected' ; ?> value="Nairobi">Nairobi</option>
							      <option <?php if ($farm == 'Nakuru' ) echo 'selected' ; ?> value="Nakuru">Nakuru</option>
							      <option <?php if ($farm == 'Nandi' ) echo 'selected' ; ?> value="Nandi">Nandi</option>
							      <option <?php if ($farm == 'Narok' ) echo 'selected' ; ?> value="Narok">Narok</option>
							      <option <?php if ($farm == 'Nyamira' ) echo 'selected' ; ?> value="Nyamira">Nyamira</option>
							      <option <?php if ($farm == 'Nyandarua' ) echo 'selected' ; ?> value="Nyandarua">Nyandarua</option>
							      <option <?php if ($farm == 'Nyeri' ) echo 'selected' ; ?> value="Nyeri">Nyeri</option>
							      <option <?php if ($farm == 'Samburu' ) echo 'selected' ; ?> value="Samburu">Samburu</option>
							      <option <?php if ($farm == 'Siaya' ) echo 'selected' ; ?> value="Siaya">Siaya</option>
							      <option <?php if ($farm == 'Taita' ) echo 'selected' ; ?> value="Taita">Taita Taveta</option>
							      <option <?php if ($farm == 'Tana' ) echo 'selected' ; ?> value="Tana">Tana River</option>
							      <option <?php if ($farm == 'Tharaka' ) echo 'selected' ; ?> value="Tharaka">Tharaka Nithi</option>
							      <option <?php if ($farm == 'Trans' ) echo 'selected' ; ?> value="Trans">Trans Nzoia</option>
							      <option <?php if ($farm == 'Turkana' ) echo 'selected' ; ?> value="Turkana">Turkana</option>
							      <option <?php if ($farm == 'Uasin' ) echo 'selected' ; ?> value="Uasin">Uasin Gishu</option>
							      <option <?php if ($farm == 'Vihiga' ) echo 'selected' ; ?> value="Vihiga">Vihiga</option>
							      <option <?php if ($farm == 'Wajir' ) echo 'selected' ; ?> value="Wajir">Wajir</option>
							      <option <?php if ($farm == 'West' ) echo 'selected' ; ?> value="West">West Pokot</option>
							      <option <?php if ($farm == 'Other' ) echo 'selected' ; ?> value="Other">Other</option>
							    </select>
							</div>
							<!-- Field for farm size -->
							<div class="form-group col-md-6">
							<label for="size"> Active Farm Size<span style = "color:red">
							<?php echo $size_err; ?></span></label>
							<input type="text" class="form-control" name="size" id="size"
							value="<?php echo $size; ?>" placeholder="Farm Size">
							<span style = "color:red"><?php echo $size_error; ?></span>
							</div>

						</div>

						<div class="row">
							<!-- Field for irrigation method-->
							<div class="form-group col-md-6">
								<label for="irrigation">Irrigation Method<span style = "color:red">
								<?php echo $irrigation_err; ?></span></label>
								<select class="form-control" name="irrigation" id="irrigation" 
							    placeholder="Irrigation Method" value="<?php echo $irrigation; ?>" autofocus>
							    <span style = "color:red"><?php echo $irrigation_error; ?></span>
							      <option value="select">Select</option>
							      <option value="Furrow">Furrow</option>
							      <option value="Drip">Drip</option>
							      <option value="Sprinkler">Sprinkler</option>
							      <option value="Other">Other</option>
							    </select>
							</div>
							
							<!-- Field for farming venture -->
							<div class="form-group col-md-6">
								<label for="venture">Farm Venture<span style = "color:red">
								<?php echo $venture_err; ?></span></label>
								<select class="form-control" name="venture" id="venture" 
							    placeholder="Farm Venture" autofocus>
							    <span style = "color:red"><?php echo $venture_error; ?></span>
							      <option value="select">Select</option>
							      <option <?php if ($venture == 'crop' ) echo 'selected' ; ?> value="crop">Crop Production</option>
							      <option <?php if ($venture == 'animal' ) echo 'selected' ; ?> value="animal">Animal Production</option>
							      <option <?php if ($venture == 'both' ) echo 'selected' ; ?> value="both">Both</option>
							    </select>
							</div>
						</div>

						<!-- Field for email -->
						<div class="form-group">
							<label for="email">Email<span style = "color:red">
								<?php echo $email_err; ?></span></label>
							<input type="email" class="form-control" name="email" id="email"
							placeholder="Email" value="<?php echo $email; ?>" autofocus>
							<span style = "color:red"><?php echo $email_error; ?></span>
						</div>

						<!-- Field for phonenumber or username -->
						<div class="form-group">
					    <label for="phone">Phone Number<span style = "color:red">
								<?php echo $phone_err; ?></span></label>
					    <input type="text" class="form-control" name="phone" id="phone"
							maxlength="20" placeholder="Phone Number" value="<?php echo $phone; ?>" onchange="checkUsername()" autofocus>
							<span id = "checkUsername"></span>
							<span style = "color:red"><?php echo $phone_error; ?></span>
							<input type="text" name="userStat" hidden id="userStat">
					  </div>
						<!-- Field for password -->
						<div class="form-group">
					    <label for="passwd">Password<span style = "color:red">
								<?php echo $password_err; ?></span></label>
					    <input type="password" class="form-control" name="passwd" id="passwd"
							value="<?php echo $password; ?>" placeholder="Password">
							<span style = "color:red"><?php echo $password_error; ?></span>
					  </div>

						<!-- Register Button -->
						<div class="form-group text-center">
							<button type="submit" name="register" value="register" class="btn btn-primary">REGISTER</button>
						</div>
						<p class="text-center">Already Have An Account? <a href="login.php">Login</a></p>
					</form>
			  </div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
			<p></p>
			<p class="text-center" style = "color: #fff">Time is a-running</p>
		</div>
	</nav>

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/processunsecure.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
</body>
</html>
