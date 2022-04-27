<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Borrows Controller
 *
 * @property \App\Model\Table\BorrowsTable $Borrows
 * @method \App\Model\Entity\Borrow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BorrowsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $filter = $this -> Borrows->NewEmptyEntity();
        $conditions = [];

        if(!empty($this->request->getQuery('search'))){
            $filter->search = $this->request->getQuery('search');
            $conditions['OR'] = [
                    'Borrows.status LIKE' => '%' . $filter->search . '%',
            ];
        }

        $this->paginate = [
            'contain' => ['Books', 'Magazines', 'Newspapers', 'Members'],
        ];

        $borrows = $this->paginate($this->Borrows);

        $this->set(compact('borrows' , 'filter'));
    }

    /**
     * View method
     *
     * @param string|null $id Borrow id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $borrow = $this->Borrows->get($id, [
            'contain' => ['Books', 'Magazines', 'Newspapers' , 'Members'],
        ]);
        $books = $this->Borrows->Books->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Book_Title']);

        $magazines = $this->Borrows->Magazines->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $newspapers = $this->Borrows->Newspapers->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);


        $members = $this->Borrows->Members->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);


        $this->set(compact('borrows', 'books', 'magazines', 'newspapers' , 'members'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $borrow = $this->Borrows->newEmptyEntity();
        if ($this->request->is('post')) {
            $borrow = $this->Borrows->patchEntity($borrow, $this->request->getData());
            if ($this->Borrows->save($borrow)) {
                $this->Flash->success(__('The borrow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The borrow could not be saved. Please, try again.'));
        }

        $books = $this->Borrows->Books->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Book_Title']);

        $magazines = $this->Borrows->Magazines->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $newspapers = $this->Borrows->Newspapers->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);


        $members = $this->Borrows->Members->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $this->set(compact('borrow', 'books', 'magazines', 'newspapers' , 'members'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Borrow id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $borrow = $this->Borrows->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $borrow = $this->Borrows->patchEntity($borrow, $this->request->getData());
            if ($this->Borrows->save($borrow)) {
                $this->Flash->success(__('The borrow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The borrow could not be saved. Please, try again.'));
        }
        $books = $this->Borrows->Books->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Book_Title']);

        $magazines = $this->Borrows->Magazines->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $newspapers = $this->Borrows->Newspapers->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);


        $members = $this->Borrows->Members->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $this->set(compact('borrows', 'books', 'magazines', 'newspapers' , 'members'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Borrow id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $borrow = $this->Borrows->get($id);
        if ($this->Borrows->delete($borrow)) {
            $this->Flash->success(__('The borrow has been deleted.'));
        } else {
            $this->Flash->error(__('The borrow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
