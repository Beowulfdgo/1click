<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 * @var string[]|\Cake\Collection\CollectionInterface $deliveries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $zone->zones_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $zone->zones_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Zones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zones form content">
            <?= $this->Form->create($zone) ?>
            <fieldset>
                <legend><?= __('Edit Zone') ?></legend>
                <?php
                    echo $this->Form->control('initial_zones');
                    echo $this->Form->control('final_zones');
                    echo $this->Form->control('descriptions');
                    echo $this->Form->control('orders_id', ['options' => $orders, 'empty' => true]);
                    echo $this->Form->control('deliverymans_id', ['options' => $deliveries, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
