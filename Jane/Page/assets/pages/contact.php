<h1>Contact Jane White Photography</h1>


<div class="floatRight column">
	<h2>Jane White Photography</h2>
	<p>1530 State Highway 2<br/>
	R.D.7<br/>
	Papamoa<br/>
	Bay of Plenty<br/>
	New Zealand
	<br/><br/>
	Phone - <strong>07 542 3093</strong> <br/>
	Fax - <strong>07 542 0728</strong> <br/>
	Mobile - <strong>021 1444 778</strong>
</div>

<form action="<?=htmlentities(basename($_SERVER['PHP_SELF']))?>" method="post" class="column"> 
	
	<?php if($_POST) include('assets/includes/contact.php'); ?>
	
	<p><label for="name">Name</label><input type="text" name="name" value="<?=$_POST['name']?>" id="name" class="textbox" /></p>
	<p><label for="phone">Phone</label><input type="text" name="phone" value="<?=$_POST['phone']?>" id="phone" class="textbox" /></p>
	<p><label for="email">E-mail</label><input type="text" name="email" value="<?=$_POST['email']?>" id="email" class="textbox" /></p>
	
	<p><label for="comments">Comments</label><textarea name="comments" id="comments" class="textbox"><?=$_POST['email']?></textarea></p>
	<p><input type="submit" value="Contact" id="contact"></p>
	
</form>
