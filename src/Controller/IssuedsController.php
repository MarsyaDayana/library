<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Issueds Controller
 *
 * @property \App\Model\Table\IssuedsTable $Issueds
 * @method \App\Model\Entity\Issued[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IssuedsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $filter = $this -> Issueds->NewEmptyEntity();
        $conditions = [];

        if(!empty($this->request->getQuery('search'))){
            $filter->search = $this->request->getQuery('search');
            $conditions['OR'] = [
                    'Issueds.id LIKE' => '%' . $filter->search . '%',
            ];
        }
        $this->paginate = [
            'contain' => ['Borrows' => ['Members']],
        ]; 

        $issueds = $this->paginate($this->Issueds);
        //pr($issued); die;
        $this->set(compact('issueds' , 'filter'));
    }

    /**
     * View method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $issued = $this->Issueds->get($id, [
            'contain' => ['Borrows'],
        ]);

        $this->set(compact('issued'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $issued = $this->Issueds->newEmptyEntity();
        if ($this->request->is('post')) {
            $issued = $this->Issueds->patchEntity($issued, $this->request->getData());
            if ($this->Issueds->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }
        $borrows = $this->Issueds->Borrows->find('list', ['limit' => 200])->all();
        $this->set(compact('issued', 'borrows'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $issued = $this->Issueds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $issued = $this->Issueds->patchEntity($issued, $this->request->getData());
            if ($this->Issueds->save($issued)) {
                $this->Flash->success(__('The issued has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The issued could not be saved. Please, try again.'));
        }
        $borrows = $this->Issueds->Borrows->find('list', ['limit' => 200])->all();
        $this->set(compact('issued', 'borrows'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Issued id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $issued = $this->Issueds->get($id);
        if ($this->Issueds->delete($issued)) {
            $this->Flash->success(__('The issued has been deleted.'));
        } else {
            $this->Flash->error(__('The issued could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
