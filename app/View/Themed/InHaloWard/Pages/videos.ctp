<?php $this->extend('/Common/media'); ?>
<?php $this->assign('currentPage', 'videos'); ?>
<?php $this->set('title_for_layout', "Media - Video's"); ?>
<?php $this->Html->script('http://www.inhalo.nl/js/jwplayer.js', array('inline' => false)); ?>
<div class="video_gal">
<h2>Tideland - Drum video</h2>
<div id="tideland_tom_wouter">Als u deze tekst kunt lezen dan mist u de Adobe Flash Player.</div>
<div class="small" style="float:right;">Video door Wouter Kamphuis</div>

<script type='text/javascript'>
  jwplayer('tideland_tom_wouter').setup({
    'flashplayer': '<?php echo $this->request->base; ?>/files/player/player.swf',
    'file': 'http://www.youtube.com/watch?v=vibEQuJKIck',
    'controlbar': 'bottom',
    'width': '560',
    'height': '315',
	'backcolor': 'black',
	'frontcolor': 'white'	
  });
</script>
</div>