<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Costumer $costumer
 * @var \Cake\Collection\CollectionInterface|string[] $payments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Costumers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="costumers form content">
            <?= $this->Form->create($costumer) ?>
            <fieldset>
                <legend><?= __('Add Costumer') ?></legend>
                <?php
                    echo $this->Form->control('costumer_names');
                    echo $this->Form->control('costumer_addresses');
                    echo $this->Form->control('costumer_gps');
                    echo $this->Form->control('costumer_phones');
                    echo $this->Form->control('payments_id', ['options' => $payments, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
