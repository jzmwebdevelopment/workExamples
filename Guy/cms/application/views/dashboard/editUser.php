<form method="POST" action="<?php echo $userContent[0]['id'];?>">
  <fieldset>
	
		<?php echo $message; ?>
		
    <div class="control-group">
      <label class="control-label" for="userFirstName">First Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="userFirstName" value="<?php echo $userContent[0]['fName'];?>" name="userFirstName">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="userLastName">Last Name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="userLastName"  value="<?php echo $userContent[0]['lName'];?>" name="userLastName">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="userEmail">E-Mail</label>
      <div class="controls">
        <input type="email" class="input-xlarge" id="userEmail" name="userEmail" value="<?php echo $userContent[0]['email'];?>"
      </div>
    </div>
    <div class="control-group">
	  <label class="control-label" for="userPassword">Password</label>
      <div class="controls">
		<input type="password" class="input-xlarge" id="userPassword" name="userPassword">
      </div>
    </div>
	<input type="submit" class="btn btn-primary btn-small" value="Edit User"></input>
  </fieldset>
</form>