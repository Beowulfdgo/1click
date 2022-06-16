<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Offerstable Controller
 *
 * @property \App\Model\Table\OfferstableTable $Offerstable
 * @method \App\Model\Entity\Offerstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfferstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $offerstable = $this->paginate($this->Offerstable);

        $this->set(compact('offerstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Offerstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $offerstable = $this->Offerstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('offerstable'));
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
        $offerstable = $this->Offerstable->newEmptyEntity();
        $this->Authorization->authorize($offerstable);
        if ($this->request->is('post')) {
            $offerstable = $this->Offerstable->patchEntity($offerstable, $this->request->getData());
            $offerstable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Offerstable->save($offerstable)) {
                $this->Flash->success(__('The offerstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offerstable could not be saved. Please, try again.'));
        }
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('offerstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Offerstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$offerstable = $this->Offerstable->get($id, [
        //    'contain' => [],
        //]);
        $offerstable = $this->Offerstable->get($id);
        // Log::debug($id);
        try{
        $this->Authorization->authorize($offerstable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offerstable = $this->Offerstable->patchEntity($offerstable, $this->request->getData());
            if ($this->Offerstable->save($offerstable)) {
                $this->Flash->success(__('The offerstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offerstable could not be saved. Please, try again.'));
        }
        $this->set(compact('offerstable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Offerstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $offerstable = $this->Offerstable->get($id);
        $this->Authorization->authorize($offerstable);
        if ($this->Offerstable->delete($offerstable)) {
            $this->Flash->success(__('The offerstable has been deleted.'));
        } else {
            $this->Flash->error(__('The offerstable could not be deleted. Please, try again.'));
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
