<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
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
        $this->Authorization->skipAuthorization();
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
        $this->Authorization->skipAuthorization();
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
        try{
        $this->Authorization->skipAuthorization();
        $logisticstable = $this->Logisticstable->newEmptyEntity();
        $this->Authorization->authorize($logisticstable);
        if ($this->request->is('post')) {
            $logisticstable = $this->Logisticstable->patchEntity($logisticstable, $this->request->getData());
            $logisticstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Logisticstable->save($logisticstable)) {
                $this->Flash->success(__('The logisticstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logisticstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
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
        //$logisticstable = $this->Logisticstable->get($id, [
        //    'contain' => [],
        //]);
        $logisticstable = $this->Logisticstable->get($id);
       // Log::debug($id);
       try{
        $this->Authorization->authorize($logisticstable);
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
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
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
        try{
        $this->request->allowMethod(['post', 'delete']);
        $logisticstable = $this->Logisticstable->get($id);
        $this->Authorization->authorize($logisticstable);
        if ($this->Logisticstable->delete($logisticstable)) {
            $this->Flash->success(__('The logisticstable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The logisticstable could not be deleted. Please, try again.'));
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
