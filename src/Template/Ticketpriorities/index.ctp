<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketpriority[]|\Cake\Collection\CollectionInterface $ticketpriorities
  */
?>

<div class="ticketpriorities index">
    <h3><?= __('Ticketpriorities') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketpriority'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketpriorities as $ticketpriority): ?>
            <tr>
                <td><?= $this->Number->format($ticketpriority->id) ?></td>
                <td><?= h($ticketpriority->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketpriority->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketpriority->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketpriority->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketpriority->id)]) ?>
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
