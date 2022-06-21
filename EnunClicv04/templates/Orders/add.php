<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $deliveries
 * @var \Cake\Collection\CollectionInterface|string[] $costumers
 * @var \Cake\Collection\CollectionInterface|string[] $zones
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                    echo $this->Form->control('order_addresses');
                    echo $this->Form->control('referencees');
                    echo $this->Form->control('dates', ['empty' => true]);
                    echo $this->Form->control('times', ['empty' => true]);
                    echo $this->Form->control('fees');
                    echo $this->Form->control('status');
                    echo $this->Form->control('orders_gps');
                    echo $this->Form->control('deliverymans_id', ['options' => $deliveries, 'empty' => true]);
                    echo $this->Form->control('costumers_id', ['options' => $costumers, 'empty' => true]);
                    echo $this->Form->control('zones_id', ['options' => $zones, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
