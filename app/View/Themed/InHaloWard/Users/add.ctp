<?php $this->extend('/Common/users'); ?>
<?php echo $this->element('backToUsersAdmin'); ?><br/>
<?php echo $this->element('backToAdmin'); ?>
<h1>Gebruiker toevoegen</h1>
<?php
	echo $this->element('errors', array('errors' => $errors));
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('error' => false, 'label' => 'Gebruikersnaam', 'before' => '<table class="styled"><tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>', 'div' => false));
	echo $this->Form->input('name', array('error' => false, 'label' => 'Volledige naam', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>'));
	echo $this->Form->input('email', array('error' => false, 'label' => 'E-mail adres', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>'));
	echo $this->Form->input('group_id', array('error' => false, 'label' => 'Groep', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>'));
	echo $this->Form->input('password', array('error' => false, 'label' => 'Wachtwoord', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>'));
	echo $this->Form->input('password_confirm', array('error' => false, 'type' => 'password', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>'));
	echo $this->Form->end(array('label' => 'Gebruiker opslaan', 'before' => '<tr><td colspan="2">', 'after' => '</td></tr></table>', 'div' => false));
	
?>