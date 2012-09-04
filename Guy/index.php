<!DOCTYPE html>
<html>
<head>
	<title>GA Calling</title>
</head>
<link rel="stylesheet" href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap.css">
<body>
	<?php
		$login = '094880107';
		$password = '123456';
		$officeNumber = array('094880107','0274184973');
	?>
	<div class="container">
		<form class="form-inline" method="GET" action="https://live.2talk.co.nz/dial.php">
					<input name="login" type="hidden" value="<?php echo $login;?>">
					<input name="password" type="hidden" value="<?php echo $password;?>">
					<?php
						echo '<label for="officeNumbers">Office Number: </label>';	
						echo '<select name="aparty">';
						
						foreach($officeNumber as $number)
						{
							echo '<option value="'.$number.'">'.$number.'</option>';
						}
						echo '</select>';
					?>
				<label for="bparty">Call: </label><input name="bparty" type="text" id="bparty">
				<button class="btn btn-primary" type="submit">Call</button>
			</form>
		</div>
</body>
</html>
