<?php
declare(strict_types=1);

namespace App\Controller;

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
        $productstable = $this->Productstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $productstable = $this->Productstable->patchEntity($productstable, $this->request->getData());
            if ($this->Productstable->save($productstable)) {
                $this->Flash->success(__('The productstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The productstable could not be saved. Please, try again.'));
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
        $productstable = $this->Productstable->get($id, [
            'contain' => [],
        ]);
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

    /**
     * Delete method
     *
     * @param string|null $id Productstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productstable = $this->Productstable->get($id);
        if ($this->Productstable->delete($productstable)) {
            $this->Flash->success(__('The productstable has been deleted.'));
        } else {
            $this->Flash->error(__('The productstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
