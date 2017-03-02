<?php
class JobsController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index(){
        $this->set('jobs', $this->Job->find('all', array(
			'order' => array('Job.created' => 'desc')
		)));
    }

	public function add() {
          if ($this->request->is('post')) {
              $this->Job->create();
              if ($this->Job->save($this->request->data)) {
                  $job = $this->Job->findById($this->Job->getLastInsertId());
                  $Email = new CakeEmail('gmail');
                  $Email->to($job['Job']['email'])
                        ->emailFormat('html')
                        ->helpers('Html')
                        ->subject('Job wurde erstellt')
                        ->template('jobCreated')
                        ->viewVars(array('token' => $job['Job']['token']))
                        ->send();


                  return $this->redirect(array('action' => 'index'));
              }
          }
      }

    public function edit($id = null){
         if(!$id) throw new NotFoundException(__('Ungültiger Token'));

         $job = $this->Job->find('first', array(
             'conditions' => array('Job.token' => $id)
         ));

        if(!$job){
            throw new NotFoundException(__('Ungültiger Token'));
        }

        if ($this->request->is(array('post', 'put'))) {
           $this->Job->id = $job['Job']['id'];
           if ($this->Job->save($this->request->data)) {
               return $this->redirect(array('action' => 'index'));
           }
	   } else{
		$this->set('job', $job);
		}
    }

	public function delete($id = null){
		if(!id) throw new NotFoundException(__('Ungültiger Token'));

		$job = $this->Job->find('first', array(
			'conditions' => array('Job.token' => $id)
		));

		if($this->Job->delete($job['Job']['id'])){
			return $this->redirect(array('action' => 'index'));
		} else{
			throw new Exception(__('Could not be deleted'));
		}
	}

    public function view($id = null){
        $job = $this->Job->findById($id);
        if(!$job){
            throw new NotFoundException(__('Ungültige ID'));
        }

        $this->set('job', $job);
    }
}
