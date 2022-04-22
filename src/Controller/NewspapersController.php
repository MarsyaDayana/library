<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Newspapers Controller
 *
 * @property \App\Model\Table\NewspapersTable $Newspapers
 * @method \App\Model\Entity\Newspaper[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewspapersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $filter = $this -> Newspapers->NewEmptyEntity();
        $conditions = [];

        if(!empty($this->request->getQuery('search'))){
            $filter->search = $this->request->getQuery('search');
            $conditions['OR'] = [
                    'Newspapers.Language LIKE' => '%' . $filter->search . '%',
                    'Newspapers.Name LIKE' => '%' . $filter->search . '%',
            ];
        }

       $this->paginate = [
            'contain' => ['Publishers'],
            //'order' => ['Magazines.Name' => 'DESC'],
            //'conditions' =>,
            //'limit' => 1
            'conditions' => $conditions

        ];

        $publishers = $this->FetchTable('Publishers')->find('list',
            ['keyField' => 'id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);

        $newspapers = $this->paginate($this->Newspapers);

        $this->set(compact('newspapers', 'filter' , 'publishers'));
    }

    /**
     * View method
     *
     * @param string|null $id Newspaper id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
         $newspaper = $this->Newspapers->get($id, [
            'contain' => ['Publishers'],
        ]);

        $publishers = $this->Newspapers->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);

        $this->set(compact('newspaper' , 'publishers'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newspaper = $this->Newspapers->newEmptyEntity();
        if ($this->request->is('post')) {
            $newspaper = $this->Newspapers->patchEntity($newspaper, $this->request->getData());
            if ($this->Newspapers->save($newspaper)) {
                $this->Flash->success(__('The newspaper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newspaper could not be saved. Please, try again.'));
        }

        $publishers = $this->Newspapers->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);
        $this->set(compact('newspaper', 'publishers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newspaper id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newspaper = $this->Newspapers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newspaper = $this->Newspapers->patchEntity($newspaper, $this->request->getData());
            if ($this->Newspapers->save($newspaper)) {
                $this->Flash->success(__('The newspaper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newspaper could not be saved. Please, try again.'));
        }
        $publishers = $this->Newspapers->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);
        $this->set(compact('newspaper', 'publishers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newspaper id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newspaper = $this->Newspapers->get($id);
        if ($this->Newspapers->delete($newspaper)) {
            $this->Flash->success(__('The newspaper has been deleted.'));
        } else {
            $this->Flash->error(__('The newspaper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
