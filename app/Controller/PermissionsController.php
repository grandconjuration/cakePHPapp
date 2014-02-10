<?php
	class PermissionsController extends AppController
	{
		public $uses = array('Group', 'Aco', 'Aro', 'Permission');
		
		public function beforeFilter()
		{
		//	$this->Auth->allow('add');
			parent::beforeFilter();
		}
		public function index ()
		{
			// $this->Acl->allow(array('model' => 'Group', 'foreign_key' => 1), 'controllers/Aco');

			$this->set('groups', $this->Group->find('all'));
			$this->set('acos', $this->Aco->find('all'));
			$this->set('permissions', $this->Permission->find('all'));
		}

		public function add ()
		{
			if ($this->request->is('post'))
			{
				$data = $this->request->data;

				if ($data['Permission']['Actie'] == 0 | $data['Permission']['Actie'] == 1)
				{

					$this->Aro->id = $data['Permission']['Aro'];
					$this->Aco->id = $data['Permission']['Aco'];

					if ($this->Aro->exists() && $this->Aco->exists())
					{
						if ($data['Permission']['Actie'] == '0')
						{
							$result = $this->Acl->allow(array(
								'model'			 => 'Group',
								'foreign_key'	 => $data['Permission']['Aro']),
								$this->Aco->field('alias'));
						}
						elseif ($data['Permission']['Actie'] == '1')
						{
							$result = $this->Acl->deny(array(
								'model'			 => 'Group',
								'foreign_key'	 => $data['Permission']['Aro']),
								$this->Aco->field('alias'));
						}
					}

					if ($result)
					{
						$this->Session->setFlash('Permissie opgeslagen');
						$this->redirect(array('action' => 'index'));
					}
					else
					{
						$this->Session->setFlash('Er ging iets mis met het opslaan. Probeer het nog eens');
					}
				}
			}
		}
	}
