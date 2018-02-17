<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemtype $itemtype  */
?>

<div class="itemtypes view">
    <h3><?= h($itemtype->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Itemtype'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Itemtype'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Itemtype'), ['action' => 'edit', $itemtype->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($itemtype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemtype->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Items') ?>">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($itemtype->items)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Itemcategory Id') ?></th>
                <th scope="col"><?= __('Currency Id') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Unit Cost') ?></th>
                <th scope="col"><?= __('Brand Id') ?></th>
                <th scope="col"><?= __('Itemtype Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemtype->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->itemcategory_id) ?></td>
                <td><?= h($items->currency_id) ?></td>
                <td><?= h($items->model) ?></td>
                <td><?= h($items->color) ?></td>
                <td><?= h($items->unit_cost) ?></td>
                <td><?= h($items->brand_id) ?></td>
                <td><?= h($items->itemtype_id) ?></td>
                <td><?= h($items->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Itemtype'), ['action' => 'edit', $itemtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itemtype'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>