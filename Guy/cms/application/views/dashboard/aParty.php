<?php echo $message; ?>

<table class="table">
	<thead>
	      <tr>
	        <th>Location</th>
			<th>Phone</th>
	        <th>Options</th>
	        <th><a href="aParty/add"><button class="btn btn-primary btn-small">Add A Party</button></th></a>
	      </tr>
	    </thead>
	    <tbody>
	      <?php foreach($aPartys as $aParty) : ?>
			<tr>
	 		<td><?php echo $aParty['location'];?></td>
			<td><?php echo $aParty['phone']; ?></td>
			<td><a href="aParty/edit/<?php echo $aParty['id'];?>">Edit</a> | <a href="aParty/delete/<?php echo $aParty['id'];?>">Delete</a></td>
		</tr>
		<?php endforeach; ?>
	    </tbody>
	</table>