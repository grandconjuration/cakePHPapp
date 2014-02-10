<h2>Groep toevoegen</h2>
<?php
	echo $this->Form->create('Group');
	echo $this->Form->input('name', array('label' => 'Naam'));
	echo $this->Form->end('Groep opslaan');
?>