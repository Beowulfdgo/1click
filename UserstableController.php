<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Userstable Controller
 *
 * @property \App\Model\Table\UserstableTable $Userstable
 * @method \App\Model\Entity\Userstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rolestable'],
        ];
        $userstable = $this->paginate($this->Userstable);

        $this->set(compact('userstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Userstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userstable = $this->Userstable->get($id, [
            'contain' => ['Rolestable'],
        ]);

        $this->set(compact('userstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userstable = $this->Userstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $userstable = $this->Userstable->patchEntity($userstable, $this->request->getData());
            if ($this->Userstable->save($userstable)) {
                $this->Flash->success(__('The userstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userstable could not be saved. Please, try again.'));
        }
        $rolestable = $this->Users->Rolestable->find('list', ['limit' => 200])->all();
        $this->set(compact('userstable', 'rolestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userstable = $this->Userstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userstable = $this->Userstable->patchEntity($userstable, $this->request->getData());
            if ($this->Userstable->save($userstable)) {
                $this->Flash->success(__('The userstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userstable could not be saved. Please, try again.'));
        }
        $rolestable = $this->Users->Rolestable->find('list', ['limit' => 200])->all();
        $this->set(compact('userstable', 'rolestable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userstable = $this->Userstable->get($id);
        if ($this->Userstable->delete($userstable)) {
            $this->Flash->success(__('The userstable has been deleted.'));
        } else {
            $this->Flash->error(__('The userstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
