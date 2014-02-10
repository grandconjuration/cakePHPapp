<?php
	class Post extends AppModel
	{
		public $name = 'Post';

		public $validate = array(
			'title'		 => array(
				'notEmpty'	 => array(
					'rule'		 => 'notEmpty',
					'message'	 => 'Titel mag niet leeg zijn',
					'required'	 => true,
					'allowEmpty' => false
				),
				'between'	 => array(
					'rule'		 => array('between', 2, 45),
					'message'	 => 'Titel: >1 <46'
				)
			),
			'body'		 => array(
				'rule'		 => 'notEmpty',
				'message'	 => 'De inhoud mag niet leeg zijn',
				'required'	 => true,
				'allowEmpty' => false
			),
			'published'	 => array(
				'rule'		 => array('boolean'),
				'required'	 => true,
				'allowEmpty' => false,
				'message'	 => 'Daar ging iets mis helemaal mis'
			)
		);

	}
