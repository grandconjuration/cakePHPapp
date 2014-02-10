<?php $this->extend('/Common/news'); ?>
<?php echo $this->element('backToPostsAdmin'); ?><br/>
<?php echo $this->element('backToAdmin'); ?>
<h1>Bericht aanpassen</h1>
<?php
	echo $this->element('tinymc');
	echo $this->element('errors', array('errors' => $errors));
	echo $this->Form->create('Post');
	echo $this->Form->input('title', array('error' => false, 'label' => 'Titel', 'before' => '<table class="styled"><tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>', 'div' => false, 'style' => 'width: 300px;'));
	echo $this->Form->input('body', array('error' => false, 'cols' => '65', 'rows' => '25', 'label' => 'Inhoud', 'class' => 'tinymce', 'before' => '<tr><td colspan="2">', 'between' => '</td></tr><tr><td colspan="2">', 'after' => '</td></tr>', 'div' => false));
	echo $this->Form->input('published', array('label' => 'Publiceren', 'before' => '<tr><td>', 'between' => '</td><td>', 'after' => '</td></tr>', 'div' => false));
	echo $this->Form->end(array('label' => 'Bericht opslaan', 'before' => '<tr><td colspan="2">', 'after' => '</td></tr></table>', 'div' => false));

?>