<?php $this->extend('/Common/backToAdmin'); ?>
<h2>ACO toevoegen</h2>
<?php
	echo $this->Form->create('Aco');
	echo $this->Form->input('alias', array('label' => 'Alias'));
	echo $this->Form->input('parent_id', array('label' => 'Parent id', 'type' => 'text'));
	echo $this->Form->end('ACO opslaan');
?>