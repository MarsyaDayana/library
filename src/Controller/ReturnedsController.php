<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Returneds Controller
 *
 * @property \App\Model\Table\ReturnedsTable $Returneds
 * @method \App\Model\Entity\Returned[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReturnedsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $filter = $this -> Returneds->NewEmptyEntity();
        $conditions = [];

        if(!empty($this->request->getQuery('search'))){
            $filter->search = $this->request->getQuery('search');
            $conditions['OR'] = [
                    'Returneds.Book_Title LIKE' => '%' . $filter->search . '%',
            ];
        }
        $returneds = $this->paginate($this->Returneds);

        $this->set(compact('returneds'));
    }

    /**
     * View method
     *
     * @param string|null $id Returned id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $returned = $this->Returneds->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('returned'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $returned = $this->Returneds->newEmptyEntity();
        if ($this->request->is('post')) {
            $returned = $this->Returneds->patchEntity($returned, $this->request->getData());
            if ($this->Returneds->save($returned)) {
                $this->Flash->success(__('The returned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The returned could not be saved. Please, try again.'));
        }
        $this->set(compact('returned'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Returned id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $returned = $this->Returneds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $returned = $this->Returneds->patchEntity($returned, $this->request->getData());
            if ($this->Returneds->save($returned)) {
                $this->Flash->success(__('The returned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The returned could not be saved. Please, try again.'));
        }
        $this->set(compact('returned'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Returned id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $returned = $this->Returneds->get($id);
        if ($this->Returneds->delete($returned)) {
            $this->Flash->success(__('The returned has been deleted.'));
        } else {
            $this->Flash->error(__('The returned could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
