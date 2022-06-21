<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $deliveries
 * @var string[]|\Cake\Collection\CollectionInterface $costumers
 * @var string[]|\Cake\Collection\CollectionInterface $zones
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->orders_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->orders_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
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
