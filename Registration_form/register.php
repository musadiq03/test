<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form in PHP and Mysql, Sign up Form with PHP and Mysql</title>
<meta name="description" content="This tutorial explains that how to create a simple registration form in PHP and mysql with Javascript validation for input and store input data in database."/>
<meta name="keywords" content="Registration Form in PHP and Mysql with Javascript validation, Registration Form with Javascript validation, Sign up, Registration Form, Sign up Form with Javascript validation, Registration Form in PHP"/>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>
</head>
<body>

	<form name="frmregister"action="registerAction.php" method="post" onSubmit="return validate();"	>
		<table class="form" border="0">
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="name"><strong>Nick Name:</strong></label></th>
				<td><input class="inp-text" name="nick_name" id="nick_name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="name"><strong>Email:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" /></td>
			</tr>
			
			<tr>
				<th><label for="name"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
				
			</tr>
		</table>
	</form>
<div style="padding: 35px 0 0 300px;"> <a href="http://www.discussdesk.com/create-registration-form-using-php-and-mysql.htm">Go back to the Tutorial </a> </div>
</body>
</html>
