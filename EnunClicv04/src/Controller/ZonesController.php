<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Zones Controller
 *
 * @property \App\Model\Table\ZonesTable $Zones
 * @method \App\Model\Entity\Zone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZonesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Deliveries'],
        ];
        $zones = $this->paginate($this->Zones);

        $this->set(compact('zones'));
    }

    /**
     * View method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zone = $this->Zones->get($id, [
            'contain' => ['Orders', 'Deliveries'],
        ]);

        $this->set(compact('zone'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zone = $this->Zones->newEmptyEntity();
        if ($this->request->is('post')) {
            $zone = $this->Zones->patchEntity($zone, $this->request->getData());
            if ($this->Zones->save($zone)) {
                $this->Flash->success(__('The zone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zone could not be saved. Please, try again.'));
        }
        $orders = $this->Zones->Orders->find('list', ['limit' => 200])->all();
        $deliveries = $this->Zones->Deliveries->find('list', ['limit' => 200])->all();
        $this->set(compact('zone', 'orders', 'deliveries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zone = $this->Zones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zone = $this->Zones->patchEntity($zone, $this->request->getData());
            if ($this->Zones->save($zone)) {
                $this->Flash->success(__('The zone has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zone could not be saved. Please, try again.'));
        }
        $orders = $this->Zones->Orders->find('list', ['limit' => 200])->all();
        $deliveries = $this->Zones->Deliveries->find('list', ['limit' => 200])->all();
        $this->set(compact('zone', 'orders', 'deliveries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zone = $this->Zones->get($id);
        if ($this->Zones->delete($zone)) {
            $this->Flash->success(__('The zone has been deleted.'));
        } else {
            $this->Flash->error(__('The zone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
