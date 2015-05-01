<?php
App::uses('AppController', 'Controller');
/**
 * EventsEventtags Controller
 *
 * @property EventsEventtag $EventsEventtag
 * @property PaginatorComponent $Paginator
 */
class EventsEventtagsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventsEventtag->recursive = 0;
		$this->set('eventsEventtags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventsEventtag->exists($id)) {
			throw new NotFoundException(__('Invalid events eventtag'));
		}
		$options = array('conditions' => array('EventsEventtag.' . $this->EventsEventtag->primaryKey => $id));
		$this->set('eventsEventtag', $this->EventsEventtag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventsEventtag->create();
			if ($this->EventsEventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The events eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events eventtag could not be saved. Please, try again.'));
			}
		}
		$events = $this->EventsEventtag->Event->find('list');
		$eventtags = $this->EventsEventtag->Eventtag->find('list');
		$this->set(compact('events', 'eventtags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventsEventtag->exists($id)) {
			throw new NotFoundException(__('Invalid events eventtag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventsEventtag->save($this->request->data)) {
				$this->Session->setFlash(__('The events eventtag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events eventtag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventsEventtag.' . $this->EventsEventtag->primaryKey => $id));
			$this->request->data = $this->EventsEventtag->find('first', $options);
		}
		$events = $this->EventsEventtag->Event->find('list');
		$eventtags = $this->EventsEventtag->Eventtag->find('list');
		$this->set(compact('events', 'eventtags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventsEventtag->id = $id;
		if (!$this->EventsEventtag->exists()) {
			throw new NotFoundException(__('Invalid events eventtag'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventsEventtag->delete()) {
			$this->Session->setFlash(__('The events eventtag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The events eventtag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
