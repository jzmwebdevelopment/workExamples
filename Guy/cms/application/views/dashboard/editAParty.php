<form method="POST" action="<?php echo $aPartyContent[0]['id']; ?>">
  <fieldset>
	
		<?php echo $message; ?>

    <div class="control-group">
      <label class="control-label" for="aPartyLocation">A Party Location</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="aPartyLocation" value="<?php echo $aPartyContent[0]['location'] ?>" name="aPartyLocation">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="aPartyPhone">A Party Phone</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="aPartyPhone"  value="<?php echo $aPartyContent[0]['phone'] ?>" name="aPartyPhone">
      </div>
	<input type="submit" class="btn btn-primary btn-small" value="Edit A Party"></input>
  </fieldset>
</form>