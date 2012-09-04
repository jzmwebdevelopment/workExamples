<?php echo $message; ?>

<table class="table">
	<thead>
	      <tr>
	        <th>Name</th>
			<th>E-Mail</th>
	        <th>Options</th>
	        <th><a href="users/add"><button class="btn btn-primary btn-small">Add User</button></th></a>
	      </tr>
	    </thead>
	    <tbody>
	      <?php foreach($userDetails as $userDetail) : ?>
			<tr>
	 		<td><?php echo $userDetail['fName'];?> <?php echo $userDetail['lName'];?></td>
			<td><?php echo $userDetail['email']; ?></td>
			<td><a href="users/edit/<?php echo $userDetail['id'];?>">Edit</a> | <a href="users/delete/<?php echo $userDetail['id'];?>">Delete</a></td>
		</tr>
		<?php endforeach; ?>
	    </tbody>
	</table>