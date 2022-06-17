<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliveriestable $deliveriestable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deliveriestable->delivery_man_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deliveriestable->delivery_man_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Deliveriestable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveriestable form content">
            <?= $this->Form->create($deliveriestable) ?>
            <fieldset>
                <legend><?= __('Edit Deliveriestable') ?></legend>
                <?php
                    echo $this->Form->control('delivery_man_names');
                    echo $this->Form->control('delivery_man_schedules');
                    echo $this->Form->control('delivery_man_days');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
