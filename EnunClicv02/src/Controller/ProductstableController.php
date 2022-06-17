<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Productstable Controller
 *
 * @property \App\Model\Table\ProductstableTable $Productstable
 * @method \App\Model\Entity\Productstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $productstable = $this->paginate($this->Productstable);

        $this->set(compact('productstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Productstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $productstable = $this->Productstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productstable'));
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
        $productstable = $this->Productstable->newEmptyEntity();
        $this->Authorization->authorize($productstable);
        if ($this->request->is('post')) {
            $productstable = $this->Productstable->patchEntity($productstable, $this->request->getData());
            $productstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Productstable->save($productstable)) {
                $this->Flash->success(__('The productstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('productstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Productstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$productstable = $this->Productstable->get($id, [
        //    'contain' => [],
        //]);
        $productstable = $this->Productstable->get($id);
        // Log::debug($id);
        try{
        $this->Authorization->authorize($productstable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productstable = $this->Productstable->patchEntity($productstable, $this->request->getData());
            if ($this->Productstable->save($productstable)) {
                $this->Flash->success(__('The productstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productstable could not be saved. Please, try again.'));
        }
        $this->set(compact('productstable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Productstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $productstable = $this->Productstable->get($id);
        $this->Authorization->authorize($productstable);
        if ($this->Productstable->delete($productstable)) {
            $this->Flash->success(__('The productstable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The productstable could not be deleted. Please, try again.'));
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
