<?php $this->extend('/Common/news'); ?>
<table id="newsTable">
	<tr class="newsHeader">
		<td class="newsTitle"><h1><?php echo h($post['Post']['title']); ?></h1></td>
		<td class="newsDate"><?php echo $this->Time->format('d-m-Y', $post['Post']['created']); ?></td>
	</tr>
	<tr>
		<td class="newsContent" colspan="2"><?php echo $post['Post']['body']; ?></td>
	</tr>
</table>