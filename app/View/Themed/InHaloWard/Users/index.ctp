<?php $this->extend('/Common/users'); ?>
<?php echo $this->element('backToAdmin'); ?>
<h1>Gebruikers beheren</h1>
<ul>	
	<li><?php echo $this->Html->link('Gebruiker toevoegen', array(

		'controller' => 'users',
		'action'	 => 'add'),
		array('title' => 'Gebruiker toevoegen'));
?></li></ul>
<table class="styled">
	<tr>
		<th>id</th>
		<th>gebruikersnaam</th>
		<th>volledige naam</th>
		<th>email adres</th>
		<th>rol</th>
		<th>opties</th>
	</tr>
	<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo $user['User']['id']; ?></td>
			<td><?php echo $user['User']['username']; ?></td>
			<td><?php echo $user['User']['name']; ?></td>
			<td><?php echo $user['User']['email']; ?></td>
			<td><?php echo $user['Group']['name']; ?></td>
			<td><?php echo $this->Html->link('wijzigen', array(
			'controller' => 'users',
			'action'	 => 'edit',
			$user['User']['id']),
			array('title' => 'wijzigen'));
?><br/>
			<?php echo $this->Form->postLink('verwijderen', array(
			'controller' => 'users',
			'action'	 => 'delete',
			$user['User']['id']),
			array('title' => 'verwijderen'),
			'Weet je zeker dat je deze gebruiker wilt verwijderen?');
?></td>
		</tr>
	<?php endforeach; ?>
</table>