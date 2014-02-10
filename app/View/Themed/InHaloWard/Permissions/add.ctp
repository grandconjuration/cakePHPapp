<?php $this->extend('/Elements/backToAdmin'); ?>
<h2>Permissie toevoegen</h2>
<?php
	echo $this->Form->create('Permission');
	echo $this->Form->input('Aro', array('label' => 'Aro (id [int])'));
	echo $this->Form->input('Aco', array('label' => 'Aco (id [int])'));
	echo $this->Form->input('Actie', array('label' => 'Actie', 'type' => 'select', 'selected' => 'allow', 'options' => array('allow', 'deny')));
	echo $this->Form->end('Permissie opslaan');
?><?php 