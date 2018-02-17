<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketurgency[]|\Cake\Collection\CollectionInterface $ticketurgencies
  */
?>

<div class="ticketurgencies index">
    <h3><?= __('Ticketurgencies') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketurgency'), ['action' => 'add']) ?></li>
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
            <?php foreach ($ticketurgencies as $ticketurgency): ?>
            <tr>
                <td><?= $this->Number->format($ticketurgency->id) ?></td>
                <td><?= h($ticketurgency->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketurgency->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketurgency->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketurgency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketurgency->id)]) ?>
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
