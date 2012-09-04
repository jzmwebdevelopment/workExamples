	<form method="POST" action="home/login">
	  <fieldset>
		
		<?php echo $message; ?>
		
	    <div class="control-group">
	      <label class="control-label" for="userEmail">Login E-Mail</label>
	      <div class="controls">
	        <input type="email" class="input-xlarge" id="userEmail" name="userEmail">
	      </div>
	    </div>
	    <div class="control-group">
		  <label class="control-label" for="userPassword">Login Password</label>
	      <div class="controls">
			<input type="password" class="input-xlarge" id="userPassword" name="userPassword">
	      </div>
	    </div>
		<button class="btn btn-primary btn-small">Login</button>
	  </fieldset>
	</form>