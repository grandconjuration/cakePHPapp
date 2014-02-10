<?php $this->extend('/Elements/backToAdmin'); ?>
<h1>ACO's</h1>
<?php echo $this->Html->link("ACO toevoegen", array(
		'admin'		 => false,
		'controller' => 'acos',
		'action'	 => 'add'),
		array('title' => "ACO toevoegen"));
?>
<table class="styled">
	<tr>
		<th>id</th>
		<th>alias</th>
		<th>parent id</th>
		<th>opties</th>
	</tr>
	<?php $n = 0; ?>	
	<?php foreach ($treelist as $key => $value) : ?>
	<tr>
		<td><?php echo $key; ?></td>
		<td><?php echo $value; ?></td>
		<td><?php //echo $acos[$n]['Aco']['parent_id']; ?></td>
		<td><?php ?></td>
	</tr>
	<?php $n++; ?>
    <?php endforeach; ?>
</table>
