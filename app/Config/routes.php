<?php
	/**
	 * Routes configuration
	 *
	 * In this file, you set up routes to your controllers and their actions.
	 * Routes are very important mechanism that allows you to freely connect
	 * different urls to chosen controllers and their actions (functions).
	 *
	 * PHP 5
	 *
	 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
	 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
	 *
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 *
	 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
	 * @link          http://cakephp.org CakePHP(tm) Project
	 * @package       app.Config
	 * @since         CakePHP(tm) v 0.2.9
	 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
	 */
	/**
	 * Here, we are connecting '/' (base path) to controller called 'Pages',
	 * its action called 'display', and we pass a param to select the view file
	 * to use (in this case, /app/View/Pages/home.ctp)...
	 */

	Router::parseExtensions('html');

	Router::connect('/', array('controller' => 'posts', 'action' => 'index'));
	/**
	 * ...and connect the rest of 'Pages' controller's urls.
	 */
	Router::connect('/band', array('controller' => 'pages', 'action' => 'display', 'band'));
	Router::connect('/media/music', array('controller' => 'pages', 'action' => 'display', 'music'));
	Router::connect('/media/videos', array('controller' => 'pages', 'action' => 'display', 'videos'));
	Router::connect('/media/photos', array('controller' => 'pages', 'action' => 'display', 'photos'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'contact'));
	Router::connect('/archive/:page',
		array('controller' => 'posts', 'action' => 'index'),
		array('page'	 => '[0-9]+'));
	Router::connect('/archive/:year/:month/:day/:id-:title',
		array('controller' => 'posts', 'action' => 'view'),
		array(
		'pass'	 => array('id'),
		'id'	 => '[0-9]+',
		'year'	 => '[12][0-9]{3}',
		'month'	 => '0[1-9]|1[012]',
		'day'	 => '0[1-9]|[12][0-9]|3[01]'));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'admin_index'));
        

	/**
	 * Load all plugin routes.  See the CakePlugin documentation on
	 * how to customize the loading of plugin routes.
	 */
	CakePlugin::routes();

	/**
	 * Load the CakePHP default routes. Remove this if you do not want to use
	 * the built-in default routes.
	 */
	require CAKE . 'Config' . DS . 'routes.php';
