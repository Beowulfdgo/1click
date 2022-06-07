<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orderstable Controller
 *
 * @property \App\Model\Table\OrderstableTable $Orderstable
 * @method \App\Model\Entity\Orderstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderstable = $this->paginate($this->Orderstable);

        $this->set(compact('orderstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Orderstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderstable = $this->Orderstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orderstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderstable = $this->Orderstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderstable = $this->Orderstable->patchEntity($orderstable, $this->request->getData());
            if ($this->Orderstable->save($orderstable)) {
                $this->Flash->success(__('The orderstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderstable could not be saved. Please, try again.'));
        }
        $this->set(compact('orderstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderstable = $this->Orderstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderstable = $this->Orderstable->patchEntity($orderstable, $this->request->getData());
            if ($this->Orderstable->save($orderstable)) {
                $this->Flash->success(__('The orderstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderstable could not be saved. Please, try again.'));
        }
        $this->set(compact('orderstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderstable = $this->Orderstable->get($id);
        if ($this->Orderstable->delete($orderstable)) {
            $this->Flash->success(__('The orderstable has been deleted.'));
        } else {
            $this->Flash->error(__('The orderstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
