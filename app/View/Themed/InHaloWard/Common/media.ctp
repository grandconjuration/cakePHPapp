<?php $this->assign('bodyId', 'media'); ?>
<?php $this->assign('pageHeader', 'media_header'); ?>
<?php $this->start('pageHeaderContent'); ?>
<div id="media_submenu" <?php if($this->fetch('currentPage')) { echo 'class="' . $this->fetch('currentPage') . '"'; } ?>>
<ol>
<li><a id="music_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'music')); ?>" title="Muziek"><span>Muziek</span></a></li>
<li><a id="videos_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'videos')); ?>" title="Video's"><span>Video's</span></a></li>
<li><a id="photos_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'photos')); ?>" title="Foto's"><span>Foto's</span></a></li>
</ol>
</div>
<?php $this->end(); ?>
<?php echo $this->fetch('content'); ?>