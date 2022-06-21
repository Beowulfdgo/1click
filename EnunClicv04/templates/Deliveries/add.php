<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 * @var \Cake\Collection\CollectionInterface|string[] $zones
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Deliveries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveries form content">
            <?= $this->Form->create($delivery) ?>
            <fieldset>
                <legend><?= __('Add Delivery') ?></legend>
                <?php
                    echo $this->Form->control('delivery_man_names');
                    echo $this->Form->control('delivery_man_schedules');
                    echo $this->Form->control('delivery_man_days');
                    echo $this->Form->control('zones_id', ['options' => $zones, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
