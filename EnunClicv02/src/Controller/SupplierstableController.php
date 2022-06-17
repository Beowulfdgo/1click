<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Supplierstable Controller
 *
 * @property \App\Model\Table\SupplierstableTable $Supplierstable
 * @method \App\Model\Entity\Supplierstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplierstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $supplierstable = $this->paginate($this->Supplierstable);

        $this->set(compact('supplierstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $supplierstable = $this->Supplierstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('supplierstable'));
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
        $supplierstable = $this->Supplierstable->newEmptyEntity();
        $this->Authorization->authorize($supplierstable);
        if ($this->request->is('post')) {
            $supplierstable = $this->Supplierstable->patchEntity($supplierstable, $this->request->getData());
            $supplierstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Supplierstable->save($supplierstable)) {
                $this->Flash->success(__('The supplierstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplierstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('supplierstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$supplierstable = $this->Supplierstable->get($id, [
        //    'contain' => [],
        //]);
        $supplierstable = $this->Supplierstable->get($id);
       // Log::debug($id);
       try{
        $this->Authorization->authorize($supplierstable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplierstable = $this->Supplierstable->patchEntity($supplierstable, $this->request->getData());
            if ($this->Supplierstable->save($supplierstable)) {
                $this->Flash->success(__('The supplierstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplierstable could not be saved. Please, try again.'));
        }
        $this->set(compact('supplierstable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplierstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $supplierstable = $this->Supplierstable->get($id);
        $this->Authorization->authorize($supplierstable);
        if ($this->Supplierstable->delete($supplierstable)) {
            $this->Flash->success(__('The supplierstable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The supplierstable could not be deleted. Please, try again.'));
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
