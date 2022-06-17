<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Preferencetables Controller
 *
 * @property \App\Model\Table\PreferencetablesTable $Preferencetables
 * @method \App\Model\Entity\Preferencetable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PreferencetablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $preferencetables = $this->paginate($this->Preferencetables);

        $this->set(compact('preferencetables'));
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
        $preferencetable = $this->Preferencetables->get($id, [
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
        $preferencetable = $this->Preferencetables->newEmptyEntity();
        if ($this->request->is('post')) {
            $preferencetable = $this->Preferencetables->patchEntity($preferencetable, $this->request->getData());
            if ($this->Preferencetables->save($preferencetable)) {
                $this->Flash->success(__('The preferencetable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferencetable could not be saved. Please, try again.'));
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
        $preferencetable = $this->Preferencetables->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preferencetable = $this->Preferencetables->patchEntity($preferencetable, $this->request->getData());
            if ($this->Preferencetables->save($preferencetable)) {
                $this->Flash->success(__('The preferencetable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferencetable could not be saved. Please, try again.'));
        }
        $this->set(compact('preferencetable'));
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
        $this->request->allowMethod(['post', 'delete']);
        $preferencetable = $this->Preferencetables->get($id);
        if ($this->Preferencetables->delete($preferencetable)) {
            $this->Flash->success(__('The preferencetable has been deleted.'));
        } else {
            $this->Flash->error(__('The preferencetable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
