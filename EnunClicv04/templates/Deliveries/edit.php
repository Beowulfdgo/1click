<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 * @var string[]|\Cake\Collection\CollectionInterface $zones
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $delivery->delivery_man_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->delivery_man_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Deliveries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="deliveries form content">
            <?= $this->Form->create($delivery) ?>
            <fieldset>
                <legend><?= __('Edit Delivery') ?></legend>
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
