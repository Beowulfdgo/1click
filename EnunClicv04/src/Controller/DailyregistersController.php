<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dailyregisters Controller
 *
 * @property \App\Model\Table\DailyregistersTable $Dailyregisters
 * @method \App\Model\Entity\Dailyregister[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DailyregistersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Deliveries'],
        ];
        $dailyregisters = $this->paginate($this->Dailyregisters);

        $this->set(compact('dailyregisters'));
    }

    /**
     * View method
     *
     * @param string|null $id Dailyregister id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailyregister = $this->Dailyregisters->get($id, [
            'contain' => ['Deliveries'],
        ]);

        $this->set(compact('dailyregister'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailyregister = $this->Dailyregisters->newEmptyEntity();
        if ($this->request->is('post')) {
            $dailyregister = $this->Dailyregisters->patchEntity($dailyregister, $this->request->getData());
            if ($this->Dailyregisters->save($dailyregister)) {
                $this->Flash->success(__('The dailyregister has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyregister could not be saved. Please, try again.'));
        }
        $deliveries = $this->Dailyregisters->Deliveries->find('list', ['limit' => 200])->all();
        $this->set(compact('dailyregister', 'deliveries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dailyregister id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailyregister = $this->Dailyregisters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailyregister = $this->Dailyregisters->patchEntity($dailyregister, $this->request->getData());
            if ($this->Dailyregisters->save($dailyregister)) {
                $this->Flash->success(__('The dailyregister has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyregister could not be saved. Please, try again.'));
        }
        $deliveries = $this->Dailyregisters->Deliveries->find('list', ['limit' => 200])->all();
        $this->set(compact('dailyregister', 'deliveries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dailyregister id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailyregister = $this->Dailyregisters->get($id);
        if ($this->Dailyregisters->delete($dailyregister)) {
            $this->Flash->success(__('The dailyregister has been deleted.'));
        } else {
            $this->Flash->error(__('The dailyregister could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
