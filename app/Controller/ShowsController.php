<?php
	class ShowsController extends AppController
	{
		public $name = 'Shows';

		public function index ()
		{
			$this->set('shows', $this->Show->find('all', array('order' => 'datetime ASC')));
		}

		public function add ()
		{
			if ($this->request->is('post'))
			{
				if ($this->Show->save($this->request->data))
				{
					$this->Session->setFlash('Show datum opgeslagen.');
					$this->redirect(array('action' => 'admin'));
				}
				else
				{
					$this->Session->setFlash('Er ging iets mis. Probeer het nog eens');
				}
			}
			$this->set('errors', $this->Show->validationErrors);
		}

		public function edit ($id = null)
		{
			$this->Show->id = $id;

			if (!$this->Show->exists())
			{
				throw new NotFoundException('Ongeldig id. :( ');
			}

			if ($this->request->is('post') || $this->request->is('put'))
			{
				if ($this->Show->save($this->request->data))
				{
					$this->Session->setFlash('Show datum opgeslagen');
					$this->redirect(array('action' => 'admin'));
				}
				else
				{
					$this->Session->setFlash('Kon de show niet opslaan');
					$this->set('errors', $this->Show->validationErrors);
				}
			}
			else
			{
				$this->request->data = $this->Show->read();
				$this->set('errors', $this->Show->validationErrors);
			}
		}

		public function admin ()
		{
			$this->set('shows', $this->Show->find('all', array('order' => 'datetime ASC')));
		}

		public function beforeFilter ()
		{
			parent::beforeFilter();
			$this->Auth->allow('index');			
			$this->set('pageHeader', 'shows_header');
			$this->set('bodyId', 'shows');
			$this->set('title_for_layout', 'Shows');
			$this->set('headerTitle', 'Shows');
		}
	}
