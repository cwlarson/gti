<!DOCTYPE html>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/_resources/php/global-functions.php');
		echo $GLOBAL_HEAD;
	?>
	<link rel="stylesheet" type="text/css" href ="/_resources/css/contact.css">
</head>

<body>
	<?php
		echo $GLOBAL_NAV;
	?>
	
	<div class="container">
		<h1>Contact Us</h1>
		<p>If you have a question or would like more information about our services, please contact us via phone, fax, email, or use the form below.</p>
		<p class="highlighted">Any information provided will be kept strictly confidential.</p>
		<div class="row">
			<div class="col-sm-8" id="request-form-col">
				<h3>Consulting &amp; Information Request Form</h3>
				<form class="form-horizontal">
					<!-- NAME Input -->
					<div class="form-group">
						<label for="input-name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input-name" name="input-name" placeholder="Name">
						</div>
					</div>

					<!-- COMPANY Input -->
					<div class="form-group">
						<label for="input-company" class="col-sm-2 control-label">Company</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input-company" name="input-company" placeholder="Company">
						</div>
					</div>

					<!-- ADDRESS Input -->
					<div class="form-group">
						<label for="input-address-street" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="input-address-street" name="input-address-street" placeholder="Street">
						</div>
						<div class="col-sm-offset-2 col-sm-10" id="address2">
							<input type="text" class="form-control 1col-xs-5" id="input-address-city" name="input-address-city" placeholder="City">
							<input type="text" class="form-control 1col-xs-3" id="input-address-state" name="input-address-state" placeholder="State">
							<input type="text" class="form-control 1col-xs-4" id="input-address-zip" name="input-address-zip" placeholder="ZIP">
						</div>
					</div>

					<!-- PHONE Inputs -->
					<div class="form-group">
						<label for="input-phone" class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-4">
							<input type="tel" class="form-control" id="input-phone" name="input-phone" placeholder="Phone">
						</div>

						<label for="input-email" class="col-sm-2 control-label">Call me</label>
						<div class="col-sm-4">
							<select class="form-control">
								<option>Any time</option>
								<option>Morning</option>
								<option>Evening</option>
							</select>
						</div>
					</div>

					<!-- EMAIL Input -->
					<div class="form-group">
						<label for="input-email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="input-email" name="input-email" placeholder="Email">
						</div>
					</div>

					<!-- AREAS OF INTEREST Inputs -->
					<div class="form-group">
						<label for="input-interests" class="col-sm-2 control-label">Areas of Interest</label>
						<div class="col-sm-10">
							<label for="input-interests-systems">
								<input type="checkbox" id="input-interests-systems" name="input-interests" value="Systems"> Systems
							</label>
							<label for="input-interests-asic">
								<input type="checkbox" id="input-interests-asic" name="input-interests" value="ASIC"> ASIC
							</label>
							<label for="input-interests-mixedSignal">
								<input type="checkbox" id="input-interests-mixedSignal" name="input-interests" value="Mixed Signal"> Mixed Signal
							</label>
							<label for="input-interests-mechanical">
								<input type="checkbox" id="input-interests-mechanical" name="input-interests" value="Mechanical"> Mechanical
							</label>
							<label for="input-interests-embedded">
								<input type="checkbox" id="input-interests-embedded" name="input-interests" value="Embedded System Design"> Embedded System Design
							</label>
							<label for="input-interests-compliance">
								<input type="checkbox" id="input-interests-compliance" name="input-interests" value="EMC/EMI Compliance"> EMC/EMI Compliance
							</label>
							<label for="input-interests-other">
								<input type="checkbox" id="input-interests-other" name="input-interests" value="Other"> Other (include details below)
							</label>
						</div>
					</div>

					<!-- MESSAGE Input -->
					<div class="form-group">
						<label for="input-details" class="col-sm-2 control-label">Details</label>
						<div class="col-sm-10">
							<textarea id="input-details" name="input-details" class="form-control"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info">Submit Form</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-4" id="contact-info-col">
				<h3>Contact Information</h3>
				<table id="contact-info-table">
					<tr>
						<td>Phone:</td>
						<td><?php echo $contactInfo['phone']['office']; ?></td>
					</tr>
					<tr>
						<td>Fax:</td>
						<td><?php echo $contactInfo['phone']['fax']; ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><a href="mailto:<?php echo $contactInfo['email']; ?>">Email us</a></td>
					</tr>
					<tr>
						<td>Office:</td>
						<td>
							<?php echo $contactInfo['address']['physical']['line1']; ?> <br/>
							<?php echo $contactInfo['address']['physical']['line2']; ?>
						</td>
					</tr>
					<tr>
						<td>Mailing:</td>
						<td>
							<?php echo $contactInfo['address']['mailing']['line1']; ?> <br/>
							<?php echo $contactInfo['address']['mailing']['line2']; ?>
						</td>
					</tr>
				</table>
				<!-- <p><b>Phone:</b> {{contactInfo.phone.office}}</p> -->
				<!-- <p><b>Fax:</b> {{contactInfo.phone.office}}</p> -->
				<!-- <p><b>Phone:</b> {{contactInfo.phone.office}}</p> -->
			</div>
		</div>
	</div>
	
	<?php
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>



