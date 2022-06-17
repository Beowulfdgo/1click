<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;
/**
 * Deliveriestable Controller
 *
 * @property \App\Model\Table\DeliveriestableTable $Deliveriestable
 * @method \App\Model\Entity\Deliveriestable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeliveriestableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $deliveriestable = $this->paginate($this->Deliveriestable);

        $this->set(compact('deliveriestable'));
    }

    /**
     * View method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $deliveriestable = $this->Deliveriestable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('deliveriestable'));
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
        $deliveriestable = $this->Deliveriestable->newEmptyEntity();
        $this->Authorization->authorize($deliveriestable);
        if ($this->request->is('post')) {
            $deliveriestable = $this->Deliveriestable->patchEntity($deliveriestable, $this->request->getData());
            $deliveriestable->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Deliveriestable->save($deliveriestable)) {
                $this->Flash->success(__('El repartidor ha sido guardado exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El repartidor no se ha guardado exitosamente. Intente de nuevo.'));
        }
    }
        catch(\Exception $e){
            return $this->redirect(['action' => 'index']);
           }
        $this->set(compact('deliveriestable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$deliveriestable = $this->Deliveriestable->get($id, [
        //    'contain' => [],
        //]);
        $deliveriestable = $this->Deliveriestable->get($id);
        // Log::debug($id);
        try{
        $this->Authorization->authorize($deliveriestable);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliveriestable = $this->Deliveriestable->patchEntity($deliveriestable, $this->request->getData());
            if ($this->Deliveriestable->save($deliveriestable)) {
                $this->Flash->success(__('El repartidor ha sido guardado exitosamente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El repartidor no se ha guardado exitosamente. Intente de nuevo.'));
        }
        $this->set(compact('deliveriestable'));
    }
    catch(\Exception $e){
        return $this->redirect(['action' => 'index']);
       }
    }

    /**
     * Delete method
     *
     * @param string|null $id Deliveriestable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        try{
        $this->request->allowMethod(['post', 'delete']);
        $deliveriestable = $this->Deliveriestable->get($id);
        $this->Authorization->authorize($deliveriestable);
        if ($this->Deliveriestable->delete($deliveriestable)) {
            $this->Flash->success(__('El repartidor ha sido eliminado exitosamente'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('El repartidor no se eliminó exitosamente. Intente de nuevo.'));
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