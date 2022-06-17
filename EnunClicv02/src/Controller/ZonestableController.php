<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Zonestable Controller
 *
 * @property \App\Model\Table\ZonestableTable $Zonestable
 * @method \App\Model\Entity\Zonestable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZonestableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $zonestable = $this->paginate($this->Zonestable);

        $this->set(compact('zonestable'));
    }

    /**
     * View method
     *
     * @param string|null $id Zonestable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $zonestable = $this->Zonestable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zonestable'));
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
        $zonestable = $this->Zonestable->newEmptyEntity();
        $this->Authorization->authorize($zonestable);
        if ($this->request->is('post')) {
            $zonestable = $this->Zonestable->patchEntity($zonestable, $this->request->getData());
            $zonestable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Zonestable->save($zonestable)) {
                $this->Flash->success(__('The zonestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zonestable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('zonestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zonestable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$zonestable = $this->Zonestable->get($id, [
        //    'contain' => [],
        //]);
        $zonestable = $this->Zonestable->get($id);
       // Log::debug($id);
       try{
        $this->Authorization->authorize($zonestable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zonestable = $this->Zonestable->patchEntity($zonestable, $this->request->getData());
            if ($this->Zonestable->save($zonestable)) {
                $this->Flash->success(__('The zonestable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zonestable could not be saved. Please, try again.'));
        }
        $this->set(compact('zonestable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Zonestable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $zonestable = $this->Zonestable->get($id);
        $this->Authorization->authorize($zonestable);
        if ($this->Zonestable->delete($zonestable)) {
            $this->Flash->success(__('The zonestable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The zonestable could not be deleted. Please, try again.'));
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
