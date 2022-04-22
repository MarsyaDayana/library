<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Publishers Controller
 *
 * @property \App\Model\Table\PublishersTable $Publishers
 * @method \App\Model\Entity\Publisher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublishersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $publishers = $this->paginate($this->Publishers);

        $this->set(compact('publishers'));
    }

    /**
     * View method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publisher = $this->Publishers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('publisher'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publisher = $this->Publishers->newEmptyEntity();
        if ($this->request->is('post')) {
            $publisher = $this->Publishers->patchEntity($publisher, $this->request->getData());
            if ($this->Publishers->save($publisher)) {
                $this->Flash->success(__('The publisher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publisher could not be saved. Please, try again.'));
        }
        $this->set(compact('publisher'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publisher = $this->Publishers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publisher = $this->Publishers->patchEntity($publisher, $this->request->getData());
            if ($this->Publishers->save($publisher)) {
                $this->Flash->success(__('The publisher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publisher could not be saved. Please, try again.'));
        }
        $this->set(compact('publisher'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publisher = $this->Publishers->get($id);
        if ($this->Publishers->delete($publisher)) {
            $this->Flash->success(__('The publisher has been deleted.'));
        } else {
            $this->Flash->error(__('The publisher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
