<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
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
        $this->Authorization->skipAuthorization();
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
        $this->Authorization->skipAuthorization();
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
        try{
        $this->Authorization->skipAuthorization();
        $paymentstable = $this->Paymentstable->newEmptyEntity();
        $this->Authorization->authorize($paymentstable);
        if ($this->request->is('post')) {
            $paymentstable = $this->Paymentstable->patchEntity($paymentstable, $this->request->getData());
            $paymentstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Paymentstable->save($paymentstable)) {
                $this->Flash->success(__('The paymentstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymentstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
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
        //$paymentstable = $this->Paymentstable->get($id, [
        //    'contain' => [],
        //]);
        $paymentstable = $this->Paymentstable->get($id);
       // Log::debug($id);
       try{
        $this->Authorization->authorize($paymentstable);
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
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
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
        try{
        $this->request->allowMethod(['post', 'delete']);
        $paymentstable = $this->Paymentstable->get($id);
        $this->Authorization->authorize($paymentstable);
        if ($this->Paymentstable->delete($paymentstable)) {
            $this->Flash->success(__('The paymentstable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The paymentstable could not be deleted. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
        }
    }
    
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        // Default deny
        return false;
    }
}
