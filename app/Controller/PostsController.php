<?php
	class PostsController extends AppController
	{

		public $name = 'Posts';
		public $pageTitle = 'Nieuws';
                
                public $components = array('Paginator');
                

		public $paginate = array(
			'limit'	 => 5,
			'order'	 => array(
				'Post.created'	 => 'desc'
			)
		);

		public function index ()
		{
                        $this->Paginator->settings = $this->paginate;
                      //  echo var_dump($this->request->params);
			$this->set('posts', $this->Paginator->paginate('Post', array('Post.published' => true)));
		}

		public function view ($id)
		{
			$this->set('post', $this->Post->find('first', array('conditions' => array('Post.id' => $id))));
		}

		public function add ()
		{
			if ($this->request->is('post'))
			{
				if ($this->Post->save($this->request->data))
				{
					$this->Session->setFlash('Bericht opgeslagen.');
					$this->redirect(array('action' => 'admin'));
				}
				else
				{
					$this->Session->setFlash('Er ging iets mis. Probeer het nog eens');
				}
			}
			$this->set('errors', $this->Post->validationErrors);
		}
		public function edit ($id = null)
		{
			$this->Post->id = $id;

			if (!$this->Post->exists())
			{
				throw new NotFoundException('Ongeldig id. :( ');
			}

			if ($this->request->is('post') || $this->request->is('put'))
			{
				if ($this->Post->save($this->request->data))
				{
					$this->Session->setFlash('Bericht opgeslagen');
					$this->redirect(array('action' => 'admin'));
				}
				else
				{
					$this->Session->setFlash('Kon het bericht niet opslaan');
					$this->set('errors', $this->Post->validationErrors);
				}
			}
			else
			{
				$this->request->data = $this->Post->read();
				$this->set('errors', $this->Post->validationErrors);
			}
		}
		public function admin ()
		{
			$this->set('posts', $this->Post->find('all', array('order' => 'created DESC')));
		}
		public function delete ($id = null)
		{
			if ($this->request->is('get'))
			{
				throw new MethodNotAllowedException();
			}

			if (!$id)
			{
				$this->Session->setFlash('Ongeldig id');
				$this->redirect(array('action' => 'admin'));
			}
			if ($this->Post->delete($id))
			{
				$this->Session->setFlash('Bericht verwijderd');
				$this->redirect(array('action' => 'admin'));
			}
			$this->Session->setFlash('Bericht is niet verwijderd');
			$this->redirect(array('action' => 'admin'));
		}

		public function beforeFilter ()
		{
			parent::beforeFilter();
			$this->Auth->allow('index', 'view');			
			$this->helpers[] = 'MyHtml';
			$this->helpers[] = 'Slug';
			$this->helpers[] = 'TinyMce.TinyMce';
			$this->helpers[] = 'Paginator';
                     //   $this->components[] = 'Paginator';

		}

	}
