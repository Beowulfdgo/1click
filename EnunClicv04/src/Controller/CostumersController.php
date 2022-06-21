<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Costumers Controller
 *
 * @property \App\Model\Table\CostumersTable $Costumers
 * @method \App\Model\Entity\Costumer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CostumersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Payments'],
        ];
        $costumers = $this->paginate($this->Costumers);

        $this->set(compact('costumers'));
    }

    /**
     * View method
     *
     * @param string|null $id Costumer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $costumer = $this->Costumers->get($id, [
            'contain' => ['Payments'],
        ]);

        $this->set(compact('costumer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $costumer = $this->Costumers->newEmptyEntity();
        if ($this->request->is('post')) {
            $costumer = $this->Costumers->patchEntity($costumer, $this->request->getData());
            if ($this->Costumers->save($costumer)) {
                $this->Flash->success(__('The costumer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The costumer could not be saved. Please, try again.'));
        }
        $payments = $this->Costumers->Payments->find('list', ['limit' => 200])->all();
        $this->set(compact('costumer', 'payments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Costumer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $costumer = $this->Costumers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $costumer = $this->Costumers->patchEntity($costumer, $this->request->getData());
            if ($this->Costumers->save($costumer)) {
                $this->Flash->success(__('The costumer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The costumer could not be saved. Please, try again.'));
        }
        $payments = $this->Costumers->Payments->find('list', ['limit' => 200])->all();
        $this->set(compact('costumer', 'payments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Costumer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $costumer = $this->Costumers->get($id);
        if ($this->Costumers->delete($costumer)) {
            $this->Flash->success(__('The costumer has been deleted.'));
        } else {
            $this->Flash->error(__('The costumer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
