<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Costumerstable Controller
 *
 * @property \App\Model\Table\CostumerstableTable $Costumerstable
 * @method \App\Model\Entity\Costumerstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CostumerstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $costumerstable = $this->paginate($this->Costumerstable);

        $this->set(compact('costumerstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Costumerstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $costumerstable = $this->Costumerstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('costumerstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $costumerstable = $this->Costumerstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $costumerstable = $this->Costumerstable->patchEntity($costumerstable, $this->request->getData());
            if ($this->Costumerstable->save($costumerstable)) {
                $this->Flash->success(__('The costumerstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The costumerstable could not be saved. Please, try again.'));
        }
        $this->set(compact('costumerstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Costumerstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $costumerstable = $this->Costumerstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $costumerstable = $this->Costumerstable->patchEntity($costumerstable, $this->request->getData());
            if ($this->Costumerstable->save($costumerstable)) {
                $this->Flash->success(__('The costumerstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The costumerstable could not be saved. Please, try again.'));
        }
        $this->set(compact('costumerstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Costumerstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $costumerstable = $this->Costumerstable->get($id);
        if ($this->Costumerstable->delete($costumerstable)) {
            $this->Flash->success(__('The costumerstable has been deleted.'));
        } else {
            $this->Flash->error(__('The costumerstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
