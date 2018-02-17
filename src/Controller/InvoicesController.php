<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Invoices Controller
 *
 * @property \App\Model\Table\InvoicesTable $Invoices
 *
 * @method \App\Model\Entity\Invoice[] paginate($object = null, array $settings = [])
 */
class InvoicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Purchaseorders' ,'Companies' , 'Currencies','Warehouses','Suppliers']
            ,'limit' => $this->limit_data
        ];
        $invoices = $this->paginate($this->Invoices);

        $this->set(compact('invoices'));
        $this->set('_serialize', ['invoices']);
    }

    /**
     * View method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' =>  ['Purchaseorders' ,'Companies' ,'Itemcodes'=>['Items','Statusitems'], 'Currencies','Warehouses','Suppliers']
        ]);

        $this->set('invoice', $invoice);
        $this->set('_serialize', ['invoice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoice = $this->Invoices->newEntity();
        if ($this->request->is('post')) {

            /* Subir archivos - Hay que hacer un complemento reutilizable */
            $datos = $this->request->getData();
            /* Upload PDF */
            $file = $datos('pdf');
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('pdf');
            if (in_array($ext, $arr_ext))
            {
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/invoices/' . $file['name']);
            }
            $datos['pdf'] = $file['name'];
            /* Upload XML */
            $file = $datos('xml');
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('xml');
            if (in_array($ext, $arr_ext))
            {
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/invoices/' . $file['name']);
            }
            $datos['xml'] = $file['name'];
            /* Upload PO */
            $file = $datos('po');
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $arr_ext = array('pdf');
            if (in_array($ext, $arr_ext))
            {
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/po/' . $file['name']);
            }
            $datos['po'] = $file['name'];

            $invoice = $this->Invoices->patchEntity($invoice, $datos);
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        //$suppliers = $this->Invoices->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('invoice', 'suppliers'));
        $this->set('_serialize', ['invoice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $suppliers = $this->Invoices->Suppliers->find('list', ['limit' => 200]);
        
        $this->set(compact('invoice', 'suppliers'));
        $this->set('_serialize', ['invoice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoice = $this->Invoices->get($id);
        if ($this->Invoices->delete($invoice)) {
            $this->Flash->success(__('The invoice has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
