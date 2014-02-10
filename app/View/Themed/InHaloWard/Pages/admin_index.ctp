<h1>Admin</h1>
<h2>Nieuws</h2>
<ul>
<li>
<?php 
	echo $this->Html->link('Nieuws beheren', array(

		'controller' => 'posts',
		'action'	 => 'admin'
	),
		array('title' => 'Nieuws beheren'));
	echo '</li>';
?>
</ul>
<h2>Shows</h2>			
<ul>	
	<li><?php echo $this->Html->link('Shows beheren', array(

		'controller' => 'shows',
		'action'	 => 'admin'),
		array('title' => 'Shows beheren'));
?></li>
</ul>
<h2>Gebruikers</h2>
<ul>
	<li><?php echo $this->Html->link('Gebruikers beheren', array(

		'controller' => 'users',
		'action'	 => 'index'),
		array('title' => 'Gebruikers beheren'));
?></li>
</ul>
<h2>Groepen</h2>
<ul>
	<li><?php echo $this->Html->link('Groepen beheren', array(

		'controller' => 'groups',
		'action'	 => 'index'),
		array('title' => 'Groepen beheren'));
?></li>
</ul>
<h2>ACO's</h2>
<ul>
	<li><?php echo $this->Html->link("ACO toevoegen", array(

		'controller' => 'acos',
		'action'	 => 'add'),
		array('title' => "ACO toevoegen"));
?></li>
	<li><?php echo $this->Html->link("ACO's bekijken", array(

		'controller' => 'acos',
		'action'	 => 'index'),
		array('title' => "ACO's bekijken"));
?></li>
</ul>
<h2>Permissies</h2>
<ul>
	<li><?php echo $this->Html->link('Groep permissies', array(

		'controller' => 'permissions',
		'action'	 => 'index'),
		array('title' => 'Groep permissies'));
?></li>
</ul>