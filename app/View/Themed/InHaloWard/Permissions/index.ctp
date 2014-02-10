<?php $this->extend('/Elements/backToAdmin'); ?>
<h1>Permissies</h1>
<h2>Groepen</h2>
<table id="userTable">
	<tr>
		<th>id</th>
		<th>naam</th>
		<th>opties</th>
	</tr>
	<?php foreach ($groups as $group) : ?>
		<tr>
			<td><?php echo $group['Group']['id']; ?></td>
			<td><?php echo $group['Group']['name']; ?></td>
			<td></td>
		</tr>
	<?php endforeach; ?>
</table>

<h2>ACO's</h2>
<?php echo $this->Html->link("ACO toevoegen", array(
		'admin'		 => false,
		'controller' => 'acos',
		'action'	 => 'add'),
		array('title' => "ACO toevoegen"));
?>
<table id="userTable">
	<tr>
		<th>id</th>
		<th>alias</th>
		<th>parent id</th>
		<th>opties</th>
	</tr>
	<?php foreach ($acos as $aco) : ?>
		<tr>
			<td><?php echo $aco['Aco']['id']; ?></td>
			<td><?php echo $aco['Aco']['alias']; ?></td>
			<td><?php echo $aco['Aco']['parent_id']; ?></td>
			<td>verwijderen</td>
		</tr>
	<?php endforeach; ?>
</table>

<h2>Permissies</h2>
<?php echo $this->Html->link('Permissie toevoegen', array('controller' => 'permissions', 'action' => 'add'), array('title' => 'Permissie toevoegen')); ?>
<table id="userTable">
	<tr>
		<th>id</th>
		<th>aro id</th>
		<th>aco id</th>
		<th>create</th>
		<th>read</th>
		<th>update</th>
		<th>delete</th>
	</tr>
	<?php foreach ($permissions as $permission) : ?>
		<tr>
			<td><?php echo $permission['Permission']['id']; ?></td>
			<td><?php echo $permission['Permission']['aro_id']; ?></td>
			<td><?php echo $permission['Permission']['aco_id']; ?> (<?php echo $permission['Aco']['alias']; ?>)</td>
			<td><?php echo $permission['Permission']['_create']; ?></td>
			<td><?php echo $permission['Permission']['_read']; ?></td>
			<td><?php echo $permission['Permission']['_update']; ?></td>
			<td><?php echo $permission['Permission']['_delete']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>