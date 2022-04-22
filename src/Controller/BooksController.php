<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 * @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $filter = $this -> Books->NewEmptyEntity();
        $conditions = [];

        if(!empty($this->request->getQuery('search'))){
            $filter->search = $this->request->getQuery('search');
            $conditions['OR'] = [
                    'Books.ISBN_NO LIKE' => '%' . $filter->search . '%',
                    'Books.Book_Title LIKE' => '%' . $filter->search . '%',
                    'Publishers.pub_name LIKE' => '%' . $filter->search . '%',
            ];
        }
    
        $this->paginate = [
            'contain' => ['Publishers' ,'Types'],
            //'order' => ['Books.Book_Title' => 'DESC'],
            //'conditions' =>,
            //'limit' => 1
            'conditions' => $conditions

        ];
        $publishers = $this->FetchTable('Publishers')->find('list',
            ['keyField' => 'id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);


        $books = $this->paginate($this->Books);
        // pr($books);die;  
        $this->set(compact('books', 'filter' , 'publishers'));

    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => ['Publishers' , 'Types'],
        ]);

         $publishers = $this->Books->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);


        $types = $this->Books->Types->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

         //pr($book); die; 
        $this->set(compact('book', 'publishers', 'types'));

    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $book = $this->Books->newEmptyEntity();
        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        $publishers = $this->Books->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);

        $types = $this->Books->Types->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $this->set(compact('book', 'publishers' , 'types'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => [],
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
              pr($book);// die;
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        $publishers = $this->Books->Publishers->find('list', 

            ['keyField' => 'pub_id',
             'valueField' => 'pub_name'])

        ->where(['status' => 1]);

        $types = $this->Books->Types->find('list', 

            ['keyField' => 'id',
             'valueField' => 'Name']);

        $this->set(compact('book', 'publishers' , 'types'));


    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        if ($this->Books->delete($book)) {
            $this->Flash->success(__('The book has been deleted.'));
        } else {
            $this->Flash->error(__('The book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
