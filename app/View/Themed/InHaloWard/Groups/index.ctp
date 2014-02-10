<?php echo $this->Html->link('Add', array('controller' => 'groups', 'action' => 'add')) . PHP_EOL	?>
<table id="userTable">
	<tr>
		<th>id</th>
		<th>naam</th>
	</tr>
	<?php foreach ($groups as $group): ?>
		<tr>
			<td><?php echo $group['Group']['id'];  ?></td>
			<td><?php echo $group['Group']['name'];  ?></td>
		</tr>
	<?php endforeach; ?>
</table>