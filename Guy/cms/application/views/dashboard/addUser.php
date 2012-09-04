<form method="POST" action="add">
  <fieldset>
	
		<?php echo $message; ?>

    <div class="control-group">
      <label class="control-label" for="userFirstName">First Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="userFirstName" value="<?php echo set_value('userFirstName'); ?>" name="userFirstName">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="userLastName">Last Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="userLastName"  value="<?php echo set_value('userLastName'); ?>" name="userLastName">
      </div>
    </div>
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
	<input type="submit" class="btn btn-primary btn-small" value="Add User"></input>
  </fieldset>
</form>