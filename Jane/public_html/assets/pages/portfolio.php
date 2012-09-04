<?php

	$path   = 'assets/portfolio/';
	$source = uri_segment(2)? $path . uri_segment(2) . $thumbs: $path .'wedding-one';
	$images = glob($source.'/*-t.jpg');
	$directories = glob($path.'*');
	
?>
	
	<?php if($directories): ?>
		<div id="gallery-directories">
			<strong>Portfolio: </strong>
<div id="gallery-directories">
			<strong>Portfolio: </strong>
				
			<a href="<?=base_url()?>portfolio/wedding-one">Wedding One</a>
			
			
			<a href="<?=base_url()?>portfolio/wedding-two">Wedding Two</a>
			
					
			<a href="<?=base_url()?>portfolio/wedding-three">Wedding Three</a>
			
			<a href="<?=base_url()?>portfolio/photomanipulation">Photomanipulation</a>
			
			<a href="<?=base_url()?>portfolio/portraits">Portraits</a>

			<a href="<?=base_url()?>portfolio/commercial">Commercial</a>
			
			
					
			
			
					

					
			
			
			
				</div>
		</div>
	<?php endif; ?>
		
	<?php if($images): ?>
		
		<div id="gallery-images">
		<?php foreach($images as $thumbnail): ?>
			
			<a href="<?=base_url() . str_replace('-t.jpg', '.jpg', $thumbnail)?>" rel="lightbox[portfolio]"><img src="<?=base_url() . $thumbnail?>" alt="<?=$thumbnail?>" /></a>
			
		<?php endforeach ?>
		</div>
	
	<?php else: ?>
		
		<p class="errorMessage">There are No Images in this Gallery.</p>
		
	<?php endif; ?>