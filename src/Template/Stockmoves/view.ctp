<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Stockmove $stockmove
  */
?>

<div class="stockmoves view">
    <!--<h3><?= h($stockmove->id) ?></h3>-->
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Stockmove'), ['action' => 'delete', $stockmove->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmove->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Stockmove'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Stockmove'), ['action' => 'edit', $stockmove->id]) ?> </li>
		</ul>
	</div>
    
    <div class="editdata">
    <?= $this->Form->create($stockmove,['url' => ['controller' => 'Stockmoves', 'action' => 'entrystockmove' ,$stockmove->id]]) ?>
    <div class="easyui-layout" style="width:100%;height:600px;">
        <div data-options="region:'east',split:false,title:'Entrada del Movimiento',collapsible:false" style="width:70%;padding: 5px;">
            <div class="easyui-layout" style="width:100%;height:95%;">
                <div id="p" data-options="region:'west',split:false,collapsible:false" style="width:45%;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
                        <tbody>
                                
                                <tr>
                                    <td>
                                        <?= $this->form->label(__('user receiver_sign')) ?>
                                    </td>
                                    <td colspan="1">
                                            <?php echo $this->Form->control('receiver_sign',['label'=> false]);?>
                                    </td>
                                </tr>
                            <tr>
                                <td>
                                    <?= $this->form->label(__('notes')) ?>
                                </td>
                                <td colspan="1">
                                <?php   echo $this->Form->control('notes',['label'=> false]);?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?= $this->Form->button(__('Dar entrada de Activos')) ?>
           
                </div>
                <div data-options="region:'center',split:false,collapsible:false" >
                    <div>
                        <table class="" cellpadding="0" cellspacing="0" style="width: 100%">
                            <thead>
                                <tr>
                                    <th><?= __('Confirmed') ?></th>
                                    <th><?= __('Serial') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Reason') ?></th>
                                    <th colspan='2'></th>
                                </tr>
                                <?php $flag = 0; ?>
                                <?php foreach ($stockmove->stockmoves_details as $stockmoveDetails => $stockmoveDetail): ?>
                                    <tr>
                                        <td><?= $this->Form->control('stockmoves_details.'.$stockmoveDetail->id.'.confirmed',['label' => false]) ?>
                                            <?= $this->Form->control('stockmoves_details.'.$stockmoveDetail->id.'.itemcode_id',['value' => $stockmoveDetail->itemcode_id,'type'=>'text','style'=>'display:none;','label' => false]) ?></td>
                                        <td><?= $stockmoveDetail->itemcode->serial  ?></td>
                                        <td><?= $stockmoveDetail->item->name  ?></td>
                                        <td><?= $stockmoveDetail->reason  ?></td>
                                    </tr>
                                    <?php $flag++; ?>
                                <?php endforeach ?>

                            </thead>
                            <tbody id="bodyserials"></tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
            
        </div>
        <div data-options="region:'center',title:'Stockmoves',iconCls:'icon-ok'" style="padding:10px">
            <div class="viewdata">
            <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Warehouse') ?></th>
                <td><?= $stockmove->has('warehouse') ? $this->Html->link($stockmove->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $stockmove->warehouse->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Receiver Sign') ?></th>
                <td><?= !empty($stockmove->receiver_sign) ? h($stockmove->receiver_sign) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Movereason') ?></th>
                <td><?= $stockmove->has('movereason') ? $this->Html->link($stockmove->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $stockmove->movereason->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Shipper') ?></th>
                <td><?= $stockmove->has('shipper') ? $this->Html->link($stockmove->shipper->name, ['controller' => 'Shippers', 'action' => 'view', $stockmove->shipper->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Guide Number') ?></th>
                <td><?= h($stockmove->guide_number) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User') ?></th>
                <td><?= $stockmove->has('user') ? $this->Html->link($stockmove->user->name, ['controller' => 'Users', 'action' => 'view', $stockmove->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($stockmove->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Warehouse 2') ?></th>
                <td><?= h($stockmove->warehouse2->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Receiver') ?></th>
                <td><?= $stockmove->has('userreceiver') ? $this->Html->link($stockmove->userreceiver->name, ['controller' => 'Users', 'action' => 'view', $stockmove->userreceiver->id]) : '' ?></td>
                
            </tr>
            <tr>
                <th scope="row"><?= __('Packages') ?></th>
                <td><?= $this->Number->format($stockmove->packages) ?></td>
            </tr>
            <!--<tr>
                <th scope="row"><?= __('Confirmed') ?></th>
                <td><?= $this->Number->format($stockmove->confirmed) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Parent Id') ?></th>
                <td><?= $this->Number->format($stockmove->parent_id) ?></td>
            </tr>-->
        </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($stockmove->notes)); ?>
    </div>
    </div>
            
        
        </div>
    </div>
    
    <?= $this->Form->end() ?>
</div>

</div>
</div>
