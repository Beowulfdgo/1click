<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Preferencetable Controller
 *
 * @property \App\Model\Table\PreferencetableTable $Preferencetable
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PreferencetableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $preferencetable = $this->paginate($this->Preferencetable);

        $this->set(compact('preferencetable'));
    }

    /**
     * View method
     *
     * @param string|null $id Preferencetable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $preferencetable = $this->Preferencetable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('preferencetable'));
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
        $preferencetable = $this->Preferencetable->newEmptyEntity();
        $this->Authorization->authorize($preferencetable);
        if ($this->request->is('post')) {
            $preferencetable = $this->Preferencetable->patchEntity($preferencetable, $this->request->getData());
            $preferencetable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Preferencetable->save($preferencetable)) {
                $this->Flash->success(__('The preferencetable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferencetable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('preferencetable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Preferencetable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$preferencetable = $this->Preferencetable->get($id, [
        //    'contain' => [],
        //]);
        $preferencetable = $this->Preferencetable->get($id);
        // Log::debug($id);
        try{
        $this->Authorization->authorize($preferencetable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preferencetable = $this->Preferencetable->patchEntity($preferencetable, $this->request->getData());
            if ($this->Preferencetable->save($preferencetable)) {
                $this->Flash->success(__('The preferencetable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferencetable could not be saved. Please, try again.'));
        }
        $this->set(compact('preferencetable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Preferencetable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $preferencetable = $this->Preferencetable->get($id);
        $this->Authorization->authorize($preferencetable);
        if ($this->Preferencetable->delete($preferencetable)) {
            $this->Flash->success(__('The preferencetable has been deleted.'));
        } else {
            $this->Flash->error(__('The preferencetable could not be deleted. Please, try again.'));
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
