<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Returns Controller
 *
 * @property \App\Model\Table\ReturnsTable $Returns
 * @method \App\Model\Entity\Return[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReturnsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $returns = $this->paginate($this->Returns);

        $this->set(compact('returns'));
    }

    /**
     * View method
     *
     * @param string|null $id Return id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $return = $this->Returns->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('return'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $return = $this->Returns->newEmptyEntity();
        if ($this->request->is('post')) {
            $return = $this->Returns->patchEntity($return, $this->request->getData());
            if ($this->Returns->save($return)) {
                $this->Flash->success(__('The return has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The return could not be saved. Please, try again.'));
        }
        $this->set(compact('return'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Return id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $return = $this->Returns->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $return = $this->Returns->patchEntity($return, $this->request->getData());
            if ($this->Returns->save($return)) {
                $this->Flash->success(__('The return has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The return could not be saved. Please, try again.'));
        }
        $this->set(compact('return'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Return id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $return = $this->Returns->get($id);
        if ($this->Returns->delete($return)) {
            $this->Flash->success(__('The return has been deleted.'));
        } else {
            $this->Flash->error(__('The return could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
