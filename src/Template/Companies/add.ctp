<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="companies form">
	<h3><?= __('Add Company') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Cpmanies'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($company) ?>

				<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
						<tbody>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('Nombre', ['label' => false]); ?></td></tr>
						</tbody>
				</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
