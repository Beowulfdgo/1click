<?php
declare(strict_types=1);

namespace App\Controller;

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
        $offerstable = $this->Offerstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $offerstable = $this->Offerstable->patchEntity($offerstable, $this->request->getData());
            if ($this->Offerstable->save($offerstable)) {
                $this->Flash->success(__('The offerstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offerstable could not be saved. Please, try again.'));
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
        $offerstable = $this->Offerstable->get($id, [
            'contain' => [],
        ]);
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

    /**
     * Delete method
     *
     * @param string|null $id Offerstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offerstable = $this->Offerstable->get($id);
        if ($this->Offerstable->delete($offerstable)) {
            $this->Flash->success(__('The offerstable has been deleted.'));
        } else {
            $this->Flash->error(__('The offerstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
