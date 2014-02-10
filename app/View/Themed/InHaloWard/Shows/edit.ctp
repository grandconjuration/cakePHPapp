<?php $this->extend('/Common/showsform'); ?>
<?php echo $this->element('backToShowsAdmin'); ?><br/>
<?php echo $this->element('backToAdmin'); ?>
<h1>Show aanpassen</h1>
<?php
	echo $this->element('errors', array('errors' => $errors));
	$this->append('css');
	echo $this->Html->css('/theme/InHaloWard/css/datepicker_dashboard') . PHP_EOL;
	$this->end();
	echo $this->Form->create('Show');
	echo $this->Form->input('location', array(
		'error'		 => false,
		'label'		 => 'Locatie (stad/dorp/plaatsnaam)',
		'before'	 => '<table class="styled"><tr><td>',
		'between'	 => '</td><td>',
		'after'		 => '</td></tr>',
		'div'		 => false
	));
	echo $this->Form->input('venue', array(
		'error'		 => false,
		'label'		 => 'Podium [bv. Willemeen, The Stage, etc]',
		'before'	 => '<tr><td>',
		'between'	 => '</td><td>',
		'after'		 => '</td></tr>',
		'div'		 => false
	));
	echo $this->Form->input('datetime', array(
		'error'		 => false,
		'class'		 => 'date demo_dashboard',
		'label'		 => 'Datum en tijd',
		'type'		 => 'text',
		'before'	 => '<tr><td>',
		'between'	 => '</td><td>',
		'after'		 => '</td></tr>',
		'div'		 => false
	));
	echo $this->Form->input('cost', array(
		'error'		 => false,
		'label'		 => 'Eventuele kosten (niet verplicht) [bv: 4.2 = €4,20] <br/>Als het gratis is leeg laten',
		'before'	 => '<tr><td>',
		'between'	 => '</td><td>',
		'after'		 => '</td></tr>',
		'div'		 => false
	));
	echo $this->Form->end(array(
		'label'	 => 'Show datum opslaan',
		'before' => '<tr><td colspan="2">',
		'after'	 => '</td></tr></table>',
		'div'	 => false
	));

?>