<?php
	/**
	 *
	 * @package       InHalo.Layout
	 * @since         21-04-12
	 * @author 		  Simon Whiteley
	 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title>
<?php echo Configure::read('Site.title'); ?> - <?php echo $title_for_layout; ?>

</title>
	<?php
	echo $this->Html->meta('icon') . PHP_EOL;

	echo $this->Html->css('style') . PHP_EOL;
	echo $this->fetch('css') . PHP_EOL;	
	echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js') . PHP_EOL;
	echo $this->Html->script('ready') . PHP_EOL;
	echo $this->fetch('script') . PHP_EOL;
	echo $this->Js->writeBuffer(array('cache' => true)) . PHP_EOL;

?>
</head>
<body<?php if($this->fetch('bodyId')) {	echo ' id="' . $this->fetch('bodyId') . '"';	}	?>>
<div id="container">

<div id="header" title="In Halo">
<span class="hide">In Halo</span>
<a id="facebook" class="button" href="http://www.facebook.com/inhaloband" title="Facebook"><span>Facebook</span></a>
<a id="twitter" class="button" href="http://www.twitter.com/inhaloband" title="Twitter"><span>Twitter</span></a>
</div>
<div id="menu">
	<div id="Stuk_1"></div>
	<ol>
	<li><a id="nieuws_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'posts', 'action' => 'index')); ?>" title="Nieuws"><span>Nieuws</span></a></li>
	<li><div id="Stuk_2"></div></li>
	<li><a id="shows_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'shows', 'action' => 'index')); ?>" title="Shows"><span>Shows</span></a></li>
	<li><div id="Stuk_3"></div></li>
	<li><a id="band_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'band')); ?>" title="Band"><span>Band</span></a></li>
	<li><div id="menu_rest">
		<a id="media_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'music')); ?>" title="Media"><span>Media</span></a>
	</div></li>
	<li><a id="contact_link" class="button" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'display', 'contact')); ?>" title="Contact"><span>Contact</span></a></li>
	</ol>
</div>
<div id="content_wrapper">
<div id="wing_links"></div>
	<div id="contentcontainer">
	<?php if ($this->fetch('pageHeader')) : ?>
	<?php echo '<div id="' . $this->fetch('pageHeader') . '" class="pageHeader"';
		if ($this->fetch('headerTitle'))
		{
			echo ' title="' . $this->fetch('headerTitle') . '"';
		}
		echo '> ';
		if($this->fetch('pageHeaderContent')) { echo $this->fetch('pageHeaderContent'); } 
		echo '</div>';
?>
	<?php endif; ?>
    <div id="content">
	<?php if($this->fetch('beforeContent')):?>
	<div id="beforeContent">
	<?php echo $this->fetch('beforeContent'); ?>
	</div>
	<?php endif; ?>	    
    	<div id="tekst">
			<?php
	$message = $this->Session->flash();
	if (!empty($message))
	{
		echo '<ul><li>' . $message . '</li></ul>';
	}
?>		

			<?php echo $this->fetch('content'); ?>
			</div>	
		</div>
	</div>
	<div id="wing_rechts"></div>
<div id="footer"><div id="footer_text">Design door Ward van Ipkens | Website door Simon Whiteley | 
		        <?php if ($logged_in) : ?>
		            Welkom, <?php echo $current_user['username']; ?> | <?php echo $this->Html->link('Admin', array('controller' => 'pages', 'action' => 'admin_index')); ?> | <?php echo $this->Html->link('Uitloggen', array('controller' => 'users', 'action' => 'logout')); ?>
		        <?php else : ?>
		            <?php echo $this->Html->link('Inloggen', array('controller' => 'users', 'action' => 'login')); ?>
		        <?php endif; ?>
		        </div></div>    
    </div>
</div>
</body>
</html>
