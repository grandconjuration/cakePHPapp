<?php $this->extend('/Common/media'); ?>
<?php $this->assign('currentPage', 'music'); ?>
<?php $this->set('title_for_layout', 'Media - Muziek'); ?>
<?php $this->Html->script('http://www.inhalo.nl/js/jwplayer.js', array('inline' => false)); ?>

<div class="music_gal">
<h2>Demo</h2>
	<div id="musicplayer">Als u deze tekst kunt lezen dan mist u de Adobe Flash Player.</div>
	<script type="text/javascript">
		  jwplayer('musicplayer').setup({
		  	'flashplayer': '<?php echo $this->request->base; ?>/files/player/player.swf',
   			 'id': 'playerID',
   			 'width': '350',
    		'height': '80',
   			 'playlistfile': '<?php echo $this->request->base; ?>/theme/InHaloWard/rss/index.xml',
   		    'playlist.position': 'bottom',
   		    'playlist.size': '130',
		    'controlbar': 'top',
			'repeat': 'list',
			'skin': '<?php echo $this->request->base; ?>/files/player/simple.swf',
			'backcolor': 'black',
			'frontcolor': 'white'
			
		});
		</script>	
<div class="small">Recorded at Sound Vision Studio<br/>Produced by George Konings</div>
</div>