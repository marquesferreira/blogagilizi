<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Artigo Controller
 *
 * @property \App\Model\Table\ArtigoTable $Artigo
 */
class ArtigoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categoria']
        ];
        $artigo = $this->paginate($this->Artigo);

        $this->set(compact('artigo'));
        $this->set('_serialize', ['artigo']);
    }

    /**
     * View method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artigo = $this->Artigo->get($id, [
            'contain' => ['Categoria']
        ]);

        $this->set('artigo', $artigo);
        $this->set('_serialize', ['artigo']);
    }




    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artigo = $this->Artigo->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigo->patchEntity($artigo, $this->request->data);

            if ($this->Artigo->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
            }
        }
        $categoria = $this->Artigo->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'categoria'));
        $this->set('_serialize', ['artigo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artigo = $this->Artigo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artigo = $this->Artigo->patchEntity($artigo, $this->request->data);
            if ($this->Artigo->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
            }
        }
        $categoria = $this->Artigo->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'categoria'));
        $this->set('_serialize', ['artigo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artigo = $this->Artigo->get($id);
        if ($this->Artigo->delete($artigo)) {
            $this->Flash->success(__('The artigo has been deleted.'));
        } else {
            $this->Flash->error(__('The artigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
