<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Paymentstable Controller
 *
 * @property \App\Model\Table\PaymentstableTable $Paymentstable
 * @method \App\Model\Entity\Paymentstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $paymentstable = $this->paginate($this->Paymentstable);

        $this->set(compact('paymentstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Paymentstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentstable = $this->Paymentstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('paymentstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentstable = $this->Paymentstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentstable = $this->Paymentstable->patchEntity($paymentstable, $this->request->getData());
            if ($this->Paymentstable->save($paymentstable)) {
                $this->Flash->success(__('The paymentstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymentstable could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paymentstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentstable = $this->Paymentstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentstable = $this->Paymentstable->patchEntity($paymentstable, $this->request->getData());
            if ($this->Paymentstable->save($paymentstable)) {
                $this->Flash->success(__('The paymentstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymentstable could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paymentstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentstable = $this->Paymentstable->get($id);
        if ($this->Paymentstable->delete($paymentstable)) {
            $this->Flash->success(__('The paymentstable has been deleted.'));
        } else {
            $this->Flash->error(__('The paymentstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
