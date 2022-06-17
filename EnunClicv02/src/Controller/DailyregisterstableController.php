<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Dailyregisterstable Controller
 *
 * @property \App\Model\Table\DailyregisterstableTable $Dailyregisterstable
 * @method \App\Model\Entity\Dailyregisterstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DailyregisterstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $dailyregisterstable = $this->paginate($this->Dailyregisterstable);

        $this->set(compact('dailyregisterstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Dailyregisterstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $dailyregisterstable = $this->Dailyregisterstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('dailyregisterstable'));
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
        $dailyregisterstable = $this->Dailyregisterstable->newEmptyEntity();
        $this->Authorization->authorize($dailyregisterstable);
        if ($this->request->is('post')) {
            $dailyregisterstable = $this->Dailyregisterstable->patchEntity($dailyregisterstable, $this->request->getData());
            $dailyregisterstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Dailyregisterstable->save($dailyregisterstable)) {
                $this->Flash->success(__('The dailyregisterstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyregisterstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
        $this->set(compact('dailyregisterstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dailyregisterstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$dailyregisterstable = $this->Dailyregisterstable->get($id, [
        //    'contain' => [],
        //]);
        $dailyregisterstable = $this->Dailyregisterstable->get($id);
        // Log::debug($id);
        try{
        $this->Authorization->authorize($dailyregisterstable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailyregisterstable = $this->Dailyregisterstable->patchEntity($dailyregisterstable, $this->request->getData());
            if ($this->Dailyregisterstable->save($dailyregisterstable)) {
                $this->Flash->success(__('The dailyregisterstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailyregisterstable could not be saved. Please, try again.'));
        }
        $this->set(compact('dailyregisterstable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Dailyregisterstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $dailyregisterstable = $this->Dailyregisterstable->get($id);
        $this->Authorization->authorize($dailyregisterstable);
        if ($this->Dailyregisterstable->delete($dailyregisterstable)) {
            $this->Flash->success(__('The dailyregisterstable has been deleted.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The dailyregisterstable could not be deleted. Please, try again.'));
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
