<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Stocks Controller
 *
 * @property \App\Model\Table\StocksTable $Stocks
 *
 * @method \App\Model\Entity\Stock[] paginate($object = null, array $settings = [])
 */
class StocksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Warehouses', 'Items']
            ,'limit' => $this->limit_data
        ];
        $stocks = $this->paginate($this->Stocks);

        $this->set(compact('stocks'));
        $this->set('_serialize', ['stocks']);
    }

    /**
     * View method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stock = $this->Stocks->get($id, [
            'contain' => ['Warehouses', 'Items']
        ]);

        $this->set('stock', $stock);
        $this->set('_serialize', ['stock']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stock = $this->Stocks->newEntity();
        if ($this->request->is('post')) {
            $stock = $this->Stocks->patchEntity($stock, $this->request->getData());
            if ($this->Stocks->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stocks->Warehouses->find('list', ['limit' => 200]);
        $items = $this->Stocks->Items->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'warehouses', 'items'));
        $this->set('_serialize', ['stock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stock = $this->Stocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stock = $this->Stocks->patchEntity($stock, $this->request->getData());
            if ($this->Stocks->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $warehouses = $this->Stocks->Warehouses->find('list', ['limit' => 200]);
        $items = $this->Stocks->Items->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'warehouses', 'items'));
        $this->set('_serialize', ['stock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stock = $this->Stocks->get($id);
        if ($this->Stocks->delete($stock)) {
            $this->Flash->success(__('The stock has been deleted.'));
        } else {
            $this->Flash->error(__('The stock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
 public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('administration');
    }
}
