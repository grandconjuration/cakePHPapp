<?php $this->assign('pageHeader', 'shows_header'); ?>
<?php $this->assign('headerTitle', 'Shows'); ?>
<?php $this->assign('bodyId', 'shows'); ?>
<?php if(count($shows) == 0) : ?>
Er zijn op het moment geen shows gepland.
<?php else:?>
<table id="showsTable">
	<tr>
		<th>Datum</th>
		<th>Zaal</th>
		<th>Plaats</th>
		<th>Tijd</th>
		<th>Prijs</th>
	</tr>
	<tr>
		<td colspan="5">
			<div class="showsBorder"></div>
		</td>
	</tr>
	<?php foreach ($shows as $show) : ?>
	<tr>
		<td><?php echo $this->Time->format('d-m-y', $show['Show']['datetime']); ?></td>
		<td><?php echo $show['Show']['venue']; ?></td>
		<td><?php echo $show['Show']['location']; ?></td>
		<td><?php echo $this->Time->format('H:i', $show['Show']['datetime']); ?></td>
		<td><?php if(is_null($show['Show']['cost'])) { echo 'n.v.t.'; } else { echo '€ ' . number_format($show['Show']['cost'], 2, ',', '.'); } ?></td>
	</tr>
    <?php endforeach; ?>
</table>
<?php endif;?>