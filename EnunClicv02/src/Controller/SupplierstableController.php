<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Supplierstable Controller
 *
 * @property \App\Model\Table\SupplierstableTable $Supplierstable
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplierstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $supplierstable = $this->paginate($this->Supplierstable);

        $this->set(compact('supplierstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplierstable = $this->Supplierstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('supplierstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplierstable = $this->Supplierstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $supplierstable = $this->Supplierstable->patchEntity($supplierstable, $this->request->getData());
            if ($this->Supplierstable->save($supplierstable)) {
                $this->Flash->success(__('The supplierstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplierstable could not be saved. Please, try again.'));
        }
        $this->set(compact('supplierstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplierstable = $this->Supplierstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplierstable = $this->Supplierstable->patchEntity($supplierstable, $this->request->getData());
            if ($this->Supplierstable->save($supplierstable)) {
                $this->Flash->success(__('The supplierstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplierstable could not be saved. Please, try again.'));
        }
        $this->set(compact('supplierstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplierstable = $this->Supplierstable->get($id);
        if ($this->Supplierstable->delete($supplierstable)) {
            $this->Flash->success(__('The supplierstable has been deleted.'));
        } else {
            $this->Flash->error(__('The supplierstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
