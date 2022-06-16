<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Rolestable Controller
 *
 * @property \App\Model\Table\RolestableTable $Rolestable
 * @method \App\Model\Entity\Rolestable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolestableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $rolestable = $this->paginate($this->Rolestable);

        $this->set(compact('rolestable'));
    }

    /**
     * View method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $rolestable = $this->Rolestable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rolestable'));
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
        $rolestable = $this->Rolestable->newEmptyEntity();
        $this->Authorization->authorize($rolestable);
        if ($this->request->is('post')) {
            $rolestable = $this->Rolestable->patchEntity($rolestable, $this->request->getData());
            $rolestable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Rolestable->save($rolestable)) {
                $this->Flash->success(__('The rolestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolestable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('rolestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$rolestable = $this->Rolestable->get($id, [
        //    'contain' => [],
        //]);
        $rolestable = $this->Rolestable->get($id);
       // Log::debug($id);
       try{
        $this->Authorization->authorize($rolestable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolestable = $this->Rolestable->patchEntity($rolestable, $this->request->getData());
            if ($this->Rolestable->save($rolestable)) {
                $this->Flash->success(__('The rolestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rolestable could not be saved. Please, try again.'));
        }
        $this->set(compact('rolestable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Rolestable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $rolestable = $this->Rolestable->get($id);
        $this->Authorization->authorize($rolestable);
        if ($this->Rolestable->delete($rolestable)) {
            $this->Flash->success(__('The rolestable has been deleted.'));
        } else {
            $this->Flash->error(__('The rolestable could not be deleted. Please, try again.'));
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
