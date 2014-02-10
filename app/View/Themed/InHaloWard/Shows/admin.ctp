<?php $this->extend('/Common/shows'); ?>
<?php echo $this->element('backToAdmin'); ?>
<h1>Shows beheren</h1>
<ul>
	<li><?php echo $this->Html->link('Show datum toevoegen', array(

		'controller' => 'shows',
		'action'	 => 'add'),
		array('title' => 'Show datum toevoegen'));
?></li>
</ul>
<table class="styled">
	<tr>
		<th>id</th>
		<th>datum en tijd</th>
		<th>zaal</th>
		<th>plaats</th>
		<th>prijs</th>
		<th>opties</th>
	</tr>
	<?php foreach ($shows as $show) : ?>
		<tr>
			<td><?php echo $show['Show']['id']; ?></td>
			<td><?php echo $this->Time->format('d/m/y H:i', $show['Show']['datetime']); ?></td>
			<td><?php echo $show['Show']['venue']; ?></td>
			<td><?php echo $show['Show']['location']; ?></td>
			<td><?php if(is_null($show['Show']['cost'])) { echo 'n.v.t.'; } else { echo '€ ' . number_format($show['Show']['cost'], 2, ',', '.'); } ?></td>
			<td><?php echo $this->Html->link('wijzigen', array(
			'controller' => 'shows',
			'action'	 => 'edit',
			$show['Show']['id']),
			array('title' => 'wijzigen'));
?> 
			<?php echo $this->Form->postLink('verwijderen', array(
			'controller' => 'shows',
			'action'	 => 'delete',
			$show['Show']['id']),
			array('title' => 'verwijderen'),
			'Weet je zeker dat je deze show wilt verwijderen?');
?></td>
		</tr>
	<?php endforeach; ?>
</table>