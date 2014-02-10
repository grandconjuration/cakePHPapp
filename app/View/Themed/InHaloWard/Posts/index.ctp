<?php
	$this->extend('/Common/news');
	$count = count($posts);
	$i = 1;
?>
<table id="newsTable">
	<?php foreach ($posts as $post) : ?>
	<tr class="newsHeader">
		<td class="newsTitle"><h1><?php echo $this->MyHtml->link($post['Post']['title'], array(
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
		));
?></h1></td>
		<td class="newsDate"><?php echo $this->Time->format('d-m-Y', $post['Post']['created']); ?></td>
	</tr>
	<tr>
		<td class="newsContent" colspan="2"><?php echo $post['Post']['body']; ?></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php if ($i != $count) : ?>
			<div class="newsBorder"></div>
			<?php endif; ?>
			
		</td>
	</tr>
    <?php
		$i++;
	endforeach;
?>
</table>
<?php

	$data = $this->Paginator->params();
	if ($data['pageCount'] > 1)
	{
		echo '<div class="border"></div><h2>Ouder nieuws</h2>';
		echo $this->Paginator->counter('Pagina {:page} van de {:pages}') . '<br/>';
	}
	if ($this->Paginator->hasPrev())
	{
		if (($data['page'] - 1) != 1)
		{
			echo $this->Paginator->first('<< Eerste pagina') . ' | ';
		}
		echo $this->Paginator->prev('< Vorige pagina') . ' | ';
	}
	echo $this->Paginator->numbers(array('modulus' => 4));
	if ($this->Paginator->hasNext())
	{
		echo ' | ' . $this->Paginator->next('Volgende pagina >');
		if (($data['pageCount'] - 1) != $data['page'])
		{

			echo ' | ' . $this->Paginator->last('Laatste pagina >>');
		}
	}

?>
