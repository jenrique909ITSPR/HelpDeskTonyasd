<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Movereason $movereason
  */
?>

<div class="movereasons view">
    <h3><?= h($movereason->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Movereason'), ['action' => 'delete', $movereason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereason->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Movereason'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Movereasons'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Movereason'), ['action' => 'edit', $movereason->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($movereason->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Factor') ?></th>
            <td><?= h($movereason->factor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movereason->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Movereasontemplates') ?>">
        <h4><?= __('Related Movereasontemplates') ?></h4>
        <?php if (!empty($movereason->movereasontemplates)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Template') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Movereason Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($movereason->movereasontemplates as $movereasontemplates): ?>
            <tr>
                <td><?= h($movereasontemplates->id) ?></td>
                <td><?= h($movereasontemplates->template) ?></td>
                <td><?= h($movereasontemplates->created) ?></td>
                <td><?= h($movereasontemplates->modified) ?></td>
                <td><?= h($movereasontemplates->user_id) ?></td>
                <td><?= h($movereasontemplates->movereason_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Movereasontemplates', 'action' => 'view', $movereasontemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Movereasontemplates', 'action' => 'edit', $movereasontemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movereasontemplates', 'action' => 'delete', $movereasontemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Stockmoves') ?>">
        <h4><?= __('Related Stockmoves') ?></h4>
        <?php if (!empty($movereason->stockmoves)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Warehouse Id') ?></th>
                <th scope="col"><?= __('Warehouse 2') ?></th>
                <th scope="col"><?= __('Receiver') ?></th>
                <th scope="col"><?= __('Receiver Sign') ?></th>
                <th scope="col"><?= __('Movereason Id') ?></th>
                <th scope="col"><?= __('Shipper Id') ?></th>
                <th scope="col"><?= __('Guide Number') ?></th>
                <th scope="col"><?= __('Packages') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Confirmed') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($movereason->stockmoves as $stockmoves): ?>
            <tr>
                <td><?= h($stockmoves->id) ?></td>
                <td><?= h($stockmoves->warehouse_id) ?></td>
                <td><?= h($stockmoves->warehouse_2) ?></td>
                <td><?= h($stockmoves->receiver) ?></td>
                <td><?= h($stockmoves->receiver_sign) ?></td>
                <td><?= h($stockmoves->movereason_id) ?></td>
                <td><?= h($stockmoves->shipper_id) ?></td>
                <td><?= h($stockmoves->guide_number) ?></td>
                <td><?= h($stockmoves->packages) ?></td>
                <td><?= h($stockmoves->user_id) ?></td>
                <td><?= h($stockmoves->notes) ?></td>
                <td><?= h($stockmoves->confirmed) ?></td>
                <td><?= h($stockmoves->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stockmoves', 'action' => 'view', $stockmoves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stockmoves', 'action' => 'edit', $stockmoves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stockmoves', 'action' => 'delete', $stockmoves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmoves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
