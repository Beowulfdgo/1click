<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderstable $orderstable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orderstable'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderstable form content">
            <?= $this->Form->create($orderstable) ?>
            <fieldset>
                <legend><?= __('Add Orderstable') ?></legend>
                <?php
                    echo $this->Form->control('order_addresses');
                    echo $this->Form->control('referencess');
                    echo $this->Form->control('dates', ['empty' => true]);
                    echo $this->Form->control('times', ['empty' => true]);
                    echo $this->Form->control('fees');
                    echo $this->Form->control('status');
                    echo $this->Form->control('orders_gps');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
