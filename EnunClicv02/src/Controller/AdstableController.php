<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Adstable Controller
 *
 * @property \App\Model\Table\AdstableTable $Adstable
 * @method \App\Model\Entity\Adstable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdstableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $adstable = $this->paginate($this->Adstable);

        $this->set(compact('adstable'));
    }

    /**
     * View method
     *
     * @param string|null $id Adstable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adstable = $this->Adstable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('adstable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adstable = $this->Adstable->newEmptyEntity();
        if ($this->request->is('post')) {
            $adstable = $this->Adstable->patchEntity($adstable, $this->request->getData());
            if ($this->Adstable->save($adstable)) {
                $this->Flash->success(__('The adstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adstable could not be saved. Please, try again.'));
        }
        $this->set(compact('adstable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adstable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adstable = $this->Adstable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adstable = $this->Adstable->patchEntity($adstable, $this->request->getData());
            if ($this->Adstable->save($adstable)) {
                $this->Flash->success(__('The adstable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adstable could not be saved. Please, try again.'));
        }
        $this->set(compact('adstable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adstable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adstable = $this->Adstable->get($id);
        if ($this->Adstable->delete($adstable)) {
            $this->Flash->success(__('The adstable has been deleted.'));
        } else {
            $this->Flash->error(__('The adstable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
