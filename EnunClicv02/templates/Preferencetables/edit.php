<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preferencetable $preferencetable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $preferencetable->preferents_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $preferencetable->preferents_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Preferencetables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="preferencetables form content">
            <?= $this->Form->create($preferencetable) ?>
            <fieldset>
                <legend><?= __('Edit Preferencetable') ?></legend>
                <?php
                    echo $this->Form->control('preferent_descriptions');
                    echo $this->Form->control('preferent_fees');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
