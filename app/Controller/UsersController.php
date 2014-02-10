<?php
	class UsersController extends AppController
	{

		public $name = 'Users';

		public function index ()
		{
			$this->set('users', $this->User->find('all'));
		}

		public function add ()
		{
			$this->set('groups', $this->User->Group->find('list'));
			if ($this->request->is('post'))
			{
				if ($this->User->save($this->request->data))
				{
					$this->Session->setFlash('Gebruikers opgeslagen');
					$this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash('Kon de gebruiker niet toevoegen');
				}
			}
			$this->set('errors', $this->User->validationErrors);
		}

		public function edit ($id = null)
		{
			$this->User->id = $id;
			$groups = $this->User->Group->find('list');
			$this->set(compact('groups'));

			if (!$this->User->exists())
			{
				throw new NotFoundException('Ongeldige gebruiker');
			}

			if ($this->request->is('post') || $this->request->is('put'))
			{
				if ($this->User->save($this->request->data))
				{
					$this->Session->setFlash('Gebruiker opgeslagen');
					$this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash('Kon de gebruiker niet opslaan');
				}
			}
			else
			{
				$this->request->data = $this->User->read();
			}
			$this->set('errors', $this->User->validationErrors);
		}

		public function delete ($id = null)
		{
			if ($this->request->is('get'))
			{
				throw new MethodNotAllowedException();
			}

			if (!$id)
			{
				$this->Session->setFlash('Ongeldige gebruiker');
				$this->redirect(array('action' => 'index'));
			}
			if ($this->User->delete($id))
			{
				$this->Session->setFlash('Gebruiker verwijderd');
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Gebruiker is niet verwijderd');
			$this->redirect(array('action' => 'index'));
		}

		public function login ()
		{
			if ($this->request->is('post'))
			{
				if ($this->Auth->login())
				{
					$this->redirect($this->Auth->redirect());
				}
				else
				{
					$this->Session->setFlash('Wachtwoord of gebruikersnaam blijkt niet te kloppen. Probeer het nog eens.');
				}
			}
		}

		public function logout ()
		{
			$this->redirect($this->Auth->logout());
		}

	}
