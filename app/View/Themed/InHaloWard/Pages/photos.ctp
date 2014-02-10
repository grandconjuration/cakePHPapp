<?php $this->extend('/Common/media'); ?>
<?php $this->assign('currentPage', 'photos'); ?>
<?php $this->set('title_for_layout', "Media - Foto's"); ?>
<?php $this->Html->script('mootools-more-1.4.0.1', array('inline' => false)); ?>

<?php $this->Html->script('cerabox.min', array('inline' => false)); ?>
<?php $this->Html->css('cerabox', null, array('inline' => false)); ?>
<?php $this->Js->buffer("$$('.gallery a.ceraBox').cerabox({
	animation: 'ease',
	loaderAtItem: true,
	titleFormat: 'Afbeelding {number} / {total} - {title}',
	fixedPosition: true
});"); ?>
<div class="gallery">
<h2>Press photo</h2>
<table class="photos">
<tr>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm8.staticflickr.com/7117/7427716730_83a80db2f0_s.jpg',
		array('alt' => 'In Halo band foto')),
		'http://farm8.staticflickr.com/7117/7427716730_83a80db2f0_c.jpg',
		array('class' => 'ceraBox', 'title' => 'In Halo band foto', 'escape' => false));
?>	
</td>
</tr>
</table>
<div class="small" style="float:right;">Copyright <a href="http://www.flickr.com/noellanillesen/">Noëlla Nillesen</a></div>
<br/>
<h2>Repetitie</h2>
<table class="photos">
<tr>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8015/7427360852_92463c4f2a_s.jpg',
		array('alt' => 'Ward van Ipkens')),
		'http://farm9.staticflickr.com/8015/7427360852_92463c4f2a_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Ward van Ipkens', 'escape' => false));
?>	
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8011/7427364292_8a1d816334_s.jpg',
		array('alt' => 'Tom van Sadelhoff')),
		'http://farm9.staticflickr.com/8011/7427364292_8a1d816334_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Tom van Sadelhoff', 'escape' => false));
?>	
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm6.staticflickr.com/5152/7427370768_b5b870729a_s.jpg',
		array('alt' => 'Simon Whiteley')),
		'http://farm6.staticflickr.com/5152/7427370768_b5b870729a_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Simon Whiteley', 'escape' => false));
?>	
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm8.staticflickr.com/7246/7427382214_560060cd79_s.jpg',
		array('alt' => 'Artur Hodes')),
		'http://farm8.staticflickr.com/7246/7427382214_560060cd79_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Artur Hodes', 'escape' => false));
?>	
</td>
</tr>
</table>

<div class="small" style="float:right;">Copyright <a href="http://www.flickr.com/noellanillesen/">Noëlla Nillesen</a></div>
<br/>
<h2>Café Dollars, Nijmegen</h2>
<table class="photos">
<tr>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8167/7427307940_209ae9cd71_s.jpg',
		array('alt' => 'Artur Hodes')),
		'http://farm9.staticflickr.com/8167/7427307940_209ae9cd71_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Artur Hodes', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8162/7427308724_e716a96b1c_s.jpg',
		array('alt' => 'Ward van Ipkens')),
		'http://farm9.staticflickr.com/8162/7427308724_e716a96b1c_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Ward van Ipkens', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm6.staticflickr.com/5324/7427310258_7d3b5b3c5e_s.jpg',
		array('alt' => 'Tom van Sadelhoff')),
		'http://farm6.staticflickr.com/5324/7427310258_7d3b5b3c5e_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Tom van Sadelhoff', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm8.staticflickr.com/7254/7427310856_fde204d99a_s.jpg',
		array('alt' => 'Simon Whiteley')),
		'http://farm8.staticflickr.com/7254/7427310856_fde204d99a_c.jpg',
		array('class' => 'ceraBox', 'title' => 'Simon Whiteley', 'escape' => false));
?>
</td>
</tr>
</table>
<div class="small" style="float:right;">Copyright <a href="http://www.flickr.com/noellanillesen/">Noëlla Nillesen</a></div>

<h2>Melkweg, Amsterdam</h2>
<table class="photos">
<tr>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8292/7727721794_509820f42b_s.jpg',
		array('alt' => 'In Halo')),
		'http://farm9.staticflickr.com/8292/7727721794_509820f42b_c.jpg',
		array('class' => 'ceraBox', 'title' => 'In Halo - Melkweg, Amsterdam', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8431/7727720606_6b0c12fe76_s.jpg',
		array('alt' => 'In Halo')),
		'http://farm9.staticflickr.com/8431/7727720606_6b0c12fe76_c.jpg',
		array('class' => 'ceraBox', 'title' => 'In Halo - Melkweg, Amsterdam', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm9.staticflickr.com/8291/7727718946_bc8a4b3ee7_s.jpg',
		array('alt' => 'In Halo')),
		'http://farm9.staticflickr.com/8291/7727718946_bc8a4b3ee7_c.jpg',
		array('class' => 'ceraBox', 'title' => 'In Halo - Melkweg, Amsterdam', 'escape' => false));
?>		
</td>
<td>
<?php echo $this->Html->link($this->Html->image('http://farm8.staticflickr.com/7121/7727717578_b455a0daf8_s.jpg',
		array('alt' => 'In Halo')),
		'http://farm8.staticflickr.com/7121/7727717578_b455a0daf8_c.jpg',
		array('class' => 'ceraBox', 'title' => 'In Halo - Melkweg, Amsterdam', 'escape' => false));
?>		
</td>
</tr>
</table>
</div>
</div>