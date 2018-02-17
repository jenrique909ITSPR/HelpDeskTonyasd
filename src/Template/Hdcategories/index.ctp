<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hdcategory[]|\Cake\Collection\CollectionInterface $hdcategories  */
?>

<div class="hdcategories index">
    <h3><?= __('Hdcategories') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Hdcategory'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hdcategories as $hdcategory): ?>
            <tr>
                <td><?= $this->Number->format($hdcategory->id) ?></td>
                <td><?= h($hdcategory->title) ?></td>
                <td><?= $hdcategory->has('parent_hdcategory') ? $this->Html->link($hdcategory->parent_hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdcategory->parent_hdcategory->id]) : '' ?></td>
                <td><?= h($hdcategory->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hdcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hdcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hdcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
