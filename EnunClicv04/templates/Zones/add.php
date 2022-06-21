<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Zone $zone
 * @var \Cake\Collection\CollectionInterface|string[] $orders
 * @var \Cake\Collection\CollectionInterface|string[] $deliveries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Zones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="zones form content">
            <?= $this->Form->create($zone) ?>
            <fieldset>
                <legend><?= __('Add Zone') ?></legend>
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
