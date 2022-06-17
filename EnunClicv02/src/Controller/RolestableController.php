<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rolestable Controller
 *
 * @property \App\Model\Table\RolestableTable $Rolestable
 * @method \App\Model\Entity\Rolestable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolestableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rolestable = $this->paginate($this->Rolestable);

        $this->set(compact('rolestable'));
    }

    /**
     * View method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolestable = $this->Rolestable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rolestable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolestable = $this->Rolestable->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolestable = $this->Rolestable->patchEntity($rolestable, $this->request->getData());
            if ($this->Rolestable->save($rolestable)) {
                $this->Flash->success(__('The rolestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolestable could not be saved. Please, try again.'));
        }
        $this->set(compact('rolestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolestable = $this->Rolestable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolestable = $this->Rolestable->patchEntity($rolestable, $this->request->getData());
            if ($this->Rolestable->save($rolestable)) {
                $this->Flash->success(__('The rolestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolestable could not be saved. Please, try again.'));
        }
        $this->set(compact('rolestable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolestable = $this->Rolestable->get($id);
        if ($this->Rolestable->delete($rolestable)) {
            $this->Flash->success(__('The rolestable has been deleted.'));
        } else {
            $this->Flash->error(__('The rolestable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
