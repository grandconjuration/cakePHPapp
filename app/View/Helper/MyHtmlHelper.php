<?php
	App::uses('HtmlHelper', 'View/Helper');

	class MyHtmlHelper extends HtmlHelper
	{

		public $ext = '.html';
		
		public function __construct ()
		{
		//	$this->_tags['link'] = '<a href="%s"%s>%s</a>';
		}
		
		public function url($url = null, $full = false)
		{
			return parent::url($url, $full) . $this->ext;
		}

	}
