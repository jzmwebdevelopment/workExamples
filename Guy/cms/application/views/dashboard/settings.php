<?php echo $message; ?>

<?php echo print_r($contentMangement); ?>
<table class="table">
	<thead>
	      <tr>
	        <th>Option</th>
			<th>Value</th>
	        <th>Options</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php foreach($contentMangement as $mangement) : ?>
			<tr>
	 		<td><?php echo $mangement['cms_name'];?></td>
			<td></td>
			<td><a href="users/edit/">Edit</a> | <a href="users/delete/">Delete</a></td>
		</tr>
		<?php endforeach; ?>
	    </tbody>
	</table>