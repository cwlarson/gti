<!DOCTYPE html>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/_resources/php/global-functions.php');
		echo $GLOBAL_HEAD;
	?>
</head>
<body>
	<?php
		echo $GLOBAL_NAV;
	?>
	<div class="container">
<?php 
date_default_timezone_set('America/Los_Angeles');
$timestamp = date('M j, o, g:i A');

if(isset($_POST['input-interests'])){
	$interests = array_shift($_POST['input-interests']);
	while(count($_POST['input-interests'])) {
		$interests .= ", " . array_shift($_POST['input-interests']);
	}
} else {
	$interests = "(none selected)";
}
// error_log(print_r($_POST, true));
$to = $_POST['input-email'];
// error_log($to);
$subject = "Sending a test email from PHP!";
$message = <<<MESSAGE
	<html>
		<head>
			<title>Consulting &amp; Information Request</title>
			<style>
				h1, h3 {
					margin: 10px 0;
					text-align: center;
				}
				td {
					vertical-align: top;
					padding: 10px 10px 0 0;
					line-height: 1.2;
				}
				td:nth-of-type(1) {
					font-weight: bold;
				}
			</style>
		</head>
		<body>
			<h1>Consulting &amp; Information Request</h1>
			<h3>- Guerra Tech Contact Form Submission -</h3>
			<br/>
			
			<table>
				<tr>
					<td>Submitted:</td>
					<td>$timestamp</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>{$_POST['input-name']}</td>
				</tr>
				<tr>
					<td>Company:</td>
					<td>{$_POST['input-company']}</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>
						{$_POST['input-address-street']} <br/>
						{$_POST['input-address-city']}, {$_POST['input-address-state']} {$_POST['input-address-zip']}
					</td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td>{$_POST['input-phone']} <i>(available {$_POST['input-available']})</i></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>{$_POST['input-email']}</td>
				</tr>
				<tr>
					<td>Interests:</td>
					<td>$interests</td>
				</tr>
				<tr>
					<td>Details:</td>
					<td>{$_POST['input-details']}</td>
				</tr>
			</table>
		</body>
	</html>
MESSAGE;

$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=iso-8859-1";
$headers[] = "From: webmaster@caseywlarson.com";
$headers[] = "Reply-To: webmaster@caseywlarson.com";
$headers[] = "X-Mailer: PHP/" . phpversion();
error_log($to);
error_log($subject);
error_log($message);
error_log(implode("\r\n", $headers));
$m = mail($to, $subject, $message, implode("\r\n", $headers), "-femail.address@example.com");
if($m) {
	echo "<h2 class='text-success'>Thank you for submitting your inquiry.</h2><p>We will get back to you as soon as possible.</p>";
} else {
	echo "<h2 class='text-danger'>Error submitting form.  Please try again.</h2>";
}
?>
	</div>
	
	<?php
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>