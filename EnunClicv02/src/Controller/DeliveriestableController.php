<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Deliveriestable Controller
 *
 * @property \App\Model\Table\DeliveriestableTable $Deliveriestable
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeliveriestableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $deliveriestable = $this->paginate($this->Deliveriestable);

        $this->set(compact('deliveriestable'));
    }

    /**
     * View method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deliveriestable = $this->Deliveriestable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('deliveriestable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deliveriestable = $this->Deliveriestable->newEmptyEntity();
        if ($this->request->is('post')) {
            $deliveriestable = $this->Deliveriestable->patchEntity($deliveriestable, $this->request->getData());
            if ($this->Deliveriestable->save($deliveriestable)) {
                $this->Flash->success(__('The deliveriestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deliveriestable could not be saved. Please, try again.'));
        }
        $this->set(compact('deliveriestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deliveriestable = $this->Deliveriestable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliveriestable = $this->Deliveriestable->patchEntity($deliveriestable, $this->request->getData());
            if ($this->Deliveriestable->save($deliveriestable)) {
                $this->Flash->success(__('The deliveriestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deliveriestable could not be saved. Please, try again.'));
        }
        $this->set(compact('deliveriestable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deliveriestable = $this->Deliveriestable->get($id);
        if ($this->Deliveriestable->delete($deliveriestable)) {
            $this->Flash->success(__('The deliveriestable has been deleted.'));
        } else {
            $this->Flash->error(__('The deliveriestable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
