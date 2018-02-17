<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdcategories form">
	<h3><?= __('Edit Hdcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($hdcategory) ?>
		<table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
			<tbody>
				<tr>
				<td  style="width:5%;">
					<?= $this->form->label(__('title')) ?>
				</td>
				<td>
				  <?php	echo $this->Form->control('title', ['label'=> false]);?>
				</td>
				</tr>
				<tr>
				<td  style="width:5%;">
					<?= $this->form->label(__('parent')) ?>
				</td>
				<td>
					  <?php echo $this->Form->control('parent_id', ['options' => $parentHdcategories, 'empty' => true, 'label'=> false]);  ?>
				</td>
				</tr>
				<tr>
				<td  style="width:5%;">
					<?= $this->form->label(__('description')) ?>
				</td>
				<td>
						<?php echo $this->Form->control('description', ['label'=> false]);  ?>
				</td>
				</tr>
				<tr>
				<td  style="width:5%;">
					<?= $this->form->label(__('articles')) ?>
				</td>
				<td>
						<?php echo $this->Form->control('articles._ids', ['options' => $articles, 'label'=> false, 'size'=> '5']);?>
				</td>
				</tr>
			</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
