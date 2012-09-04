<form method="POST" action="add">
  <fieldset>
	
		<?php echo $message; ?>

    <div class="control-group">
      <label class="control-label" for="aPartyLocation">A Party Location</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="aPartyLocation" value="<?php echo set_value('aPartyLocation'); ?>" name="aPartyLocation">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="aPartyPhone">A Party Phone</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="aPartyPhone"  value="<?php echo set_value('aPartyPhone'); ?>" name="aPartyPhone">
      </div>
	<input type="submit" class="btn btn-primary btn-small" value="Add A Party"></input>
  </fieldset>
</form>