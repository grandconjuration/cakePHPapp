<?php
	class Show extends AppModel
	{
		public $name = 'Show';

		public $validate = array(
			'location'	 => array(
				'notEmpty'	 => array(
					'rule'		 => 'notEmpty',
					'message'	 => 'Locatie mag niet leeg zijn',
					'required'	 => true,
					'allowEmpty' => false
				),
				'between'	 => array(
					'rule'		 => array('between', 2, 25),
					'message'	 => 'Locatie: >1 <26'
				)
			),
			'venue'		 => array(
				'notEmpty'	 => array(
					'rule'		 => 'notEmpty',
					'message'	 => 'Podium mag niet leeg zijn',
					'required'	 => true,
					'allowEmpty' => false
				),
				'between'	 => array(
					'rule'		 => array('between', 2, 25),
					'message'	 => 'Podium >1 <26'
				)
			),
			'datetime'	 => array(
				'notEmpty'	 => array(
					'rule'		 => 'notEmpty',
					'message'	 => 'Datum en tijd mogen niet leeg zijn',
					'required'	 => true,
					'allowEmpty' => false
				),
				'datetime'	 => array(
					'rule'		 => array('datetime', 'ymd'),
					'message'	 => 'ongeldig format'
				)
			),
			'cost'		 => array(
				'rule'		 => array('decimal'),
				'required'	 => true,
				'allowEmpty' => true,
				'message'	 => 'Voer een geldig getal in. Voorbeelden: 5.0 = €5,00 euro, 2.25 = €2,25. 50 eurocent is dus 0.5. 1 is niet geldig, 1.0 wel. Format is dus [euro].[eurocenten]  Laatste voorbeeld: 0.75 = €0,75'
			));

	}
