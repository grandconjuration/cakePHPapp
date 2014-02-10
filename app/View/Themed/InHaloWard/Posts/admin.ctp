<?php $this->extend('/Common/news'); ?>
<?php echo $this->element('backToAdmin'); ?>
<h1>Nieuws beheren</h1>
<ul>
	<li><?php echo $this->Html->link('Nieuws toevoegen', array(

		'controller' => 'posts',
		'action'	 => 'add'
	),
		array('title' => 'Nieuws toevoegen'));?>
	</li>
	</ul>
<table class="styled">
	<tr>
		<th>id</th>
		<th>titel</th>
		<th>gepubliceerd</th>
		<th>created</th>
		<th>last modified</th>
		<th>opties</th>
	</tr>
	<?php foreach ($posts as $post) : ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td><a href="<?php echo $this->MyHtml->url(array(
			'controller' => 'posts',
			'action'	 => 'view',
			'id'		 => $post['Post']['id'],
			'title'		 => $this->Slug->slug($post['Post']['title']),
			'year'		 => $this->Time->format('Y', $post['Post']['created']),
			'month'		 => $this->Time->format('m', $post['Post']['created']),
			'day'		 => $this->Time->format('d', $post['Post']['created'])
		),
			array(
			'title'	 => $post['Post']['title']
		)); ?>" title="<?php echo $post['Post']['title']; ?>"><?php echo $post['Post']['title']; ?></a></td>
			<td><?php if($post['Post']['published']) { echo 'ja'; } else { echo 'nee';}  ?></td>
			<td><?php echo $this->Time->format('d/m/y H:i:s', $post['Post']['created']); ?></td>
			<td><?php echo $this->Time->format('d/m/y H:i:s', $post['Post']['modified']);?></td>
			<td><?php echo $this->Html->link('wijzigen', array(
			'controller' => 'posts',
			'action'	 => 'edit',
			$post['Post']['id']),
			array('title' => 'wijzigen'));
?> 
			<?php echo $this->Form->postLink('verwijderen', array(
			'controller' => 'posts',
			'action'	 => 'delete',
			$post['Post']['id']),
			array('title' => 'verwijderen'),
			'Weet je zeker dat je dit bericht wilt verwijderen?');
?></td>
		</tr>
	<?php endforeach; ?>
</table>