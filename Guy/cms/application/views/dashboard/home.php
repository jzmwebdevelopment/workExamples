<form class="form-inline" method="GET" action="https://live.2talk.co.nz/dial.php">
			<input name="login" type="hidden" value="">
			<input name="password" type="hidden" value="">
			
			<label for="officeNumbers">Office Number: </label>	
			<select name="aparty">
				<option value="Please Select">Please Select</option>
				<?php foreach($aPartyInformation as $information) : ?>
				<optgroup label="<?php echo $information['location'];?>">
					<option value="<?php echo $information['phone']; ?>"><?php echo $information['phone']; ?></option>
				</optgroup>
				<?php endforeach; ?>
			</select>
		<label for="bparty">Call: </label><input name="bparty" type="text" id="bparty">
		<button class="btn btn-primary" type="submit">Call</button>