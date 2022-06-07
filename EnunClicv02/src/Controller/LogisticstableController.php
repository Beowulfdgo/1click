<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Logisticstable Controller
 *
 * @property \App\Model\Table\LogisticstableTable $Logisticstable
 * @method \App\Model\Entity\Logisticstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogisticstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $logisticstable = $this->paginate($this->Logisticstable);

        $this->set(compact('logisticstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Logisticstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logisticstable = $this->Logisticstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('logisticstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logisticstable = $this->Logisticstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $logisticstable = $this->Logisticstable->patchEntity($logisticstable, $this->request->getData());
            if ($this->Logisticstable->save($logisticstable)) {
                $this->Flash->success(__('The logisticstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logisticstable could not be saved. Please, try again.'));
        }
        $this->set(compact('logisticstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logisticstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logisticstable = $this->Logisticstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logisticstable = $this->Logisticstable->patchEntity($logisticstable, $this->request->getData());
            if ($this->Logisticstable->save($logisticstable)) {
                $this->Flash->success(__('The logisticstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logisticstable could not be saved. Please, try again.'));
        }
        $this->set(compact('logisticstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logisticstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logisticstable = $this->Logisticstable->get($id);
        if ($this->Logisticstable->delete($logisticstable)) {
            $this->Flash->success(__('The logisticstable has been deleted.'));
        } else {
            $this->Flash->error(__('The logisticstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
