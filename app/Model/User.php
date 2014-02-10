<?php
	class User extends AppModel
	{

		public $name = 'User';
		public $belongsTo = array(
			'Group'	 => array(
				'className'	 => 'Group',
				'foreignKey' => 'group_id'
			)
		);
		
		
		public $actsAs = array('Acl' => array('type' => 'both'));

		function parentNode ()
		{
			if (!$this->id && empty($this->data))
			{
				return null;
			}
			$data = $this->data;
			if (empty($this->data))
			{
				$data = $this->read();
			}
			if (!$data['User']['group_id'])
			{
				return null;
			}
			else
			{
				return array('Group' => array('id' => $data['User']['group_id']));
			}
		}

		function bindNode ($user)
		{
			return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
		}

		public $validate = array(
			'name'				 => array(
				'rule'		 => 'notEmpty',
				'message'	 => 'Naam is verplicht',
				'required'	 => true
			),
			'username'			 => array(
				'rule'		 => array('between', 3, 15),
				'message'	 => 'Gebruikersnaam is verplicht (tussen 3 en 15 karakters)',
				'required'	 => true
			),
			'email'				 => array(
				'rule'		 => array('email'),
				'message'	 => 'Email moet geldig zijn',
				'required'	 => true
			),
			'password'			 => array(
				'Not empty'			 => array(
					'rule'		 => 'notEmpty',
					'message'	 => 'Wachtwoord moet langer zijn dan 5 tekens en korter dan 25 tekens',
					'required'	 => true
				),
				'Match passwords'	 => array(
					'rule'		 => 'matchPasswords',
					'message'	 => 'pswrds dont match'
				)
			),
			'group_id'			 => array(
				'rule'		 => 'notEmpty',
				'required'	 => true,
				'message'	 => 'Rol mag niet leeg zijn'
			),
			'password_confirm'	 => array(
				'rule'		 => 'notEmpty',
				'message'	 => 'please confirm'
			)
		);

		public function matchPasswords ($data)
		{
			if ($data['password'] == $this->data['User']['password_confirm'])
			{
				return true;
			}
			$this->invalidate('password_confirm', 'Your passwords do not match');
			return false;
		}

		public function beforeSave ($options = array())
		{
			if (isset($this->data['User']['password']))
			{
				$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
			}
			return true;
		}

	}
