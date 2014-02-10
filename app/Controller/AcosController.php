<?php
	class AcosController extends AppController
	{
		public function index ()
		{
			$this->set('acos', $this->Acl->Aco->find('all'),
				array('order' => array('parent_id DESC')));
			$this->set('treelist', $this->Acl->Aco->generateTreeList(null,
				"{n}.Aco.id",
				"{n}.Aco.alias",
				'-> '));
			$this->set('acoslist', $this->Acl->Aco->find('list'));
		}

		public function add ()
		{
			if ($this->request->is('post'))
			{
				if ($this->Acl->Aco->save($this->request->data))
				{
					$this->Session->setFlash('ACO opgeslagen');
					$this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash('Er ging iets mis met het opslaan. Probeer het nog eens');
				}
			}
		}

		public function delete ($id = null)
		{
			if ($this->request->is('get'))
			{
				throw new MethodNotAllowedException();
			}

			if (!$id)
			{
				$this->Session->setFlash('Opgeldige id voor ACO');
				$this->redirect(array('action' => 'index'));
			}
			if ($this->User->delete($id))
			{
				$this->Session->setFlash('ACO verwijderd');
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('ACO niet verwijderd');
			$this->redirect(array('action' => 'index'));
		}

	}
